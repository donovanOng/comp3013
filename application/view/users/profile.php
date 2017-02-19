<div class="container">
  <h2><?= $user->first_name ?> <?= $user->last_name ?>'s Profile</h2>
  <li><a href="<?php echo URL . $userID; ?>/blog">Blog</a></li>
  <li><a href="<?php echo URL . $userID; ?>/friend">Friends</a></li>
  <li><a href="<?php echo URL . $userID; ?>/circle">Circles</a></li>
  <li><a href="<?php echo URL . $userID; ?>/collection">Collections</a></li>
  <li><a href="<?php echo URL . $userID; ?>/photo">Photos</a></li>
</div>
