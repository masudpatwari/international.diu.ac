@php
    $profile = $pdf_data['profile'];
    $auth = $pdf_data['auth'];
@endphp
<div style="text-align: center; margin-bottom: 0.2in;">
    <h2 style="margin: 0.1in 0;">Passport Receiving Slip</h2>
    <h3>Dhaka International University</h3>
    <h4>House # 04, Road # 01, Block # F, Banani, Dhaka-1213.</h4>
    <h4>(DIU Copy)</h4>
</div>

<div style="margin-bottom: 0.1in;">
    <p>SL.No.</p>
    <ul style="padding: 0 0 0 0.4in; line-height: 0.25in; list-style: square">
        <li>Name : {{ $profile['rel_user']['name'] }}</li>
        <li>Passport no : {{ $profile['passport_no'] }}</li>
        <li>Date of Birth : {{ $profile['dob'] }}</li>
        <li>Nationality : {{ $profile['present_nationality'] }}</li>
        <li>Date of Arrival in Bangladesh : {{ $profile['date_of_arrival_bd'] }}</li>
        <li>Name of the guardian in Bangladesh : {{ $profile['rel_referral_by']['name'] }}</li>
        <li>Authorize person from DIU:</li>
    </ul>
    <ul style="padding: 0 0 0 0.4in; list-style: none; line-height: 0.25in;">
        <li>Name : {{ $auth->name  }}</li>
        <li>Designation : {{ $auth->relEmployee->designation }}</li>
        <li>Cell No : {{ $auth->relEmployee->mobile_no }}</li>
        <li><strong>Dhaka International University</strong></li>
    </ul>
</div>

<div style="border-bottom: 2px dotted #000;"></div>

<div style="text-align: center; margin-top: 0.2in;">
    <h2 style="margin: 0.1in 0;">Passport Receiving Slip</h2>
    <h3>Dhaka International University</h3>
    <h4>House # 04, Road # 01, Block # F, Banani, Dhaka-1213.</h4>
    <h4>(Student Copy)</h4>
</div>
<div style="margin-bottom: 0.1in;">
    <p>SL.No.</p>
    <ul style="padding: 0 0 0 0.4in; line-height: 0.25in; list-style: square">
        <li>Name : {{ $profile['rel_user']['name'] }}</li>
        <li>Passport no : {{ $profile['passport_no'] }}</li>
        <li>Date of Birth : {{ $profile['dob'] }}</li>
        <li>Nationality : {{ $profile['present_nationality'] }}</li>
        <li>Date of Arrival in Bangladesh : {{ $profile['date_of_arrival_bd'] }}</li>
        <li>Name of the guardian in Bangladesh : {{ $profile['rel_referral_by']['name'] }}</li>
        <li>Authorize person from DIU:</li>
    </ul>
    <ul style="padding: 0 0 0 0.4in; list-style: none; line-height: 0.25in;">
        <li>Name : {{ $auth->name  }}</li>
        <li>Designation : {{ $auth->relEmployee->designation }}</li>
        <li>Cell No : {{ $auth->relEmployee->mobile_no }}</li>
        <li><strong>Dhaka International University</strong></li>
    </ul>
</div>