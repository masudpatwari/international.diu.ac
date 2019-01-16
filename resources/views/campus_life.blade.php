@extends('layouts.master')
@section('content')
<div class="diu-page-title text-center text-light">
    <div class="container">
        <div class="diu-z-index-up">
            <h3>Campus Life</h3>
            <p>Here you can review some statistics about our Education Center</p>
        </div>
    </div>
</div>
<section class="diu-why-diu">
    <div class="diu-article">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0">
                        <img class="" src="{{ asset('images/Research-cells.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <article>
                        <h3 class="mb-2">Hostels</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <div class="diu-article diu-section-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <article class="diu-left-bottom text-right">
                        <h3 class="mb-2">Transprot</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <div class="card border-0">
                        <img class="" src="{{ asset('images/Research-cells.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection