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

  <h4 class="mb-3">List of Circles <span class="text-muted"><?= count($circles) ?></span></h4>
  <table class="table table-hover">
  <tbody>
    <?php foreach ($circles as $circle) { ?>
      <tr>
        <th scope="row"><?= $circle->circleID ?></th>
        <td><?= $circle->userID ?></td>
        <td><?= $circle->name ?></td>
        <td class="text-right">
          <button type="button" class="btn-link" data-toggle="modal" data-target="#editCircle<?= $circle->circleID ?>">
            Edit
          </button>
          <a href="<?= URL ?>admin/delete_circle?circleID=<?= $circle->circleID ?>" class="btn-link">Delete</a>
        </td>
      </tr>
      <? require APP . 'view/admin/edit_circle.php'; ?>
    <?php } ?>
  </tbody>
  </table>

  <h4 class="mb-3">List of Messages <span class="text-muted"><?= count($messages) ?></span></h4>
  <table class="table table-hover">
  <tbody>
    <?php foreach ($messages as $message) { ?>
      <tr>
        <th scope="row"><?= $message->messageID ?></th>
        <td><?= $message->circleID ?></td>
        <td><?= $message->userID ?></td>
        <td><?= $message->content ?></td>
        <td class="text-right">
          <button type="button" class="btn-link" data-toggle="modal" data-target="#editMessage<?= $message->messageID ?>">
            Edit
          </button>
          <a href="<?= URL ?>admin/delete_message?messageID=<?= $message->messageID ?>" class="btn-link">Delete</a>
        </td>
      </tr>
      <? require APP . 'view/admin/edit_message.php'; ?>
    <?php } ?>
  </tbody>
  </table>
</div>
