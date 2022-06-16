<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form_add_post">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input name="user" type="text" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-label">
                        <label for="message-text" class="col-form-label">Text:</label>
                        <textarea name="text" type="text" class="form-control" id="message-text" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" id="add_post">Add Post</button>
                </form>
            </div>
        </div>
    </div>
</div>