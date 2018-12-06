<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/Class/Instagram.php';
require __DIR__ . '/Class/Message.php';
require __DIR__ . '/Class/Weather.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

Main::Start(getenv('API_KEY'));

class Main  {
    static public function Start(string $key) {

        $recipients = [ 'users' => [getenv('USER_ID')] ];

        $weather = Weather::Call($key);
        $currentWeather = Weather::GetCurrentWeather($weather);

        $message = Message::Current($currentWeather);
        print $message;
        $user = Instagram::Login(getenv('USERNAME'), getenv('PASSWORD'));
        #Instagram::SendMessage($user, $recipients, $message);
    }
}


