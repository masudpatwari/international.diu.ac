@extends('admin.layouts.layout')
@section('content')
    <div class="mx-auto" style="max-width: 768px">
        <div class="pt-4 pb-4 clearfix">
            <h4 class="d-inline">Profile of {{ $profile->first_name ." ". $profile->last_name }}</h4>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>First Name : </strong>
                            {{ $profile->first_name }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>Last Name : </strong>
                            {{ $profile->last_name }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Permanent Address') }} : </strong>
                    {{ $profile->relStudent->permanent_address }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Permanent Telephone/Lan Phone') }} : </strong>
                            {{ $profile->relStudent->permanent_telephone }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Permanent Mobile (With Country Code)') }} : </strong>
                            {{ $profile->relStudent->permanent_mobile }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Present Address') }} : </strong>
                    {{ $profile->relStudent->present_address }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Present Telephone/Lan Phone') }} : </strong>
                            {{ $profile->relStudent->present_telephone }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Present Mobile (With Country Code)') }} : </strong>
                            {{ $profile->relStudent->present_mobile }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Address in Bangladesh with Reference Name') }} : </strong>
                    {{ $profile->relStudent->address_in_bd }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('AB Telephone/Lan Phone') }} : </strong>
                            {{ $profile->relStudent->bd_telephone }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('AB Mobile (With Country Code)') }} : </strong>
                            {{ $profile->relStudent->bd_mobile }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <strong>{{ __('Date of Birth') }} : </strong>
                            {{ $profile->relStudent->dob }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            <strong>{{ __('Sex') }} : </strong>
                            {{ $profile->relStudent->sex }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            <strong>{{ __('Marital Status') }} : </strong>
                            {{ $profile->relStudent->marital_status }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <strong>{{ __('Place of Birth') }} : </strong>
                            {{ $profile->relStudent->place_of_birth }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            <strong>Present Nationality : </strong>
                            {{ $profile->relStudent->present_nationality }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            <strong>{{ __('Country of Birth') }} : </strong>
                            NA
                        </p>
                    </div>
                </div>
                <p>
                    <strong>Interested Subject : </strong>
                    {{ $profile->relStudent->interested_subject }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Passport Number') }} : </strong>
                            {{ $profile->relStudent->passport_no }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Type of Passport') }} : </strong>
                            {{ $profile->relStudent->type_of_passport }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Date of Issue') }} : </strong>
                            {{ $profile->relStudent->date_of_issue }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Date of Expire') }} : </strong>
                            {{ $profile->relStudent->date_of_expire }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Date of Last Visit to Bangladesh') }} : </strong>
                    {{ $profile->relStudent->date_of_last_visit_bd }}
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <strong>{{ __('Last Visa No') }} : </strong>
                            {{ $profile->relStudent->last_visa_no }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            <strong>{{ __('Visa Category') }} : </strong>
                            {{ $profile->relStudent->visa_category }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            <strong>{{ __('Place of Issue') }} : </strong>
                            {{ $profile->relStudent->visa_place_of_issue }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Date of Issue') }} : </strong>
                            {{ $profile->relStudent->visa_date_of_issue }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Date of Expiry') }} : </strong>
                            {{ $profile->relStudent->visa_date_of_expire }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Date of Arrival in Bangladesh') }} : </strong>
                            {{ $profile->relStudent->date_of_arrival_bd }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Flight No') }} : </strong>
                            {{ $profile->relStudent->flight_no }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Father\'s Name') }} : </strong>
                    {{ $profile->relStudent->father_name }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Nationality') }} : </strong>
                            {{ $profile->relStudent->father_nationality }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Mobile No') }} : </strong>
                            {{ $profile->relStudent->father_mobile }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Mother\'s Name') }} : </strong>
                    {{ $profile->relStudent->mother_name }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Nationality') }} : </strong>
                            {{ $profile->relStudent->mother_nationality }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Mobile No') }} : </strong>
                            {{ $profile->relStudent->mother_mobile }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Spouse\'s Name') }} : </strong>
                    {{ $profile->relStudent->spouse_name }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Nationality') }} : </strong>
                            {{ $profile->relStudent->spouse_nationality }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Mobile No') }} : </strong>
                            {{ $profile->relStudent->spouse_mobile }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Guardian\'s Name') }} : </strong>
                    {{ $profile->relStudent->guardian_name }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Nationality') }} : </strong>
                            {{ $profile->relStudent->guardian_nationality }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Mobile No') }} : </strong>
                            {{ $profile->relStudent->guardian_mobile }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Email Address') }} : </strong>
                    {{ $profile->email }}
                </p>
                <p>
                    <strong>{{ __('Name of The Examinations') }} : </strong>
                    {{ $profile->relStudent->o_name_of_exam }}
                </p>
                <p>
                    <strong>{{ __('Group') }} : </strong>
                    {{ $profile->relStudent->o_group}}
                </p>
                <p>
                    <strong>{{ __('Roll No') }} : </strong>
                    {{ $profile->relStudent->o_roll_no }}
                </p>
                <p>
                    <strong>{{ __('Year of Passing') }} : </strong>
                    {{ $profile->relStudent->o_year_of_passing }}
                </p>
                <p>
                    <strong>{{ __('Letter Grade/Total Marks') }} : </strong>
                    {{ $profile->relStudent->o_letter_grade }}
                </p>
                <p>
                    <strong>{{ __('Division/Class/CGPA/%') }} : </strong>
                    {{ $profile->relStudent->o_cgpa }}
                </p>
                <p>
                    <strong>{{ __('Board/University') }} : </strong>
                    {{ $profile->relStudent->o_board }}
                </p>
                <p>
                    <strong>{{ __('Verification Link of Certificate') }} : </strong>
                    {{ $profile->relStudent->o_link_of_certificate }}
                </p>
                <p class="mb-0">
                    <strong>{{ __('Registration Number') }} : </strong>
                    {{ $profile->relStudent->o_registration_no }}
                </p>
            </div>
        </div>
    </div>
@endsection