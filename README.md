# Laravel Simple_Sales_App Restfull Api

Sales APP Restful API using Laravel API Resource (Laravel Version 5.7, PHP version 7.2).

### Features:

1. Setting up the environment.
2. Creating Model, Migration for Customers,Categories, Products and Sales.
3. Creating API Resource Controller : Show,Store,Update,Delete
4. Setup migration to create tables.
5. Setup requirement in Requests
6. Creating one-many relationship.
7. Postman Colletion.

### Setup

1. Clone or download this repository to your local machine
2. You can change .env for connect database exmple: cp .env.example .env
3. Run following command

- <code>composer install</code>
- <code>php artisan migrate</code>
- <code>php artisan serve</code>

4. Open Postman to testing API

### Endpoint
1. Customers : https://simplesalesapp.herokuapp.com/api/v1/customers
2. Categories : https://simplesalesapp.herokuapp.com/api/v1/categories
3. Products : https://simplesalesapp.herokuapp.com/api/v1/products
4. Sales : https://simplesalesapp.herokuapp.com/api/v1/sales


## Requirement
- Start Postgresql, Apache service 
- Php laravel (Laravel Framework 5.7, PHP version 7.2) 
- Text editor 
- Postman tool

## Site
URL: https://simplesalesapp.herokuapp.com/

Use Postman tool for performing integration testing with your API. Postman Colletion,
link: https://www.getpostman.com/collections/2239cdf903b1e5bc8e49

Note: You can change environment Postman type Online URL or Local URL



### Relation Database
![backend 2](https://user-images.githubusercontent.com/41464737/48106118-b1ac3b00-e26c-11e8-8dae-60d08e83748f.png)
