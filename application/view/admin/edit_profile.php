<div class="modal fade" id="editProfile<?= $profile->userID ?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Profile <?= $profile->userID ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= URL ?>admin/update_profile" method="POST">
        <div class="form-group">
          <textarea class="form-control" type="text" name="about" rows="4" cols="40" placeholder="Tell us more about yourself!" required><?= $profile->about ?></textarea>
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="gender" value="<?= $profile->gender ?>" placeholder="Gender" required />
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="birthdate" value="<?= $profile->birthdate ?>" placeholder="Birth date YYYY-MM-DD" required />
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="current_city" value="<?= $profile->current_city ?>" placeholder="Current City" required />
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="home_city" value="<?= $profile->home_city ?>" placeholder="Home City" required />
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="address" value="<?= $profile->address ?>" placeholder="Address" required />
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="languages" value="<?= $profile->languages ?>" placeholder="Languages" required />
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="workplace" value="<?= $profile->workplace ?>" placeholder="Workplace" required />
        </div>
        <input type="hidden" name="userID" value="<?= $profile->userID ?>" />
        <input class="btn btn-primary" type="submit" name="update" value="Update" />
      </form>
      </div>
    </div>
  </div>
</div>
