<div class="row bg-faded align-items-center p-3 mb-4 ml-0 mr-0">
  <div class="col-4">
    <h4 class="mb-0"><a href="<?= URL . $user->userID ?>"><?= $user->first_name ?> <?= $user->last_name ?></a></h4>
  </div>
  <div class="col-8">
    <ul class="nav nav-fill">
      <li class="nav-item">
        <a class="nav-link" href="<?= URL . $user->userID ?>/friend">Friends</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= URL . $user->userID ?>/circle">Circles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= URL . $user->userID ?>/collection">Collections</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= URL . $user->userID ?>/photo">Photos</a>
      </li>

      <? if ($this->current_userID != $user->userID) { ?>
      <li class="nav-item">
      <? if($is_friend != NULL) { ?>
        <? if($is_friend->status == 0) { ?>
          <button class="btn btn-secondary">Friends</button>
        <? } else if($is_friend->status == 1) { ?>
          <? if($initiator->userID == $this->current_userID) { ?>
              <button class="btn btn-secondary">Friend Request sent</button>
          <? } else { ?>
              <a class="btn btn-primary" href="<?= URL ?>user/accept_friendships?userID=<?= $user->userID ?>">Accept Friend Request</a>
              <a class="btn btn-secondary" href="<?= URL ?>user/reject_friendships?userID=<?= $user->userID ?>">Reject</a>
          <? } ?>
        <? } ?>
      <? } else {?>
          <a class="btn btn-primary" href="<?= URL ?>user/add_friend?userID=<?= $user->userID ?>">Add Friend</a>
      <? } ?>
      </li>
      <? } else { ?>
        <li class="nav-item">
          <? require APP . 'view/users/form_edit_settings.php'; ?>
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editSettings">
            Settings
          </button>
        </li>
      <? } ?>

    </ul>
  </div>
</div>
