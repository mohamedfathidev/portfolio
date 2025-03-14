<!DOCTYPE html>
<html>
<head>
    <title>Verify Your Email</title>
</head>
<body>
    <p>Hi {{ $user->name }},</p>
    <p>Click the link below to verify your email:</p>
    <a href="{{ $url }}">Verify Email</a>
    <p>If you did not sign up, please ignore this email.</p>
</body>
</html>
