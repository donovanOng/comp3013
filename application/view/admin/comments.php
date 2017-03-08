<table class="table table-hover">
  <thead>
      <tr>
          <th>commentID</th>
          <th>userID</th>
          <th>photoID</th>
          <th>Content</th>
      </tr>
  </thead>
  <tbody>
    <?php foreach ($comments as $comment) { ?>
      <tr>
        <th scope="row"><?= $comment->commentID ?></th>
        <td>User <?= $comment->userID ?></td>
        <td>Photo <?= $comment->photoID ?></td>
        <td><?= $comment->content ?></td>
        <td class="text-right">
          <button type="button" class="btn-link" data-toggle="modal" data-target="#editComment<?= $comment->commentID ?>">
            Edit
          </button>
          <a href="<?= URL ?>admin/delete_comment?commentID=<?= $comment->commentID ?>" class="btn-link">Delete</a>
        </td>
      </tr>
      <?php require APP . 'view/admin/edit_comment.php'; ?>
    <?php } ?>
  </tbody>
</table>
