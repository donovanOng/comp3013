<? if ($this->current_userID == $collection->userID) { ?>

  <!-- Only collection's owner can edit rights -->
  <form action="<?php echo URL; ?>collection/update" method="POST">

    <label>Upload Rights: </label>
    <select name="uploadRights" id="uploadRights">
      <? foreach($privacy as $key=>$privacy_type) { ?>
          <? if ($key == $collection->uploadRights) { ?>
            <option selected value="<?= $key ?>"><?= $privacy_type ?></option>
          <? } else { ?>
            <option value="<?= $key ?>"><?= $privacy_type ?></option>
          <? } ?>
      <? } ?>
    </select>

    <label>View Rights: </label>
    <select name="viewRights" id="viewRights">
      <? foreach($privacy as $key=>$privacy_type) { ?>
          <? if ($key == $collection->viewRights) { ?>
            <option selected value="<?= $key ?>"><?= $privacy_type ?></option>
          <? } else { ?>
            <option value="<?= $key ?>"><?= $privacy_type ?></option>
          <? } ?>
      <? } ?>
    </select>

    <input type="hidden" name="collectionID" value="<?= $collection->collectionID ?>" >
    <input type="submit" name="update" value="Update" />

  </form>

<? } ?>
