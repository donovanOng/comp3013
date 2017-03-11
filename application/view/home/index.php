<div class="p-4">
  <div class="row">

    <div class="col-8">
        <p class="text-muted mt-2 mb-2"><small>RECENT POSTS</small></p>
        <?php if (count($posts) > 0) { ?>
          <?php foreach ($posts as $post) { ?>
            <div class="card mb-3">
              <div class="card-block">
                <h6 class="card-title mb-0">
                  <a href="<?= URL . 'post/' . $post->postID ?>"><?= $post->title ?></a>
                </h6>

                <div class="mb-3">
                  <span class="text-muted small">
                    <a href="<?= URL . $post->userID ?>"><?= user_name($post->userID) ?></a> /
                    <a href="<?= URL . 'blog/' . $post->blogID ?>"><?= $post->name ?></a>
                    <strong><span class="align-top">.</span></strong>
                    <?= $post->CREATED_AT ?>
                  </span>
                </div>

                <p class="card-text"><?= $post->body ?></p>
              </div>
            </div>
          <?php } ?>
      <?php } ?>
    </div>

    <div class="col-4">
      <div class="bg-faded p-2 pl-3 pr-3">
        <p class="text-muted mb-2"><small>SUGGESTION BASED ON MUTUAL FRIENDS</small></p>

        <? if (count($recommendation_based_on_mutual_friends) > 0) { ?>
          <? foreach($recommendation_based_on_mutual_friends as $friend_recommend) { ?>
            <div class="row mb-1 mt-1">
              <div class="col-6">
                <a href="<?= URL . $friend_recommend->userID ?>"><?= user_name($friend_recommend->userID) ?></a>
                <span class="text-muted">(<?= $friend_recommend->rank ?>)</span>
              </div>
              <div class="col-6 text-right">
                <a href="<?= URL ?>user/add_friend?userID=<?= $friend_recommend->userID ?>">Add Friend</a>
              </div>
            </div>
          <? } ?>
        <? } else { ?>
          <div class="row mb-1 mt-1">
            <div class="col-12">
              No friend suggestion.
            </div>
          </div>
        <? } ?>

        <p class="text-muted mb-2"><small>SUGGESTION BASED ON PHOTOS LIKED</small></p>

        <? if (count($recommendation_based_on_photos_liked) > 0) { ?>
          <? foreach($recommendation_based_on_photos_liked as $friend_recommend) { ?>
            <div class="row mb-1 mt-1">
              <div class="col-6">
                <a href="<?= URL . $friend_recommend->userID ?>"><?= user_name($friend_recommend->userID) ?></a>
                <span class="text-muted">(<?= $friend_recommend->rank ?>)</span>
              </div>
              <div class="col-6 text-right">
                <a href="<?= URL ?>user/add_friend?userID=<?= $friend_recommend->userID ?>">Add Friend</a>
              </div>
            </div>
          <? } ?>
        <? } else { ?>
          <div class="row mb-1 mt-1">
            <div class="col-12">
              No friend suggestion.
            </div>
          </div>
        <? } ?>

      </div>
    </div>
  </div>
</div>
