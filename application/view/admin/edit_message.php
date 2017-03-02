<div class="modal fade" id="editMessage<?= $message->messageID ?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Message <?= $message->messageID ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-right">
        <form action="<?= URL; ?>admin/update_message" method="POST">
          <div class="form-group">
            <input class="form-control" type="text" name="content" value="<?= $message->content ?>" placeholder="Write some message..." required />
          </div>
          <input type="hidden" name="messageID" value="<?= $message->messageID ?>" />
          <input class="btn btn-primary w-25" type="submit" name="update" value="Update" />
        </form>
      </div>
    </div>
  </div>
</div>
