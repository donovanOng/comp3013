<div class="row justify-content-center pt-4 pb-6">
  <div class="col-6">
  <div class="card">
    <div class="card-block">

      <h4 class="card-title mb-0"><?= $post->title ?></h4>

      <div class="mb-3">
        <span class="text-muted small">
          <a href="<?= URL . $post->userID ?>"><?= user_name($post->userID) ?></a> /
          <a href="<?= URL . 'blog/' . $post->blogID ?>"><?= $post->name ?></a>
          <strong><span class="align-top">.</span></strong>
          <?= $post->CREATED_AT ?>
        </span>
      </div>

      <p class="card-text"><?= $post->body ?></p>

      <? if ($post->userID == $this->current_userID) { ?>
        <div class="bg-faded p-2">
            <a href="#" class="card-link">Edit</a>
            <a class="card-link text-danger" href="<?= URL . "post/delete?blogID="  . $post->blogID  . '&postID=' . $post->postID ?>">
              Delete
            </a>
        </div>
      <? } ?>
      
    </div>
  </div>
  </div>
</div>
