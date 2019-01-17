@extends('layouts.master')
@section('content')

<div class="diu-banner">
    <div id="diu-carousel" class="diu-carousel carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('images/slide1.jpg') }}" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <div class="diu-display-table">
                        <div class="diu-display-table-cell">
                            <h1>Take the first step</h1>
                            <h2>of Your Journey to Success</h2>
                            <a href="javaScript:;" class="diu-apply-btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/slide2.jpg') }}" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <div class="diu-display-table">
                        <div class="diu-display-table-cell">
                            <h1>Take the first step</h1>
                            <h2>of Your Journey to Success</h2>
                            <a href="javaScript:;" class="diu-apply-btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/slide3.jpg') }}" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <div class="diu-display-table">
                        <div class="diu-display-table-cell">
                            <h1>Take the first step</h1>
                            <h2>of Your Journey to Success</h2>
                            <a href="javaScript:;" class="diu-apply-btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#diu-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#diu-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="diu-courses-category">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card border-0 text-center diu-card">
                        <a href="{{ route('faculty.show', ['id' => 'law']) }}" class="card-body bg-success text-white">
                            <div class="diu-display-table">
                                <div class="diu-display-table-cell">
                                    <div class="diu-course-icons">
                                        <img src="{{ asset('images/justice-scale.svg') }}">
                                    </div>
                                    <h4>Faculty of Law</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 text-center diu-card">
                        <a href="{{ route('faculty.show', ['id' => 'business']) }}" class="card-body bg-primary text-white">
                            <div class="diu-display-table">
                                <div class="diu-display-table-cell">
                                    <div class="diu-course-icons">
                                        <img src="{{ asset('images/handshake.svg') }}">
                                    </div>
                                    <h4>Faculty of Business Studies</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 text-center diu-card">
                        <a href="{{ route('faculty.show', ['id' => 'engineering']) }}" class="card-body bg-danger text-white">
                            <div class="diu-display-table">
                                <div class="diu-display-table-cell">
                                    <div class="diu-course-icons">
                                        <img src="{{ asset('images/idea.svg') }}">
                                    </div>
                                    <h4>Faculty of Science & Engineering</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 text-center diu-card">
                        <a href="{{ route('faculty.show', ['id' => 'social']) }}" class="card-body bg-warning text-white">
                            <div class="diu-display-table">
                                <div class="diu-display-table-cell">
                                    <div class="diu-course-icons">
                                        <img src="{{ asset('images/newton-cradle.svg') }}">
                                    </div>
                                    <h4>Faculty of Arts & Social Sciences</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if(!empty($courses))
<section class="diu-price-layout">
    <div class="diu-section-title text-center text-dark">
        <h3>Course Fee Structure</h3>
        <p>Here you can review some statistics about our Education Center</p>
    </div>
    <div class="container">
        <table class="desktop">
            <tr>
                <th class="align-middle">
                    <h3>Name of Courses</h3>
                </th>
                <th>
                    <h3>BDT<br><small>(Actual)</small></h3>
                </th>
                <th class="active">
                    <h3>{{ $usd['currencyCode'] }}<br><small>(Approximate)</small></h3>
                </th>
                <th>
                    <h3>{{ $other['currencyCode'] }}<br><small>(Approximate)</small></h3>
                </th>
                <th></th>
            </tr>
            @foreach($courses as $course)
            <tr>
                <td class="text-left">{{ $course['name'] }} ({{ $course['duration'] }})</td>
                <td>{{ number_format($course['total_fee'], 2) }}</td>
                <td>{{ number_format(($course['total_fee'] * $usd['currency']), 2) }}</td>
                <td>{{ number_format(($course['total_fee'] * $other['currency']), 2) }}</td>
                <td>
                    <a href="javaScript:;" class="diu-apply-btn">Apply Now</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</section>
