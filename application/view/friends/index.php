<?php require APP . 'view/users/profile_header.php'; ?>

<?php if (count($friends) > 0) { ?>
  <div class="card mb-3">
    <div class="card-block">
      <div class="row">
        <div class="col-12"><h4>List of Friends <span class="text-muted"><?php echo count($friends) ?></span></h4></div>
      </div>
      <div class="mt-3 mb-3" style="border-top: 1px solid #DDD;"></div>
      <div class="row">
        <?php foreach ($friends as $friend) { ?>
          <div class="col-6" >
            <div class="card mb-2">
              <div class="card-block">
                <h5>
                  <a href="<?php echo URL; ?><?php echo $friend->userID ?>"><?php echo $friend->first_name ?>
                    <?php echo $friend->last_name ?>
                  </a>
                </h5>
                <h6 class="text-muted"><?php echo $friend->email ?></h6>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php } ?>

<?php if($this->current_userID == $user->userID) { ?>
  <?php require APP . 'view/friends/friend_requests.php'; ?>
<?php } ?>
