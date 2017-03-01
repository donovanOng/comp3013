<? if ($this->current_user != null) { ?>
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link" href="<?= URL . $this->current_userID ?>/blog">Blog</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= URL . $this->current_userID ?>/friend">Friends</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= URL . $this->current_userID ?>/circle">Circles</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= URL . $this->current_userID ?>/collection">Collections</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= URL . $this->current_userID ?>/photo">Photos</a>
    </li>
  </ul>
<? } ?>
