<div class="container">
<h2>Photo Collections of userID = <?= $userID ?></h2>
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
              <? $privacy = array('Friends', 'Friends of Friends', 'Public'); ?>
              <td><?= $collection->collectionID ?></td>
              <td><?= $collection->uploadRights . ' - ' . $privacy[$collection->uploadRights] ?></td>
              <td><?= $collection->uploadRights . ' - ' . $privacy[$collection->viewRights] ?></td>
              <td>
                <a href="<?= URL; ?>collection/<?= $collection->collectionID ?>">
                  View Collection
                </a>
              </td>
              <td>
                <a href="<?= URL; ?>collection/delete?collectionID=<?= $collection->collectionID ?>">
                  Delete Collection
                </a>
              </td>
          </tr>
      <?php } ?>
    </tbody>
  </table>
<? } else { ?>
  <p>No collection found.</p>
<? } ?>
</div>
