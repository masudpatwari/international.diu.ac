@php
    $profile = $pdf_data['profile'];
@endphp
<div style="margin-bottom: 0.1in;">
    <p>Date :</p>
    <p>The Register</p>
    <p>Dhaka International University</p>
    <p>Banani, Dhaka-1213</p>
    <p>Subject : Prayer for visa letter/ to extend visa/ Studentship certificate/ Testimonial/ NOC.</p>
</div>

<p>Dear sir,</p>
<div style="overflow: hidden;">
    <div style="overflow: hidden;">
        <div style="width: 5.55in; float: left;">With due respect, I would like to inform you that I am a foreigner student studying</div>
        <div style="float: left">
            <div style="border-bottom: 1px dotted #000; height: 0.2in; padding: 0 0.04in">{{ $profile->interested_subject }}</div>
        </div>
    </div>
</div>
<p>Program at your University . I need visa letter to extend my visa/need studentship certificate/ to</p>
<div style="overflow: hidden;">
    <div style="overflow: hidden;">
        <div style="width: 4in; float: left;"> open the bank account/ Testimonial. My visa will expire on</div>
        <div style="float: left">
            <div style="border-bottom: 1px dotted #000; height: 0.2in; padding: 0 0.04in">{{ date('d/m/Y', strtotime($profile->visa_date_of_expire)) }}</div>
        </div>
    </div>
</div>
<p> I, therefore, pray and hope that you would be kind enough to issue the above letter for my purpose and oblige there by.</p>

<div style="margin-top: 0.5in;">
    <p>Yours faithfully,</p>
    <p>Name : {{ $profile->relUser->name }}</p>
    <p>Passport : {{ $profile->passport_no }}</p>
    <p>Nationality : {{ $profile->present_nationality }}</p>
    <p>Department : {{ $profile->department_name }}</p>
    <p>Batch : {{ $profile->batch_name }}</p>
    <p>Roll : {{ $profile->roll }}</p>
    <p>Semester :  {{ $profile->semester }}</p>
    <p>Contact no : {{ $profile->bd_mobile }}</p>
</div>