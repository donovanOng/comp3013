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
        <div class="bg-faded p-3 text-right mb-3">
          <h6 class="text-left">Write Post</h6>
          <div class="mt-2 mb-2" style="border-bottom: 1px solid #DDD;"></div>
          <form action="<?php echo URL; ?>post/new_post" method="POST">
            <input class="form-control mb-2" type="text" name="title" value="" placeholder="Title" required />
            <textarea class="form-control mb-2" type="text" name="body" value="" rows="4" cols="50" required ></textarea>
            <input type="hidden" name="blogID" value="<?php echo $blog->blogID ?>" />
            <input class="btn btn-primary" type="submit" name="submit" value="Post" />
          </form>
        </div>
        <div class="mt-3 mb-3" style="border-top: 1px solid #DDD;"></div>
      <?php } ?>
      <?php require APP . 'view/blogs/search.php' ?>
      <?php require APP . 'view/posts/list.php' ?>
    </div>
  </div>
</div>
