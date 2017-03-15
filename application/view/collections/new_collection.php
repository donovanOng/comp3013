<div class="modal fade" id="newCollection">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">New Collection</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo URL; ?>collection/create" method="POST">
        <div class="form-group row">
          <label class="col-sm-2 mt-2">Name</label>
          <div class="form-group col-sm-10">
            <input class="form-control" type="text" name="name" value="" placeholder="Collection name" required />
          </div>
        </div>
        <input type="hidden" name="userID" value="<?php echo $this->current_userID ?>" />
        <input class="btn btn-primary" type="submit" name="submit" value="Create" />
      </form>
      </div>
    </div>
  </div>
</div>
