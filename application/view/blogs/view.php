<div class="p-4">
  <div class="row">
    <div class="col-8">
  <h6>
    <span class="text-muted">
      <i class="fa fa-pencil-square-o mr-1 text-muted" aria-hidden="true"></i>
      <a href="<?= URL . $blog->userID ?>"><?= user_name($blog->userID) ?></a>'s Blog:
    </span>
      <?= $blog->name ?>
  </h6>
  <div class="mt-3 mb-3" style="border-top: 1px solid #DDD;"></div>
  <? if ($this->current_userID == $blog->userID) {?>
    <? require APP . 'view/blogs/new_post.php'; ?>
  <? } ?>
  <? require APP . 'view/blogs/search.php' ?>
  <? if (isset($_GET['q']) && count($blog_posts) == 0) { ?>
    <p class="mb-3 p-3 bg-warning rounded">Opps! No result for '<?= $_GET['q'] ?>'.</p>
  <? } ?>
  <? if (count($blog_posts) > 0) { ?>
    <?php foreach ($blog_posts as $post) { ?>
      <div class="card mb-3">
        <div class="card-block">
          <h6 class="card-title">
            <a href="<?= URL . 'post/' . $post->postID ?>"><?= $post->title ?></a>
            <br><small class="text-muted"><?= $post->CREATED_AT ?></small>
          </h6>
          <p class="card-text"><?= nl2br($post->body) ?></p>
        </div>
      </div>
    <?php } ?>
  <? } ?>
  </div>
</div>
