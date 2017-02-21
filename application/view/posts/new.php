<div id="container">
  <h4>New Blog Post for blogID = <?= $blogID ?></h4>

  <form action="<?php echo URL; ?>post/new" method="POST">
    <input type="text" name="title" value="" placeholder="Title" required /><br>
    <textarea type="text" name="body" value="" rows="4" cols="50" required ></textarea><br>
    <input type="hidden" name="blogID" value="<?= $blogID ?>" />
    <input type="submit" name="submit" value="Submit" />
  </form>
</div>
