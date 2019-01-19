@extends('admin.layouts.layout')
@section('content')

    @if(!empty($messagess))
        @foreach($messages as $message)
            <div class="mb-4">
                <h6>{{ $message['subject'] }}</h6>
                {!! $message['body'] !!}
            </div>
        @endforeach
    @endif

    {{--{!! dd($messages['body']['img'][0]) !!}--}}


    {!! $messages['body']['plan'][0] !!}
    {{--<img src="data:image/jpeg;base64, {!! $messages['body']['img1'][0] !!}" width="100">--}}
    {{--<img src="data:image/png;base64, {!! $messages['body']['img2'][0] !!}" width="100">--}}
@endsection