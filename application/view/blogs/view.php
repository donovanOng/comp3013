<div class="p-4">
  <div class="row">
    <div class="col-8">
      <h6>
        <div class="row">
          <div class="col-9 mt-2">
              <span class="text-muted">
                <i class="fa fa-pencil-square-o mr-1 text-muted" aria-hidden="true"></i>
                <a href="<?php echo URL . $blog->userID ?>"><?php echo user_name($blog->userID) ?></a>'s Blog:
              </span>
              <?php echo $blog->name ?>
          </div>
          <?php if($this->current_userID == $blog->userID) { ?>
            <div class="col-3">
              <?php require APP . 'view/blogs/modal_edit_name.php'; ?>
              <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editBlogName">
                Edit Blog Name
              </button>
            </div>
          <?php } ?>
        </div>
      </h6>
      <div class="mt-3 mb-3" style="border-top: 1px solid #DDD;"></div>

      <?php if ($this->current_userID == $blog->userID) {?>
        <?php require APP . 'view/blogs/new_post.php'; ?>
        <div class="mt-3 mb-3" style="border-top: 1px solid #DDD;"></div>
      <?php } ?>

      <?php require APP . 'view/blogs/search.php' ?>

      <?php if (count($blog_posts) > 0) { ?>
        <?php foreach ($blog_posts as $post) { ?>
          <div class="card mb-3">
            <div class="card-block">
              <h6 class="card-title">
                <a href="<?php echo URL . 'post/' . $post->postID ?>"><?php echo $post->title ?></a>
                <br><small class="text-muted"><?php echo $post->CREATED_AT ?></small>
              </h6>
              <p class="card-text"><?php echo nl2br($post->body) ?></p>
            </div>
          </div>
        <?php } ?>
      <?php } ?>
    </div>
  </div>
</div>
