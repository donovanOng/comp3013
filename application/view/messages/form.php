<h4>Write a message</h4>

<form action="<?php echo URL; ?>message/create" method="POST">
  <input type="text" name="content" value="" required /> 
  <input type="hidden" name="circleID" value="<?= $circleID ?>" />
  <input type="submit" name="submit" value="Submit" />
</form>
