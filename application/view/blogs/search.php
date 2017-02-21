<div id="container">

  <form action="<?php echo URL; ?>blog/search" method="GET">
    <input type="text" name="query" value="" placeholder="Search" required />
    <input type="submit" value="Search" />
  </form>


  <? if ($query != NULL) { ?>
     <? require APP . 'view/blogs/result.php'; ?>
  <? } ?>

</div>
