@php
    $profile = $pdf_data['profile'];
@endphp
<div style="text-align: center; margin-bottom: 0.4in;">
    <h4>For another University's student's admission</h4>
</div>

<div style="margin-bottom: 0.1in;">
    <p>Date :</p>
    <p>The Registrar</p>
    <p>Board of Trustees</p>
    <p>Dhaka International University</p>
    <p>Banani, Dhaka-1213</p>
    <p>Subject : Regarding admission.</p>
</div>

<p>Dear sir,</p>
<p>We due respect, I would like to inform you that I am a foreigner student taking admission now in</p>
<div style="overflow: hidden;">
    <div style="overflow: hidden;">
        <div style="width: 2.2in; float: left">
            <div style="border-bottom: 1px dotted #000; height: 0.2in;"></div>
        </div>
        <div style="float: left;">program at your University. But I have taken admission letter</div>
    </div>
</div>

<div style="overflow: hidden;">
    <div style="overflow: hidden; float: left; width: 3.3in;">
        <div style="width: 0.45in; float: left">From</div>
        <div style="float: left;">
            <div style="border-bottom: 1px dotted #000; height: 0.2in;"></div>
        </div>
    </div>
    <div style="overflow: hidden; float: left; width: 3.3in;">
        <div style="width: 0.2in; float: left">to</div>
        <div style="float: left;">
            <div style="border-bottom: 1px dotted #000; height: 0.2in;"></div>
        </div>
    </div>
</div>
<p>Program. I will not study there.</p>
<p>I,therefore,pray and hope that you would be kind enough to allow me for my provisional admission.</p>

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