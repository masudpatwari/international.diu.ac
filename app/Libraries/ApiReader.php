<?php

namespace App\Libraries;

use Illuminate\Support\Collection;

class ApiReader
{

    public static function ssl()
    {
        return stream_context_create(
            [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ],
            ]);
    }
    public static function resource_person()
    {
        $collection = [];
        $departments_array  = [
            'cse','eete','law','eng','pha','soc','bba','civil'
        ];
        foreach ($departments_array as $department) {
            $decode_values = json_decode(file_get_contents( ''.env('API_URL').'/'.$department.'', false, self::ssl()));
            foreach ($decode_values as $values) {
                $collection[] = collect($values)->toArray();
            }
        }

        $chairman = collect($collection)->filter(function ($value, $key)  {
            return false !== stristr($value['position'], 'chairman');
        });

        $dean = collect($collection)->filter(function ($value, $key)  {
            return false !== stristr($value['position'], 'dean');
        });

        $professor = collect($collection)->filter(function ($value, $key)  {
            return false !== stristr($value['position'], 'Prof');
        });

        $adv = collect($collection)->filter(function ($value, $key)  {
            return false !== stristr($value['position'], 'Adv');
        });

        $barrister = collect($collection)->filter(function ($value, $key)  {
            return false !== stristr($value['position'], 'Barrister');
        });

        $judge = collect($collection)->filter(function ($value, $key)  {
            return false !== stristr($value['position'], 'Judge');
        });

        $tex = collect($collection)->filter(function ($value, $key)  {
            return false !== stristr($value['position'], 'Tex');
        });

        $court = collect($collection)->filter(function ($value, $key)  {
            return false !== stristr($value['position'], 'Court');
        });

        $alls = new Collection();
        $alls = $alls->merge($chairman);
        $alls = $alls->merge($dean);
        $alls = $alls->merge($professor);
        $alls = $alls->merge($adv);
        $alls = $alls->merge($barrister);
        $alls = $alls->merge($judge);
        $alls = $alls->merge($tex);
        $alls = $alls->merge($court);
        return $alls->unique()->sortByDesc('merit');
    }


    public static function faculty_info($faculty)
    {
        $faculty_array = [
            'engineering' => [
                'title' => 'Science & Engineering',
                'department' => ['cse', 'eete', 'pha', 'civil'],
            ],
            'law' => [
                'title' => 'LAW',
                'department' => ['law'],
            ],
            'business' => [
                'title' => 'Businesss Studies',
                'department' => ['bba'],
            ],
            'social' => [
                'title' => 'Arts & Social Sciences',
                'department' => ['eng', 'soc'],
            ],
        ];

        if (array_key_exists($faculty, $faculty_array)) {
            $scc = stream_context_create(
            [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false
                ]
            ]);
            $collection = [];
            foreach ($faculty_array[$faculty]['department'] as $department) {
                $decode_values = json_decode(file_get_contents('' . env('API_URL') . '/' . $department . '', false, $scc));
                foreach ($decode_values as $values) {
                    $collection[] = collect($values)->toArray();
                }
            }


            $dean = collect($collection)->filter(function ($value, $key) {
                return false !== stristr($value['position'], 'dean');
            });

            $chairman = collect($collection)->filter(function ($value, $key) {
                return false !== stristr($value['email1'], 'chairman');
            });

            $professor = collect($collection)->filter(function ($value, $key) {
                return false !== stristr($value['position'], 'Prof');
            });

            $adv = collect($collection)->filter(function ($value, $key) {
                return false !== stristr($value['position'], 'Adv');
            });

            $barrister = collect($collection)->filter(function ($value, $key) {
                return false !== stristr($value['position'], 'Barrister');
            });

            $judge = collect($collection)->filter(function ($value, $key) {
                return false !== stristr($value['position'], 'Judge');
            });

            $tex = collect($collection)->filter(function ($value, $key) {
                return false !== stristr($value['position'], 'Tex');
            });

            $court = collect($collection)->filter(function ($value, $key) {
                return false !== stristr($value['position'], 'Court');
            });

            $lecture = collect($collection)->filter(function ($value, $key) {
                return false !== stristr($value['position'], 'Lec');
            });

            $teacher = collect($collection)->filter(function ($value, $key) {
                return false !== stristr($value['position'], 'Tec');
            });

            $dean_collect = new Collection();
            $dean_collect = $dean_collect->merge($dean);
            $dean_collect->sortByDesc('merit');

            $chairman_collect = new Collection();
            $chairman_collect = $chairman_collect->merge($chairman);
            $chairman_collect->sortByDesc('merit');

            $teacher_collect = new Collection();
            $teacher_collect = $teacher_collect->merge($dean);
            $teacher_collect = $teacher_collect->merge($chairman);
            $teacher_collect = $teacher_collect->merge($professor);
            $teacher_collect = $teacher_collect->merge($adv);
            $teacher_collect = $teacher_collect->merge($barrister);
            $teacher_collect = $teacher_collect->merge($judge);
            $teacher_collect = $teacher_collect->merge($tex);
            $teacher_collect = $teacher_collect->merge($court);
            $teacher_collect = $teacher_collect->merge($lecture);
            $teacher_collect = $teacher_collect->merge($teacher);
            $teacher_collect->sortByDesc('merit');

            $data['dean'] = $dean_collect->unique()->first();
            $data['chairman'] = $chairman_collect->unique();
            $data['teacher'] = $teacher_collect->unique();
            $data['title'] = $faculty_array[$faculty]['title'];
            return $data;
        }
    }

    public static function admission_on_going_batch($id = NULL)
    {
        $scc = stream_context_create(
        [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false
            ]
        ]);
        $decode_values = json_decode(file_get_contents('' . env('RMS_URL') . '/admission_on_going_batch', false, $scc));

        return $decode_values;
    }

    public static function religion()
    {
        $decode_values = json_decode(file_get_contents('' . env('RMS_URL') . '/religion', false, self::ssl()));
        return collect($decode_values);
    }

    public static function src_by_reg($reg_no)
    {
        $decode_values = json_decode(file_get_contents('' . env('RMS_URL') . '/src_by_reg/'.$reg_no.'', false, self::ssl()));
        return collect($decode_values);
    }

    public static function student_by_id($id)
    {
        $decode_values = json_decode(file_get_contents('' . env('RMS_URL') . '/student_by_id/'.$id.'', false, self::ssl()));
        return collect($decode_values);
    }

}
