<? require APP . 'view/users/profile_header.php'; ?>

<? if($this->current_userID == $userID) { ?>

  <div>
  <? if($profile != NULL) { ?>
    <? require APP . 'view/users/form_edit_profile.php'; ?>
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editProfile">
      Edit Profile
    </button>
  <? } else { ?>
    <div class="col-0 text-right">
      <a class="btn btn-primary" href="<?= URL; ?> user/new_profile?userID= <?=$userID; ?>">New Profile</a>
    </div>
    <? } ?>
  </div>

<? } else { ?>

  <? if($isFriend != NULL) { ?>
    <? if($isFriend->status == 0) { ?>
      <button class="btn btn-secondary">Friends</button>
    <? } else if($isFriend->status == 1) { ?>
      <? if($initiator->userID == $this->current_userID) { ?>
          <button class="btn btn-secondary">Friend Request sent</button>
      <? } else { ?>
          <a class="btn btn-secondary" href="<?= URL; ?>user/accept_friendships?userID=<?= $userID; ?>" >Accept Friend Request</a></p>
          <a class="btn btn-secondary" href="<?= URL; ?>user/reject_friendships?userID=<?= $userID; ?>" >Reject Friend Request</a></p>
      <? } ?>
    <? } ?>
  <? } else {?>
      <a class="btn btn-secondary" href="<?= URL; ?>user/add_friend?userID=<?= $userID; ?>">Add Friend</a>
  <? } ?>

<? } ?>

<? if($profile != NULL) { ?>
  <p>About : <?= $profile->about ?></p>
  <p>Gender : <?= $profile->gender ?></p>
  <p>Birthdate : <?= $profile->birthdate ?></p>
  <p>Current city : <?= $profile->current_city ?></p>
  <p>Home city : <?= $profile->home_city ?></p>
  <p>Address : <?= $profile->address ?></p>
  <p>Languages : <?= $profile->languages ?></p>
  <p>Work place : <?= $profile->workplace ?></p>
<? }?>
