# This app is built using CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](http://codeigniter.com).

## Installation & updates

To install this app:
1. Clone it to your working directory i.e 
       **git clone (git@github.com:Kenneth-Kipchumba/Prank.git)**
2. then run
       **composer install** and optionally **composer update** to pull in any new updates**


When updating, you may want to check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor it to suit your app, specifically the baseURL and the database settings.

## Important Change with index.php

Configure your web server to "point" to the project's **public** folder, and
**not** to its root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, which will expose the app's  logic.

**Please read the user guide for a better explanation of how CodeIgniter 4 works!**

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)


## Warning

This software is free and open source and the author holds no liability should the software be misused.

The intention of writing this software was for learning about web application vulnerabilities. More information concerning software sercurity can be found from [OWASP](https://owasp.org/www-project-top-ten/)