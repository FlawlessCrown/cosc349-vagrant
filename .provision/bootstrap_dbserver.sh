#!/usr/bin/env bash
sudo apt-get -y update
# create a shell variable which contains root password
export MYSQL_PWD='insecure_root_pw'
# setting root password for mysql
echo "mysql-server mysql-server/root_password password $MYSQL_PWD" | debconf-set-selections
echo "mysql-server mysql-server/root_password_again password $MYSQL_PWD" | debconf-set-selections
# install mysql
sudo apt-get install -y mysql-server
# creating database to store web notes
echo "CREATE DATABASE webNotes;" | mysql
echo "CREATE USER 'web_user'@'%' IDENTIFIED BY 'password';" | mysql
echo "GRANT ALL PRIVILEGES ON webNotes.* TO 'web_user'@'%'" | mysql
export MYSQL_PWD='password'
cat /vagrant/db/setup-database.sql | mysql -u web_user webNotes
# setting up mysql server
sudo sed -i'' -e '/bind-address/s/127.0.0.1/0.0.0.0/' /etc/mysql/mysql.conf.d/mysqld.cnf
sudo sed -i'' -e '/skip-external-locking/skip-external-locking/g' /etc/mysql/mysql.conf.d/mysqld.cnf
# restart server
echo "Restarting dbserver"
sudo service mysql restart