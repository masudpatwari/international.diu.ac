@extends('admin.layouts.layout')
@section('content')
    <div class="mx-auto" style="max-width: 768px">
        <div class="pt-4 pb-4 clearfix">
            <h4 class="d-inline">Profile of {{ $profile->relUser->first_name ." ". $profile->relUser->last_name }}</h4>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>First Name : </strong>
                            {{ $profile->relUser->first_name }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>Last Name : </strong>
                            {{ $profile->relUser->last_name }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Permanent Address') }} : </strong>
                    {{ $profile->permanent_address }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Permanent Telephone/Lan Phone') }} : </strong>
                            {{ $profile->permanent_telephone }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Permanent Mobile (With Country Code)') }} : </strong>
                            {{ $profile->permanent_mobile }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Present Address') }} : </strong>
                    {{ $profile->present_address }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Present Telephone/Lan Phone') }} : </strong>
                            {{ $profile->present_telephone }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Present Mobile (With Country Code)') }} : </strong>
                            {{ $profile->present_mobile }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Address in Bangladesh with Reference Name') }} : </strong>
                    {{ $profile->address_in_bd }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('AB Telephone/Lan Phone') }} : </strong>
                            {{ $profile->bd_telephone }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('AB Mobile (With Country Code)') }} : </strong>
                            {{ $profile->bd_mobile }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <strong>{{ __('Date of Birth') }} : </strong>
                            {{ $profile->dob }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            <strong>{{ __('Sex') }} : </strong>
                            {{ $profile->sex }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            <strong>{{ __('Marital Status') }} : </strong>
                            {{ $profile->marital_status }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <strong>{{ __('Place of Birth') }} : </strong>
                            {{ $profile->place_of_birth }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            <strong>Present Nationality : </strong>
                            {{ $profile->present_nationality }}
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
                    {{ $profile->interested_subject }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Passport Number') }} : </strong>
                            {{ $profile->passport_no }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Type of Passport') }} : </strong>
                            {{ $profile->type_of_passport }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Date of Issue') }} : </strong>
                            {{ $profile->date_of_issue }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Date of Expire') }} : </strong>
                            {{ $profile->date_of_expire }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Date of Last Visit to Bangladesh') }} : </strong>
                    {{ $profile->date_of_last_visit_bd }}
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <strong>{{ __('Last Visa No') }} : </strong>
                            {{ $profile->last_visa_no }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            <strong>{{ __('Visa Category') }} : </strong>
                            {{ $profile->visa_category }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            <strong>{{ __('Place of Issue') }} : </strong>
                            {{ $profile->visa_place_of_issue }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Date of Issue') }} : </strong>
                            {{ $profile->visa_date_of_issue }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Date of Expiry') }} : </strong>
                            {{ $profile->visa_date_of_expire }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Date of Arrival in Bangladesh') }} : </strong>
                            {{ $profile->date_of_arrival_bd }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Flight No') }} : </strong>
                            {{ $profile->flight_no }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Father\'s Name') }} : </strong>
                    {{ $profile->father_name }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Nationality') }} : </strong>
                            {{ $profile->father_nationality }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Mobile No') }} : </strong>
                            {{ $profile->father_mobile }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Mother\'s Name') }} : </strong>
                    {{ $profile->mother_name }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Nationality') }} : </strong>
                            {{ $profile->mother_nationality }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Mobile No') }} : </strong>
                            {{ $profile->mother_mobile }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Spouse\'s Name') }} : </strong>
                    {{ $profile->spouse_name }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Nationality') }} : </strong>
                            {{ $profile->spouse_nationality }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Mobile No') }} : </strong>
                            {{ $profile->spouse_mobile }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Guardian\'s Name') }} : </strong>
                    {{ $profile->guardian_name }}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Nationality') }} : </strong>
                            {{ $profile->guardian_nationality }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>{{ __('Mobile No') }} : </strong>
                            {{ $profile->guardian_mobile }}
                        </p>
                    </div>
                </div>
                <p>
                    <strong>{{ __('Email Address') }} : </strong>
                    {{ $profile->email }}
                </p>
                <p>
                    <strong>{{ __('Name of The Examinations') }} : </strong>
                    {{ $profile->o_name_of_exam }}
                </p>
                <p>
                    <strong>{{ __('Group') }} : </strong>
                    {{ $profile->o_group}}
                </p>
                <p>
                    <strong>{{ __('Roll No') }} : </strong>
                    {{ $profile->o_roll_no }}
                </p>
                <p>
                    <strong>{{ __('Year of Passing') }} : </strong>
                    {{ $profile->o_year_of_passing }}
                </p>
                <p>
                    <strong>{{ __('Letter Grade/Total Marks') }} : </strong>
                    {{ $profile->o_letter_grade }}
                </p>
                <p>
                    <strong>{{ __('Division/Class/CGPA/%') }} : </strong>
                    {{ $profile->o_cgpa }}
                </p>
                <p>
                    <strong>{{ __('Board/University') }} : </strong>
                    {{ $profile->o_board }}
                </p>
                <p>
                    <strong>{{ __('Verification Link of Certificate') }} : </strong>
                    {{ $profile->o_link_of_certificate }}
                </p>
                <p class="mb-0">
                    <strong>{{ __('Registration Number') }} : </strong>
                    {{ $profile->o_registration_no }}
                </p>
            </div>
        </div>
    </div>
@endsection