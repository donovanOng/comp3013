<div class="modal fade" id="edit<?= $user->userID ?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit User <?= $user->userID ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-right">
        <form action="<?= URL; ?>admin/update_user" method="POST">
          <div class="form-group">
            <input class="form-control" type="text" name="first_name" value="<?= $user->first_name ?>" placeholder="First Name" required />
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="last_name" value="<?= $user->last_name ?>" placeholder="Last Name" required />
          </div>
          <div class="form-group">
            <input class="form-control" type="email" name="email" value="<?= $user->email ?>" placeholder="Email" required />
          </div>
          <input type="hidden" name="userID" value="<?= $user->userID ?>" />
          <input class="btn btn-primary w-25" type="submit" name="update" value="Update" />
        </form>
      </div>
    </div>
  </div>
</div>
