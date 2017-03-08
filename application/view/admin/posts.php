<table class="table table-hover">
  <thead>
      <tr>
          <th>postID</th>
          <th>blogID</th>
          <th>Title</th>
          <th>Body</th>
      </tr>
  </thead>
  <tbody>
    <?php foreach ($posts as $post) {
    ?>
      <tr>
        <th scope="row"><?= $post->postID ?></th>
        <td><?= $post->blogID ?></td>
        <td><?= $post->title ?></td>
        <td><?= $post->body ?></td>
        <td class="text-right">
          <button type="button" class="btn-link" data-toggle="modal" data-target="#editPost<?= $post->postID ?>">
            Edit
          </button>
          <a href="<?= URL ?>admin/delete_post?postID=<?= $post->postID ?>" class="btn-link">Delete</a>
        </td>
      </tr>
      <?php require APP . 'view/admin/edit_post.php'; ?>
    <?php } ?>
  </tbody>
</table>
