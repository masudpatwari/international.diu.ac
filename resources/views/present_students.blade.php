@extends('layouts.master')
@section('content')
<div class="diu-page-title text-center text-light">
    <div class="container">
        <div class="diu-z-index-up">
            <h3>PRESENT STUDENTS</h3>
            <p>Here you can review some statistics about our Education Center</p>
        </div>
    </div>
</div>
<section class="diu-teachers">
    <div class="container">
        @if(!empty($students))
            <div class="row">
                @foreach($students as $key => $student)
                    @php
                        $file = @file_get_contents("ftp://oracleftp:9874150@erp.diu.ac/STD".$student->id.".JPG");
                        $image = ($file) ? "data:image/jpeg;base64," . base64_encode($file) . "" : "";
                    @endphp
                    <div class="col-md-4">
                        <div class="card mb-4 border-0">
                            <div class="diu-people">
                                <div class="diu-people-img @if(empty($image)) empty @endif">
                                    <div class="people-img">
                                        <img class="" src="{{ $image }}" alt="">
                                    </div>
                                </div>
                                <div class="diu-people-info">
                                    <p>
                                        <a href=""><strong>{{ $student->student_name }}</strong></a>
                                    </p>
                                    <p>{{ $student->reg_code }}</p>
                                    <p>From {{ $student->nationality }}</p>
                                    <p>{{ $student->name }}</p>
                                    <p>{{ $student->batch_name }} Batch</p>
                                    <p>{{ $student->phone_no }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <a class="page-link" href="{{ route('student.present', ($page > 1) ? ($page-12) : 1) }}">Previous</a>
                <a class="page-link" href="{{ route('student.present', ($page + 12)) }}">Next</a>
            </div>
        @endif
        <div id="data-container"></div>
        <div id="pagination-container"></div>
    </div>
</section>
<script type="text/javascript">
    /*$(document).ready(function(){
        var student = "";

        function simpleTemplating(data) {
            var html = '<div class="d-flex justify-content-center">';
            $.each(data, function(index, item){
                html += '<a class="page-link">'+ item +'</a>';
            });
            html += '</div>';
            return html;
        }


        $('#pagination-container').pagination({
            dataSource: student,
            pageSize: 20,
            callback: function(data, pagination) {

                var html = simpleTemplating(data);
                $('#data-container').prev().html(html);
            }
        })
    })*/
</script>
@endsection