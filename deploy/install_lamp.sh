#!/bin/bash
sudo apt-add-repository -y ppa:ondrej/php
sudo apt-get -y update

# install the LAMP stack
sudo apt-get -y install apache2 mysql-server php7.0 php7.0-mysql

# write some PHP
echo \<\?php phpinfo\(\)\; \?\> >> /var/www/html/phpinfo.php

# restart Apache
sudo apachectl restart
