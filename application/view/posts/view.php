<div class="row justify-content-center pt-4 pb-6">
  <div class="col-6">
  <div class="card">
    <div class="card-block">
      <h4 class="card-title"><?= $post->title ?></h4>
      <h6 class="card-subtitle mb-2 text-muted"><?= $post->CREATED_AT ?></h6>
      <p class="card-text"><?= $post->body ?></p>
      <a class="card-link" href="<?= URL . "post/delete?blogID="  . $post->blogID  . '&postID=' . $post->postID ?>">
        Delete Post
      </a>
      <a href="#" class="card-link">Edit</a>
    </div>
  </div>
  </div>
</div>
