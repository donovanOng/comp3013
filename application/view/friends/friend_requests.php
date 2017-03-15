<div class="card mb-3">
  <div class="card-block">
    <h4 class="card-title">List of Friend Requests sent</h4>
    <h6 class="card-subtitle mb-3 text-muted">Number of friend requests sent: <?php echo count($friend_req_sent) ?></h6>
    <?php if (count($friend_req_sent) > 0) { ?>
      <?php foreach ($friend_req_sent as $friend) { ?>
        <div class="row rounded bg-faded align-items-center mr-0 ml-0 mb-2 pr-2 pl-2 pt-3 pb-3">
          <div class="col-8">
            <h4>
              <a href="<?php echo URL; ?><?php echo $friend->userID ?>"><?php echo $friend->first_name ?>
                <?php echo $friend->last_name ?>
              </a>
            </h4>
            <h6 class="text-muted"><?php echo $friend->email ?></h6>
          </div>
          <div class="col-4 text-right">
            <a class="btn btn-secondary" href="<?php echo URL ?>user/reject_friendship?userID=<?php echo $friend->userID ?>">Delete Request</a>
          </div>
        </div>
      <?php } ?>
    <?php } ?>
  </div>
</div>
<div class="card mb-3">
  <div class="card-block">
    <h4 class="card-title">List of Friend Requests received</h4>
    <h6 class="card-subtitle mb-3 text-muted">Number of friend requests received: <?php echo count($friend_req_received) ?></h6>
    <?php if (count($friend_req_received) > 0) { ?>
      <?php foreach ($friend_req_received as $friend) { ?>
        <div class="row rounded bg-faded align-items-center mr-0 ml-0 pr-2 pl-2 mb-2 pt-3 pb-3">
          <div class="col-8">
            <h4>
              <a href="<?php echo URL; ?><?php echo $friend->userID ?>"><?php echo $friend->first_name ?>
                <?php echo $friend->last_name ?>
              </a>
            </h4>
            <h6 class="text-muted"><?php echo $friend->email ?></h6>
          </div>
          <div class="col-4 text-right">
            <a class="btn btn-primary" href="<?php echo URL ?>user/accept_friendship?userID=<?php echo $friend->userID ?>">Accept</a>
            <a class="btn btn-secondary" href="<?php echo URL ?>user/reject_friendship?userID=<?php echo $friend->userID ?>">Delete Request</a>
          </div>
        </div>
      <?php } ?>
    <?php } ?>
  </div>
</div>
