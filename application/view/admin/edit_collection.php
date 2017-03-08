<div class="modal fade" id="editCollection<?= $collection->collectionID ?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Collection <?= $collection->collectionID ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-right">
        <form action="<?= URL; ?>admin/update_collection" method="POST">
          <div class="form-group">
            <input class="form-control" type="text" name="accessRights" value="<?= $collection->accessRights ?>" placeholder="Access Rights" required />
          </div>
          <input type="hidden" name="collectionID" value="<?= $collection->collectionID ?>" />
          <input class="btn btn-primary w-25" type="submit" name="update" value="Update" />
        </form>
      </div>
    </div>
  </div>
</div>
