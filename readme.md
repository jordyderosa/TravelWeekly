<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

The project use Laravel framework so you can clone this repo. You have to install the dependeces in order to use this project. So from the root of this project you have to launch the command 
```sh
composer install
```
Then you have to copy .env.example to create your brand new .env config file. From command line you can launch :
Windows 
```sh
copy .env.example .env 
```
Linux
```sh
cp .env.example .env 
```
Then you have to change database settings in your .env. Now you're able to create the table into your db. To do it you should now launch the command 

```sh
php artisan migrate
```

Final step create the APP KEY by launching the command

```sh
php artisan key:generate
```

## Usage

Navigate to :

http://yourhost/the_path_of_this_repo/public/ContactUs

Enjoy
