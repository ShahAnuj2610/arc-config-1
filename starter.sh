# start watcher
echo "Starting watcher service"
sh /var/www/html/watcher.sh &

# start log service
echo "Starting log service"
sh /var/www/html/log.sh &

# start php
echo "Starting php fpm"
php-fpm