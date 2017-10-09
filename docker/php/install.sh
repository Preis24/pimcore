#!/bin/sh

PIMCORE_INSTALL_MYSQL_USERNAME=pimcore \
PIMCORE_INSTALL_MYSQL_PASSWORD=passw0rd \
./bin/install --profile empty \
            --admin-username admin \
            --admin-password Passw0rd!! \
            --mysql-host-socket mysql \
            --mysql-port 3306 \
            --mysql-database pimcore \
            --no-interaction \
            --ignore-existing-config && \
            rm -rf ./web/install.php && \
            echo "Setting permissions, this might take a while" && \
            chown -R www-data:www-data web/var var pimcore app/config && \
            php-fpm