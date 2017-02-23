<div class="container">
  <h2>List of Friends</h2>
  <p>Number of friends: <?= count($friends) ?></p>
  <? if (count($friends) > 0) { ?>
    <table>
      <tbody>
        <tr>
          <td>UserID</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Email</td>
          <td>Created At</td>
        </tr>
        <?php foreach ($friends as $friend) { ?>
            <tr>
                <td><?= $friend->userID ?></td>
                <td><?= $friend->first_name ?></td>
                <td><?= $friend->last_name ?></td>
                <td><?= $friend->email ?></td>
                <td><?= $friend->CREATED_AT ?></td>
                <td>
                  <a href="<?= URL; ?><?= $friend->userID ?>">
                    View Profile
                  </a>
                </td>
            </tr>
        <?php } ?>
      </tbody>
    </table>
  <? } ?>
</div>
