<table class="table table-hover">
  <thead>
      <tr>
          <th>userID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Privacy</th>
          <th>Admin</th>
      </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user) {
    ?>
      <tr>
        <th scope="row"><?= $user->userID ?></th>
        <td><?= $user->first_name ?></td>
        <td><?= $user->last_name ?></td>
        <td><?= $user->email ?></td>
        <td><?= $user->privacy ?></td>
        <td><?= $user->admin ?></td>
        <td class="text-right">
          <button type="button" class="btn-link" data-toggle="modal" data-target="#edit<?= $user->userID ?>">
            Edit
          </button>
          <a href="<?= URL ?>admin/delete_user?userID=<?= $user->userID ?>" class="btn-link">Delete</a>
        </td>
      </tr>
      <?php require APP . 'view/admin/edit_user.php'; ?>
    <?php } ?>
  </tbody>
</table>
