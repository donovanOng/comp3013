<div class="container">
<h2>Home</h2>
<? if ($this->current_user != null) { ?>

  <form action="<?php echo URL; ?>user/search" method="GET">
    <input type="text" name="query" value="" placeholder="Search" required />
    <input type="submit" value="Search" />
  </form>

  <p>Hello <?= $this->current_user->first_name ?>!</p>
  <li><a href="<?php echo URL . $this->current_userID ?>">Profile</a></li>
  <li><a href="<?php echo URL . $this->current_userID ?>/blog">Blog</a></li>
  <li><a href="<?php echo URL . $this->current_userID ?>/friend">Friends</a></li>
  <li><a href="<?php echo URL . $this->current_userID ?>/circle">Circles</a></li>
  <li><a href="<?php echo URL . $this->current_userID ?>/collection">Collections</a></li>
  <li><a href="<?php echo URL . $this->current_userID ?>/photo">Photos</a></li>
<? } ?>
</div>
