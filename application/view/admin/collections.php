<table class="table table-hover">
<thead>
    <tr>
        <th>collectionID</th>
        <th>userID</th>
        <th>Access Rights</th>
    </tr>
</thead>
<tbody>
  <?php foreach ($collections as $collection) {
  ?>
    <tr>
      <th scope="row"><?= $collection->collectionID ?></th>
      <td>User <?= $collection->userID ?></td>
      <td><?= $collection->accessRights ?></td>
      <td class="text-right">
        <button type="button" class="btn-link" data-toggle="modal" data-target="#editCollection<?= $collection->collectionID ?>">
          Edit
        </button>
        <a href="<?= URL ?>admin/delete_collection?collectionID=<?= $collection->collectionID ?>" class="btn-link">Delete</a>
      </td>
    </tr>
    <?php require APP . 'view/admin/edit_collection.php'; ?>
  <?php
} ?>
</tbody>
</table>
