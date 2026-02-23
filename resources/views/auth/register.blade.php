<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boutique Store Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="login-container boutique-bg">
        <div class="login-card boutique-card wide-card">
            <h1 class="login-title">Create Account</h1>
            <p class="login-subtitle">Sign up to manage our store</p>

            <form action="/register" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group flex-half">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
                    </div>

                    <div class="form-group flex-half">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="********" required>
                </div>

                <div class="form-group">
                    <label for="role">Role</label>
                    <select id="role" name="role" required>
                        <option value="">Select Role</option>
                        <option value="supervisor">Supervisor</option>
                        <option value="staff">Staff</option>
                        <option value="supplier_renter">Supplier/Renter</option>
                    </select>
                </div>

                <button type="submit" class="btn-login boutique-btn">Register</button>
            </form>

            <p class="register-text">
                Already have an account?
                <a href="/login" class="btn-register boutique-link">Login</a>
            </p>
        </div>
    </div>
</body>
</html>
