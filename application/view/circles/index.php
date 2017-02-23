<div class="container">

  <h2>List of <?= $circle_userID ?>'s Circle</h2>

  <? require APP . 'view/circles/new.php'; ?>

  <h3>Admin of</h3>
  <p>Number of circles: <?= count($circlesAdmin) ?></p>

  <? if (count($circlesAdmin) > 0) { ?>
    <table>
      <tbody>
        <tr>
          <td>circleID</td>
          <td>userID</td>
          <td>Name</td>
          <td>Created At</td>
        </tr>
        <?php foreach ($circlesAdmin as $circle) { ?>
            <tr>
                <td><?= $circle->circleID ?></td>
                <td><?= $circle->userID ?></td>
                <td><?= $circle->name ?></td>
                <td><?= $circle->CREATED_AT ?></td>
                <td>
                  <a href="<?= URL; ?>circle/<?= $circle->circleID ?>">
                    View Circle
                  </a>
                </td>
                <td>
                  <a href="<?= URL; ?>circle/delete?circleID=<?= $circle->circleID ?>">
                    Delete Circle
                  </a>
                </td>
            </tr>
        <?php } ?>
      </tbody>
    </table>
  <? } ?>

  <h3>Member of</h3>
  <p>Number of circles: <?= count($circlesMember) ?></p>
  <? if (count($circlesMember) > 0) { ?>
    <table>
      <tbody>
        <tr>
          <td>circleID</td>
          <td>userID</td>
          <td>Name</td>
          <td>Created At</td>
        </tr>
        <?php foreach ($circlesMember as $circle) { ?>
            <tr>
                <td><?= $circle->circleID ?></td>
                <td><?= $circle->userID ?></td>
                <td><?= $circle->name ?></td>
                <td><?= $circle->CREATED_AT ?></td>
                <td>
                  <a href="<?= URL; ?>circle/<?= $circle->circleID ?>">
                    View Circle
                  </a>
                </td>
            </tr>
        <?php } ?>
      </tbody>
    </table>
  <? } ?>
</div>
