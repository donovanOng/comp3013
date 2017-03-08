<div class="modal fade" id="editPost<?= $post->postID ?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Post <?= $post->postID ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-right">
        <form action="<?= URL; ?>admin/update_post" method="POST">
          <div class="form-group">
            <input class="form-control" type="text" name="title" value="<?= $post->title ?>" placeholder="Circle Name" required />
          </div>
          <textarea class="form-control mb-2" type="text" name="body" value="" rows="4" cols="50" required ><?= $post->body ?></textarea>
          <input type="hidden" name="postID" value="<?= $post->postID ?>" />
          <input class="btn btn-primary w-25" type="submit" name="update" value="Update" />
        </form>
      </div>
    </div>
  </div>
</div>
