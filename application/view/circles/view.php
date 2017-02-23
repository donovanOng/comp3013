<div class="container">

  <h2><?= $circle->name ?> by <?= $circle->userID ?></h2>
  <? if ($messages != NULL) { ?>
    <h3>Messages</h3>
    <p>

       <p>Number of messages: <?= count($messages) ?></p>
       <? if (count($messages) > 0) { ?>
         <?php foreach ($messages as $message) { ?>
           <li><?= $message->content ?> written by userID = <?= $message->userID ?></li>
         <?php } ?>
       <? } ?>

       <? //require APP . 'view/comments/form.php'; ?>

    </p>
  <? } ?>

  <? if ($members != NULL) { ?>
    <h3>Members</h3>
    <p>
       <p>Number of members: <?= count($members) ?></p>
       <? if (count($members) > 0) { ?>
         <?php foreach ($members as $member) { ?>
           <li>
             User <?= $member->userID ?>
             <a href="<?= URL . 'circle/remove_member?userID=' . $member->userID . '&circleID=' . $circleID ?>">
               Remove
             </a>
           </li>
         <?php } ?>
       <? } ?>
    </p>
  <? } ?>

</div>
