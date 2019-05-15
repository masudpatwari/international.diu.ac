@extends('admin.layouts.layout')
@section('content')
    <div class="card mx-auto" style="max-width: 768px">
        <div class="card-body">
            {{ Form::open(['route' => 'erp.store', 'files' => true]) }}
            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', $profile['name'], ['class' => 'form-control', 'required'])  }}
                @if ($errors->has('name'))
                    <span class="form-text text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('permanent_address', 'Permanent Address') }}
                {{ Form::textarea('permanent_address', $profile['parmanent_add'], ['class' => 'form-control'])  }}
                @if ($errors->has('permanent_address'))
                    <span class="form-text text-danger">{{ $errors->first('permanent_address') }}</span>
                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('permanent_telephone', 'Permanent Telephone/Lan Phone') }}
                    {{ Form::text('permanent_telephone', NULL, ['class' => 'form-control'])  }}
                    @if ($errors->has('permanent_telephone'))
                        <span class="form-text text-danger">{{ $errors->first('permanent_telephone') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('permanent_mobile', 'Permanent Mobile (With Country Code)') }}
                    {{ Form::text('permanent_mobile', NULL, ['class' => 'form-control'])  }}
                    @if ($errors->has('permanent_mobile'))
                        <span class="form-text text-danger">{{ $errors->first('permanent_mobile') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('present_address', 'Present Address') }}
                {{ Form::textarea('present_address', $profile['mailing_add'], ['class' => 'form-control'])  }}
                @if ($errors->has('present_address'))
                    <span class="form-text text-danger">{{ $errors->first('present_address') }}</span>
                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('present_telephone', 'Present Telephone/Lan Phone') }}
                    {{ Form::text('present_telephone', NULL, ['class' => 'form-control'])  }}
                    @if ($errors->has('present_telephone'))
                        <span class="form-text text-danger">{{ $errors->first('present_telephone') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('present_mobile', 'Present Mobile (With Country Code)') }}
                    {{ Form::text('present_mobile', NULL, ['class' => 'form-control'])  }}
                    @if ($errors->has('present_mobile'))
                        <span class="form-text text-danger">{{ $errors->first('present_mobile') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('address_in_bd', 'Address in Bangladesh with Reference Name') }}
                {{ Form::text('address_in_bd', $profile['mailing_add'], ['class' => 'form-control'])  }}
                @if ($errors->has('address_in_bd'))
                    <span class="form-text text-danger">{{ $errors->first('address_in_bd') }}</span>
                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('bd_telephone', 'Bangladesh Telephone/Lan Phone') }}
                    {{ Form::text('bd_telephone', NULL, ['class' => 'form-control'])  }}
                    @if ($errors->has('bd_telephone'))
                        <span class="form-text text-danger">{{ $errors->first('bd_telephone') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('bd_mobile', 'Bangladesh Mobile (With Country Code)') }}
                    {{ Form::text('bd_mobile', $profile['phone_no'], ['class' => 'form-control'])  }}
                    @if ($errors->has('bd_mobile'))
                        <span class="form-text text-danger">{{ $errors->first('bd_mobile') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('dob', 'Date of Birth') }}
                    {{ Form::text('dob', db2d($profile['dob']), ['class' => 'form-control datepicker'])  }}
                    @if ($errors->has('dob'))
                        <span class="form-text text-danger">{{ $errors->first('dob') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('sex', 'Sex') }}
                    {{ Form::select('sex', ['male' => 'Male', 'female' => 'Female', 'other' => 'Other'], $profile['gender'], ['placeholder' => 'Sex', 'class' => 'form-control custom-select']) }}
                    @if ($errors->has('sex'))
                        <span class="form-text text-danger">{{ $errors->first('sex') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('marital_status', 'Marital Status') }}
                    {{ Form::select('marital_status', ['unmarried' => 'Unmarried', 'married' => 'Married', 'widower' => 'Widower/Widow', 'divorced' => 'Divorced'], $profile['marital_status'], ['placeholder' => 'Marital Status', 'class' => 'form-control custom-select']) }}
                    @if ($errors->has('marital_status'))
                        <span class="form-text text-danger">{{ $errors->first('marital_status') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('blood_group', 'Blood Group') }}
                    {{ Form::select('blood_group', $blood_group, $profile['blood_group'], ['placeholder' => 'Blood Group', 'class' => 'form-control custom-select']) }}
                    @if ($errors->has('blood_group'))
                        <span class="form-text text-danger">{{ $errors->first('blood_group') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('religion', 'Religion') }}
                    {{ Form::select('religion', $religion, $profile['religion_id'], ['placeholder' => 'Religion', 'class' => 'form-control custom-select']) }}
                    @if ($errors->has('religion'))
                        <span class="form-text text-danger">{{ $errors->first('religion') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('place_of_birth', 'Place of Birth') }}
                    {{ Form::text('place_of_birth', NULL, ['class' => 'form-control'])  }}
                    @if ($errors->has('place_of_birth'))
                        <span class="form-text text-danger">{{ $errors->first('place_of_birth') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('present_nationality', 'Present Nationality (Country)') }}
                    {{ Form::select('present_nationality', (!empty($country)) ? $country : [], $profile['nationality'], ['placeholder' => 'Present Nationality (Country)', 'class' => 'form-control custom-select', 'required']) }}
                    @if ($errors->has('present_nationality'))
                        <span class="form-text text-danger">{{ $errors->first('present_nationality') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('country_of_birth', 'Country of Birth') }}
                    {{ Form::select('country_of_birth', (!empty($country)) ? $country : [], NULL, ['placeholder' => 'Country of Birth', 'class' => 'form-control custom-select']) }}
                    @if ($errors->has('country_of_birth'))
                        <span class="form-text text-danger">{{ $errors->first('country_of_birth') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('interested_subject', 'Interested Subject') }}
                {{ Form::select('interested_subject', $courses, $profile['department']->name, ['placeholder' => 'Interested Subject', 'class' => 'form-control custom-select', 'required']) }}
                @if ($errors->has('interested_subject'))
                    <span class="form-text text-danger">{{ $errors->first('interested_subject') }}</span>
                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('passport_no', 'Passport Number') }}
                    {{ Form::text('passport_no', $profile['std_birth_or_nid_no'], ['class' => 'form-control'])  }}
                    @if ($errors->has('passport_no'))
                        <span class="form-text text-danger">{{ $errors->first('passport_no') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('type_of_passport', 'Type of Passport') }}
                    {{ Form::text('type_of_passport', NULL, ['class' => 'form-control'])  }}
                    @if ($errors->has('type_of_passport'))
                        <span class="form-text text-danger">{{ $errors->first('type_of_passport') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('date_of_issue', 'Date of Issue') }}
                    {{ Form::text('date_of_issue', NULL, ['class' => 'form-control datepicker'])  }}
                    @if ($errors->has('date_of_issue'))
                        <span class="form-text text-danger">{{ $errors->first('date_of_issue') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('date_of_expire', 'Date of Expire') }}
                    {{ Form::text('date_of_expire', NULL, ['class' => 'form-control datepicker'])  }}
                    @if ($errors->has('date_of_expire'))
                        <span class="form-text text-danger">{{ $errors->first('date_of_expire') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('date_of_last_visit_bd', 'Date of Last Visit to Bangladesh') }}
                {{ Form::text('date_of_last_visit_bd', NULL, ['class' => 'form-control datepicker'])  }}
                @if ($errors->has('date_of_last_visit_bd'))
                    <span class="form-text text-danger">{{ $errors->first('date_of_last_visit_bd') }}</span>
                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('last_visa_no', 'Last Visa No') }}
                    {{ Form::text('last_visa_no', NULL, ['class' => 'form-control'])  }}
                    @if ($errors->has('last_visa_no'))
                        <span class="form-text text-danger">{{ $errors->first('last_visa_no') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('visa_category', 'Visa Category') }}
                    {{ Form::text('visa_category', NULL, ['class' => 'form-control'])  }}
                    @if ($errors->has('visa_category'))
                        <span class="form-text text-danger">{{ $errors->first('visa_category') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('visa_place_of_issue', 'Place of Issue') }}
                    {{ Form::text('visa_place_of_issue', NULL, ['class' => 'form-control'])  }}
                    @if ($errors->has('visa_place_of_issue'))
                        <span class="form-text text-danger">{{ $errors->first('visa_place_of_issue') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('visa_date_of_issue', 'Date of Issue') }}
                    {{ Form::text('visa_date_of_issue', NULL, ['class' => 'form-control datepicker'])  }}
                    @if ($errors->has('visa_date_of_issue'))
                        <span class="form-text text-danger">{{ $errors->first('visa_date_of_issue') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('visa_date_of_expire', 'Date of Expiry') }}
                    {{ Form::text('visa_date_of_expire', NULL, ['class' => 'form-control datepicker'])  }}
                    @if ($errors->has('visa_date_of_expire'))
                        <span class="form-text text-danger">{{ $errors->first('visa_date_of_expire') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('date_of_arrival_bd', 'Date of Arrival in Bangladesh') }}
                    {{ Form::text('date_of_arrival_bd', NULL, ['class' => 'form-control datepicker'])  }}
                    @if ($errors->has('date_of_arrival_bd'))
                        <span class="form-text text-danger">{{ $errors->first('date_of_arrival_bd') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('flight_no', 'Flight No') }}
                    {{ Form::text('flight_no', NULL, ['class' => 'form-control'])  }}
                    @if ($errors->has('flight_no'))
                        <span class="form-text text-danger">{{ $errors->first('flight_no') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('father_name', 'Father\'s Name') }}
                {{ Form::text('father_name', $profile['f_name'], ['class' => 'form-control'])  }}
                @if ($errors->has('father_name'))
                    <span class="form-text text-danger">{{ $errors->first('father_name') }}</span>
                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('father_nationality', 'Nationality') }}
                    {{ Form::select('father_nationality', (!empty($country)) ? $country : [], NULL, ['placeholder' => 'Nationality', 'class' => 'form-control custom-select']) }}
                    @if ($errors->has('father_nationality'))
                        <span class="form-text text-danger">{{ $errors->first('father_nationality') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('father_mobile', 'Mobile No') }}
                    {{ Form::text('father_mobile', $profile['f_cellno'], ['class' => 'form-control'])  }}
                    @if ($errors->has('father_mobile'))
                        <span class="form-text text-danger">{{ $errors->first('father_mobile') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('mother_name', 'Mother\'s Name') }}
                {{ Form::text('mother_name', $profile['m_name'], ['class' => 'form-control'])  }}
                @if ($errors->has('mother_name'))
                    <span class="form-text text-danger">{{ $errors->first('mother_name') }}</span>
                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('mother_nationality', 'Nationality') }}
                    {{ Form::select('mother_nationality', (!empty($country)) ? $country : [], NULL, ['placeholder' => 'Nationality', 'class' => 'form-control custom-select']) }}
                    @if ($errors->has('mother_nationality'))
                        <span class="form-text text-danger">{{ $errors->first('mother_nationality') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('mother_mobile', 'Mobile No') }}
                    {{ Form::text('mother_mobile', $profile['m_cellno'], ['class' => 'form-control'])  }}
                    @if ($errors->has('mother_mobile'))
                        <span class="form-text text-danger">{{ $errors->first('mother_mobile') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('spouse_name', 'Spouse\'s Name') }}
                {{ Form::text('spouse_name', NULL, ['class' => 'form-control'])  }}
                @if ($errors->has('spouse_name'))
                    <span class="form-text text-danger">{{ $errors->first('spouse_name') }}</span>
                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('spouse_nationality', 'Nationality') }}
                    {{ Form::select('spouse_nationality', (!empty($country)) ? $country : [], NULL, ['placeholder' => 'Nationality', 'class' => 'form-control custom-select']) }}
                    @if ($errors->has('spouse_nationality'))
                        <span class="form-text text-danger">{{ $errors->first('spouse_nationality') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('spouse_mobile', 'Mobile No') }}
                    {{ Form::text('spouse_mobile', NULL, ['class' => 'form-control'])  }}
                    @if ($errors->has('spouse_mobile'))
                        <span class="form-text text-danger">{{ $errors->first('spouse_mobile') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('guardian_name', 'Guardian\'s Name') }}
                {{ Form::text('guardian_name', $profile['g_name'], ['class' => 'form-control'])  }}
                @if ($errors->has('guardian_name'))
                    <span class="form-text text-danger">{{ $errors->first('guardian_name') }}</span>
                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('guardian_nationality', 'Nationality') }}
                    {{ Form::select('guardian_nationality', (!empty($country)) ? $country : [], NULL, ['placeholder' => 'Nationality', 'class' => 'form-control custom-select']) }}
                    @if ($errors->has('guardian_nationality'))
                        <span class="form-text text-danger">{{ $errors->first('guardian_nationality') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('guardian_mobile', 'Mobile No') }}
                    {{ Form::text('guardian_mobile', $profile['g_cellno'], ['class' => 'form-control'])  }}
                    @if ($errors->has('guardian_mobile'))
                        <span class="form-text text-danger">{{ $errors->first('guardian_mobile') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('emergency_name', 'Emergency Person Name') }}
                {{ Form::text('emergency_name', $profile['e_name'], ['class' => 'form-control'])  }}
                @if ($errors->has('emergency_name'))
                    <span class="form-text text-danger">{{ $errors->first('emergency_name') }}</span>
                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('emergency_nationality', 'Nationality') }}
                    {{ Form::select('emergency_nationality', (!empty($country)) ? $country : [], NULL, ['placeholder' => 'Nationality', 'class' => 'form-control custom-select']) }}
                    @if ($errors->has('emergency_nationality'))
                        <span class="form-text text-danger">{{ $errors->first('emergency_nationality') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('emergency_mobile', 'Mobile No') }}
                    {{ Form::text('emergency_mobile', $profile['e_cellno'], ['class' => 'form-control'])  }}
                    @if ($errors->has('emergency_mobile'))
                        <span class="form-text text-danger">{{ $errors->first('emergency_mobile') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('fg_monthly_income', 'Father/Guardian Monthly Income') }}
                {{ Form::text('fg_monthly_income', $profile['fg_monthly_income'], ['class' => 'form-control'])  }}
                @if ($errors->has('fg_monthly_income'))
                    <span class="form-text text-danger">{{ $errors->first('fg_monthly_income') }}</span>
                @endif
            </div>
            <hr>
            <div class="form-group">
                {{ Form::label('o_name_of_exam', 'Name of The Examinations') }}
                {{ Form::text('o_name_of_exam', $profile['e_exam_name1'], ['class' => 'form-control'])  }}
                @if ($errors->has('o_name_of_exam'))
                    <span class="form-text text-danger">{{ $errors->first('o_name_of_exam') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('o_group', 'Group') }}
                {{ Form::text('o_group', $profile['e_group1'], ['class' => 'form-control'])  }}
                @if ($errors->has('o_group'))
                    <span class="form-text text-danger">{{ $errors->first('o_group') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('o_roll_no', 'Roll No') }}
                {{ Form::text('o_roll_no', $profile['e_roll_no_1'], ['class' => 'form-control'])  }}
                @if ($errors->has('o_roll_no'))
                    <span class="form-text text-danger">{{ $errors->first('o_roll_no') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('o_year_of_passing', 'Year of Passing') }}
                {{ Form::text('o_year_of_passing', $profile['e_passing_year1'], ['class' => 'form-control'])  }}
                @if ($errors->has('o_year_of_passing'))
                    <span class="form-text text-danger">{{ $errors->first('o_year_of_passing') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('o_letter_grade', 'Letter Grade/Total Marks') }}
                {{ Form::text('o_letter_grade', $profile['e_ltr_grd_tmark1'], ['class' => 'form-control'])  }}
                @if ($errors->has('o_letter_grade'))
                    <span class="form-text text-danger">{{ $errors->first('o_letter_grade') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('o_cgpa', 'Division/Class/CGPA/%') }}
                {{ Form::text('o_cgpa', $profile['e_div_cls_cgpa1'], ['class' => 'form-control'])  }}
                @if ($errors->has('o_cgpa'))
                    <span class="form-text text-danger">{{ $errors->first('o_cgpa') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('o_board', 'Board/University') }}
                {{ Form::text('o_board', $profile['e_board_university1'], ['class' => 'form-control'])  }}
                @if ($errors->has('o_board'))
                    <span class="form-text text-danger">{{ $errors->first('o_board') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('o_link_of_certificate', 'Verification Link of Certificate') }}
                {{ Form::text('o_link_of_certificate', NULL, ['class' => 'form-control'])  }}
                @if ($errors->has('o_link_of_certificate'))
                    <span class="form-text text-danger">{{ $errors->first('o_link_of_certificate') }}</span>
                @endif
            </div>
            <hr>
            <div class="form-group">
                {{ Form::label('t_name_of_exam', 'Name of The Examinations') }}
                {{ Form::text('t_name_of_exam', $profile['e_exam_name2'], ['class' => 'form-control'])  }}
                @if ($errors->has('t_name_of_exam'))
                    <span class="form-text text-danger">{{ $errors->first('t_name_of_exam') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('t_group', 'Group') }}
                {{ Form::text('t_group', $profile['e_group2'], ['class' => 'form-control'])  }}
                @if ($errors->has('t_group'))
                    <span class="form-text text-danger">{{ $errors->first('t_group') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('t_roll_no', 'Roll No') }}
                {{ Form::text('t_roll_no', $profile['e_roll_no_2'], ['class' => 'form-control'])  }}
                @if ($errors->has('t_roll_no'))
                    <span class="form-text text-danger">{{ $errors->first('t_roll_no') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('t_year_of_passing', 'Year of Passing') }}
                {{ Form::text('t_year_of_passing', $profile['e_passing_year2'], ['class' => 'form-control'])  }}
                @if ($errors->has('t_year_of_passing'))
                    <span class="form-text text-danger">{{ $errors->first('t_year_of_passing') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('t_letter_grade', 'Letter Grade/Total Marks') }}
                {{ Form::text('t_letter_grade', $profile['e_ltr_grd_tmark2'], ['class' => 'form-control'])  }}
                @if ($errors->has('t_letter_grade'))
                    <span class="form-text text-danger">{{ $errors->first('t_letter_grade') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('t_cgpa', 'Division/Class/CGPA/%') }}
                {{ Form::text('t_cgpa', $profile['e_div_cls_cgpa2'], ['class' => 'form-control'])  }}
                @if ($errors->has('t_cgpa'))
                    <span class="form-text text-danger">{{ $errors->first('t_cgpa') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('t_board', 'Board/University') }}
                {{ Form::text('t_board', $profile['e_board_university2'], ['class' => 'form-control'])  }}
                @if ($errors->has('t_board'))
                    <span class="form-text text-danger">{{ $errors->first('t_board') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('t_link_of_certificate', 'Verification Link of Certificate') }}
                {{ Form::text('t_link_of_certificate', NULL, ['class' => 'form-control'])  }}
                @if ($errors->has('t_link_of_certificate'))
                    <span class="form-text text-danger">{{ $errors->first('t_link_of_certificate') }}</span>
                @endif
            </div>
            <hr>
            <div class="form-group">
                {{ Form::label('th_name_of_exam', 'Name of The Examinations') }}
                {{ Form::text('th_name_of_exam', $profile['e_exam_name3'], ['class' => 'form-control'])  }}
                @if ($errors->has('th_name_of_exam'))
                    <span class="form-text text-danger">{{ $errors->first('th_name_of_exam') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('th_group', 'Group') }}
                {{ Form::text('th_group', $profile['e_group1'], ['class' => 'form-control'])  }}
                @if ($errors->has('th_group'))
                    <span class="form-text text-danger">{{ $errors->first('th_group') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('th_roll_no', 'Roll No') }}
                {{ Form::text('th_roll_no', $profile['e_roll_no_3'], ['class' => 'form-control'])  }}
                @if ($errors->has('th_roll_no'))
                    <span class="form-text text-danger">{{ $errors->first('th_roll_no') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('th_year_of_passing', 'Year of Passing') }}
                {{ Form::text('th_year_of_passing', $profile['e_passing_year3'], ['class' => 'form-control'])  }}
                @if ($errors->has('th_year_of_passing'))
                    <span class="form-text text-danger">{{ $errors->first('th_year_of_passing') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('th_letter_grade', 'Letter Grade/Total Marks') }}
                {{ Form::text('th_letter_grade', $profile['e_ltr_grd_tmark3'], ['class' => 'form-control'])  }}
                @if ($errors->has('th_letter_grade'))
                    <span class="form-text text-danger">{{ $errors->first('th_letter_grade') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('th_cgpa', 'Division/Class/CGPA/%') }}
                {{ Form::text('th_cgpa', $profile['e_div_cls_cgpa3'], ['class' => 'form-control'])  }}
                @if ($errors->has('th_cgpa'))
                    <span class="form-text text-danger">{{ $errors->first('th_cgpa') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('th_board', 'Board/University') }}
                {{ Form::text('th_board', $profile['e_board_university3'], ['class' => 'form-control'])  }}
                @if ($errors->has('th_board'))
                    <span class="form-text text-danger">{{ $errors->first('th_board') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('th_link_of_certificate', 'Verification Link of Certificate') }}
                {{ Form::text('th_link_of_certificate', NULL, ['class' => 'form-control'])  }}
                @if ($errors->has('th_link_of_certificate'))
                    <span class="form-text text-danger">{{ $errors->first('th_link_of_certificate') }}</span>
                @endif
            </div>
            <hr>
            <div class="form-group">
                {{ Form::label('fo_name_of_exam', 'Name of The Examinations') }}
                {{ Form::text('fo_name_of_exam', $profile['e_exam_name4'], ['class' => 'form-control'])  }}
                @if ($errors->has('fo_name_of_exam'))
                    <span class="form-text text-danger">{{ $errors->first('fo_name_of_exam') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('fo_group', 'Group') }}
                {{ Form::text('fo_group', $profile['e_group4'], ['class' => 'form-control'])  }}
                @if ($errors->has('fo_group'))
                    <span class="form-text text-danger">{{ $errors->first('fo_group') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('fo_roll_no', 'Roll No') }}
                {{ Form::text('fo_roll_no', $profile['e_roll_no_4'], ['class' => 'form-control'])  }}
                @if ($errors->has('fo_roll_no'))
                    <span class="form-text text-danger">{{ $errors->first('fo_roll_no') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('fo_year_of_passing', 'Year of Passing') }}
                {{ Form::text('fo_year_of_passing', $profile['e_passing_year4'], ['class' => 'form-control'])  }}
                @if ($errors->has('fo_year_of_passing'))
                    <span class="form-text text-danger">{{ $errors->first('fo_year_of_passing') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('fo_letter_grade', 'Letter Grade/Total Marks') }}
                {{ Form::text('fo_letter_grade', $profile['e_ltr_grd_tmark4'], ['class' => 'form-control'])  }}
                @if ($errors->has('fo_letter_grade'))
                    <span class="form-text text-danger">{{ $errors->first('fo_letter_grade') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('fo_cgpa', 'Division/Class/CGPA/%') }}
                {{ Form::text('fo_cgpa', $profile['e_div_cls_cgpa4'], ['class' => 'form-control'])  }}
                @if ($errors->has('fo_cgpa'))
                    <span class="form-text text-danger">{{ $errors->first('fo_cgpa') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('fo_board', 'Board/University') }}
                {{ Form::text('fo_board', $profile['e_board_university4'], ['class' => 'form-control'])  }}
                @if ($errors->has('fo_board'))
                    <span class="form-text text-danger">{{ $errors->first('fo_board') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('fo_link_of_certificate', 'Verification Link of Certificate') }}
                {{ Form::text('fo_link_of_certificate', NULL, ['class' => 'form-control'])  }}
                @if ($errors->has('fo_link_of_certificate'))
                    <span class="form-text text-danger">{{ $errors->first('fo_link_of_certificate') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('profile_photo', 'Profile Photo') }}
                {{ Form::file('profile_photo', NULL, ['class' => ''])  }}
                @if ($errors->has('profile_photo'))
                    <span class="form-text text-danger">{{ $errors->first('profile_photo') }}</span>
                @endif
            </div>
            {{ Form::button('<i class="ti-arrow-right"></i> Save', ['type'=>'submit', 'class' => 'btn btn-sm btn-success']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection