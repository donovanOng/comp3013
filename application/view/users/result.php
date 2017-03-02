<div class="row mb-3" >
  <div class="col-12">
    <h4 class="mb-0">Users</h4>
    <p>Number of users found: <?= count($users) ?></p>
  </div>
</div>

<? if (count($users) > 0) { ?>
<div class="row">
  <?php foreach ($users as $user) { ?>
    <div class="col-6" >
      <div class="card mb-2">
        <div class="card-block">
          <h5>
            <a href="<?= URL; ?><?= $user->userID ?>">
              <?= $user->first_name ?> <?= $user->last_name ?>
            </a>
          </h5>
          <h6 class="text-muted"><?= $user->email ?></h6>
        </div>
      </div>
    </div>
  <?php } ?>
</div>
<? } ?>
