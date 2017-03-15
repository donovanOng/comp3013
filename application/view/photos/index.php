<?php require APP . 'view/users/profile_header.php'; ?>

<div class="card">
  <div class="card-block">
    <div class="row mb-3">
      <div class="col-12"><h4><i class="fa fa-picture-o mr-1 text-muted" aria-hidden="true"></i> Photos</h4></div>
    </div>
    <div class="mt-3 mb-3" style="border-top: 1px solid #DDD;"></div>

    <div class="row">
      <?php if (!$photos) { ?>
        <div class="col-12">
          <?php echo user_name($user->userID) ?> does not have any photo.
        </div>
      <?php } else { ?>
        <?php foreach ($photos as $photo) { ?>
          <div class="col-3">
            <a href="<?php echo URL; ?>photo/<?php echo $photo->photoID ?>">
            <div class="card mb-3">
              <img class="card-img-top" src="<?php echo $photo->path ?>" onError="this.src='<?php echo URL; ?>images/missing.jpg'" style="object-fit: cover; height: 200px;">
            </div>
            </a>
          </div>
        <?php } ?>
      <?php } ?>
    </div>
  </div>
</div>
