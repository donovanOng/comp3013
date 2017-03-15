<div class="bg-faded p-2 pl-3 pr-3">
  <p class="text-muted mb-2"><small>SUGGESTION BASED ON MUTUAL FRIENDS</small></p>
  <?php if (count($recommendation_based_on_mutual_friends) > 0) { ?>
    <?php foreach($recommendation_based_on_mutual_friends as $friend_recommend) { ?>
      <div class="row mb-1 mt-1">
        <div class="col-6">
          <a href="<?php echo URL . $friend_recommend->userID ?>"><?php echo user_name($friend_recommend->userID) ?></a>
          <span class="text-muted">(<?php echo $friend_recommend->rank ?>)</span>
        </div>
        <div class="col-6 text-right">
          <a href="<?php echo URL ?>user/add_friend?userID=<?php echo $friend_recommend->userID ?>">Add Friend</a>
        </div>
      </div>
    <?php } ?>
  <?php } else { ?>
    <div class="row mb-1 mt-1">
      <div class="col-12">
        No friend suggestion.
      </div>
    </div>
  <?php } ?>
  <p class="text-muted mb-2"><small>SUGGESTION BASED ON PHOTOS LIKED</small></p>
  <?php if (count($recommendation_based_on_photos_liked) > 0) { ?>
    <?php foreach($recommendation_based_on_photos_liked as $friend_recommend) { ?>
      <div class="row mb-1 mt-1">
        <div class="col-6">
          <a href="<?php echo URL . $friend_recommend->userID ?>"><?php echo user_name($friend_recommend->userID) ?></a>
          <span class="text-muted">(<?php echo $friend_recommend->rank ?>)</span>
        </div>
        <div class="col-6 text-right">
          <a href="<?php echo URL ?>user/add_friend?userID=<?php echo $friend_recommend->userID ?>">Add Friend</a>
        </div>
      </div>
    <?php } ?>
  <?php } else { ?>
    <div class="row mb-1 mt-1">
      <div class="col-12">
        No friend suggestion.
      </div>
    </div>
  <?php } ?>
</div>
