# TimeConverter
Simple [PHP, Symfony](https://symfony.com/) micro-service comes to convert time on earth in UTC
into two formats 
- Mars Sol Date (MSD).
- Martian Coordinated Time (MTC).

## Getting Started
These instructions will make the project up and running on your local machine for development purposes.
### Prerequisites
* Docker 19.03.5
* Docker Compose 1.23.1
### Setup
* Dive into TimeConverter directory.
```
    $ cd TimeConverter
```
* Run docker-compose.yml file.
```
    $ docker-compose up -d --build
```
* Install composer.
```
    $ composer install
```
### Containers created and their ports are as follows:
* Nginx :8080
* time_converter :9000
### Simple Endpoint.
```
- Request URL > http://127.0.0.1:8080/time/convert
- Request Method > POST
- Request Body > {
                     "utc": "2021-05-02 19:27:43"
                 }
- Request Header > {
                        "Content-Type": "application/json"
                    }
```

## Built With
* [PHP7](https://www.php.net/)
* [Symfony4](https://symfony.com/)
* [Nginx](https://www.nginx.com/)
* [Docker](https://docs.docker.com/)
* [Docker Compose](https://docs.docker.com/compose/)
## Features
* Service container.
* Apply adequate design patterns.
* Applying simple design principles.
* Scalable system design.
* Cover service with some test cases.
## Missing Features
* Apply some logging and monitoring.
* Apply authentication.
* Support other formats.
* Write more test cases.