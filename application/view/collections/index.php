<div class="container">
<h2>My Photo Collections</h2>
<p><a href="<?= URL; ?>collection/create">New Collection</a></p>
<? if ($collections != NULL) { ?>
  <table>
    <tbody>
      <tr>
        <td>collectionID</td>
        <td>uploadRights</td>
        <td>viewRights</td>
      </tr>
      <?php foreach ($collections as $collection) { ?>
          <tr>
              <td><?= $collection->collectionID ?></td>
              <td><?= $collection->uploadRights ?></td>
              <td><?= $collection->viewRights ?></td>
              <td>
                <a href="<?= URL; ?>collection/<?= $collection->collectionID ?>">
                  View Collection
                </a>
              </td>
          </tr>
      <?php } ?>
    </tbody>
  </table>
<? } ?>
</div>
