<div class="container">
  <h2>List of Blog</h2>

  <p>Number of blogs: <?= count($blogs) ?></p>
  <? if (count($blogs) > 0) { ?>
    <table>
      <tbody>
        <tr>
          <td>blogID</td>
          <td>userID</td>
          <td>Name</td>
          <td>Created At</td>
        </tr>
        <?php foreach ($blogs as $blog) { ?>
            <tr>
                <td><?= $blog->blogID ?></td>
                <td><?= $blog->userID ?></td>
                <td><?= $blog->name ?></td>
                <td><?= $blog->CREATED_AT ?></td>
                <td>
                  <a href="<?= URL; ?>blog/<?= $blog->blogID ?>">
                    View Blog
                  </a>
                </td>
            </tr>
        <?php } ?>
      </tbody>
    </table>
  <? } ?>
</div>
