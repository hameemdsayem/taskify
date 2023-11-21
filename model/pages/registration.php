<?php

@include 'config.php';
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];
    
    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result)>0){
        $error[] = 'user already exit!';
    }else{
        if($pass != $cpass){
            $error[] = 'password not matched!';
        }else{
            $insert = "INSERT INTO user_form(name, email, password, user_type) VALUE('$name', '$email', '$pass', '$user_type')";

            mysqli_query($conn, $insert);
            header('location:login_form.php')
        }
    }
};

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration - Taskify</title>
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

    <!-- REGISTRATION -->
    <section class="registration" style="display: block;">
        <h2>Register for Taskify</h2>

        <form id="registration-form" action="" method="post">

        <?php
        
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                }
            }

        ?>
            <div class="form-group">
                <label for="full-name">Full Name</label>
                <input type="text" id="full-name" name="name" required>
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
                <label for="password">Confirm Password</label>
                <input type="password" id="password" name="cpassword" required>
            </div>
            
            <div class="form-group">
                <label for="password">Who are you?</label>
                <select name="user_type" id="">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Register now" class="form-btn submit-button">
                <a href="/model/pages/login.html" id="login-link">Have an account? Login!</a>
            
        </form>
    </section>
    

    <footer>
        <p>&copy; 2023 Taskify. All rights reserved.</p>
    </footer>

    <script>

    </script>
</body>
</html>
