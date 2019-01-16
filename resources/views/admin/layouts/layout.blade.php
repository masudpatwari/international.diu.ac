<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>International</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('ice-cream/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="{{ asset('ice-cream/assets/css/icecream.css') }}">
</head>

<body>

<header class="db-header">
    <div class="db-area">
        <div class="db-brand db-flex">
            <div class="db-toggle">
                <i class="material-icons">apps</i>
            </div>
            <div class="db-logo">
                <a href="{{ route('dashboard.index') }}">
                    <img src="{{ asset('images/logo_color.png') }}" alt="">
                </a>
            </div>
        </div>
        <div class="db-title">
            <h5 class="mb-0">Dhaka International University</h5>
            <p class="mb-0">International Student</p>
        </div>
        <div class="db-tools db-flex db-dropdown">
            <div class="db-tools-icon">
                <a href="" class="text-dark"><i class="material-icons">info</i></a>
            </div>
            <div class="db-tools-icon">
                <a href="" class="text-dark"><i class="material-icons">notifications_active</i></a>
            </div>
            <div class="db-tools-icon">
                <a href="javaScript:;" class="text-dark" data-toggle="db-dropdown">
                    <i class="material-icons">settings</i>
                </a>
            </div>
            <div class="db-tools-icon db-account">
                <a class="" href="javaScript:;" data-toggle="db-dropdown">
                    <div class="db-account-pic">
                        <img src="{{ asset('uploads/'.auth()->user()->profile_photo.'') }}" alt="">
                    </div>
                </a>
                <div class="db-dropdown-menu">
                    <div class="db-card">
                        <div class="db-card-body">
                            <div class="db-profile">
                                <a class="db-profile-pic" href="{{ route('profile.show') }}">
                                    <img src="{{ asset('uploads/'.auth()->user()->profile_photo.'') }}" alt="">
                                </a>
                                <div class="db-account-info">
                                    <a href="{{ route('profile.show') }}">
                                        <p>
                                            <strong>{{ auth()->user()->first_name.' '.auth()->user()->last_name }}</strong>
                                        </p>
                                        <p>{{ auth()->user()->email }}</p>
                                    </a>
                                    <a class="btn btn-sm btn-warning db-change-password">Change Password</a>
                                </div>
                            </div>
                        </div>
                        <div class="db-card-footer text-muted">
                            {{ Form::open(['route' => 'logout', 'class' => 'd-inline']) }}
                            {{ Form::button('Logout', ['type'=>'submit', 'class' => 'btn btn-sm btn-danger']) }}
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="db-section">
    <div class="db-area">
        <aside class="db-aside">
            <div class="db-column">
                <div class="db-row">
                    <a href="{{ route('dashboard.index') }}" class="db-btn">Dashboard</a>
                </div>
            </div>
            <div class="db-column db-nav">
                <div class="db-row">
                    <ul class="db-navigation">
                        <li>
                            <a href="{{ route('agent.index') }}" class="">Agent</a>
                        </li>
                        <li>
                            <a href="{{ route('students.index') }}" class="">Foreign Student</a>
                        </li>
                        <li>
                            <a href="{{ route('inbox') }}" class="">Support Tickets</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="db-column">
                <div class="db-row">
                    <p class="">
                        <small>Copyright &copy <a href="">mesbaul.info</a></small>
                    </p>
                </div>
            </div>
        </aside>
        <article class="db-article">
            @yield('content')
        </article>
    </div>
</section>
<!-- jquery latest version -->
<script src="{{ asset('ice-cream/assets/bootstrap/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('ice-cream/assets/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('ice-cream/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('ice-cream/assets/js/icecream.js') }}"></script>
@if (session()->has('message'))
    @component('admin.components.alert')
        @if (session()->has('message.success'))
            <strong>Thank You!</strong>!
        @endif

        @if (session()->has('message.error'))
            <strong>Failed!</strong>!
        @endif
    @endcomponent
@endif

</body>

</html>