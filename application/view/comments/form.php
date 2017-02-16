<h4>Leave a comment</h4>

<form action="<?php echo URL; ?>comment/create" method="POST">
  <input type="text" name="content" value="" required /> 
  <input type="hidden" name="photoID" value="<?= $photoID ?>" />
  <input type="submit" name="submit" value="Submit" />
</form>
