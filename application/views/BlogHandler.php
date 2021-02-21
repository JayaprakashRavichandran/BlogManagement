<?php
require_once APP_VIEW_ROOT . '/style.php';
$baseUrl = base_url() . 'CodeIngiter-3.1/index.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>

</head>

<body>
<div class="navbarContainer">
    <div class="topnav">
        <a href="<?= $baseUrl . '/Dashboard'?>">Dashboard</a>
        <a class="active" href="<?=$baseUrl . '/BlogHandler'?>">Blog</a>
        <a href="<?= $baseUrl . '/ProfileManagement'?>">Profile Management</a>
        <a href="<?= $baseUrl . '/LoginController'?>">SignOut</a>
    </div>
</div>

<div class="blog-container">
    <form method="post" action="<?= base_url() . 'CodeIngiter-3.1/index.php/blogHandler/create'?>" enctype="multipart/form-data">
        <h2>Create Blog</h2>
        <div>
            <label for="title"><h3>Title</h3></label>
            <input type="text" name="title" class="name-input">
        </div>
        <div>
            <label for="description"><h3>Description</h3></label>
            <textarea name="description" rows="6" cols="100"></textarea>
        </div>
        <div class="upload-container">
            <label for="uploadImage"><h3>Upload Image</h3></label>
            <input type="file" name="blogImage" class="uploading-img">
        </div>
        <input type="submit" value="submit" name="submit" style="position: absolute;left: 50%;margin-top: 40px">
    </form>
</div>
</body>
</html>