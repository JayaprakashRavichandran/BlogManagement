<?php
require_once APP_VIEW_ROOT . '/style.php';
$baseUrl = base_url() . 'CodeIngiter-3.1/index.php';
$imageNotAvailable = base_url() . '/CodeIngiter-3.1/application/views/notfound.jpg';
$blogObj = $blogObject;

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        .blog-container{
            background-color: aliceblue;
            padding: 45px 40px 90px;
            border-radius: 10px;
        }
        h3{
            margin-bottom: 7px;
        }
        .name-input{
            width: 55%;
            height: 32px;
        }
        .upload-container{
            display: flex;
        }
        .uploading-img{
            margin: 20px 0 0 10px;
        }
    </style>
</head>

<body>
<div class="topnav">
    <a href="<?= $baseUrl . '/Dashboard'?>">Dashboard</a>
    <a class="active" href="<?= $baseUrl . '/BlogHandler'?>">Blog</a>
    <a href="<?= $baseUrl . '/ProfileManagement'?>">Profile Management</a>
    <a href="<?= $baseUrl . '/LoginController'?>">SignOut</a>
</div>
<div class="blog-container">
    <form method="post" action="<?= base_url() . 'CodeIngiter-3.1/index.php/blogHandler/updateBlog/' . $blogObj->BLOG_ID ?>" enctype="multipart/form-data">
        <h2>Update Blog</h2>
        <div>
            <label for="title"><h3>Title</h3></label>
            <input type="text" name="title" class="name-input" value="<?= $blogObj->TITLE ?>">
        </div>
        <div>
            <label for="description"><h3>Description</h3></label>
            <textarea name="description" rows="6" cols="100"><?= $blogObj->DESCRIPTION ?></textarea>
        </div>
        <div class="upload-container">
            <label for="BlogImage"><h3>BlogImage</h3></label>
            <img src="<?= $imageNotAvailable ?>">
        </div>
        <!-- HASH_TAG -->
        <input type="submit" value="submit" name="submit">
    </form>
</div>
</body>
</html>