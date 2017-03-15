<?php if (count($photo_comments) > 0) { ?>
  <div class="list-group mb-2">
  <?php foreach ($photo_comments as $comment) { ?>
    <div class="list-group-item list-group-item-action flex-column align-items-start">
      <p class="mb-1">
        <a href="<?php echo URL . $comment->userID ?>"><?php echo user_name($comment->userID) ?></a> <?php echo $comment->content ?>
      </p>
      <small class="text-muted"><?php echo $comment->CREATED_AT ?></small>
    </div>
  <?php } ?>
  </div>
<?php } ?>
