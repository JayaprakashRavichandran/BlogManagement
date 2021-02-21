<?php
require_once APP_VIEW_ROOT . '/style.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegisterForm</title>
<!--    <link rel="stylesheet" type="text/css" href="../style.php">-->
    <script defer src="./login.js"></script>
</head>

<body>
<main id="RegisterForm-container">
    <h1 id="login-header">Registration Form</h1>

    <form method="post" action="<?= base_url() . 'CodeIngiter-3.1/index.php/registration/create'?>" id="login-form" class="register-mainContainer">
        <div class="register-form">
            <div class="RegisterForm-heading">First name</div>
            <input type="text" name="firstName" id="username-field" class="Register-form-field" placeholder="First name">
        </div>

        <div class="register-form">
            <div class="RegisterForm-heading">Last name</div>
            <input type="text" name="lastName" id="password-field" class="Register-form-field" placeholder="Last name">
        </div>
        <div class="register-form">
            <div class="RegisterForm-heading">Email ID</div>
            <input type="email" name="emailId" class="Register-form-field" placeholder="Email ID">
        </div>
        <div class="register-form">
            <div class="RegisterForm-heading">Phone number</div>
            <input maxlength="10" type="number" name="phoneNumber" id="password-field" class="Register-form-field"
                   placeholder="Phone number">
        </div>
        <div class="register-form">
            <div class="RegisterForm-heading">Gender</div>
            <input type="text" name="gender" id="password-field" class="Register-form-field" placeholder="Gender">
        </div>
        <div class="register-form">
            <div class="RegisterForm-heading">Password</div>
            <input type="password" name="password" id="password-field" class="Register-form-field" placeholder="Password">
        </div>
        <div class="register-form">
            <div class="RegisterForm-heading">Confirm Password</div>
            <input type="password" name="confirmpassword" id="password-field" class="Register-form-field" placeholder="Confirm Password">
        </div>

        <input type="submit" name="submit" value="Register" id="register-form-submit">
    </form>

</main>
</body>

</html>
