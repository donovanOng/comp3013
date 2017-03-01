<div class="row bg-faded align-items-center p-3">
  <div class="col-4">
    <h4 class="mb-0"><?= $user->first_name ?> <?= $user->last_name ?></h4>
    <small># friends</small>
  </div>
  <div class="col-8">
    <ul class="nav nav-fill">
      <li class="nav-item">
        <a class="nav-link" href="<?= URL . $userID ?>/blog">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= URL . $userID ?>/friend">Friends</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= URL . $userID ?>/circle">Circles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= URL . $userID ?>/collection">Collections</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= URL . $userID ?>/photo">Photos</a>
      </li>
    </ul>
  </div>
</div>
