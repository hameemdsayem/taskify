<!DOCTYPE html>
<html>
<head>
    <title>Login - Taskify</title>
    <link rel="stylesheet" type="text/css" href="/model/style.css">
    <style>
        footer{
            position: fixed;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="/model/index.html" class="brand">Back to home</a>
        </nav>
    </header>

    <section class="login">
        <h2>Login to Taskify</h2>
        <form action="login_process.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="submit-button">Login</button>
            <a href="#" id="registration-link">Don't have account? Register now!</a>
        </form>
    </section>

    <section class="registration">
        <h2>Register for Taskify</h2>
        <form id="registration-form" action="" method="post">
            <div class="form-group">
                <label for="full-name">Full Name</label>
                <input type="text" id="full-name" name="full-name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <div class="form-group">
                <label for="password">Who are you?</label>
                <select name="user_type" id="">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <input type="submit" value="Register now" class="form-btn submit-button">
                <a href="#" id="login-link">Have an account? Login!</a>
            
        </form>
    </section>
    

    <footer>
        <p>&copy; 2023 Taskify. All rights reserved.</p>
    </footer>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
    const loginSection = document.querySelector('.login');
    const registrationSection = document.querySelector('.registration');
    const registrationLink = document.getElementById('registration-link');
    const loginLink = document.getElementById('login-link');

    // Initially, show the registration form and hide the login form
    registrationSection.style.display = 'block';
    loginSection.style.display = 'none';

    // Show the login form and hide the registration form when the login link is clicked
    loginLink.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the link from navigating
        loginSection.style.display = 'block';
        registrationSection.style.display = 'none';
    });

    // Show the registration form and hide the login form when the registration link is clicked
    registrationLink.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the link from navigating
        registrationSection.style.display = 'block';
        loginSection.style.display = 'none';
    });
});

    </script>
</body>
</html>