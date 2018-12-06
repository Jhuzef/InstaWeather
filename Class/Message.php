<?php

class Message {
    public static function Current($weather) {
        if ($weather <= 32 ) {
            $text = 'Good Morning. It is going to be freezing out at ' . $weather . '°F. Dress Appropriately.';
        }
        else if ($weather > 32 && $weather < 55) {
            $text = 'Good Morning. It is going to be a bit chilly at ' . $weather . '°F. Dress Appropriately.';
        }
        else {
            $text = 'Good Morning. The weather is ' . $weather . '°F. Enjoy your day.';
        }
        return $text;
    }
}
