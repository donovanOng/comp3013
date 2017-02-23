<div class="container">
  <h2><?= $user->first_name ?> <?= $user->last_name ?>'s Profile</h2>
  <? if($isUser) { ?>
        <h3> This is my profile </h3>
  <? } else {?>
    <? if($isFriend != NULL) { ?>
      <? if($isFriend->status == 0) { ?>
        <h3> We are friends! </h3>
      <? } else if($isFriend->status == 1) { ?>
        <h3> Pending friend request! </h3>
      <? } ?>
    <? } else {?>
          <h3> Not friend </h3>
          <a href="<?= URL; ?>user/add_friend?userID=<?= $userID; ?>" >Add Friend</a></p>
      <? } ?>
  <? } ?>



  <li><a href="<?php echo URL . $userID; ?>/blog">Blog</a></li>
  <li><a href="<?php echo URL . $userID; ?>/friend">Friends</a></li>
  <li><a href="<?php echo URL . $userID; ?>/circle">Circles</a></li>
  <li><a href="<?php echo URL . $userID; ?>/collection">Collections</a></li>
  <li><a href="<?php echo URL . $userID; ?>/photo">Photos</a></li>
</div>
