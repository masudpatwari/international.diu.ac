<?php


function setLevel($status)
{
    $data = [
        1 => 'Open',
        2 => 'Unanswered',
        3 => 'Answered'
    ];

    return $data[$status];
}

function bloodGroup()
{
    $data = [
        [
            'name' => 'UN'
        ],
        [
            'name' => 'AB+'
        ],
        [
            'name' => 'B-'
        ],
        [
            'name' => 'X+'
        ],
        [
            'name' => 'B+'
        ],
        [
            'name' => 'O-'
        ],
        [
            'name' => 'O+'
        ],
        [
            'name' => 'AB-'
        ],
        [
            'name' => 'A+'
        ],
        [
            'name' => 'A-'
        ],
    ];
    return collect($data);
}