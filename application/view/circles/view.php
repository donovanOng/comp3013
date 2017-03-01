<div class="row align-items-center mb-3">
<div class="col-6">
  <h4 class="mb-0"><?= $circle->name ?></h4>
  <small class="text-muted">Created By <a href="<?= URL . $circle->userID ?>">User <?= $circle->userID ?></a></small>
</div>
<div class="col-6 text-right">
  <button type="button" class="btn">
    Leave Circle
  </button>
  <button type="button" class="btn">
    Edit Circle Name
  </button>
</div>
</div>

<div class="row">
<div class="col-8">

<? require APP . 'view/messages/form.php'; ?>

<p class="text-muted mb-2"><small>RECENT MESSAGE</small></p>
<? if (count($messages) > 0) { ?>
  <div class="list-group mb-2">
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
  </div>
<? } ?>

</div>
<div class="col-4">
  <div class="bg-faded p-2">
    <? require APP . 'view/circles/add_member.php'; ?>

    <div class="row pl-2 pr-2 small">
      <div class="col-5 text-muted">MEMBERS</div>
      <div class="col-7 text-right"><?= count($members) ?> Members</div>
    </div>
    <div class="mt-2 mb-2" style="border-bottom: 1px solid #DDD;"></div>

     <? if (count($members) > 0) { ?>
       <?php foreach ($members as $member) { ?>
         <div class="row pl-2 pr-2 mb-1 mt-1">
          <div class="col-5">
             <a href="<?= URL . $member->userID ?>">User <?= $member->userID ?></a>
          </div>
          <div class="col-7 text-right">
            <? if ($member->userID != $circle->userID) { ?>
              <a href="<?= URL . 'circle/remove_member?userID=' . $member->userID . '&circleID=' . $circleID ?>">
                Remove
              </a>
            <? } ?>
          </div>
        </div>
       <?php } ?>
     <? } ?>
  </div>
</div>
