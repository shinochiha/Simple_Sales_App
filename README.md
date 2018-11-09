# Laravel Simple_Sales_App Restfull Api
<p align="center">
<a href="https://simplesalesapp.herokuapp.com"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

Sales APP Restful API using Laravel API Resource (Laravel Version 5.7, PHP version 7.2).

### Requirements
- PHP >= 7.1.3
- Composer
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- php-pgsql Extension
- Text Editor
- Postman Tool

### Installation
```sh
$ git clone https://github.com/shinochiha/Simple_Sales_App.git
$ cd Simple_Sales_App
$ cp .env.example .env
```
Open your favourite text editor.

Open .env file, edit with your database credentials.
```sh
$ composer install
$ php artisan key:generate
$ php artisan migrate
$ php artisan serve
```
Open your browser, goto http://localhost:8000
<br>
Open Postman to testing API

### Features:

1. Setting up the environment.
2. Creating Model, Migration for Customers,Categories, Products and Sales.
3. Creating API Resource Controller : Show,Store,Update,Delete
4. Setup migration to create tables.
5. Setup requirement in Requests
6. Creating one-many relationship.
7. Postman Colletion.

### Endpoint
1. Customers : https://simplesalesapp.herokuapp.com/api/v1/customers
2. Categories : https://simplesalesapp.herokuapp.com/api/v1/categories
3. Products : https://simplesalesapp.herokuapp.com/api/v1/products
4. Sales : https://simplesalesapp.herokuapp.com/api/v1/sales


## Site
URL: https://simplesalesapp.herokuapp.com/

Use Postman tool for performing integration testing with your API. Postman Colletion link: 
<br>
https://www.getpostman.com/collections/2239cdf903b1e5bc8e49

Note: You can change environment Postman type Online URL or Local URL



### Relation Database
![backend 2](https://user-images.githubusercontent.com/41464737/48106118-b1ac3b00-e26c-11e8-8dae-60d08e83748f.png)
