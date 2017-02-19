<div class="container">
<? if ($collection != NULL) { ?>
  <h2>
    Collection <?= $collectionID ?> by userID = <?= $collection->userID ?>
    <? if ($this->current_userID == $collection->userID ) { ?> (me)<? } ?>
  </h2>

  <? $privacy = array('Friends', 'Friends of Friends', 'Public'); ?>
  <p>Upload: <?= $privacy[$collection->uploadRights] ?>,  View: <?= $privacy[$collection->viewRights] ?></p>
  <? require APP . 'view/collections/edit.php'; ?>

  <? if ($user_upload_rights) { ?>
    <!-- Check if user has upload rights for collection -->
    <p><a href="<?= URL; ?>photo/upload?collectionID=<?= $collectionID ?>">Upload Photo</a></p>
  <? } ?>

  <p>Number of photos: <?= count($collection_photos) ?></p>
  <? if (count($collection_photos) > 0) { ?>
    <?php foreach ($collection_photos as $photo) { ?>
      <li>
          <a href="<?= URL; ?>photo/<?= $photo->photoID ?>">
            <?= $photo->path ?>
          </a> uploaded by userID = <?= $photo->userID ?>
      </li>
    <?php } ?>
  <? } ?>

<? } else { ?>
    <p>Collection <?= $collectionID ?> doesn't exist!</p>
<? } ?>
</div>
