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
            <a href="/model/index.php" class="brand">Back to home</a>
        </nav>
    </header>

    <!-- LOGIN -->
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
            <button type="submit" name="submit" class="submit-button">Login</button>
            <a href="/model/pages/registration.html" id="registration-link">Don't have account? Register now!</a>
        </form>
    </section>


    

    <footer>
        <p>&copy; 2023 Taskify. All rights reserved.</p>
    </footer>

</body>
</html>
