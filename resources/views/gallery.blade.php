@extends('layouts.master')
@section('content')
<div class="diu-page-title text-center text-light">
    <div class="container">
        <div class="diu-z-index-up">
            <h3>Gallery</h3>
            <p>Here you can review some statistics about our Education Center</p>
        </div>
    </div>
</div>
<section class="diu-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="diu-gallery-grid">
                    <div class="diu-img-grid">
                        <div class="diu-display-table">
                            <div class="diu-display-table-cell">
                                <img src="{{ asset('images/Research-cells.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="diu-img-grid">
                        <div class="diu-display-table">
                            <div class="diu-display-table-cell">
                                <img src="{{ asset('images/Clubs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="diu-img-grid">
                        <div class="diu-display-table">
                            <div class="diu-display-table-cell">
                                <img src="{{ asset('images/Transport.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="diu-img-grid">
                        <div class="diu-display-table">
                            <div class="diu-display-table-cell">
                                <img src="{{ asset('images/Canteen-Common-Room.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="diu-img-grid">
                        <div class="diu-display-table">
                            <div class="diu-display-table-cell">
                                <img src="{{ asset('images/Library.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="diu-display-table">
                    <div class="diu-display-table-cell">
                        <h3>Name Of the Event</h3>
                        <h5>21 Dec 2018</h5>
                        <h5>Satarkul, Dhaka</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="diu-display-table text-right">
                    <div class="diu-display-table-cell">
                        <h3>Name Of the Event</h3>
                        <h5>21 Dec 2018</h5>
                        <h5>Satarkul, Dhaka</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="diu-gallery-grid">
                    <div class="diu-img-grid">
                        <div class="diu-display-table">
                            <div class="diu-display-table-cell">
                                <img src="{{ asset('images/Research-cells.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="diu-img-grid">
                        <div class="diu-display-table">
                            <div class="diu-display-table-cell">
                                <img src="{{ asset('images/Clubs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="diu-img-grid">
                        <div class="diu-display-table">
                            <div class="diu-display-table-cell">
                                <img src="{{ asset('images/Transport.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="diu-img-grid">
                        <div class="diu-display-table">
                            <div class="diu-display-table-cell">
                                <img src="{{ asset('images/Canteen-Common-Room.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="diu-img-grid">
                        <div class="diu-display-table">
                            <div class="diu-display-table-cell">
                                <img src="{{ asset('images/Library.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection