<div class="container">
  <h2>Photos of userID = <?= $photo_userID ?></h2>

  <? if ($photos != NULL) { ?>
    <p>Number of photos: <?= count($photos) ?></p>
    <? if (count($photos) > 0) { ?>
      <?php foreach ($photos as $photo) { ?>
        <li>
          <a href="<?= URL; ?>photo/<?= $photo->photoID ?>"><?= $photo->path ?></a> in
          <a href="<?= URL; ?>collection/<?= $photo->collectionID ?>">collection <?= $photo->collectionID ?></a>,
          uploaded by userID = <?= $photo->userID ?></li>
      <?php } ?>
    <? } ?>
  <? } else { ?>
      <p>No photos found.</p>
  <? } ?>

</div>
