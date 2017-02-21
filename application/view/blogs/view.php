<div class="container">
<? if ($blog != NULL) { ?>
  <h2>
    <?= $blog->name ?> by userID = <?= $blog->userID ?>
    <? if ($this->current_userID == $blog->userID ) { ?> (me)<? } ?>
  </h2>

  <? if ($this->current_userID == $blog->userID ) { ?>
    <a href="<?= URL . 'post/new?blogID=' . $blog->blogID ?>">New Post</a>
  <? } ?>

  <p>Number of posts: <?= count($blog_posts) ?></p>
  <? if (count($blog_posts) > 0) { ?>
    <?php foreach ($blog_posts as $post) { ?>
      <li>
          <a href="<?= URL; ?>post/<?= $post->postID ?>">
            <?= $post->title ?>
          </a>
      </li>
    <?php } ?>
  <? } ?>

<? } else { ?>
    <p>Blog <?= $blogID ?> doesn't exist!</p>
<? } ?>
</div>
