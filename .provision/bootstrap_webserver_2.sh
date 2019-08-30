#!/usr/bin/env bash

sudo apt-get -y update
sudo apt-get -y install apache2 php libapache2-mod-php5 php-mysql

# setting up webserver_2
echo "Configuring webserver_2"
cp /vagrant/www/notereadersite.com/website_2.conf /etc/apache2/sites-available/
a2ensite website_2
a2dissite 000-default

echo "Reloading apache2"
service apache2 reload