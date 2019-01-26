@php
    $profile = $pdf_data['profile'];
@endphp
<div style="margin-bottom: 0.1in;">
    <p>Date :</p>
    <p>The Registrar</p>
    <p>Board of Trustees</p>
    <p>Dhaka International University</p>
    <p>Banani, Dhaka-1213</p>
    <p>Subject : Regarding next payment and provisional admission.</p>
</div>

<p>Dear sir,</p>
<p>With due respect, I would like to inform you that I am a foreigner student taking admission now in</p>
<div style="overflow: hidden;">
    <div style="overflow: hidden;">
        <div style="width: 1.85in; float: left">
            <div style="border-bottom: 1px dotted #000; height: 0.2in; padding: 0 0.04in">{{ $profile->interested_subject }}</div>
        </div>
        <div style="float: left;"> Program at your University. I will pay my next payment & taking</div>
    </div>
</div>
<p>provisional admission.</p>

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