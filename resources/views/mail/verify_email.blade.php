<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
<body>
<h2>Welcome to the site {{ $request['name'] }}</h2>
<br/>
Your registered email-id is {{ $request['email']  }} , Please click on the below link to verify your email account
<br/>
<a href="{{ url('email/verify/', $token) }}">Verify Email</a>
</body>
</html>