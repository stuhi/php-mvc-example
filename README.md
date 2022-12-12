# Examples [MVC Framework](https://github.com/stuhi/php-mvc)

Warning: based on PHP 8.1

**apache2**:
```
a2enmod rewrite
```
```
<VirtualHost *:80>
    ...
    DocumentRoot /.../(simple or singleton or ...)/public
    <Directory /.../(simple or singleton or ...)>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```
**composer**:
```
cd /.../(simple or singleton or ...)
composer update
```
>**1 Simple**: Has 2 pages **/home/index** and **/home/about**.
Shows how the **Controller**, **Model** and **View** works with **GET** requests.

>**2 Singleton**: Has 2 pages **/home/index** and **/home/about**.
Shows how the **Controller as singleton**, **Model** and **View** works with **GET** requests.

>**3 PostRequest**: Has 2 pages **/home/index** and **/home/about**.
Shows how the **Controller as singleton**, **Model** and **View** works with **GET** and **POST** requests.
