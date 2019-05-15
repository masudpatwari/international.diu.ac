@extends('admin.layouts.layout')
@section('content')
    <div class="mx-auto" style="max-width: 768px">
        <div class="card">
            <div class="card-header">
                <h5 class="d-inline mb-0">Profile of {{ $profile->name }}</h5>
                <a class="btn btn-sm btn-warning float-right" href="{{ route('profile.edit') }}">Edit Profile</a>
            </div>
            <div class="card-body">
                <p class="form-control-plaintext">
                    <strong>Name : </strong>
                    {{ $profile->name }}
                </p>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Permanent Address') }} : </strong>
                    {{ $profile->relStudent->permanent_address }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Permanent Telephone/Lan Phone') }} : </strong>
                            {{ $profile->relStudent->permanent_telephone }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Permanent Mobile (With Country Code)') }} : </strong>
                            {{ $profile->relStudent->permanent_mobile }}
                        </p>
                    </div>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Present Address') }} : </strong>
                    {{ $profile->relStudent->present_address }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Present Telephone/Lan Phone') }} : </strong>
                            {{ $profile->relStudent->present_telephone }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Present Mobile (With Country Code)') }} : </strong>
                            {{ $profile->relStudent->present_mobile }}
                        </p>
                    </div>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Address in Bangladesh with Reference Name') }} : </strong>
                    {{ $profile->relStudent->address_in_bd }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('AB Telephone/Lan Phone') }} : </strong>
                            {{ $profile->relStudent->bd_telephone }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('AB Mobile (With Country Code)') }} : </strong>
                            {{ $profile->relStudent->bd_mobile }}
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Date of Birth') }} : </strong>
                            {{ db2d($profile->relStudent->dob) }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="form-control-plaintext text-capitalize">
                            <strong>{{ __('Sex') }} : </strong>
                            {{ $profile->relStudent->sex }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="form-control-plaintext text-capitalize">
                            <strong>{{ __('Marital Status') }} : </strong>
                            {{ $profile->relStudent->marital_status }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Blood Group') }} : </strong>
                            {{ $profile->relStudent->blood_group }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="form-control-plaintext text-capitalize">
                            <strong>{{ __('Religion') }} : </strong>
                            {{ $profile->relStudent->religion }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Place of Birth') }} : </strong>
                            {{ $profile->relStudent->place_of_birth }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>Present Nationality : </strong>
                            {{ $profile->relStudent->present_nationality }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Country of Birth') }} : </strong>
                            {{ $profile->relStudent->country_of_birth }}
                        </p>
                    </div>
                </div>
                <p class="form-control-plaintext">
                    <strong>Interested Subject : </strong>
                    {{ $profile->relStudent->interested_subject }}
                </p>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Passport Number') }} : </strong>
                            {{ $profile->relStudent->passport_no }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Type of Passport') }} : </strong>
                            {{ $profile->relStudent->type_of_passport }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Date of Issue') }} : </strong>
                            {{ db2d($profile->relStudent->date_of_issue) }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Date of Expire') }} : </strong>
                            {{ db2d($profile->relStudent->date_of_expire) }}
                        </p>
                    </div>
                </div>
                <p class="form-control-plaintext">
                    <strong>{{ __('Date of Last Visit to Bangladesh') }} : </strong>
                    {{ $profile->relStudent->date_of_last_visit_bd }}
                </p>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Last Visa No') }} : </strong>
                            {{ $profile->relStudent->last_visa_no }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Visa Category') }} : </strong>
                            {{ $profile->relStudent->visa_category }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Place of Issue') }} : </strong>
                            {{ $profile->relStudent->visa_place_of_issue }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Date of Issue') }} : </strong>
                            {{ db2d($profile->relStudent->visa_date_of_issue) }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Date of Expiry') }} : </strong>
                            {{ db2d($profile->relStudent->visa_date_of_expire) }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Date of Arrival in Bangladesh') }} : </strong>
                            {{ db2d($profile->relStudent->date_of_arrival_bd) }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Flight No') }} : </strong>
                            {{ $profile->relStudent->flight_no }}
                        </p>
                    </div>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Father\'s Name') }} : </strong>
                    {{ $profile->relStudent->father_name }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Nationality') }} : </strong>
                            {{ $profile->relStudent->father_nationality }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Mobile No') }} : </strong>
                            {{ $profile->relStudent->father_mobile }}
                        </p>
                    </div>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Mother\'s Name') }} : </strong>
                    {{ $profile->relStudent->mother_name }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Nationality') }} : </strong>
                            {{ $profile->relStudent->mother_nationality }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Mobile No') }} : </strong>
                            {{ $profile->relStudent->mother_mobile }}
                        </p>
                    </div>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Spouse\'s Name') }} : </strong>
                    {{ $profile->relStudent->spouse_name }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Nationality') }} : </strong>
                            {{ $profile->relStudent->spouse_nationality }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Mobile No') }} : </strong>
                            {{ $profile->relStudent->spouse_mobile }}
                        </p>
                    </div>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Guardian\'s Name') }} : </strong>
                    {{ $profile->relStudent->guardian_name }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Nationality') }} : </strong>
                            {{ $profile->relStudent->guardian_nationality }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Mobile No') }} : </strong>
                            {{ $profile->relStudent->guardian_mobile }}
                        </p>
                    </div>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Emergency Person Name') }} : </strong>
                    {{ $profile->relStudent->emergency_name }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Nationality') }} : </strong>
                            {{ $profile->relStudent->emergency_nationality }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>{{ __('Mobile No') }} : </strong>
                            {{ $profile->relStudent->emergency_mobile }}
                        </p>
                    </div>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Father/Guardian Monthly Income') }} : </strong>
                    {{ $profile->relStudent->fg_monthly_income }}
                </p>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Email Address') }} : </strong>
                    {{ $profile->email }}
                </p>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Name of The Examinations') }} : </strong>
                    {{ $profile->relStudent->o_name_of_exam }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Group') }} : </strong>
                    {{ $profile->relStudent->o_group}}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Roll No') }} : </strong>
                    {{ $profile->relStudent->o_roll_no }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Year of Passing') }} : </strong>
                    {{ $profile->relStudent->o_year_of_passing }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Letter Grade/Total Marks') }} : </strong>
                    {{ $profile->relStudent->o_letter_grade }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Division/Class/CGPA/%') }} : </strong>
                    {{ $profile->relStudent->o_cgpa }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Board/University') }} : </strong>
                    {{ $profile->relStudent->o_board }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Verification Link of Certificate') }} : </strong>
                    {{ $profile->relStudent->o_link_of_certificate }}
                </p>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Name of The Examinations') }} : </strong>
                    {{ $profile->relStudent->t_name_of_exam }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Group') }} : </strong>
                    {{ $profile->relStudent->t_group}}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Roll No') }} : </strong>
                    {{ $profile->relStudent->t_roll_no }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Year of Passing') }} : </strong>
                    {{ $profile->relStudent->t_year_of_passing }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Letter Grade/Total Marks') }} : </strong>
                    {{ $profile->relStudent->t_letter_grade }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Division/Class/CGPA/%') }} : </strong>
                    {{ $profile->relStudent->t_cgpa }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Board/University') }} : </strong>
                    {{ $profile->relStudent->t_board }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Verification Link of Certificate') }} : </strong>
                    {{ $profile->relStudent->t_link_of_certificate }}
                </p>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Name of The Examinations') }} : </strong>
                    {{ $profile->relStudent->th_name_of_exam }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Group') }} : </strong>
                    {{ $profile->relStudent->th_group}}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Roll No') }} : </strong>
                    {{ $profile->relStudent->th_roll_no }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Year of Passing') }} : </strong>
                    {{ $profile->relStudent->th_year_of_passing }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Letter Grade/Total Marks') }} : </strong>
                    {{ $profile->relStudent->th_letter_grade }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Division/Class/CGPA/%') }} : </strong>
                    {{ $profile->relStudent->th_cgpa }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Board/University') }} : </strong>
                    {{ $profile->relStudent->th_board }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Verification Link of Certificate') }} : </strong>
                    {{ $profile->relStudent->th_link_of_certificate }}
                </p>
                <hr>
                <p class="form-control-plaintext">
                    <strong>{{ __('Name of The Examinations') }} : </strong>
                    {{ $profile->relStudent->fo_name_of_exam }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Group') }} : </strong>
                    {{ $profile->relStudent->fo_group}}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Roll No') }} : </strong>
                    {{ $profile->relStudent->fo_roll_no }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Year of Passing') }} : </strong>
                    {{ $profile->relStudent->fo_year_of_passing }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Letter Grade/Total Marks') }} : </strong>
                    {{ $profile->relStudent->fo_letter_grade }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Division/Class/CGPA/%') }} : </strong>
                    {{ $profile->relStudent->fo_cgpa }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Board/University') }} : </strong>
                    {{ $profile->relStudent->fo_board }}
                </p>
                <p class="form-control-plaintext">
                    <strong>{{ __('Verification Link of Certificate') }} : </strong>
                    {{ $profile->relStudent->fo_link_of_certificate }}
                </p>
            </div>
        </div>
        <a href="{{ route('dashboard.index') }}" class="btn btn-danger btn-sm mt-3 mb-5">Back</a>
    </div>
@endsection