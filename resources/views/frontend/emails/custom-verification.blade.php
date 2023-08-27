<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Welcome to YourApp</title>
</head>
<body>
<h1>Welcome, {{ $user }}!</h1>
<p>Your username: {{ $email }}</p>
<p>Your temporary password: {{ $password }}</p>
<p>Click the button below to verify your email:</p>
<a href="{{ $verificationLink }}" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none;">Verify Email</a>
</body>
</html>
