<form action="<?php echo URL; ?>message/create" method="POST">
  <input type="text" name="content" placeholder="Write a message" value="" required />
  <input type="hidden" name="circleID" value="<?= $circleID ?>" />
  <input type="submit" name="submit" value="Send" />
</form>
