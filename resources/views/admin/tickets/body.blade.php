<h2>Hi there!</h2>
{{ $body }}
@if(auth()->user()->role != 'student')
    <p>Thanking you</p>
    <p>Yours faithfully</p>
    <p>{{ auth()->user()->name }}</p>
    @if(auth()->user()->role == 'employee')
        <p>Designation : {{ auth()->user()->relEmployee->designation }}</p>
    @else
        <p>Agent Of DIU</p>
    @endif
    <p>Dhaka International University</p>
@endif