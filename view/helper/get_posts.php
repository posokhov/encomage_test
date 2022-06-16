<div class="container">
    <?php

    if (!empty($posts)) {
        foreach ($posts as $name => $item) {
            ?>

            <div class="mt-4 content_post" id="post-<?= $item['postId'] ?>">
                <div class="row align-items-start mb-4">
                    <div class="col ms-2 mt-2"><?= $item['user'] ?></div>
                    <div class="col"></div>

                    <div class="col content mt-2 me-2" id="comment-<?= $item['postId'] ?>">
                        <a id="<?= $item['postId'] ?>" class="btn btn-primary"
                           data-bs-toggle="modal" data-bs-target="#addFormComment"
                           data-bs-whatever="<?php echo $item['postId']; ?>">Add Comment</a>
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col ms-2"><?= $item['text'] ?></div>
                </div>
                <div class="row align-items-end">
                    <div class="col ms-2">
                        <p>
                            <?php
                            require 'view/helper/rating.php';
                            ?></p>
                    </div>
                    <div class="col"></div>
                    <div class="col me-2"><p class="content"><?= $item['date'] ?></p></div>
                </div>
            </div>

            <?php
            foreach ($comments as $comment) {
                if ($item['postId'] == $comment['postId']) {
                    ?>
                    <div class="container">
                        <div class="row ms-5 mt-4">
                            <div class=" get_comment">
                                <div class="col"><p class="ms-2 mt-2"><?= $comment['user'] ?></p></div>
                                <div class="col"><p class="ms-2"><?= $comment['text'] ?></p></div>
                                <div class="col content"><p class="ms-2 me-2 content"><?= $comment['date'] ?></p></div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            }
        }
    }
    ?>
</div>
<script>
    $(document).ready(function () {
        var addFormComment = document.getElementById('addFormComment')
        addFormComment.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var postId = button.getAttribute('data-bs-whatever')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            // var modalTitle = addFormCommentl.querySelector('.modal-title')
            var modalBodyInput = addFormComment.querySelector('#hidden_id')

            // modalTitle.textContent = 'New message to ' + recipient
            modalBodyInput.value = postId
        })
        $(".star").click(
            function (e) {
                let id = $(this).data("id");
                let star = $(this).data("star");
                $.ajax({
                    url: 'requests/saveRating',
                    data: {"id": id, "star": star},
                    // contentType: "application/json",
                    // dataType: "json",
                    method: "POST",
                    success: function (data) {
                        console.log(data);
                    },
                    error: function (err) {
                        console.log(err);
                    }
                });
            }
        )
    });
</script>
