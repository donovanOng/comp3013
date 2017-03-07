<? $privacy = array('Friends', 'Friends of Friends', 'Public'); ?>
<div class="p-4">
  <div class="row align-items-center mb-3">
    <div class="col-6">
      <h4 class="mb-0">Collection <?= $collectionID ?></h4>
      <small class="text-muted">
        Privacy: <?= $privacy[$collection->accessRights] ?>
        <strong><span class="align-top">.</span></strong>
        Created By <a href="<?= URL . $collection->userID ?>">User <?= $collection->userID ?></a>
      </small>
    </div>
    <div class="col-6 text-right">

      <? require APP . 'view/collections/edit.php'; ?>

      <form class="align-self-center" action="<?= URL ?>photo/upload" method="post" enctype="multipart/form-data">
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editSettings">
          Settings
        </button>
        <label class="btn btn-primary mb-0">
            Upload Photo <input type="file" name="uploadFile" onchange="this.form.submit()" id="upload_file" hidden>
        </label>
        <input type="hidden" name="collectionID" value="<?= $collectionID ?>">
      </form>
    </div>
  </div>
  <div class="mt-3 mb-3" style="border-top: 1px solid #DDD;"></div>
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
