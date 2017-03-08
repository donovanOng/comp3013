<div class="p-4">
  <div class="bg-faded p-3 mb-3">
    <div class="row" >
      <div class="col-12">
        <h4 class="mb-0">Users</h4>
        <p class="mb-0">Number of users found: <?= count($users) ?></p>
      </div>
    </div>
    <? if (count($users) > 0) { ?>
    <div class="mt-3 mb-3" style="border-top: 1px solid #DDD;"></div>
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
  </div>

  <div class="bg-faded p-3">
  <div class="row" >
    <div class="col-12">
      <h4 class="mb-0">Posts</h4>
      <p class="mb-0">Number of posts found: <?= count($posts) ?></p>
    </div>
  </div>

  <? if (count($posts) > 0) { ?>
    <div class="mt-3 mb-3" style="border-top: 1px solid #DDD;"></div>
    <div class="row">
    <div class="col-12">
    <?php foreach ($posts as $post) { ?>
      <div class="card mb-3">
        <div class="card-block">
          <h6 class="card-title">
            <a href="<?= URL . 'post/' . $post->postID ?>"><?= $post->title ?></a>
            <br>
            <small class="text-muted"><a href="<?= URL . $post->userID ?>"><?= user_name($post->userID) ?></a>
            <strong><span class="align-top">.</span></strong> <?= $post->CREATED_AT ?></small>
          </h6>
          <p class="card-text"><?= $post->body ?></p>
        </div>
      </div>
    <?php } ?>
    </div>
    </div>
  <? } ?>
</div>

</div>
