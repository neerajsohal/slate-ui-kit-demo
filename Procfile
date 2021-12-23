web: vendor/bin/heroku-php-nginx -C nginx.heroku.conf public/
worker: php artisan queue:work --sleep=3 --tries=3 --daemon --timeout=0