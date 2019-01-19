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
                'description' => 'All class rooms of DIU are spacious, well-decorated and equipped with multimedia projector.',
                'video_id' => '5u3QGLl3YLU',
            ],
            [
                'id' => 2,
                'title' => 'Library',
                'description' => ' DIU library is equipped with up-to-date books and reading materials. More than fifty (50) thousand books are available at DIU library. E-library has already been started. Library is well spacious and well decorated. Wi-Fi and Internet facilities are available in the library. Students can take their necessary books from the through library card. In the library students can study. ',
                'video_id' => 'rzWE-BQOk9g',
            ],
            [
                'id' => 3,
                'title' => 'Labs / Laboratories',
                'description' => 'DIU has 8 Pharmacy labs, 10 Computer labs, 12 EETE labs & 10 Civil labs. All labs are designed by the experts from Dhaka University (DU) and Bangladesh University of Engineering and Technology (BUET), and equipped with modern appliances.',
                'video_id' => 'KX5dmCzdjbU',
            ],
            [
                'id' => 4,
                'title' => 'Cafeteria & Canteen',
                'description' => ' DIU has its own catering service and each building has big common & leisure rooms.DIU canteen is the center of refreshment where different types of hygienic food are available. This well decorated canteen ensures clean environment, systematic service and different equipments of entertainment. ',
                'video_id' => 'iKon9Fty6M0',
            ],
            [
                'id' => 5,
                'title' => 'Hostels',
                'description' => ' Dhaka International University offers well decorated hostel modern facilities. Foreign students are living in the hostels with a comfort. At present there are seven boy’s hostel ( Nikunja, Khilkhet and Satarkul, Badda) and one girl’s hostels (Satarkul, Badda). In the hostels there are prayer rooms, Game rooms(Indoor), Common rooms and well decorated canteen. All DIU hostels are under CC camera surveillance. Wi-Fi facilities are available. We have well experienced cook and well trained security guards to serve the students. ',
                'video_id' => 'odjuaUr8swY',
            ],
            [
                'id' => 6,
                'title' => 'Transport',
                'description' => ' DIU offers free transport service from different corner of the city to permanent campus. Foreign students get the transport service. ',
                'video_id' => 'B3wJNMtfHzo',
            ],
        ];
    }
}
