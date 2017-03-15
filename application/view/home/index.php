<div class="p-4">
  <div class="row">
    <div class="col-8">
        <p class="text-muted mt-2 mb-2"><small>RECENT POSTS</small></p>
        <?php if (count($posts) > 0) { ?>
          <?php foreach ($posts as $post) { ?>
            <div class="card mb-3">
              <div class="card-block">
                <h6 class="card-title mb-0">
                  <a href="<?php echo URL . 'post/' . $post->postID ?>"><?php echo $post->title ?></a>
                </h6>
                <div class="mb-3">
                  <span class="text-muted small">
                    <a href="<?php echo URL . $post->userID ?>"><?php echo user_name($post->userID) ?></a> /
                    <a href="<?php echo URL . 'blog/' . $post->blogID ?>"><?php echo $post->name ?></a>
                    <strong><span class="align-top">.</span></strong>
                    <?php echo $post->CREATED_AT ?>
                  </span>
                </div>
                <p class="card-text"><?php echo nl2br($post->body) ?></p>
              </div>
            </div>
          <?php } ?>
      <?php } else { ?>
        <div class="bg-faded p-3">
          <i class="fa fa-question-circle-o mr-2" aria-hidden="true"></i>No recent post to show.
        </div>
      <?php } ?>
    </div>
    <div class="col-4">
      <?php require APP . 'view/home/friend_suggestion.php'; ?>
    </div>
  </div>
</div>
