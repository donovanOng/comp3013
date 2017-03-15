<div class="row bg-faded align-items-center p-3 mb-4 ml-0 mr-0 rounded-bottom">
  <div class="col-4">
    <h4 class="mb-0"><a href="<?php echo URL . $user->userID ?>"><?php echo $user->first_name ?> <?php echo $user->last_name ?></a></h4>
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
