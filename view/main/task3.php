<?php
require_once 'view/helper/navbar.php';
?>


    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto mt-4 mb-4"><h1>COUNTER</h1></div>
        </div>
        <div class="row mb-5">
            <div class="col ">
                <h4 class="count_posts">Negative Posts</h4>
                <p class="count_posts"><?= $countNegativePosts ?></p>
            </div>
            <div class="col">
                <h4 class="count_posts">All Posts</h4>
                <p class="count_posts"><?= $countPosts ?></p>
            </div>
            <div class="col">
                <h4 class="count_posts">Positive Posts</h4>
                <p class="count_posts"><?= $countPositivePosts ?></p>
            </div>
        </div>
        <div class="row justify-content-md-center mb-5">
            <div class="col-md-auto"><h1>POSTS</h1></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col align-self-start"></div>
            <div class="col align-self-center"></div>
            <div class="col align-self-end"><p class="content me-2"><a class="pt-2 pb-2 btn btn-primary post_button" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal">Add Post</a></p></div>
        </div>
    </div>

<?php
require_once 'view/forms/add_post.php';
require_once 'view/forms/add_comment.php';
require_once 'view/forms/add_comment.php';
require_once 'view/helper/get_posts.php';
?>
