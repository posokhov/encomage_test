<script>
    $(document).ready(function () {
        $("#add_post").click(
            function (e) {
                e.preventDefault();
                let addform = $("#form_add_post").serialize();
                $.ajax({
                    url: 'task3/savepost',
                    data: addform,
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
        $("#add_comment").click(
            function (e) {
                e.preventDefault();
                let addcomment = $("#form_add_comment").serialize();
                let user = $("#recipient-user").val();
                let text = $("#message-texting").val();
                let postId = $("#hidden_id").val();


                $.ajax({
                    url: 'task3/savecomment',
                    // data: addcomment,
                    data: {"user": user, "text": text, "postId": postId},
                    method: "POST",
                    // success: function (data) {
                    //     console.log(data);
                    // },
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

</body>
</html>