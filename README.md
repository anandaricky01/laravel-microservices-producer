
# Laravel Microservices Producer

This is a producer project for the Laravel Microservices system. This project is designed to send messages to a RabbitMQ exchange, which can then be consumed by other microservices.

## Requirements

Before you get started with the installation, make sure you have the following requirements:

- PHP 7.4 or higher
- Composer
- Running RabbitMQ Server
- Laravel Development Environment

## Installation

Clone the project

```bash
  git clone https://github.com/anandaricky01/laravel-microservices-producer.git
```

Go to the project directory

```bash
  cd laravel-microservices-producer
```

Install dependencies

```bash
  composer update
```

Configure Environment

```bash
  cp .env.example .env
```
then, open the `.env` file and configure the environment settings such as the RabbitMQ connection and other settings as needed.
```bash
  cp .env.example .env
```
Run Migrations
```bash
  php artisan migrate
```
read at the following route on routes/api.php

