#!/usr/bin/env bash
sudo apt-get update
sudo apt-get install -y apache2 php libapache2-mod-php php-mysql
sudo cp /vagrant/www/.conf/website_1.conf /etc/apache2/sites-available/
cd /etc/apache2/sites-available/
a2ensite *
a2dissite 000-default
echo "Reloading apache2 service"
sudo service apache2 reload