<div class="card">
  <div class="card-block bg-faded">
    <h5 class="card-title"><i class="fa fa-globe mr-1 text-muted" aria-hidden="true"></i> Intro</h5>
    <p class="card-text"><?php echo nl2br($profile->about) ?></p>
  </div>
  <ul class="list-group list-group-flush small">
    <li class="list-group-item">
      <span class="text-muted col-4 pl-0">Gender</span>
      <span class="col-8"><?php echo $profile->gender ?></span>
    </li>
    <li class="list-group-item">
      <span class="text-muted col-4 pl-0">Birth Date</span>
      <span class="col-8"><?php echo $profile->birthdate ?></span>
    </li>
    <li class="list-group-item">
      <span class="text-muted col-4 pl-0">Current City</span>
      <span class="col-8"><?php echo $profile->current_city ?></span>
    </li>
    <li class="list-group-item">
      <span class="text-muted col-4 pl-0">Home City</span>
      <span class="col-8"><?php echo $profile->home_city ?></span>
    </li>
    <li class="list-group-item">
      <span class="text-muted col-4 pl-0">Address</span>
      <span class="col-8"><?php echo nl2br($profile->address) ?></span>
    </li>
    <li class="list-group-item">
      <span class="text-muted col-4 pl-0">Languages</span>
      <span class="col-8"><?php echo nl2br($profile->languages) ?></span>
    </li>
    <li class="list-group-item">
      <span class="text-muted col-4 pl-0">Workplace</span>
      <span class="col-8"><?php echo nl2br($profile->workplace) ?></span>
    </li>
  </ul>
  <?php if($this->current_userID == $user->userID) { ?>
    <div class="card-block bg-faded">
      <?php require APP . 'view/users/modal_edit_profile.php'; ?>
      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editProfile">
        Edit Profile
      </button>
    </div>
  <?php } ?>
</div>
