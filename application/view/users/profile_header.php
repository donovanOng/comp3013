<div class="row align-items-end mb-4 ml-0 mr-0 rounded-bottom" style="border:1px solid #ddd; border-top:0; height: 220px; background: #1d2129;">

  <div style="position:relative;z-index:1;left:30px;top:10px;" class="small">
    <div style="background:white;padding:6px;border:1px solid #ddd;">
      <img style="width:160px;height:160px;object-fit:cover;" src="<?php echo $user->photo_path ?>" onError="this.src ='<?php echo URL; ?>images/missing.jpg'" />
    </div>
    <form class="text-center" action="<?php echo URL ?>user/upload" method="post" enctype="multipart/form-data">
      <label class="label text-primary" style="cursor: pointer;">
          <i class="fa fa-camera mt-2 mr-2" aria-hidden="true"></i>Update Profile Picture
          <input type="file" name="uploadFile" onchange="this.form.submit()" id="upload_file" hidden>
      </label>
      <input type="hidden" name="userID" value="<?php echo $this->current_userID ?>">
    </form>
  </div>

  <div style="margin-top:-76px;z-index:0;width: 100%">
    <div style="padding-left:240px;width:100%;">
      <h4 class="mb-3" >
        <a style="color:white;" href="<?php echo URL . $user->userID ?>"><?php echo $user->first_name ?> <?php echo $user->last_name ?></a>
      </h4>
    </div>
    <div style="padding-left:240px;width:100%;background:white;">
      <ul class="nav nav-fill" style="border-left: 1px solid #ddd;">
        <li class="nav-item py-1" style="border-right: 1px solid #ddd; font-weight:bold">
          <a class="nav-link <?php echo '' . (!isset($friend_userID) ? : 'text-muted') ?>" href="<?php echo URL . $user->userID ?>/friend">
            Friends
          </a>
        </li>
        <li class="nav-item py-1" style="border-right: 1px solid #ddd; font-weight:bold">
          <a class="nav-link <?php echo '' . (!isset($circle_userID) ? : 'text-muted') ?>" href="<?php echo URL . $user->userID ?>/circle">
            Circles
          </a>
        </li>
        <li class="nav-item py-1" style="border-right: 1px solid #ddd; font-weight:bold">
          <a class="nav-link <?php echo '' . (!isset($collection_userID) ? : 'text-muted') ?>" href="<?php echo URL . $user->userID ?>/collection">
            Collections
          </a>
        </li>
        <li class="nav-item py-1" style="border-right: 1px solid #ddd; font-weight:bold">
          <a class="nav-link <?php echo '' . (!isset($photo_userID) ? : 'text-muted') ?>" href="<?php echo URL . $user->userID ?>/photo">
            Photos
          </a>
        </li>
        <?php require APP . 'view/users/profile_actions.php'; ?>
      </ul>
    </div>
  </div>
</div>

<?php if ($this->current_userID == $user->userID) { ?>
  <?php require APP . 'view/users/modal_edit_settings.php'; ?>
<?php } ?>
