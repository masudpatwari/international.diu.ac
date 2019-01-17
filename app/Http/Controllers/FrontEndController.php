<?php

namespace App\Http\Controllers;


use App\CourseFee;
use Illuminate\Http\Request;
use App\Libraries\ApiReader;
use App\Libraries\ConvertCurrency;
use App\Libraries\ImmediateCountry;
use Illuminate\Support\Facades\Cache;

class FrontEndController extends Controller
{

    public function index()
    {
        $data['usd'] = ConvertCurrency::currency_rate('USD');
        $code = ImmediateCountry::country();
        $data['other'] = ConvertCurrency::currency_rate($code['currencyCode']);
        $data['key_resource_person'] = ApiReader::resource_person();
        $data['courses'] = CourseFee::all();
        return view('index', $data);
    }

    public function present_students($page)
    {
        $data['page'] = $page;
        if (!Cache::has('present_students')) {
            $scc = stream_context_create(
                [
                    'ssl' => [
                        'verify_peer' => false,
                        'verify_peer_name' => false
                    ]
                ]);
            $expiresAt = now()->addMinutes(100);
            $decode_values = json_decode(file_get_contents(''.env('RMS_URL').'/api/get_present_foreign_student/1/5000', false, $scc));
            Cache::put('present_students', $decode_values, $expiresAt);
        }
        $cache_values = Cache::get('present_students');

        $data['students'] = array_slice( $cache_values, $page, 12 );
        return view('present_students', $data);
    }

    public function passed_students($page)
    {
        $data['page'] = $page;
        if (!Cache::has('passed_students')) {
            $scc = stream_context_create(
                [
                    'ssl' => [
                        'verify_peer' => false,
                        'verify_peer_name' => false
                    ]
                ]);
            $expiresAt = now()->addMinutes(100);
            $decode_values = json_decode(file_get_contents(''.env('RMS_URL').'/api/get_past_foreign_student/1/5000', false, $scc));
            Cache::put('passed_students', $decode_values, $expiresAt);
        }
        $cache_values = Cache::get('passed_students');
        $data['students'] = array_slice( $cache_values, $page, 12 );
        return view('passed_students', $data);
    }

    public function campus_life()
    {
        return view('campus_life');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function virtual_visit()
    {
        return view('virtual_visit');
    }

    public function why_diu()
    {
        return view('why_diu');
    }

    public function contact_us()
    {
        return view('contact_us');
    }

    public function faculty($faculty)
    {
        $data['faculty_info'] = ApiReader::faculty_info($faculty);
        $data['courses'] = CourseFee::where('faculty', $faculty)->get();
        return view('faculty', $data);
    }

}