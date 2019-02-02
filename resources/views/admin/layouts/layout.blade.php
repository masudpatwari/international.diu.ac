<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>International</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('ice-cream/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ice-cream/assets/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="{{ asset('ice-cream/assets/css/icecream.css') }}">

    <script type="text/javascript">
        var rms_url = "{{  env('RMS_URL') }}";
    </script>
    <script src="{{ asset('ice-cream/assets/bootstrap/js/jquery-3.3.1.min.js') }}"></script>
    <!-- jquery latest version -->
    <script src="{{ asset('ice-cream/assets/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('ice-cream/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ice-cream/assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('ice-cream/assets/js/icecream.js') }}"></script>
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
                {{ auth()->user()->role }}
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
                <div class="db-dropdown-menu" style="display: none">
                    <div class="db-card">
                        <div class="db-card-body">
                            <div class="db-profile">
                                <a class="db-profile-pic" href="{{ route('profile.show') }}">
                                    <img src="{{ asset('uploads/'.auth()->user()->profile_photo.'') }}" alt="">
                                </a>
                                <div class="db-account-info">
                                    <a href="{{ route('profile.show') }}">
                                        <p>
                                            <strong>{{ auth()->user()->name }}</strong>
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
                        @if(auth()->user()->role == 'administrator')
                            <li>
                                <a href="{{ route('ticket.index') }}" class="">Support Tickets</a>
                            </li>
                            <li>
                                <a href="{{ route('employee.index') }}" class="">Employee</a>
                            </li>
                            <li>
                                <a href="{{ route('erp.index') }}" class="">Import Exists Student</a>
                            </li>
                            <li>
                                <a href="{{ route('student.index') }}" class="">Register Student</a>
                            </li>
                            <li>
                                <a href="{{ route('documents.index') }}" class="">Print Document</a>
                            </li>
                        @endif

                        @if(auth()->user()->role == 'employee')
                            <li>
                                <a href="{{ route('ticket.index') }}" class="">Support Tickets</a>
                            </li>
                            <li>
                                <a href="{{ route('agent.index') }}" class="">Agents</a>
                            </li>
                            <li>
                                <a href="{{ route('employee.index') }}" class="">Employee</a>
                            </li>
                            <li>
                                <a href="{{ route('erp.index') }}" class="">Import Exists Student</a>
                            </li>
                            <li>
                                <a href="{{ route('students.index') }}" class="">Final Admission</a>
                            </li>
                            <li>
                                <a href="{{ route('student.index') }}" class="">Register Student</a>
                            </li>
                            <li>
                                <a href="{{ route('documents.index') }}" class="">Print Document</a>
                            </li>
                        @endif

                        @if(auth()->user()->role == 'agent')
                            <li>
                                <a href="{{ route('ticket.index') }}" class="">Support Tickets</a>
                            </li>
                            <li>
                                <a href="{{ route('profile.show') }}" class="">Update Information</a>
                            </li>
                            <li>
                                <a href="{{ route('student.index') }}" class="">Enroll A Student</a>
                            </li>
                        @endif

                        @if(auth()->user()->role == 'student')
                            <li>
                                <a href="{{ route('ticket.index') }}" class="">Support Tickets</a>
                            </li>
                            <li>
                                <a href="{{ route('profile.show') }}" class="">Update Information</a>
                            </li>
                            <li>
                                <a href="{{ route('student.index') }}" class="">Apply for FNF</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="db-column">
                <div class="db-row">
                </div>
            </div>
        </aside>
        <article class="db-article">
            @yield('content')
        </article>
    </div>
</section>
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