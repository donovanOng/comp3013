<div class="container">
<? if ($collection != NULL) { ?>
  <h2>Collection <?= $collectionID ?> by userID = <?= $collection->userID ?></h2>
  <p><a href="<?= URL; ?>photo/upload?collectionID=<?= $collectionID ?>">Upload Photo</a></p>
  <p>Number of photos: <?= count($collection_photos) ?></p>
  <? if (count($collection_photos) > 0) { ?>
    <?php foreach ($collection_photos as $photo) { ?>
      <li>
          <a href="<?= URL; ?>photo/browse/<?= $photo->photoID ?>">
            <?= $photo->path ?>
          </a> uploaded by userID = <?= $photo->userID ?>
      </li>
    <?php } ?>
  <? } ?>
<? } else { ?>
    <p>Collection <?= $collectionID ?> doesn't exist!</p>
<? } ?>
</div>
