<? require APP . 'view/users/profile_header.php'; ?>

<div class="row">
  <? if($profile == NULL && $this->current_userID == $userID) { ?>
    <div class="col-12 p-2">
      <div class="bg-faded rounded mb-3 p-4 align-items-center">
        <span>Hi! You do not have a profile yet.</span>
        <a class="btn btn-sm btn-secondary" href="<?= URL; ?> user/new_profile?userID= <?=$userID; ?>">Create Profile</a>
      </div>
    </div>
  <? } ?>
  <div class="col-4">
    <? if($profile != NULL) { ?>
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
        <? if($this->current_userID == $userID) { ?>
          <div class="card-block">
            <? require APP . 'view/users/form_edit_profile.php'; ?>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editProfile">
              Edit Profile
            </button>
          </div>
        <? } ?>
      </div>
    <? } ?>
  </div>
</div>
