<table class="table table-hover">
  <thead>
      <tr>
          <th>messageID</th>
          <th>circleID</th>
          <th>userID</th>
          <th>Content</th>
      </tr>
  </thead>
  <tbody>
    <?php foreach ($messages as $message) { ?>
      <tr>
        <th scope="row"><?= $message->messageID ?></th>
        <td>Circle <?= $message->circleID ?></td>
        <td>User <?= $message->userID ?></td>
        <td><?= $message->content ?></td>
        <td class="text-right">
          <button type="button" class="btn-link" data-toggle="modal" data-target="#editMessage<?= $message->messageID ?>">
            Edit
          </button>
          <a href="<?= URL ?>admin/delete_message?messageID=<?= $message->messageID ?>" class="btn-link">Delete</a>
        </td>
      </tr>
      <?php require APP . 'view/admin/edit_message.php'; ?>
    <?php } ?>
  </tbody>
</table>
