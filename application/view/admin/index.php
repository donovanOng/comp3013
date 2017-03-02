  <div class="p-4">
    <h4 class="mb-3">List of Users <span class="text-muted"><?= count($users) ?></span></h4>
    <table class="table table-hover">
    <tbody>
      <?php foreach ($users as $user) { ?>
        <tr>
          <th scope="row"><?= $user->userID ?></th>
          <td><?= $user->first_name ?></td>
          <td><?= $user->last_name ?></td>
          <td><?= @$user->email ?></td>
          <td><?= @$user->privacy ?></td>
          <td class="text-right">
            <button type="button" class="btn-link" data-toggle="modal" data-target="#edit<?= $user->userID ?>">
              Edit
            </button>
            <a href="<?= URL ?>admin/delete_user?userID=<?= $user->userID ?>" class="btn-link">Delete</a>
          </td>
        </tr>
        <? require APP . 'view/admin/edit_user.php'; ?>
      <?php } ?>
    </tbody>
    </table>
  </div>
