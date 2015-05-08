# synbot

## How to build

install libraries

install composer (if you've not installed yet)
https://getcomposer.org/

// install composer globally
$ curl -sS https://getcomposer.org/installer | php
$ mv composer.phar /usr/local/bin/composer

// install twitteroauth
$ composer install

// Make SecretDefines.php
$ cp SecretDefinesTemplate.php SecretDefines.php
// Edit SecretDefines.php and input Twitter keys

edit crontab
