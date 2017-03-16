<div class="p-4">
  <p>
    <a href="<?php echo URL . $userID ?>">< Back to <?php echo user_name($userID) ?></a>
  </p>
  <h5><?php echo "Importing: " . $xml_filename; ?></h5>
  <div class="bg-faded p-3 small">
    <?php if (count($action_result) > 0) { ?>
      <?php foreach($action_result as $result) { ?>
        <li><?php echo $result ?></li>
      <?php } ?>
    <?php } else  { ?>
      <p class="mb-0">No record was imported.</p>
    <?php } ?>
  </div>
</div>
