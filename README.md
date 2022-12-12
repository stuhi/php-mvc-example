# Examples [MVC Framework](https://github.com/stuhi/php-mvc)

Warning: based on PHP 8.1

**apache2**:
```
a2enmod rewrite
```
```
<VirtualHost *:80>
    ...
    DocumentRoot /.../(01_Simple or 02_Singleton or ...)/public
    <Directory /.../(01_Simple or 02_Singleton or ...)>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```
**composer**:
```
cd /.../(01_Simple or 02_Singleton or ...)
composer update
composer dump-autoload --optimize
```
>**1 Simple**: Has 2 pages **/home/index** and **/home/about**.
Shows how the **Controller**, **Model** and **View** works with **GET** requests.

>**2 Singleton**: Has 2 pages **/home/index** and **/home/about**.
Shows how the **Controller as singleton**, **Model** and **View** works with **GET** requests.

>**3 PostRequest**: Has 2 pages **/home/index** and **/home/about**.
Shows how the **Controller as singleton**, **Model** and **View** works with **GET** and **POST** requests.

>**4 Layout**: Has 2 pages **/home/index** and **/home/about**.
Shows how the **Controller as singleton**, **Model** and **View** works with **GET** and **POST** requests, and **Layout** template.
