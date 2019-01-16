<?php

namespace App\Libraries;

use Illuminate\Support\Collection;

class ApiCourseFee
{

    public static function course_fee()
    {
        $course_fee = [
            [
                'faculty' => 'engineering',
                'department' => 'cse',
                'name' => 'B.Sc in CSE',
                'duration' => '4 years',
                'credit' => '148',
                'total_fee' => 350000,
            ],/*
            [
                'faculty' => 'engineering',
                'department' => 'cse',
                'name' => 'B.Sc in CSE (Eve)',
                'duration' => '4 years',
                'credit' => '136',
                'total_fee' => 270000,
            ],*/
            [
                'faculty' => 'engineering',
                'department' => 'cse',
                'name' => 'M.Sc in CSE',
                'duration' => '1.5 year',
                'credit' => '36',
                'total_fee' => '90000',
            ],
            [
                'faculty' => 'engineering',
                'department' => 'cse',
                'name' => 'M.Sc in CSE',
                'duration' => '1 year',
                'credit' => '36',
                'total_fee' => 120000,
            ],
            [
                'faculty' => 'engineering',
                'department' => 'eete',
                'name' => 'B.Sc in EETE',
                'duration' => '4 years',
                'credit' => '143',
                'total_fee' => 390000,
            ],/*
            [
                'faculty' => 'engineering',
                'department' => 'eete',
                'name' => 'B.Sc in EETE (Eve)',
                'duration' => '4 years',
                'credit' => '133',
                'total_fee' => 250000',
            ],*/
            [
                'faculty' => 'engineering',
                'department' => 'pha',
                'name' => 'B. Pharm (Hon’s)',
                'duration' => '4 years',
                'credit' => '160',
                'total_fee' => 450000,
            ],
            [
                'faculty' => 'engineering',
                'department' => 'civil',
                'name' => 'B.Sc in Civil',
                'duration' => '4 years',
                'credit' => '163',
                'total_fee' => 320000,
            ],/*
            [
                'faculty' => 'engineering',
                'department' => 'civil',
                'name' => 'B.Sc in Civil (Eve)',
                'duration' => '43y & 4m',
                'credit' => '145',
                'total_fee' => 250000,
            ],*/
            [
                'faculty' => 'law',
                'department' => 'law',
                'name' => 'LL.B (Hons)',
                'duration' => '4 years',
                'credit' => '126',
                'total_fee' => 350000,
            ],
            [
                'faculty' => 'law',
                'department' => 'law',
                'name' => 'LL.M',
                'duration' => '1 year',
                'credit' => '36',
                'total_fee' => 70000,
            ],
            [
                'faculty' => 'law',
                'department' => 'law',
                'name' => 'LL.M',
                'duration' => '2 years',
                'credit' => '65',
                'total_fee' => 85000,
            ],
            [
                'faculty' => 'law',
                'department' => 'law',
                'name' => 'MHRL',
                'duration' => '2 years',
                'credit' => '54',
                'total_fee' => 60000,
            ],
            [
                'faculty' => 'business',
                'department' => 'bba',
                'name' => 'BBA',
                'duration' => '4 years',
                'credit' => '126',
                'total_fee' => 380000,
            ],/*
            [
                'faculty' => 'business',
                'department' => 'bba',
                'name' => 'BBA (Evening)',
                'duration' => '4 years',
                'credit' => '126',
                'total_fee' => 300000,
            ],*/
            [
                'faculty' => 'business',
                'department' => 'bba',
                'name' => 'MBA',
                'duration' => '1 year',
                'credit' => '36',
                'total_fee' => 100000,
            ],
            [
                'faculty' => 'business',
                'department' => 'bba',
                'name' => 'MBA',
                'duration' => '2 years',
                'credit' => '66',
                'total_fee' => 120000,
            ],
            [
                'faculty' => 'social',
                'department' => 'eng',
                'name' => 'B.A (Hons) in English',
                'duration' => '4 years',
                'credit' => '120',
                'total_fee' => 200000,
            ],/*
            [
                'faculty' => 'social',
                'department' => 'eng',
                'name' => 'B.A (Hons) in English (Eve)',
                'duration' => '4 years',
                'credit' => '120',
                'total_fee' => 180000,
            ],
            [
                'faculty' => 'social',
                'department' => 'eng',
                'name' => 'M.A in English (Eve)',
                'duration' => '1 years',
                'credit' => '36',
                'total_fee' => 65000,
            ],*/
            [
                'faculty' => 'social',
                'department' => 'eng',
                'name' => 'M.A in English',
                'duration' => '2.5 years',
                'credit' => '66',
                'total_fee' => 70000,
            ],
            [
                'faculty' => 'social',
                'department' => 'soc',
                'name' => 'BSS (Hons) in Sociology',
                'duration' => '4 years',
                'credit' => '120',
                'total_fee' => 170000,
            ],/*
            [
                'faculty' => 'social',
                'department' => 'soc',
                'name' => 'BSS (Hons) in Sociology (Eve)',
                'duration' => '4 years',
                'credit' => '120',
                'total_fee' => 150000,
            ],*/
            [
                'faculty' => 'social',
                'department' => 'soc',
                'name' => 'MSS in Sociology',
                'duration' => '1 year',
                'credit' => '30',
                'total_fee' => 55000,
            ],
            [
                'faculty' => 'social',
                'department' => 'soc',
                'name' => 'MSS in Sociology',
                'duration' => '2 years',
                'credit' => '60',
                'total_fee' => 65000,
            ],
        ];
        return collect($course_fee)->sortByDesc('duration');
    }

    public static function faculty_course_fee($faculty)
    {
        $course_fee = self::course_fee();
        $course_fee_collect = collect($course_fee)->sortByDesc('duration');
        return $course_fee_collect->where('faculty', $faculty);
    }
}
