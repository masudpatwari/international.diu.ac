<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class WhyDiu extends Model
{

    public static function articles()
    {
        return [
            [
                'id' => 1,
                'name' => 'Lauren Boutros \'19',
                'program' => 'Political Science and Design',
                'citizenship' => 'Lebanon, U.S',
                'why_diu' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.',
                'favorite_part' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.',
                'video_id' => NULL,
            ],
            [
                'id' => 1,
                'name' => 'Lauren Boutros \'19',
                'program' => 'Political Science and Design',
                'citizenship' => 'Lebanon, U.S',
                'why_diu' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.',
                'favorite_part' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.',
                'video_id' => '5u3QGLl3YLU',
            ],
        ];
    }
}
