<div class="p-4">
  <div class="row align-items-center mb-3">
    <div class="col-6">
      <h4 class="mb-0"><?= $circle->name ?></h4>
      <small class="text-muted">Created By <a href="<?= URL . $circle->userID ?>"><?= user_name($circle->userID) ?></a></small>
    </div>
    <div class="col-6 text-right">
      <? if ($this->current_userID == $circle->userID) { ?>
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editCircle<?= $circle->circleID ?>">
          Edit Name
        </button>
      <? } else { ?>
        <a class="btn btn-secondary" href="<?= URL . 'circle/leave_circle?userID=' . $this->current_userID . '&circleID=' . $circleID ?>">
          Leave Circle
        </a>
      <? } ?>
    </div>
  </div>
  <? require APP . 'view/circles/edit_circle.php'; ?>
  <div class="mt-3 mb-3" style="border-top: 1px solid #DDD;"></div>
  <div class="row">
    <div class="col-8">
      <? require APP . 'view/messages/form.php'; ?>
      <p class="text-muted mb-2"><small>RECENT MESSAGE</small></p>
      <? require APP . 'view/messages/list.php'; ?>
    </div>
    <div class="col-4">
      <div class="bg-faded p-2">
        <? require APP . 'view/circles/add_member.php'; ?>
        <div class="row pl-2 pr-2 small">
          <div class="col-5 text-muted">MEMBERS</div>
          <div class="col-7 text-right"><?= count($members) ?> Members</div>
        </div>
        <div class="mt-2 mb-2" style="border-bottom: 1px solid #DDD;"></div>
        <? require APP . 'view/circles/members.php'; ?>
      </div>
    </div>
  </div>
</div>
