<? require APP . 'view/users/profile_header.php'; ?>

<? if (count($friends) > 0) { ?>
<div class="card mb-3">
  <div class="card-block">
    <div class="row">
      <div class="col-12"><h4>List of Friends <span class="text-muted"><?= count($friends) ?></span></h4></div>
    </div>
    <div class="mt-3 mb-3" style="border-top: 1px solid #DDD;"></div>
    <div class="row">
      <?php foreach ($friends as $friend) { ?>
        <div class="col-6" >
          <div class="card mb-2">
            <div class="card-block">
              <h5>
                <a href="<?= URL; ?><?= $friend->userID ?>"><?= $friend->first_name ?>
                  <?= $friend->last_name ?>
                </a>
              </h5>
              <h6 class="text-muted"><?= $friend->email ?></h6>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
<? } ?>

<div class="card mb-3">
  <div class="card-block">
    <h4 class="card-title">List of Friend Requests sent</h4>
    <h6 class="card-subtitle mb-3 text-muted">Number of friend requests sent: <?= count($friend_req_sent) ?></h6>
    <? if (count($friend_req_sent) > 0) { ?>
      <?php foreach ($friend_req_sent as $friend) { ?>
        <div class="row rounded bg-faded align-items-center mr-0 ml-0 mb-2 pr-2 pl-2 pt-3 pb-3">
          <div class="col-8">
            <h4>
              <a href="<?= URL; ?><?= $friend->userID ?>"><?= $friend->first_name ?>
                <?= $friend->last_name ?>
              </a>
            </h4>
            <h6 class="text-muted"><?= $friend->email ?></h6>
          </div>
          <div class="col-4 text-right">
            <a href="#" class="btn">Delete Request</a>
          </div>
        </div>
      <?php } ?>
    <? } ?>
  </div>
</div>

<div class="card mb-3">
  <div class="card-block">
    <h4 class="card-title">List of Friend Requests received</h4>
    <h6 class="card-subtitle mb-3 text-muted">Number of friend requests received: <?= count($friend_req_received) ?></h6>
    <? if (count($friend_req_received) > 0) { ?>
      <?php foreach ($friend_req_received as $friend) { ?>
        <div class="row rounded bg-faded align-items-center mr-0 ml-0 pr-2 pl-2 mb-2 pt-3 pb-3">
          <div class="col-8">
            <h4>
              <a href="<?= URL; ?><?= $friend->userID ?>"><?= $friend->first_name ?>
                <?= $friend->last_name ?>
              </a>
            </h4>
            <h6 class="text-muted"><?= $friend->email ?></h6>
          </div>
          <div class="col-4 text-right">
            <a href="#" class="btn btn-primary">Accept</a>
            <a href="#" class="btn">Delete Request</a>
          </div>
        </div>
      <?php } ?>
    <? } ?>
  </div>
</div>
