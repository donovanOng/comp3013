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

  <h2>List of Friend Requests sent</h2>
  <p>Number of friend requests sent: <?= count($friend_req_sent) ?></p>
  <? if (count($friend_req_sent) > 0) { ?>
    <table>
      <tbody>
        <tr>
          <td>UserID</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Email</td>
          <td>Created At</td>
        </tr>
        <?php foreach ($friend_req_sent as $friend) { ?>
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

  <h2>List of Friend Requests received</h2>
  <p>Number of friend requests received: <?= count($friend_req_received) ?></p>
  <? if (count($friend_req_received) > 0) { ?>
    <table>
      <tbody>
        <tr>
          <td>UserID</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Email</td>
          <td>Created At</td>
        </tr>
        <?php foreach ($friend_req_received as $friend) { ?>
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
