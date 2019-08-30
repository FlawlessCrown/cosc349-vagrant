# cosc349-assignment

I used vagrant to make 3 vms which are 2 webservers and one database server.
The main objective of these vms is to take down notes.

To Boot Up Machines:
- vagrant up
  
  After booting up machines, you can access them using:
  - vagrant ssh webserver1
  - vagrant ssh dbserver
  - vagrant ssh webserver2
 
webserver1:
This is the web server for inserting data into database server.

dbserver:
This is a database server for storing data.

webserver2:
This is the web server for reading data from database.
