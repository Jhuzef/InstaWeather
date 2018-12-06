<?php

class Instagram {
    public static function Login(string $login, string $password ) {
        $user = new \InstagramAPI\Instagram();
        $user->login($login, $password);
        return $user;
    }

    public static function SendMessage($user, Array $recipients, string $message) {
        $user->direct->sendText($recipients, $message);
    }
}