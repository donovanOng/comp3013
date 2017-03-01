<? require APP . 'view/users/profile_header.php'; ?>

<? if($isUser) { ?>
      <h3> This is my profile </h3>
<? } else {?>
  <? if($isFriend != NULL) { ?>

      <? if($isFriend->status == 0) { ?>
        <h3> We are friends! </h3>
      <? } else if($isFriend->status == 1) { ?>
            <? if($initiator->userID == $this->current_userID) { ?>
                <h3>Waiting for <?= $user->first_name . ' ' .  $user->last_name ?> to accept </h3>
            <? } else { ?>
                <a href="<?= URL; ?>user/accept_friendships?userID=<?= $userID; ?>" >Accept Friend Request</a></p>
                <a href="<?= URL; ?>user/reject_friendships?userID=<?= $userID; ?>" >Reject Friend Request</a></p>
            <? } ?>
      <? } ?>

  <? } else {?>
        <h3> Not friend </h3>
        <a href="<?= URL; ?>user/add_friend?userID=<?= $userID; ?>" >Add Friend</a></p>
    <? } ?>
<? } ?>