@endif
@if(!empty($key_resource_person))
<section class="diu-key-resource-person diu-section-bg">
    <div class="container">
        <div class="diu-section-title text-center text-light">
            <h3>KEY RESOURCE PERSON</h3>
            <p>Here you can review some statistics about our Education Center</p>
        </div>
        <div class="diu-resource-person owl-carousel owl-theme diu-left-bottom">
            @foreach($key_resource_person as $resource_person)
            <div class="item">
                <div class="card text-center">
                    <div class="diu-card-img">
                        <img class="" src="{{ asset($resource_person['profilepic']) }}" alt="{{ $resource_person['name'] }}">
                    </div>
                    <div class="card-body">
                        <a href="" class="card-title">{{ $resource_person['name'] }}</a>
                    </div>
                    <div class="card-footer text-muted">
                        <p>{{ $resource_person['position'] }}</p>
                        <p>{{ $resource_person['email1'] }} </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<section class="diu-achievement">
    <div class="diu-section-title text-center text-light">
        <h3>UNIVERSITY ACHIEVEMENTS</h3>
        <p>Here you can review some statistics about our Education Center</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card border-0 bg-transparent text-center text-light diu-card">
                    <div class="card-body">
                        <i class="fas fa-globe-asia fa-4x"></i>
                        <div class="diu-counter">
                            <h3 class="text-warning">
                                <span class="counter">{{ number_format('423') }}</span>
                            </h3>
                            <p class="text-uppercase">Current Foreign Students</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 bg-transparent text-center text-light diu-card">
                    <div class="card-body">
                        <i class="fas fa-user-graduate fa-4x"></i>
                        <div class="diu-counter">
                            <h3 class="text-warning">
                                <span class="counter">{{ number_format('6974') }}</span>
                            </h3>
                            <p class="text-uppercase">Current Total Students</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 bg-transparent text-center text-light diu-card">
                    <div class="card-body">
                        <i class="fas fa-chalkboard-teacher fa-4x"></i>
                        <div class="diu-counter">
                            <h3 class="text-warning">
                                <span class="counter">{{ number_format('397') }}</span>
                            </h3>
                            <p class="text-uppercase">Teacher & Staffs</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 bg-transparent text-center text-light diu-card">
                    <div class="card-body">
                        <i class="fas fa-graduation-cap fa-4x"></i>
                        <div class="diu-counter">
                            <h3 class="text-warning">
                                <span class="counter">{{ number_format('19364') }}</span>
                            </h3>
                            <p class="text-uppercase">Certificats Delivered</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="diu-spotlight diu-section-bg">
    <div class="container">
        <div class="diu-section-title text-center text-light">
            <h3>SPOTLIGHT</h3>
            <p>Here you can review some statistics about our Education Center</p>
        </div>
        <div class="diu-left-bottom">
            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-4" data-toggle="modal" data-target="#hostel">
                        <img class="" src="{{ asset('images/International-Hostel.jpg') }}" alt="">
                        <div class="card-body">
                            <a href="javaScript:;" class="card-title">International Hostel</a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="hostel" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="diu-spotlight-popup text-light">
                                    <div class="diu-section-title text-left">
                                        <h3>International Hostel</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <article class="text-justify">
                                        <img style="max-width: 320px; float: left; margin-right: 15px;" src="http://172.16.7.3/international_campaign/public/images/Research-cells.jpg" alt="">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectett ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<img style="max-width: 320px; float: right; margin-top: 15px; margin-left: 15px;" src="http://172.16.7.3/international_campaign/public/images/Research-cells.jpg" alt="">
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4" data-toggle="modal" data-target="#laboratory">
                        <img class="" src="{{ asset('images/Labs-Laboratory.jpg') }}" alt="">
                        <div class="card-body">
                            <a href="javaScript:;" class="card-title">Lab's & Laboratory</a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="laboratory" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="diu-spotlight-popup text-light">
                                    <div class="diu-section-title text-left">
                                        <h3>Lab's & Laboratory</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <article class="text-justify">
                                        <img style="max-width: 320px; float: left; margin-right: 15px;" src="http://172.16.7.3/international_campaign/public/images/Research-cells.jpg" alt="">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectett ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<img style="max-width: 320px; float: right; margin-top: 15px; margin-left: 15px;" src="http://172.16.7.3/international_campaign/public/images/Research-cells.jpg" alt="">
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4" data-toggle="modal" data-target="#internet">
                        <img class="" src="{{ asset('images/wifi-internet.jpg') }}" alt="">
                        <div class="card-body">
                            <a href="javaScript:;" class="card-title">WI-FI & Internet</a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="internet" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="diu-spotlight-popup text-light">
                                    <div class="diu-section-title text-left">
                                        <h3>WI-FI & Internet</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <article class="text-justify">
                                        <img style="max-width: 320px; float: left; margin-right: 15px;" src="http://172.16.7.3/international_campaign/public/images/Research-cells.jpg" alt="">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectett ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<img style="max-width: 320px; float: right; margin-top: 15px; margin-left: 15px;" src="http://172.16.7.3/international_campaign/public/images/Research-cells.jpg" alt="">
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4" data-toggle="modal" data-target="#library">
                        <img class="" src="{{ asset('images/Library.jpg') }}" alt="">
                        <div class="card-body">
                            <a href="javaScript:;" class="card-title">Library</a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="library" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="diu-spotlight-popup text-light">
                                    <div class="diu-section-title text-left">
                                        <h3>Library</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <article class="text-justify">
                                        <img style="max-width: 320px; float: left; margin-right: 15px;" src="http://172.16.7.3/international_campaign/public/images/Research-cells.jpg" alt="">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectett ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<img style="max-width: 320px; float: right; margin-top: 15px; margin-left: 15px;" src="http://172.16.7.3/international_campaign/public/images/Research-cells.jpg" alt="">
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4" data-toggle="modal" data-target="#canteen">
                        <img class="" src="{{ asset('images/Canteen-Common-Room.jpg') }}" alt="">
                        <div class="card-body">
                            <a href="javaScript:;" class="card-title">Canteen & Common Room</a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="canteen" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="diu-spotlight-popup text-light">
                                    <div class="diu-section-title text-left">
                                        <h3>Canteen & Common Room</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <article class="text-justify">
                                        <img style="max-width: 320px; float: left; margin-right: 15px;" src="http://172.16.7.3/international_campaign/public/images/Research-cells.jpg" alt="">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectett ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<img style="max-width: 320px; float: right; margin-top: 15px; margin-left: 15px;" src="http://172.16.7.3/international_campaign/public/images/Research-cells.jpg" alt="">
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4" data-toggle="modal" data-target="#transport">
                        <img class="" src="{{ asset('images/Transport.jpg') }}" alt="">
                        <div class="card-body">
                            <a href="javaScript:;" class="card-title">Transport</a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="transport" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="diu-spotlight-popup text-light">
                                    <div class="diu-section-title text-left">
                                        <h3>Transport</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <article class="text-justify">
                                        <img style="max-width: 320px; float: left; margin-right: 15px;" src="http://172.16.7.3/international_campaign/public/images/Research-cells.jpg" alt="">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectett ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<img style="max-width: 320px; float: right; margin-top: 15px; margin-left: 15px;" src="http://172.16.7.3/international_campaign/public/images/Research-cells.jpg" alt="">
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4" data-toggle="modal" data-target="#researchCells">
                        <img class="" src="{{ asset('images/Research-cells.jpg') }}" alt="">
                        <div class="card-body">
                            <a href="javaScript:;" class="card-title">Research cells</a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="researchCells" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="diu-spotlight-popup text-light">
                                    <div class="diu-section-title text-left">
                                        <h3>Research cells</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <article class="text-justify">
                                        <img style="max-width: 320px; float: left; margin-right: 15px;" src="http://172.16.7.3/international_campaign/public/images/Research-cells.jpg" alt="">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectett ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<img style="max-width: 320px; float: right; margin-top: 15px; margin-left: 15px;" src="http://172.16.7.3/international_campaign/public/images/Research-cells.jpg" alt="">
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4" data-toggle="modal" data-target="#clubs">
                        <img class="" src="{{ asset('images/Clubs.jpg') }}" alt="">
                        <div class="card-body">
                            <a href="javaScript:;" class="card-title">Clubs</a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="clubs" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="diu-spotlight-popup text-light">
                                    <div class="diu-section-title text-left">
                                        <h3>Clubs</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <article class="text-justify">
                                        <img style="max-width: 320px; float: left; margin-right: 15px;" src="http://172.16.7.3/international_campaign/public/images/Research-cells.jpg" alt="">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectett ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<img style="max-width: 320px; float: right; margin-top: 15px; margin-left: 15px;" src="http://172.16.7.3/international_campaign/public/images/Research-cells.jpg" alt="">
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquipur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="diu-partnerships">
<div class="diu-section-title text-center text-dark">
    <h3>Partners</h3>
    <p>Here you can review some statistics about our Education Center</p>
</div>
<div class="container">
        <div class="diu-partners owl-carousel owl-theme">
            <div class="item">
                <a href="">
                    <img src="{{ asset('images/partnerships/34.png') }}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="{{ asset('images/partnerships/245.png') }}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="{{ asset('images/partnerships/322.png') }}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="{{ asset('images/partnerships/324.png') }}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="{{ asset('images/partnerships/342.png') }}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="{{ asset('images/partnerships/345.png') }}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="{{ asset('images/partnerships/434.png') }}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="{{ asset('images/partnerships/2342.png') }}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="{{ asset('images/partnerships/3424.png') }}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="{{ asset('images/partnerships/3434.png') }}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="{{ asset('images/partnerships/4342.png') }}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="{{ asset('images/partnerships/23423.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
@endsection