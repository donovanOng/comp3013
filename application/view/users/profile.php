<? require APP . 'view/users/profile_header.php'; ?>

<div class="row">
  <? if($profile == NULL && $this->current_userID == $user->userID) { ?>
  <div class="col-4 p-2 text-center">
    <div class="bg-faded rounded mb-3 p-4">
      <span>Hi! You do not have a profile yet.</span>
      <? require APP . 'view/users/form_new_profile.php'; ?>
      <button type="button" class="btn btn-secondary mt-2" data-toggle="modal" data-target="#newProfile">
        New Profile
      </button>
    </div>
  </div>
  <? } ?>
  <? if($profile != NULL) { ?>
  <div class="col-4">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title">Intro</h4>
        <p class="card-text"><?= $profile->about ?></p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Gender: <?= $profile->gender ?></li>
        <li class="list-group-item">Birthdate: <?= $profile->birthdate ?></li>
        <li class="list-group-item">Current City: <?= $profile->current_city ?></li>
        <li class="list-group-item">Home City: <?= $profile->home_city ?></li>
        <li class="list-group-item">Address: <?= $profile->address ?></li>
        <li class="list-group-item">Languages: <?= $profile->languages ?></li>
        <li class="list-group-item">Workplace: <?= $profile->workplace ?></li>
      </ul>
      <? if($this->current_userID == $user->userID) { ?>
        <div class="card-block">
          <? require APP . 'view/users/form_edit_profile.php'; ?>
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editProfile">
            Edit Profile
          </button>
        </div>
      <? } ?>
    </div>
  </div>
  <? } ?>
  <div class="col-8">
    <? if ($blogs == NULL && $this->current_userID == $user->userID) { ?>
      <div class="bg-faded rounded mb-3 p-4">
        <span>Please give your blog a name: </span>
        <? require APP . 'view/users/form_new_blog.php'; ?>
      </div>
    <? } ?>
    <? if ($blogs != NULL) { ?>
      <p class="text-muted small">BLOG: <?= $blogs[0]->name ?></p>
      <? if ($this->current_userID == $userID) {?>
        <? require APP . 'view/users/form_new_post.php'; ?>
      <? } ?>
      <? if (count($blog_posts) > 0) { ?>
        <?php foreach ($blog_posts as $post) { ?>
          <div class="card mb-3">
            <div class="card-block">
              <h6 class="card-title">
                <a href="<?= URL . 'post/' . $post->postID ?>"><?= $post->title ?></a>
                <br><small class="text-muted"><?= $post->CREATED_AT ?></small>
              </h6>
              <p class="card-text"><?= $post->body ?></p>
            </div>
          </div>
        <?php } ?>
    <? } ?>
    <? } ?>


  </div>
</div>
