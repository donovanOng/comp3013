<?php if ($this->current_userID != $user->userID) { ?>
  <li class="nav-item">
    <?php if($is_friend != NULL) { ?>
      <?php if($is_friend->status == 0) { ?>
        <button class="btn btn-secondary">Friends</button>
      <?php } else if($is_friend->status == 1) { ?>
        <?php if($initiator->userID == $this->current_userID) { ?>
            <button class="btn btn-secondary">Friend Request sent</button>
        <?php } else { ?>
            <a class="btn btn-primary" href="<?php echo URL ?>user/accept_friendship?userID=<?php echo $user->userID ?>">Accept Friend Request</a>
            <a class="btn btn-secondary" href="<?php echo URL ?>user/reject_friendship?userID=<?php echo $user->userID ?>">Reject</a>
        <?php } ?>
      <?php } ?>
    <?php } else { ?>
        <a class="btn btn-primary" href="<?php echo URL ?>user/add_friend?userID=<?php echo $user->userID ?>">Add Friend</a>
    <?php } ?>
  </li>
<?php } else { ?>
  <li class="nav-item">
    <?php require APP . 'view/users/modal_edit_settings.php'; ?>
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editSettings">
      Settings
    </button>
  </li>
<?php } ?>
