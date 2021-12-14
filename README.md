# Young Framework 

Young framework is a php mvc web application framework

Features
--------

1.  Easy to use and flexile
2.  Simple Routing system
3.  Built in template engine named Primal
4.  Build in ORM and query builder library
5.  Middlewares
6.  Lightweight and fast

Installation
------------

Execute below commands

`composer create-project develhopper/young`

Initialize project directories

`php young init`

Run default migrations: for user authentication

`php young migrate create_users_table`

Apache configuration

set root directory to public directory

example apache config:

 `<VirtualHost *:80>
        ServerName lofi.lc
        ServerAlias *.lofi.lc
        DocumentRoot /var/www/localhost/htdocs/young/public
        <Directory /var/www/localhost/htdocs/young/public>
            Options FollowSymLinks
            AllowOverride All
            DirectoryIndex index.php
            Require all granted
            Header set Access-Control-Allow-Origin "*"
        </Directory>
    </VirtualHost>` 

Documentation
-------------

Read the documentation

[Documentation](#)
soon

* * *