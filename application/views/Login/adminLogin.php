<?php


require_once APP_VIEW_ROOT . '/style.php';
$baseUrl = base_url() . 'CodeIngiter-3.1/index.php';
$status = isset($error) ? $error: null;
require_once APP_VIEW_ROOT . '/Login/LoginStyle.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLogin</title>
</head>

<body>
<script>
    function myFunction() {
        var x = document.getElementById("password-field");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<main id="main-holder">
    <h1 id="login-header">Login</h1>

    <?php if (! empty($status)) { ?>
        <div id="login-error-msg-holder">
            <p><?= $status; ?></p>
        </div>
    <?php } ?>

    <form method="post" action="<?= $baseUrl . '/LoginController/process' ?>" id="login-form">
        <div>
            <label for="EmailId"></label>
            <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Email">
        </div>
        <div>
            <label for="password"></label>
            <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password">
        </div>
        <div id="password-view"><input type="checkbox" onclick="myFunction()" >Show Password</div>
        <input type="submit" value="Login" id="login-form-submit">
    </form>

</main>
</body>

</html>
