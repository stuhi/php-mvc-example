# php-mvc-example

Warning: based on PHP 8.1

apache2 settings:
```
a2enmod rewrite
```
```
<VirtualHost *:80>
    ...
    DocumentRoot /.../simple/public
    <Directory /.../simple>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```
>**Simple** has 2 pages **/home/index** and **/home/about**.
Shows how the **Controller**, **Model** and **View** works with **GET** requests.
