<div class="modal fade" id="editCollectionName">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Collection Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo URL; ?>collection/update_collection_name" method="POST">
        <div class="form-group row">
          <label class="col-sm-2 mt-2">Name</label>
          <div class="form-group col-sm-10">
            <input class="form-control" type="text" name="name" value="<?php echo $collection->name ?>" placeholder="Collection name" required />
          </div>
        </div>
        <input type="hidden" name="collectionID" value="<?php echo $collection->collectionID ?>" />
        <input class="btn btn-primary" type="submit" name="update" value="Update" />
      </form>
      </div>
    </div>
  </div>
</div>
