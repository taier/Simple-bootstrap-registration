Overview
==============

Login Form
--------------
![alt tag](http://s019.radikal.ru/i643/1403/cb/25c0b0108559.png "Login Form")
Roles
--------------
![alt tag](http://s52.radikal.ru/i138/1403/10/4a2ddee9f901.png "Roles")
Error Handler
--------------
![alt tag](http://s43.radikal.ru/i101/1403/1f/88292cccfa4d.png "Error Handler")
Registration Form
--------------
![alt tag](http://s018.radikal.ru/i515/1403/66/4e5e187fbe9a.png "Registration Form")


Set Up
==============
- Execute db_table.sql
- Change Data Base variables in /includes/connection.php

Check Authentication Role
--------------

- Include /includes/authentication.php
- Call checkAuth() function that return 0 - Guest, 1 - User, 999 - Admin
- In Data Base already registred admin with login: admin@admin.com and password: admin 


Build in MVC style
--------------
- engine (controllers)
- pages (views)


