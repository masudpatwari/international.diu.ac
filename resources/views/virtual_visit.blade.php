@extends('layouts.master')
@section('content')
<div class="diu-page-title text-center text-light">
    <div class="container">
        <div class="diu-z-index-up">
            <h3>Virtual Visit</h3>
            <p>Here you can review some statistics about our Education Center</p>
        </div>
    </div>
</div>
@if(!empty($articles))
<section class="diu-virtual">
@foreach($articles as $key => $article)
    @if(($key%2) == 0)
    <div class="diu-article">
        <div class="container">
            <div class="diu-article-p diu-left-bottom">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0">
                            <object data="{{ $article['link'] }}"></object>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <article>
                            <h3 class="mb-2">{{ $article['title'] }}</h3>
                            <p>{{ $article['description'] }}</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="diu-article diu-section-bg">
        <div class="container">
            <div class="diu-article-p diu-left-bottom">
                <div class="row">
                    <div class="col-md-8">
                        <article class="text-right">
                            <h3 class="mb-2">{{ $article['title'] }}</h3>
                            <p>{{ $article['description'] }}</p>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0">
                            <object data="{{ $article['link'] }}"></object>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endforeach
</section>
@endif
@endsection