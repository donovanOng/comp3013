<table class="table table-hover">
  <thead>
      <tr>
          <th>userID</th>
          <th>About</th>
          <th>Gender</th>
          <th>Birthdate</th>
          <th>Currenct City</th>
          <th>Home City</th>
          <th>Address</th>
          <th>Language</th>
          <th>Workplace</th>
      </tr>
  </thead>
  <tbody>
    <?php foreach ($profiles as $profile) { ?>
      <tr>
        <th scope="row"><?= $profile->userID ?></th>
        <td><?= $profile->about ?></td>
        <td><?= $profile->gender ?></td>
        <td><?= $profile->birthdate ?></td>
        <td><?= $profile->current_city ?></td>
        <td><?= $profile->home_city ?></td>
        <td><?= $profile->address ?></td>
        <td><?= $profile->languages ?></td>
        <td><?= $profile->workplace ?></td>
        <td class="text-right">
          <button type="button" class="btn-link" data-toggle="modal" data-target="#editProfile<?= $profile->userID ?>">
            Edit
          </button>
          <a href="<?= URL ?>admin/delete_profile?userID=<?= $profile->userID ?>" class="btn-link">Delete</a>
        </td>
      </tr>
      <?php require APP . 'view/admin/edit_profile.php'; ?>
    <?php } ?>
  </tbody>
</table>
