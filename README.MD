# InstaWeather

This project is meant to send weather updates directly to Instagram users.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

* PHP7

* An Open Weather Map API key

### Installing

Clone the repository

```
git clone https://github.com/Jhuzef/InstaWeather.git
```

Install the dependencies

```
composer install
```

Create a .env file and populate it with the appropriate variables

```
touch .env
```

```
API_KEY=''
USER_ID=''
USERNAME=''
PASSWORD=''
```


## Deployment

Run the script

```
php Main.php
```

## Built With

* [OpenWeatherMap API](https://openweathermap.org/api) - Weather API Used
* [Instagram-API](https://github.com/mgp25/Instagram-API) - Instagram API Used
* [PHP 7.1](http://php.net/manual/en/index.php) - Programming Language Used

## Author

* **Joseph Gonzales**
