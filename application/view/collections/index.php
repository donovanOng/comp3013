<div class="row align-items-center mb-3">
<div class="col-10">
  <h4>Photo Collections</h4>
</div>
<div class="col-2 text-right">
  <a class="btn btn-primary" href="<?= URL; ?>collection/create">New Collection</a>
</div>
</div>

<? if ($collections != NULL) { ?>
<div class="row">
<? $privacy = array('Friends', 'Friends of Friends', 'Public'); ?>
<?php foreach ($collections as $collection) { ?>
  <div class="col-3">
    <div class="card mb-3">
      <img class="card-img-top" src="<?= URL; ?>images/missing.jpg" style="object-fit: cover; height: 200px;">
      <div class="card-block">
        <h5 class="card-title">Collection <?= $collection->collectionID ?></h5>
        <p class="card-text text-muted">
          <?= $collection->uploadRights . ' - ' . $privacy[$collection->uploadRights] ?>
          <?= $collection->uploadRights . ' - ' . $privacy[$collection->viewRights] ?>
        </p>
        <a href="<?= URL; ?>collection/<?= $collection->collectionID ?>" class="card-link">View Collection</a>
        <a href="<?= URL; ?>collection/delete?collectionID=<?= $collection->collectionID ?>" class="card-link">Delete</a>
      </div>
    </div>
  </div>
<?php } ?>
</div>
<? } ?>
