<? if ($this->current_userID == $collection->userID) { ?>

  <!-- Only collection's owner can edit rights -->
  <form action="<?php echo URL; ?>collection/update" method="POST">
    <label>Access Rights: </label>
    <select name="accessRights" id="accessRights">
      <? foreach($privacy as $key=>$privacy_type) { ?>
          <? if ($key == $collection->accessRights) { ?>
            <option selected value="<?= $key ?>"><?= $privacy_type ?></option>
          <? } else { ?>
            <option value="<?= $key ?>"><?= $privacy_type ?></option>
          <? } ?>
      <? } ?>
    </select>
    <div <?php if ($collection->accessRights==2) { ?> style="display: none;" <? } ?> >
      <br>
      <label>Circles: </label>
      <br>
      <? foreach($all_user_circles as $circle) { ?>
        <input type="checkbox" name="accessCircles[]" value="<?= $circle->circleID ?>" <? if(in_array_field($circle->circleID, 'circleID', $current_access_circles)){ ?> checked <? } ?> >
          <?= $circle->name ?>
        <br>
      <? } ?>
    </div>

    <input type="hidden" name="collectionID" value="<?= $collection->collectionID ?>" >
    <input type="submit" name="update" value="Update" />

  </form>

<? } ?>
