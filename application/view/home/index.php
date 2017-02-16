<div class="container">
<h2>Home</h2>
<? if ($current_user != null) { ?>
  <p>Hello <?= $current_user->first_name ?>!</p>
  <li><a href="<?php echo URL; ?>collection">Collections</a></li>
  <li><a href="<?php echo URL; ?>photo">Photos</a></li>
<? } ?>
</div>
