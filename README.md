# php dotenv loaders benchmark

This is a very small script to show the execution time of 4 dotenv loaders for
10.000 executions each.

## What is tested ?

Every loader has to reach the same point, so opening the .env file, parsing it
and loading the result into $_ENV and $_SERVER.

## Where does my results come from ?

I've got the execution time from the local execution (i5 1.8Ghz, php7.0.14).

But feel free to make yours:
```bash
composer install
php app.php
```

## Comparaison

### [josegonzalez/php-dotenv](https://github.com/josegonzalez/php-dotenv)
 - actual version: 3.0.0 (_depends on m1/env 2.1.0_)
 - First commit: 30 Dec 2013
 - code lines in src: 538
 - 10.000 loops execution time: **25.8589**

### [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv)
 - actual version: v2.4.0
 - First commit: 23 jan 2013
 - code lines in src: 303
 - 10.000 loops execution time: **12.0041**

### [symfony/dotenv](https://github.com/symfony/dotenv)
 - actual version: dev-master
 - First commit: Jan 12, 2017
 - code lines in src: 305
 - 10.000 loops execution time: **10.7481**

### [rfussien/dotenv]()
 - actual version: v1.0.0
 - First commit: Jan 26, 2017
 - code lines in src: 114
 - 10.000 loops execution time: **2.9001**