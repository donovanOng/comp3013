#!/bin/bash
sudo apt-add-repository -y ppa:ondrej/php
sudo apt-get -y update

# set up a silent install of MySQL
dbpass=$1

export DEBIAN_FRONTEND=noninteractive
echo mysql-server-5.6 mysql-server/root_password password $dbpass | debconf-set-selections
echo mysql-server-5.6 mysql-server/root_password_again password $dbpass | debconf-set-selections

# install the LAMP stack
sudo apt-get -y install apache2 mysql-server php7.0 php7.0-mysql

# write some PHP
echo \<\?php phpinfo\(\)\; \?\> >> /var/www/html/phpinfo.php

sudo apt-get -y install git

sudo git clone https://github.com/donovanOng/comp3013.git /var/www/comp3013/

# Point to project folder
sudo cp /var/www/comp3013/deploy/000-default.conf /etc/apache2/sites-enabled/

# Enable URL rewrite
sudo cp /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/

sudo ysql -h localhost -u root -p $dbpass < /var/www/comp3013/script/create.sql
sudo mysql -h localhost -u root -p $dbpass < /var/www/comp3013/script/insert.sql

export MYSQL_PASS=$dbpass

# restart Apache
sudo apachectl restart
