<? if ($blog != NULL) { ?>

<div class="row align-items-center mb-3">
  <div class="col-10">
    <h4><?= $blog->name ?></h4>
  </div>
  <div class="col-2 text-right">
    <? if ($this->current_userID == $blog->userID ) { ?>
      <a class="btn btn-primary" href="<?= URL . 'post/new?blogID=' . $blog->blogID ?>">New Post</a>
    <? } ?>
  </div>
</div>
<? if (count($blog_posts) > 0) { ?>
  <?php foreach ($blog_posts as $post) { ?>
    <div class="card mb-3">
      <div class="card-block">
        <h6 class="card-title">
          <a href="<?= URL . 'post/' . $post->postID ?>"><?= $post->title ?></a>
          <br><small class="text-muted"><?= $post->body ?></small>
        </h6>
        <p class="card-text"><?= $post->body ?></p>
      </div>
    </div>
  <?php } ?>
<? } ?>

<? } ?>
