<div class="row bg-faded align-items-center p-3 mb-4 ml-0 mr-0 rounded-bottom">
  <div class="col-4">
    <h4 class="mb-0"><a href="<?php echo URL . $user->userID ?>"><?php echo $user->first_name ?> <?php echo $user->last_name ?></a></h4>
    <div class="col-8">
      <img class="w-100" src="<?php echo $user->photo_path ?>" onError="this.src ='<?php echo URL; ?>images/missing.jpg'"  />
    </div>
    <?php if($user->userID == $this->current_userID) { ?>
    <form class="align-self-center" action="<?php echo URL ?>user/upload" method="post" enctype="multipart/form-data">
      <label class="label text-primary">
          <i class="fa fa-camera mr-1" aria-hidden="true"></i>Update profile picture
          <input type="file" name="uploadFile" onchange="this.form.submit()" id="upload_file" hidden>
      </label>
        <input type="hidden" name="userID" value="<?php echo $this->current_userID ?>">
    </form>
    <?php } ?>
  </div>
  <div class="col-8">
    <ul class="nav nav-fill">
      <li class="nav-item">
        <a class="nav-link <?php echo '' . (!isset($friend_userID) ? : 'text-muted') ?>" href="<?php echo URL . $user->userID ?>/friend">
          Friends
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo '' . (!isset($circle_userID) ? : 'text-muted') ?>" href="<?php echo URL . $user->userID ?>/circle">
          Circles
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo '' . (!isset($collection_userID) ? : 'text-muted') ?>" href="<?php echo URL . $user->userID ?>/collection">
          Collections
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo '' . (!isset($photo_userID) ? : 'text-muted') ?>" href="<?php echo URL . $user->userID ?>/photo">
          Photos
        </a>
      </li>
      <?php require APP . 'view/users/profile_actions.php'; ?>
    </ul>
  </div>
</div>
