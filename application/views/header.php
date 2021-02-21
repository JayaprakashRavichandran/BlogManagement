<?php

require_once APP_VIEW_ROOT . '/style.php';
$pageTitle = $title;
$baseUrl = base_url() . 'CodeIngiter-3.1/index.php';
$loginSession = $session;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <?php
    if ($pageTitle == 'Dashboard') {
        require_once  APP_VIEW_ROOT . '/dashboardStyle.php';
    } elseif ($pageTitle == 'createBlog') {
        require_once  APP_VIEW_ROOT . '/blogStyle.php';
    } elseif ($pageTitle == 'userManagement') {
        require_once  APP_VIEW_ROOT . '/userManagementStyle.php';
    }
    ?>
    <div class="navbarContainer">
        <div class="topnav">
            <a href="<?= $baseUrl . '/Dashboard'?>">Dashboard</a>
            <?php if ($session->userdata['userType'] == 'ADMIN') { ?>
                <a href="<?= $baseUrl . '/ProfileManagement'?>">Admin profile management</a>
            <?php } ?>
            <a href="<?= $baseUrl . '/BlogHandler'?>">Blog</a>
            <a href="<?= $baseUrl . '/ProfileManagement/getProfile/' . $loginSession->userdata('userId')?>">Profile Management</a>
            <a href="<?= $baseUrl . '/LoginController/logout'?>">SignOut</a>
        </div>
    </div>
</head>