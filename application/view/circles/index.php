<div class="container">
  <h2>List of Circle</h2>

  <p>Number of circles: <?= count($circles) ?></p>
  <? if (count($circles) > 0) { ?>
    <table>
      <tbody>
        <tr>
          <td>circleID</td>
          <td>userID</td>
          <td>Name</td>
          <td>Created At</td>
        </tr>
        <?php foreach ($circles as $circle) { ?>
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
