<div class="p-4">
  <div class="row">
    <div class="col-8">
      <img style="width:100%" src="<?= URL . $photo->path ?>" onError="this.src ='<?= URL; ?>images/missing.jpg'"  />
    </div>
    <div class="col-4">
      <p class="p-2" style="min-height:150px;">
         <a href="<?= URL . $photo->userID ?>">User <?= $photo->userID ?></a>
        <br>
        <small class="text-muted">
          Under <a href="<?= URL; ?>collection/<?= $photo->collectionID ?>">Collection <?= $photo->collectionID ?></a>
           . <?= $photo->CREATED_AT ?>
        </small>
      </p>
      <div class="small m-2 p-2" style="border-top: 1px solid #DDD;">
        <a class="mr-2" href="<?= URL; ?>photo/set_photo_annotation?photoID=<?= $photoID; ?>&userID=<?= $this->current_userID; ?>"><i class="fa fa-heart mr-1" aria-hidden="true"></i>Love</a>
        <a class="mr-2" href="#"><i class="fa fa-comment mr-1" aria-hidden="true"></i>Comment</a>
        <a href="#"><i class="fa fa-share mr-1" aria-hidden="true"></i>Share</a>
      </div>
      <div class="bg-faded pr-2 pl-2 pb-2" style="border-top: 1px solid #DDD;">
        <div class="p-2 mb-2 small" style="border-bottom: 1px solid #DDD;">
          <? if (count($photo_annotations) > 0) { ?>
            <i class="fa fa-heart mr-1" aria-hidden="true"></i> <a href="#">User <?= $photo_annotations[0]->userID?> and <?=(count($photo_annotations) -1)?> others</a>
          <? } ?>
        </div>
        <? if (count($photo_comments) > 0) { ?>
          <div class="list-group mb-2">
          <?php foreach ($photo_comments as $comment) { ?>
            <div class="list-group-item list-group-item-action flex-column align-items-start">
              <p class="mb-1">
                <a href="<?= URL . $comment->userID ?>">User <?= $comment->userID ?></a> <?= $comment->content ?>
              </p>
              <small class="text-muted"><?= $comment->CREATED_AT ?></small>
            </div>
          <?php } ?>
          </div>
        <? } ?>
        <? require APP . 'view/comments/form.php'; ?>
      </div>
    </div>
  </div>
</div>
