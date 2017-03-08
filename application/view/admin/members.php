<table class="table table-hover">
  <thead>
      <tr>
          <th>cFriendsID</th>
          <th>circleID</th>
          <th>userID</th>
      </tr>
  </thead>
  <tbody>
    <?php foreach ($members as $member) {
    ?>
      <tr>
        <th scope="row"><?= $member->cFriendsID ?></th>
        <td><?= $member->circleID ?></td>
        <td><?= $member->userID ?></td>
        <td class="text-right">
          <a href="<?= URL ?>admin/delete_member?cFriendsID=<?= $member->cFriendsID ?>" class="btn-link">Delete</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
