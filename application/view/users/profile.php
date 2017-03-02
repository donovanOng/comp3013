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
      <div class="card-block bg-faded">
        <h5 class="card-title"><i class="fa fa-globe mr-1 text-muted" aria-hidden="true"></i> Intro</h5>
        <p class="card-text"><?= $profile->about ?></p>
      </div>
      <ul class="list-group list-group-flush small">
        <li class="list-group-item">
          <span class="text-muted col-4 pl-0">Gender</span>
          <span class="col-8"><?= $profile->gender ?></span>
        </li>
        <li class="list-group-item">
          <span class="text-muted col-4 pl-0">Birth Date</span>
          <span class="col-8"><?= $profile->birthdate ?></span>
        </li>
        <li class="list-group-item">
          <span class="text-muted col-4 pl-0">Current City</span>
          <span class="col-8"><?= $profile->current_city ?></span>
        </li>
        <li class="list-group-item">
          <span class="text-muted col-4 pl-0">Home City</span>
          <span class="col-8"><?= $profile->home_city ?></span>
        </li>
        <li class="list-group-item">
          <span class="text-muted col-4 pl-0">Address</span>
          <span class="col-8"><?= $profile->address ?></span>
        </li>
        <li class="list-group-item">
          <span class="text-muted col-4 pl-0">Languages</span>
          <span class="col-8"><?= $profile->languages ?></span>
        </li>
        <li class="list-group-item">
          <span class="text-muted col-4 pl-0">Workplace</span>
          <span class="col-8"><?= $profile->workplace ?></span>
        </li>
      </ul>
      <? if($this->current_userID == $user->userID) { ?>
        <div class="card-block bg-faded">
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
      <h6>
        <span class="text-muted">
          <i class="fa fa-pencil-square-o mr-1 text-muted" aria-hidden="true"></i> <?= $user->first_name ?>'s Blog:
        </span>
          <?= $blogs[0]->name ?>
      </h6>
      <div class="mt-3 mb-3" style="border-top: 1px solid #DDD;"></div>
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
