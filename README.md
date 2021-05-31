To run this app you need to install:

PHP >= 7.1.3
OpenSSL PHP Extension, PDO PHP Extension, Mbstring PHP Extension, Tokenizer PHP Extension, XML PHP Extension, Ctype PHP Extension, JSON PHP Extension and BCMath PHP Extension.

Composer >=2.0
MariaDB 10.4.19

Now you have to create a database in MariaDB called 'todoapp'
Change filename .env.example to .env and write 'DB_DATABASE=todoapp'

Once you have those installed and MariaDB running you've got to do:

git clone https://github.com/krujodrkf/todolist
sudo chown user:user -R (replace with YOUR user)
cd todolist
chmod 755 storage -R
composer install
php artisan migrate
php artisan key:generate
php artisan serve

Finally you have be able to run the app by writing in your browser the url given by artisan.
