<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
</head>
<body>

<div class="auth-box">
    <h2>Create Account</h2>

    <form method="POST" action="/register">
        @csrf

        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Register</button>
    </form>

    <p>Already registered? <a href="/login">Login</a></p>
</div>

</body>
</html>
