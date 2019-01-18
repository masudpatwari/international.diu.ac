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
                'description' => '',
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
                'description' => '<p class="mb-4">
                                                The University is Promising and already on the way of developing all
                                                laboratory such as Materials Lab, Structural Mechanics Lab, Hydraulics lab,
                                                Geo technical Engineering Lab, Environmental Engineering Lab, Transportation
                                                Engineering Lab and two highly facilitated Computer Lab which are consist of
                                                widely used software’s and modeling tools. Out of that, The University has a
                                                well facilitated Physics and Chemistry Lab, which have all the modern
                                                facilities to help student with practical knowledge of respective subjects.
                                            </p>
                                            <p class="mb-3">
                                                Dhaka International University (DIU) has established a strong reputation for
                                                nurturing innovation and academic excellence across many disciplines. We
                                                believe that a student cannot learn the subject-matter of a course without
                                                having any hands-on experience in the laboratory. Keeping this in mind, from
                                                the very beginning, the Department of Computer Science and Engineering is
                                                trying its level best to establish different laboratories like
                                            </p>
                                            <ul class="mb-4">
                                                <li>Software Laboratory</li>
                                                <li>Hardware Laboratory</li>
                                                <li>Networking &amp; Telecommunication Laboratory</li>
                                                <li>Physics Laboratory</li>
                                                <li>Chemistry Laboratory</li>
                                                <li>Electrical Circuits Laboratory</li>
                                                <li>Analog Electronics Laboratory</li>
                                                <li>Digital Electronics Laboratory</li>
                                                <li>Microprocessor and Interfacing Laboratory</li>
                                                <li>Data Communication Laboratory</li>
                                                <li>Computer Networks Laboratory</li>
                                                <li>Programming Laboratory</li>
                                            </ul>
                                            <p class="mb-3">
                                                Dhaka International University (DIU) has established a strong reputation for
                                                nurturing innovation and academic excellence across many disciplines. We believe
                                                that a student cannot learn the subject-matter of a course without having any
                                                hands-on experience in the laboratory. Keeping this in mind, from the very
                                                beginning, the Department of Electrical, Electronics and Telecommunication
                                                Engineering is trying its level best to establish different laboratories like-
                                            </p>
                                            <ul>
                                                <li>Electrical Circuits I Laboratory</li>
                                                <li>Electrical Circuits II Laboratory</li>
                                                <li>Analog Electronics Laboratory</li>
                                                <li>Digital  Electronics Laboratory</li>
                                                <li>Power Electronics Laboratory</li>
                                                <li>Telecommunication Laboratory</li>
                                                <li>Microwave Engineering Laboratory</li>
                                                <li>Control System Laboratory</li>
                                                <li>DSP Laboratory</li>
                                                <li>VLSI Laboratory</li>
                                                <li>Microprocessor Laboratory</li>
                                                <li>Electrical Machines I Laboratory</li>
                                                <li>Electrical Machines II Laboratory</li>
                                                <li>Power System Laboratory</li>
                                                <li>Switch gear &amp; Protection Laboratory</li>
                                                <li>Project Laboratory</li>
                                                <li>Simulation Laboratory</li>
                                            </ul>',
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
