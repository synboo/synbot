# synbot

![synbot](https://pbs.twimg.com/profile_images/1571029747/synbot.jpg)

## How to build

Firstly clone this repository
```
$ git clone https://github.com/synboo/synbot.git
```

Install [composer](https://getcomposer.org/) (if you have not installed yet)
```
$ curl -sS https://getcomposer.org/installer | php
$ [sudo] mv composer.phar /usr/local/bin/composer
```

Install [twitteroauth](https://twitteroauth.com/)
```
$ cd synbot/php/
$ composer install
```

Make SecretDefines.php
```
$ cd synbot/php/scripts
$ cp SecretDefinesTemplate.php SecretDefines.php
```
and edit SecretDefines.php and input your twitter keys

Edit crontab
```
$ crontab -e
```
and paste line written in synbot/cron/crontab.txt

## Error log

If your server's OS is CentOS, cron log is written in /var/mail/your_username
```
$ tail -f /var/mail/your_username
```
