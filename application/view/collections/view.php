<? if ($collection != NULL) { ?>
<? $privacy = array('Friends', 'Friends of Friends', 'Public'); ?>

<div class="row mb-3">
<div class="col-10">
  <h4>Collection <?= $collectionID ?></h4>
  <p class="text-muted"></p>
</div>
<div class="col-2 text-right">
  <? if ($user_upload_rights) { ?>
    <!-- Check if user has upload rights for collection -->
    <a class="btn btn-primary" href="<?= URL; ?>photo/upload?collectionID=<?= $collectionID ?>">Upload Photo</a>
  <? } ?>
</div>
</div>

<div class="mb-3 bg-faded p-3">
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
        <p class="card-text text-muted">
          uploaded by userID = <?= $photo->userID ?>
        </p>
      </div>
    </div>
    </a>
  </div>
<?php } ?>
</div>
<? } ?>

<? } ?>
