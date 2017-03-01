<div class="p-4">
  <div class="row align-items-center mb-3">
    <div class="col-6">
      <h4 class="mb-0">Collection <?= $collectionID ?></h4>
      <small class="text-muted">Created By <a href="<?= URL . $collection->userID ?>">User <?= $collection->userID ?></a></small>
    </div>
    <div class="col-6 text-right">
      <? if ($user_upload_rights) { ?>
        <!-- Check if user has upload rights for collection -->
        <a class="btn btn-primary" href="<?= URL; ?>photo/upload?collectionID=<?= $collectionID ?>">Upload Photo</a>
      <? } ?>
    </div>
  </div>
  <div class="mt-3 mb-3" style="border-top: 1px solid #DDD;"></div>
  <div class="mb-3 bg-faded p-3">
    <? $privacy = array('Friends', 'Friends of Friends', 'Public'); ?>
    <p>Upload: <?= $privacy[$collection->uploadRights] ?>,  View: <?= $privacy[$collection->viewRights] ?></p>
    <? require APP . 'view/collections/edit.php'; ?>
  </div>
  <? if (count($collection_photos) > 0) { ?>
    <div class="row">
    <?php foreach ($collection_photos as $photo) { ?>
      <div class="col-3">
        <a href="<?= URL; ?>photo/<?= $photo->photoID ?>">
        <div class="card mt-1 mb-1">
          <img class="card-img-top" src="<?= URL; ?><?= $photo->path ?>" onError="this.src ='<?= URL; ?>images/missing.jpg'" style="object-fit: cover; height: 200px;">
          <div class="card-block">
            <p class="card-text text-muted small text-right">
              uploaded by User <?= $photo->userID ?>
            </p>
          </div>
        </div>
        </a>
      </div>
    <?php } ?>
    </div>
  <? } ?>
</div>
