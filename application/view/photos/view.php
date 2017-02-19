<div class="container">
  <? if ($photo != NULL) { ?>
    <h2>View Image</h2>
    <p>
      Image at <?= $photo->path ?> in
      <a href="<?= URL; ?>collection/<?= $photo->collectionID ?>">collection <?= $photo->collectionID ?></a>,
       uploaded by userID = <?= $photo->userID ?>

       <p>Number of comments: <?= count($photo_comments) ?></p>
       <? if (count($photo_comments) > 0) { ?>
         <?php foreach ($photo_comments as $comment) { ?>
           <li><?= $comment->content ?> written by userID = <?= $comment->userID ?></li>
         <?php } ?>
       <? } ?>

       <? require APP . 'view/comments/form.php'; ?>

    </p>
  <? } else { ?>
      <p>Image with id = <?= $photoID ?> doesn't exist!</p>
  <? } ?>
</div>
