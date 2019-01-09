@extends('admin.layouts.layout')
@section('content')
    <form id="studentRegister" class="pt-4 pb-2">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="first_name">{{ __('First Name') }}</label>
                <input id="first_name" type="text" class="form-control" name="first_name">
            </div>
            <div class="form-group col-md-6">
                <label for="last_name">{{ __('Last Name') }}</label>
                <input id="last_name" type="text" class="form-control" name="last_name">
            </div>
        </div>
        <div class="form-group">
            <label for="country_of_birth">{{ __('Permanent Address') }}</label>
            <textarea id="country_of_birth" class="form-control" name="country_of_birth"></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('PA Telephone/Lan Phone') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('PA Mobile (With Country Code)') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
        </div>
        <div class="form-group">
            <label for="country_of_birth">{{ __('Present Address') }}</label>
            <textarea id="country_of_birth" class="form-control" name="country_of_birth"></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('PRA Telephone/Lan Phone') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('PRA Mobile (With Country Code)') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
        </div>
        <div class="form-group">
            <label for="country_of_birth">{{ __('Address in Bangladesh with Reference Name') }}</label>
            <textarea id="country_of_birth" class="form-control" name="country_of_birth"></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('AB Telephone/Lan Phone') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('AB Mobile (With Country Code)') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="country_of_birth">{{ __('Date of Birth') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
            <div class="form-group col-md-4">
                <label for="country_of_birth">{{ __('Sex') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
            <div class="form-group col-md-4">
                <label for="country_of_birth">{{ __('Marital Status') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="country_of_birth">{{ __('Place of Birth') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
            <div class="form-group col-md-4">
                <select class="form-control custom-select" name="present_nationality">
                    <option selected>{{ __('Present Nationality (Country)') }}</option>
                    @foreach($country as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="country_of_birth">{{ __('Country of Birth') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
        </div>
        <div class="form-group">
            <select class="form-control custom-select" name="interested_subject">
                <option selected>{{ __('Interested Subject') }}</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('Passport Number') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('Type of Passport') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('Date of Issue') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('Date of Expire') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
        </div>
        <div class="form-group">
            <label for="country_of_birth">{{ __('Date of Last Visit to Bangladesh') }}</label>
            <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="country_of_birth">{{ __('Last Visa No') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
            <div class="form-group col-md-4">
                <label for="country_of_birth">{{ __('Visa Category') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
            <div class="form-group col-md-4">
                <label for="country_of_birth">{{ __('Place of Issue') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('Date of Issue') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('Date of Expiry') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('Date of Arrival in Bangladesh') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('Flight No') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
        </div>
        <div class="form-group">
            <label for="country_of_birth">{{ __('Father\'s Name') }}</label>
            <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('Nationality') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('Mobile No') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
        </div>
        <div class="form-group">
            <label for="country_of_birth">{{ __('Mother\'s Name') }}</label>
            <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('Nationality') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('Mobile No') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
        </div>
        <div class="form-group">
            <label for="country_of_birth">{{ __('Spouse\'s Name') }}</label>
            <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('Nationality') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('Mobile No') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
        </div>
        <div class="form-group">
            <label for="country_of_birth">{{ __('Guardian\'s Name') }}</label>
            <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('Nationality') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
            <div class="form-group col-md-6">
                <label for="country_of_birth">{{ __('Mobile No') }}</label>
                <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
            </div>
        </div>
        <div class="form-group">
            <label for="email_address">{{ __('Email Address') }}</label>
            <input id="email_address" type="email" class="form-control" name="email_address">
        </div>
        <div class="form-group">
            <label for="password">{{ __('Password (Min 8 Char)') }}</label>
            <input id="password" type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="country_of_birth">{{ __('Name of The Examinations') }}</label>
            <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
        </div>
        <div class="form-group">
            <label for="country_of_birth">{{ __('Group') }}</label>
            <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
        </div>
        <div class="form-group">
            <label for="country_of_birth">{{ __('Roll No') }}</label>
            <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
        </div>
        <div class="form-group">
            <label for="country_of_birth">{{ __('Year of Passing') }}</label>
            <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
        </div>
        <div class=form-group">
            <label for="country_of_birth">{{ __('Letter Grade/Total Marks') }}</label>
            <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
        </div>
        <div class="form-group">
            <label for="country_of_birth">{{ __('Division/Class/CGPA/%') }}</label>
            <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
        </div>
        <div class="form-group">
            <label for="country_of_birth">{{ __('Board/University') }}</label>
            <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
        </div>
        <div class="form-group">
            <label for="country_of_birth">{{ __('Verification Link of Certificate') }}</label>
            <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
        </div>
        <div class="form-group">
            <label for="country_of_birth">{{ __('Registration Number') }}</label>
            <input id="country_of_birth" type="email" class="form-control" name="country_of_birth">
        </div>
        <button type="submit" name="register" value="student" class="btn btn-sm btn-primary">{{ __('Register') }} <i class="ti-arrow-right"></i></button>
    </form>
@endsection