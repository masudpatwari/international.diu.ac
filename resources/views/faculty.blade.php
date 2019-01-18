@extends('layouts.master')
@section('content')
<div class="diu-page-title text-center text-light">
    <div class="container">
        <div class="diu-z-index-up">
            <h3>Faculty of {{ $faculty_info['title'] }}</h3>
            <p>Here you can review some statistics about our Education Center</p>
        </div>
    </div>
</div>
<section class="diu-faculty">
    <div class="container">
        <div class="card mb-4 border-0 bg-transparent">
            @if(!empty($faculty_info['dean']['name']))
            <div class="diu-people">
                <div class="diu-people-info text-right">
                    <h5><a href=""><strong>{{ $faculty_info['dean']['name'] }}</strong></a></h5>
                    <p>{{ $faculty_info['dean']['position'] }}</p>
                    <p>Faculty of {{ $faculty_info['title'] }}</p>
                    <p>Dhaka International University</p>
                    <p>{{ $faculty_info['dean']['mno1'] }}</p>
                    <p>{{ $faculty_info['dean']['email1'] }}</p>
                </div>
                <div class="diu-people-img">
                    <div class="people-img">
                        <img class="" src="{{ asset($faculty_info['dean']['profilepic']) }}" alt="{{ $faculty_info['dean']['name'] }}">
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@if(!empty($courses))
<section class="diu-faculty diu-section-bg">
    <div class="container">
        <div class="diu-faculty-programs">
            <div class="diu-section-title text-dark">
                <h5>Programs Under the {{ $faculty_info['title'] }} Faculty</h5>
            </div>
            <table class="table table-sm table-striped table-borderless">
                <tr>
                    <th>Name Of Program</th>
                    <th>Duration</th>
                    <th>Credit</th>
                    <th class="text-center">Syllabus</th>
                    <th></th>
                </tr>
                @foreach($courses as $course)
                <tr>
                    <td class="align-middle">{{ $course['name'] }}</td>
                    <td class="align-middle">{{ $course['duration'] }}</td>
                    <td class="align-middle">{{ $course['credit'] }}</td>
                    <td class="align-middle text-center">
                        <a href="" class="diu-btn">View</a>
                    </td>
                    <td class="text-right">
                        <a href="{{ route('register') }}" class="diu-btn diu-apply-btn">Apply Now</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endif
@if($faculty_info['chairman']->count() > 0)
<section class="diu-faculty">
    <div class="container">
        <div class="card mb-4 border-0 bg-transparent">
            @foreach($faculty_info['chairman'] as $key => $chairman)
                @if(($key%2) == 0)
                <div class="diu-people">
                    <div class="diu-people-info text-right">
                        <h5><a href=""><strong>{{ $chairman['name'] }}</strong></a></h5>
                        <p>{{ $chairman['position'] }}</p>
                        <p>Department of {{ $chairman['dept'] }}</p>
                        <p>Dhaka International University</p>
                        <p>{{ $chairman['mno1'] }}</p>
                        <p>{{ $chairman['email1'] }}</p>
                    </div>
                    <div class="diu-people-img">
                        <div class="people-img">
                            <img class="" src="{{ $chairman['profilepic'] }}" alt="{{ $chairman['name'] }}">
                        </div>
                    </div>
                </div>
                @else
                <div class="diu-people">
                    <div class="diu-people-img">
                        <div class="people-img">
                            <img class="" src="{{ $chairman['profilepic'] }}" alt="{{ $chairman['name'] }}">
                        </div>
                    </div>
                    <div class="diu-people-info text-left">
                        <h5><a href=""><strong>{{ $chairman['name'] }}</strong></a></h5>
                        <p>{{ $chairman['position'] }}</p>
                        <p>Department of {{ $chairman['dept'] }}</p>
                        <p>Dhaka International University</p>
                        <p>{{ $chairman['mno1'] }}</p>
                        <p>{{ $chairman['email1'] }}</p>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
@endif
@if(!empty($faculty_info['teacher']))
<section class="diu-key-resource-person diu-section-bg">
    <div class="container">
        <div class="diu-section-title text-center text-light">
            <h3>Teacher Under the {{ $faculty_info['title'] }} Faculty</h3>
            <p>Here you can review some statistics about our Education Center</p>
        </div>
        <div class="diu-resource-person owl-carousel owl-theme diu-left-bottom">
            @foreach($faculty_info['teacher'] as $teacher)
                <div class="item">
                    <div class="card text-center">
                        <div class="diu-card-img">
                            <img class="" src="{{ asset($teacher['profilepic']) }}" alt="{{ $teacher['name'] }}">
                        </div>
                        <div class="card-body">
                            <a href="" class="card-title">{{ $teacher['name'] }}</a>
                        </div>
                        <div class="card-footer text-muted">
                            <p>{{ $teacher['position'] }}</p>
                            <p>{{ $teacher['email1'] }} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection