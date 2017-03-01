<? if (count($messages) > 0) { ?>
<?php foreach ($messages as $message) { ?>
  <div class="card mb-3">
    <div class="card-block">
      <h6 class="card-title">
        <a href="<?= URL . $message->userID ?>">User <?= $message->userID ?></a>
        <br><small class="text-muted"><?= $message->CREATED_AT ?></small>
      </h6>
      <p class="card-text"><?= $message->content ?></p>
    </div>
  </div>
<?php } ?>
<? } ?>
