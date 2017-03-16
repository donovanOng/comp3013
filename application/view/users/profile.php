<?php require APP . 'view/users/profile_header.php'; ?>

<div class="row">
  <div class="col-4">
    <?php if($profile == NULL && $this->current_userID == $user->userID) { ?>
      <div class="p-2 text-center">
        <div class="bg-faded rounded mb-3 p-4">
          <span>Hi! You do not have a profile yet.</span>
          <?php require APP . 'view/users/modal_new_profile.php'; ?>
          <button type="button" class="btn btn-secondary mt-2" data-toggle="modal" data-target="#newProfile">
            New Profile
          </button>
        </div>
      </div>
    <?php } ?>
    <?php if($profile != NULL) { ?>
      <?php require APP . 'view/users/profile_details.php'; ?>
    <?php } ?>
    <?php if ($this->current_userID == $user->userID) { ?>
      <div class="p-2 small text-muted">
        <p class="mb-0">
          <a href="<?php echo URL ?>user/export?userID=<?php echo $user->userID ?>">Download a copy</a>
          of your Social Media data.
        </p>
        <form action="<?php echo URL ?>user/import" method="post" enctype="multipart/form-data">
          <label class="label text-primary" style="cursor: pointer;">
              Import
              <input type="file" name="importXML" onchange="this.form.submit()" id="upload_file" hidden>
          </label>
          your Social Media data.
          <input type="hidden" name="userID" value="<?php echo $this->current_userID ?>">
        </form>

      </div>
    <?php } ?>
  </div>
  <div class="col-8">
    <?php if ($blog == NULL && $this->current_userID == $user->userID) { ?>
      <div class="bg-faded rounded mb-3 p-4">
        <span>Please give your blog a name: </span>
        <form class="form-inline mt-2" action="<?php echo URL; ?>blog/create" method="POST">
          <input class="form-control w-75" type="text" name="name" value="" placeholder="Blog Name" required />
          <input class="btn btn-primary w-25" type="submit" name="submit" value="Create" />
        </form>
      </div>
    <?php } ?>
    <?php if ($blog != NULL) { ?>
      <h6>
        <span class="text-muted">
          <i class="fa fa-pencil-square-o mr-1 text-muted" aria-hidden="true"></i>
          <?php echo $user->first_name ?>'s Blog:
        </span>
        <a href="<?php echo URL  . 'blog/' . $blog->blogID ?>"><?php echo $blog->name ?></a>
      </h6>
      <div class="mt-3 mb-3" style="border-top: 1px solid #DDD;"></div>
      <?php require APP . 'view/posts/list.php'; ?>
    <?php } ?>
  </div>
</div>
