<div class="container">
  <? if ($post != NULL) { ?>
    <h3><?= $post->title ?> belong to blogID <?= $post->blogID ?></h3>
    <p>
      <?= $post->body ?>
    </p>
  <? } else { ?>
      <p>Post with id = <?= $postID ?> doesn't exist!</p>
  <? } ?>
</div>
