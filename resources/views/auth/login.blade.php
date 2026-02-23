<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boutique Store Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="login-container boutique-bg">
        <div class="login-card boutique-card">
            <h1 class="login-title">Welcome Back</h1>
            <p class="login-subtitle">To Whatever Inventory Management System</p>

            <form action="/login" method="POST">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********" required>
                </div>

                <button type="submit" class="btn-login boutique-btn">Login</button>
            </form>

            <p class="register-text">
                Don't have an account?
                <a href="/register" class="btn-register boutique-link">Register</a>
            </p>
        </div>
    </div>
</body>
</html>
