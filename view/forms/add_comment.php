<div class="modal fade" id="addFormComment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <form id="form_add_comment">
                    <div class="mb-3">
                        <label for="recipient-user" class="col-form-label">Name:</label>
                        <input name="user" type="text" class="form-control" id="recipient-user" required>
                    </div>
                    <div class="mb-3">
                        <label for="message-texting" class="col-form-label">Text:</label>
                        <textarea name="comment" class="form-control" id="message-texting" required></textarea>
                    </div>
                    <div class="mb-3">
                        <input name="postId" type="hidden" class="form-control" id="hidden_id" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary add_comment" id="add_comment">Add Comment</button>
            </div>
        </div>
    </div>
</div>