<div class="modal fade" id="editSettings">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Settings</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo URL; ?>user/update_settings" method="POST">
        <div class="form-group" align="left">
          <label>Allow who to view profile?</label>
          <br>
          <input type="radio" name="profilePrivacy" value=0 <? if ($user->privacy == 0) {?> checked <? } ?>>Friends of friends
          <br>
          <input type="radio" name="profilePrivacy" value=1 <? if ($user->privacy == 1) {?> checked <? } ?>> Public
          <br>
        </div>
        
        <input type="hidden" name="userID" value="<?= $userID ?>" />
        <input class="btn btn-primary" type="submit" name="submitSettings" value="Update" />
      </form>
      </div>
    </div>
  </div>
</div>
