# devcat
devcat-framework
***

### Dependencies
* [Illuminate\Database]('https://github.com/illuminate/database')

### Usage
* run `composer install && composer dump-autoload -o`
* rename `Database.php.env` to `Database.php` in directory `app/Core`
* edit `Database.php`
```
    $capsule->addConnection([
    'driver'    =>  'mysql',
    'host'      =>  'your host',
    'username'  =>  'your username',
    'password'  =>  'your password',
    'database'  =>  'your database',
    'charset'   =>  'utf8',
    'collation' =>  'utf8_unicode_ci',
    'prefix'    =>  '',
    ]);
```
* move `devcat-framework` into your web server
    * Linux     : `/var/www/html/`
    * Windows   : `xampp/htdocs/`
* import `devcat.sql` into your mysql database server
* access it on [http://localhost/devcat-framework/public/]()
***

##### egin10