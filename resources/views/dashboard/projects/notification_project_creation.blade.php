<!DOCTYPE html>
<html>
<head>
    <title>A New Project Created</title>
</head>
<body>
    <p>Hi {{ $user->name }},</p>
    <p>There is a new Project that added to your dashboard, please check</p>
    <a href="{{ $url }}">Verify Email</a>
    <p>If you did not sign up, please ignore this email.</p>
</body>
</html>