<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class VirtualVisit extends Model
{

    public static function articles()
    {
        return [
            [
                'id' => 1,
                'title' => 'Class rooms',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.',
                'link' => 'https://www.youtube.com/embed/5u3QGLl3YLU'
            ],
            [
                'id' => 2,
                'title' => 'Labs / Laboratories',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.',
                'link' => 'https://www.youtube.com/embed/KX5dmCzdjbU'
            ],
            [
                'id' => 3,
                'title' => 'Library',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.',
                'link' => 'https://www.youtube.com/embed/rzWE-BQOk9g'
            ],
            [
                'id' => 4,
                'title' => 'Cafeteria & Cantine',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.',
                'link' => 'https://www.youtube.com/embed/iKon9Fty6M0'
            ],
            [
                'id' => 5,
                'title' => 'Hostels',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.',
                'link' => 'https://www.youtube.com/embed/odjuaUr8swY'
            ],
            [
                'id' => 6,
                'title' => 'Transport',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.',
                'link' => 'https://www.youtube.com/embed/B3wJNMtfHzo'
            ]
        ];
    }
}
