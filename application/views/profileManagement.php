<?php

$userDetails = $userDetails[0];

require_once APP_VIEW_ROOT . '/style.php';
$baseUrl = base_url() . 'CodeIngiter-3.1/index.php';
require_once  APP_VIEW_ROOT . '/header.php';

?>

<body>

<main id="RegisterForm-container">
    <h2 id="login-header">Update Profile</h2>

    <form method="post" action="<?= base_url() . 'CodeIngiter-3.1/index.php/ProfileManagement/updateProfile/' . $userDetails->USER_ID ?>" id="login-form"
          class="register-mainContainer">

        <div class="register-form">
            <div class="RegisterForm-heading">First name</div>
            <input type="text" name="firstName" id="username-field" class="Register-form-field"
                   value="<?= $userDetails->FIRST_NAME ?>"
                   placeholder="First name">
        </div>

        <div class="register-form">
            <div class="RegisterForm-heading">Last name</div>
            <input type="text" name="lastName" id="password-field" class="Register-form-field"
                   value="<?= $userDetails->LAST_NAME ?>"
                   placeholder="Last name">
        </div>

        <div class="register-form">
            <div class="RegisterForm-heading">Email ID</div>
            <input type="email" name="emailId" class="Register-form-field" placeholder="Email ID"
                   value="<?= $userDetails->EMAIL_ID ?>" readonly>
        </div>

        <div class="register-form">
            <div class="RegisterForm-heading">Phone number</div>
            <input maxlength="10" type="number" name="phoneNumber" id="password-field" class="Register-form-field"
                   value="<?= $userDetails->PHONE_NUMBER ?>"
                   placeholder="Phone number">
        </div>

        <div class="register-form">
            <div class="RegisterForm-heading">Gender</div>
            <input type="text" name="gender" id="password-field" class="Register-form-field"
                   value="<?= $userDetails->GENDER ?>"
                   placeholder="Gender">
        </div>

        <input type="submit" name="submit" value="Update" id="register-form-submit">
    </form>

</main>
</body>

</html>

