<div class="container">
  <? if ($post != NULL) { ?>
    <h3><?= $post->title ?> belong to blogID <?= $post->blogID ?></h3>
    <p>
      <?= $post->body ?>
    </p>
    <a href="<?= URL . "post/delete?blogID="  . $post->blogID  . '&postID=' . $post->postID ?>">
      Delete Post
    </a>
  <? } else { ?>
      <p>Post with id = <?= $postID ?> doesn't exist!</p>
  <? } ?>
</div>
