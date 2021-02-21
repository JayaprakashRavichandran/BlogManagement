<?php

$blogs = $allBlogs;


require_once APP_VIEW_ROOT . '/style.php';
//require_once APP_VIEW_ROOT . '/dashboardBody.php';
$baseUrl = base_url() . 'CodeIngiter-3.1/index.php';
$imageNotAvailable = APP_VIEW_ROOT . '/notfound.jpg';
$editSvgUrl = base_url() . 'CodeIngiter-3.1/application/views/edit.svg';
$deleteSvgUrl = base_url() . 'CodeIngiter-3.1/application/views/deleteIcon.svg';

require_once  APP_VIEW_ROOT . '/header.php';

?>


<body>

<div class="main-card">
    <?php foreach ($blogs as $eachBlog) { ?>
        <div class="card">
            <img src="<?php echo $imageNotAvailable ?>" alt="Avatar" class="card-img">
            <div class="container">
                <h3><?= $eachBlog->TITLE ?></h3>
                <p><?= $eachBlog->DESCRIPTION ?></p>
                <p><?= $eachBlog->HASH_TAG ?></p>
            </div>
            <?php if (($session->userdata('userId') == $eachBlog->USER_ID) || $session->userdata('userType') == 'ADMIN') { ?>
                <div class="operation-tag">
                    <a href="<?= $baseUrl . '/BlogHandler/getBlogById/' . $eachBlog->BLOG_ID ?>">
                        <img src="<?php echo $editSvgUrl?>"/>
                    </a>
                </div>
                <div class="operation-tag">
                    <a href="<?= $baseUrl . '/BlogHandler/deleteBlog/' . $eachBlog->BLOG_ID ?>">
                        <img src="<?= $deleteSvgUrl ?>"/>
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
    <?php echo $links ?>
</div>
</body>
</html>