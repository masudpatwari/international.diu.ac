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

/*
 * d2db function for convert any date format to database date format
 *
 * */
function d2db($date)
{
    return date('Y-m-d', strtotime($date));
}

/*
 * db2d function for convert database date format to normal date format
 *
 * */
function db2d($date)
{
    if (!empty($date))
    {
        return date('m/d/Y', strtotime($date));
    }
    else
    {
        return "";
    }
}

/*
try {
    DB::beginTransaction();
    DB::commit();
    session()->flash();
} catch (\PDOException $e) {
    DB::rollBack();
    session()->flash();
}
*/