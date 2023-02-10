## Run the Project

Make a Git clone of this repository

- cd loja 
- composer update 
- php artisan server

Create a database named shooping

- php artisan migrate

## List of routes

Store:
  Route                                  Action      Method
- http://127.0.0.1:8001/api/loja         (index)     Get
- http://127.0.0.1:8001/api/loja/{id}    (show)      Get
- http://127.0.0.1:8001/api/loja         (creaate)   Post
Ex:
    {
       "name": "Loja 1",
       "email": "teste3@teste.com"
    }
- http://127.0.0.1:8001/api/loja/{id}    (update)    Put
Ex:
    {
       "name": "Loja 3",
       "email": "teste3@teste.com"
    }
- http://127.0.0.1:8001/api/loja/{id}    (delete)    Delete

Products:
  Route                                     Action      Method
- http://127.0.0.1:8001/api/produto         (index)     Get
- http://127.0.0.1:8001/api/produto/{id}    (show)      Get
- http://127.0.0.1:8001/api/produto         (creaate)   Post
Ex:
   {
        "name": "produto 1",
        "price": 10,
        "store_id": 1,
        "active": true,
        "stock": 40
    }
- http://127.0.0.1:8001/api/produto/{id}    (update)    Put
Ex:
   {
        "name": "produto 2",
        "price": 12,
        "store_id": 1,
        "active": true,
        "stock": 40
    }

- http://127.0.0.1:8001/api/produto/{id}    (delete)    Delete



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

