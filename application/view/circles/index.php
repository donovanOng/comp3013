<div class="row align-items-center mb-3">
<div class="col-10">
  <h4>Circles</h4>
</div>
<div class="col-2 text-right">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newCircleModal">
    New Circle
  </button>
</div>
</div>

<? require APP . 'view/circles/new.php'; ?>

<div class="row">
<? if (count($circlesAdmin) > 0) { ?>
<?php foreach ($circlesAdmin as $circle) { ?>
  <div class="col-3">
    <div class="card mt-1 mb-1 bg-faded">
      <div class="card-block">
        <h5 class="card-title"><?= $circle->name ?></h5>
        <p class="card-text text-muted">
          # members
        </p>
        <a href="<?= URL; ?>circle/<?= $circle->circleID ?>" class="card-link">View Circle</a>
        <a href="<?= URL; ?>circle/delete?circleID=<?= $circle->circleID?>" class="card-link">Delete</a>
      </div>
    </div>
  </div>
<?php } ?>
<? } ?>
<? if (count($circlesMember) > 0) { ?>
<?php foreach ($circlesMember as $circle) { ?>
  <div class="col-3">
    <div class="card mb-3">
      <div class="card-block">
        <h5 class="card-title"><?= $circle->name ?></h5>
        <p class="card-text text-muted">
          # members
        </p>
        <a href="<?= URL; ?>circle/<?= $circle->circleID ?>" class="card-link">View Circle</a>
        <a href="<?= URL; ?>circle/delete?circleID=<?= $circle->circleID ?>" class="card-link">Delete</a>
      </div>
    </div>
  </div>
<?php } ?>
<? } ?>
</div>
