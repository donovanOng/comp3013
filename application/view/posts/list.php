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
