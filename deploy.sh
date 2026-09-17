#!/usr/bin/env bash

set -euo pipefail

project_dir="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
deploy_host="huge001.tetabit.ru"
deploy_port="22584"
deploy_user="arttherapist"
remote_app_dir="/home/arttherapist/apps/arttherapist-site"
remote_public_link="/home/arttherapist/htdocs/arttherapist.ru/new"
remote_public_dir="$remote_app_dir/public"
ssh_options=(-p "$deploy_port" -o BatchMode=yes -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null)
remote="$deploy_user@$deploy_host"

command -v ssh >/dev/null 2>&1
command -v rsync >/dev/null 2>&1

php "$project_dir/tests/run.php"

ssh "${ssh_options[@]}" "$remote" "
    set -euo pipefail
    mkdir -p '$remote_app_dir'
    if [ -e '$remote_public_link' ] || [ -L '$remote_public_link' ]; then
        test \"\$(readlink '$remote_public_link')\" = '$remote_public_dir'
    fi
"

rsync -az --delete \
    --exclude='.git/' \
    --exclude='docs/' \
    --exclude='tests/' \
    --exclude='deploy.sh' \
    -e "ssh -p $deploy_port -o BatchMode=yes -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null" \
    "$project_dir/" \
    "$remote:$remote_app_dir/"

ssh "${ssh_options[@]}" "$remote" "
    set -euo pipefail
    test -f '$remote_public_dir/index.php'
    test -f '$remote_public_dir/transform/index.php'
    if [ ! -L '$remote_public_link' ]; then
        ln -s '$remote_public_dir' '$remote_public_link'
    fi
"

printf 'Deployed to https://arttherapist.ru/new/\n'
