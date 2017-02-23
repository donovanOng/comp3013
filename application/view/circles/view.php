<div class="container">
  <? if ($message != NULL) { ?>
    <h2>Messages</h2>
    <p>

       <p>Number of messages: <?= count($message) ?></p>
       <? if (count($message) > 0) { ?>
         <?php foreach ($message as $mes) { ?>
           <li><?= $mes->content ?> written by userID = <?= $mes->userID ?></li>
         <?php } ?>
       <? } ?>

       <? //require APP . 'view/comments/form.php'; ?>

    </p>
  <? } ?>

</div>
