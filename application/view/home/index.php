<div class="p-4">
  <div class="row">
    <div class="col-8">
        <p class="text-muted mt-2 mb-2"><small>RECENT POSTS</small></p>
        <?php if (count($posts) > 0) { ?>
          <?php foreach ($posts as $post) { ?>
            <div class="card mb-3">
              <div class="card-block">
                <h6 class="card-title">
                  <a href="<?= URL . 'post/' . $post->postID ?>"><?= $post->title ?></a>
                  <br>
                  <small class="text-muted"><a href="<?= URL . 'post/' . $post->userID ?>"><?= user_name($post->userID) ?></a>
                  <strong><span class="align-top">.</span></strong> <?= $post->CREATED_AT ?></small>
                </h6>
                <p class="card-text"><?= $post->body ?></p>
              </div>
            </div>
          <?php } ?>
      <?php } ?>
    </div>
    <div class="col-4">
      <div class="bg-faded p-2">
        <p class="text-muted mb-2"><small>SUGGESTED FRIENDS</small></p>
      </div>
    </div>
  </div>
</div>
