<? if ($friends_not_members != NULL && count($friends_not_members > 0)) { ?> 
<form action="<?php echo URL; ?>circle/add_member" method="POST">

  <select name="userID">
    <? foreach($friends_not_members as $friend) { ?>
      <option value="<?= $friend ?>"><?=  $friend ?></option>
    <? } ?>
  </select>

  <input type="hidden" name="circleID" value="<?= $circleID ?>" >
  <input type="submit" name="add" value="Add Member" />

</form>
<? } ?>
