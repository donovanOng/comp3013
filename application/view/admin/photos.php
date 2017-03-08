<table class="table table-hover">
  <thead>
      <tr>
          <th>photoID</th>
          <th>collectionID</th>
          <th>userID</th>
          <th>Path</th>
      </tr>
  </thead>
  <tbody>
    <?php foreach ($photos as $photo) { ?>
      <tr>
        <th scope="row"><?= $photo->photoID ?></th>
        <td>Collection <?= $photo->collectionID ?></td>
        <td>User <?= $photo->userID ?></td>
        <td><?= $photo->path ?></td>
        <td class="text-right">
          <a href="<?= URL ?>admin/delete_photo?photoID=<?= $photo->photoID ?>" class="btn-link">Delete</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
