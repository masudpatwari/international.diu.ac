@extends('admin.layouts.layout')
@section('content')
    <div class="mx-auto" style="max-width: 768px">
        <div class="pt-4 pb-4 clearfix">
            <h4 class="d-inline">Profile of {{ $profile['name'] }}</h4>
        </div>
        <div class="card">
            <div class="card-body">
                <p class="form-control-plaintext">
                    <strong>Name : </strong>
                    {{ $profile['name'] }}
                </p>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Permanent Address') }} : </strong>
                    {{ $profile['parmanent_add'] }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Permanent Telephone/Lan Phone') }} : </strong>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Permanent Mobile (With Country Code)') }} : </strong>
                        </p>
                    </div>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Present Address') }} : </strong>
                    {{ $profile['mailing_add'] }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Present Telephone/Lan Phone') }} : </strong>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Present Mobile (With Country Code)') }} : </strong>
                        </p>
                    </div>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Address in Bangladesh with Reference Name') }} : </strong>
                    {{ $profile['mailing_add'] }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('AB Telephone/Lan Phone') }} : </strong>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('AB Mobile (With Country Code)') }} : </strong>
                            {{ $profile['phone_no'] }}
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Date of Birth') }} : </strong>
                            {{ $profile['dob'] }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="form-control-plaintext text-capitalize">
                            <strong>{{ __('Sex') }} : </strong>
                            {{ $profile['gender'] }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="form-control-plaintext text-capitalize">
                            <strong>{{ __('Marital Status') }} : </strong>
                            {{ $profile['marital_status'] }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Blood Group') }} : </strong>
                            {{ $profile['blood_group'] }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="form-control-plaintext text-capitalize">
                            <strong>{{ __('Religion') }} : </strong>
                            {{ $profile['religion_id'] }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Place of Birth') }} : </strong>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>Present Nationality : </strong>
                            {{ $profile['nationality'] }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Country of Birth') }} : </strong>
                        </p>
                    </div>
                </div>
                <p class="form-control-plaintext">
                    <strong>Interested Subject : </strong>
                    {{ $profile['department']->name  }}
                </p>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Passport Number') }} : </strong>
                            {{ $profile['std_birth_or_nid_no'] }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Type of Passport') }} : </strong>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Date of Issue') }} : </strong>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Date of Expire') }} : </strong>
                        </p>
                    </div>
                </div>
                <p class="form-control-plaintext">
                    <strong>{{ __('Date of Last Visit to Bangladesh') }} : </strong>
                </p>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Last Visa No') }} : </strong>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Visa Category') }} : </strong>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Place of Issue') }} : </strong>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Date of Issue') }} : </strong>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Date of Expiry') }} : </strong>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Date of Arrival in Bangladesh') }} : </strong>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Flight No') }} : </strong>
                        </p>
                    </div>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Father\'s Name') }} : </strong>
                    {{ $profile['f_name'] }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Nationality') }} : </strong>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Mobile No') }} : </strong>
                            {{ $profile['f_cellno'] }}
                        </p>
                    </div>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Mother\'s Name') }} : </strong>
                    {{ $profile['m_name'] }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Nationality') }} : </strong>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Mobile No') }} : </strong>
                            {{ $profile['m_cellno'] }}
                        </p>
                    </div>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Spouse\'s Name') }} : </strong>
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Nationality') }} : </strong>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Mobile No') }} : </strong>
                        </p>
                    </div>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Guardian\'s Name') }} : </strong>
                    {{ $profile['g_name'] }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Nationality') }} : </strong>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Mobile No') }} : </strong>
                            {{ $profile['g_cellno'] }}
                        </p>
                    </div>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Emergency Person Name') }} : </strong>
                    {{ $profile['e_name'] }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Nationality') }} : </strong>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Mobile No') }} : </strong>
                            {{ $profile['e_cellno'] }}
                        </p>
                    </div>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Father/Guardian Monthly Income') }} : </strong>
                    {{ $profile['fg_monthly_income'] }}
                </p>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Email Address') }} : </strong>
                    {{ $profile['email'] }}
                </p>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Name of The Examinations') }} : </strong>
                    {{ $profile['e_exam_name1'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Group') }} : </strong>
                    {{ $profile['e_group1'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Roll No') }} : </strong>
                    {{ $profile['e_roll_no_1'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Year of Passing') }} : </strong>
                    {{ $profile['e_passing_year1'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Letter Grade/Total Marks') }} : </strong>
                    {{ $profile['e_ltr_grd_tmark1'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Division/Class/CGPA/%') }} : </strong>
                    {{ $profile['e_div_cls_cgpa1'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Board/University') }} : </strong>
                    {{ $profile['e_board_university1'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Verification Link of Certificate') }} : </strong>
                </p>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Name of The Examinations') }} : </strong>
                    {{ $profile['e_exam_name2'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Group') }} : </strong>
                    {{ $profile['e_group2'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Roll No') }} : </strong>
                    {{ $profile['e_roll_no_2'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Year of Passing') }} : </strong>
                    {{ $profile['e_passing_year1'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Letter Grade/Total Marks') }} : </strong>
                    {{ $profile['e_ltr_grd_tmark2'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Division/Class/CGPA/%') }} : </strong>
                    {{ $profile['e_div_cls_cgpa2'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Board/University') }} : </strong>
                    {{ $profile['e_board_university2'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Verification Link of Certificate') }} : </strong>
                </p>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Name of The Examinations') }} : </strong>
                    {{ $profile['e_exam_name3'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Group') }} : </strong>
                    {{ $profile['e_group3'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Roll No') }} : </strong>
                    {{ $profile['e_roll_no_3'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Year of Passing') }} : </strong>
                    {{ $profile['e_passing_year3'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Letter Grade/Total Marks') }} : </strong>
                    {{ $profile['e_ltr_grd_tmark3'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Division/Class/CGPA/%') }} : </strong>
                    {{ $profile['e_div_cls_cgpa3'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Board/University') }} : </strong>
                    {{ $profile['e_board_university3'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Verification Link of Certificate') }} : </strong>
                </p>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Name of The Examinations') }} : </strong>
                    {{ $profile['e_exam_name4'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Group') }} : </strong>
                    {{ $profile['e_group4'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Roll No') }} : </strong>
                    {{ $profile['e_roll_no_4'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Year of Passing') }} : </strong>
                    {{ $profile['e_passing_year4'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Letter Grade/Total Marks') }} : </strong>
                    {{ $profile['e_ltr_grd_tmark4'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Division/Class/CGPA/%') }} : </strong>
                    {{ $profile['e_div_cls_cgpa4'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Board/University') }} : </strong>
                    {{ $profile['e_board_university4'] }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Verification Link of Certificate') }} : </strong>
                </p>
            </div>
            <div class="card-footer">
                <a class="btn btn-sm btn-warning" href="{{ route('erp.store', [$profile['id']]) }}">Save</a>
                <a class="btn btn-sm btn-danger" href="{{ route('erp.index') }}">Back</a>
            </div>
        </div>
    </div>
@endsection