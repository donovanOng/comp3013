<?php require APP . 'view/users/profile_header.php'; ?>

<div class="card">
  <div class="card-block">
    <div class="row align-items-center mb-3">
      <div class="col-10"><h4><i class="fa fa-folder mr-1 text-muted" aria-hidden="true"></i> Photo Collections</h4></div>
      <div class="col-2 text-right">
        <?php if ($user->userID == $this->current_userID) { ?>
          <!-- <a class="btn btn-sm btn-secondary" href="<?php echo URL; ?>collection/create">New Collection</a> -->
          <?php require APP . 'view/collections/new_collection.php'; ?>
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#newCollection">
            New Collection
          </button>
        <?php } ?>
      </div>
    </div>
    <div class="mt-3 mb-3" style="border-top: 1px solid #DDD;"></div>
      <?php if ($collections_owned != NULL) { ?>
        <div class="row">
        <?php foreach ($collections_owned as $collection) { ?>
            <div class="col-3">
              <div class="card mb-3">
                <img class="card-img-top" src="<?php echo $collection->coverPhoto ?>" onError="this.src='<?php echo URL ?>images/missing.jpg'" style="object-fit: cover; height: 200px;">
                <div class="card-block">
                  <h5 class="card-title"><?php echo $collection->name ?></h5>
                  <p class="card-text text-muted">
                    <?php echo $collection->noOfPhotos ?> photos
                  </p>
                  <a href="<?php echo URL; ?>collection/<?php echo $collection->collectionID ?>" class="card-link">View Collection</a>
                  <?php if ($collection->userID == $this->current_userID) { ?>
                    <a href="<?php echo URL; ?>collection/delete?collectionID=<?php echo $collection->collectionID ?>" class="card-link">Delete</a>
                  <?php } ?>
                </div>
              </div>
            </div>
        <?php } ?>
      <?php } ?>
    </div>
  </div>
</div>
