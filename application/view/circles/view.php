<div class="container">

  <h2><?= $circle->name ?> by <?= $circle->userID ?></h2>

  <h3>Messages</h3>
  <? if ($messages != NULL) { ?>
     <p>Number of messages: <?= count($messages) ?></p>
     <? if (count($messages) > 0) { ?>
       <?php foreach ($messages as $message) { ?>
         <li><?= $message->content ?> written by userID = <?= $message->userID ?></li>
       <?php } ?>
     <? } ?>
  <? } ?>

  <br>

  <? require APP . 'view/messages/form.php'; ?>

  <h3>Members</h3>
  <? require APP . 'view/circles/add_member.php'; ?>

  <? if ($members != NULL) { ?>
     <p>Number of members: <?= count($members) ?></p>
     <? if (count($members) > 0) { ?>
       <?php foreach ($members as $member) { ?>
         <li>
           User <?= $member->userID ?>
           <? if ($member->userID != $circle->userID) { ?>
             <a href="<?= URL . 'circle/remove_member?userID=' . $member->userID . '&circleID=' . $circleID ?>">
               Remove
             </a>
           <? } ?>
         </li>
       <?php } ?>
     <? } ?>
  <? } ?>

</div>
