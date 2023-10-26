# SIPL Task

Hello Softonauts Team! I am Raviraj. This is the repository for task assigned to me in hiring process.

# How to run this app?

Requirements:

- Composer - https://getcomposer.org/download/
- PHP in your PATH variable

For PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> **Warning**
> The end of life date for PHP 7.4 was November 28, 2022. If you are
> still using PHP 7.4, you should upgrade immediately. The end of life date
> for PHP 8.0 will be November 26, 2023.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)

- [libcurl](http://php.net/manual/en/curl.requirements.php) to use the HTTP\CURLRequest library

```xml
git clone https://github.com/rblethal/softonauts-assignment.git softonauts-task
```

After successful clone, open shell/command prompt in the cloned folder and run following command:

If you use Composer as a PHP Archive:

```xml
php composer.phar update
```

If you have installed Composer on your local machine:

```xml
composer update
```

Copy `env` to `.env` and tailor for your app, specifically the baseURL.

After composer is finished installing required dependencies, run following command in same window:

```xml
php spark serve
```

You can view your running app in your browser at your specified `baseURL` either in `.env` file or in `app\Config\App.php` file.
