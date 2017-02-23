<div class="container">
  <h2>List of Users Found</h2>

  <p>Number of users found: <?= count($users) ?></p>
  <? if (count($users) > 0) { ?>
    <table>
      <tbody>
        <tr>
          <td>UserID</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Email</td>
          <td>Created At</td>
        </tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?= $user->userID ?></td>
                <td><?= $user->first_name ?></td>
                <td><?= $user->last_name ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->CREATED_AT ?></td>
                <td>
                  <a href="<?= URL . $user->userID ?>">
                    View Profile
                  </a>
                </td>
            </tr>
        <?php } ?>
      </tbody>
    </table>
  <? } ?>
</div>
