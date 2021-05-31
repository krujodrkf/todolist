To run this app you need to install:

PHP >= 7.1.3
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension
Ctype PHP Extension
JSON PHP Extension
BCMath PHP Extension

Composer >=2.0
MariaDB 10.4.19




Once you have those installed and MariaDB running you've got to do:

git clone https://github.com/krujodrkf/todolist
cd todolist
composer install
php artisan migrate
php artisan serve

Finally you have be able to run the app by writing in your browser the url given by artisan.
