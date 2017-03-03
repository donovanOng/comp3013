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
        <form class="text-left" action="<?= URL ?>user/update_settings" method="POST">
          <p class="mb-2">Who can see my stuff?</p>
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="privacy" value=0 <? if ($user->privacy == 0) {?> checked <? } ?>>
              Friends of Friends
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="privacy" value=1 <? if ($user->privacy == 1) {?> checked <? } ?>>
              Public
            </label>
          </div>
          <input type="hidden" name="userID" value="<?= $user->userID ?>" />
          <input class="mt-2 btn btn-primary" type="submit" name="update" value="Update" />
        </form>
      </div>
    </div>
  </div>
</div>
