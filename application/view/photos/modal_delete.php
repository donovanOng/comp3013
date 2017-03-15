<div class="modal fade" id="deletePhoto">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this photo?
      </div>
      <div class="modal-footer">
        <form action="<?php echo URL; ?>photo/delete_photo" method="POST">
          <input type="hidden" name="photoID" value="<?php echo $photoID ?>" />
          <input class="btn btn-primary" type="submit" name="delete" value="Delete" />
          <input class="btn btn-secondary" type="submit" data-dismiss="modal" value="Cancel" />
        </form>
      </div>
    </div>
  </div>
</div>
