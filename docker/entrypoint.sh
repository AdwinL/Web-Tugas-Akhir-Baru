#!/bin/sh
set -e

if [ -n "$DB_HOST" ] && [ -n "$DB_DATABASE" ]; then
    php artisan migrate --force
fi

service nginx start
php-fpm -D

trap 'kill $(cat /var/run/nginx.pid)' TERM INT

wait
