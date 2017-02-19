<?php

require_once APP . 'model/comment.php';

class CommentController
{

  public function create()
  {
    if (isset($_POST['submit'])) {
      $photoID = $_POST['photoID'];
      $content = $_POST['content'];

      // insert into database
      $model = new Comment();
      $result = $model->create($current_user->userID,
                              $photoID,
                              $content);
      if ($result) {
        $_SESSION['message'] = 'Comment added successfully';
        Redirect(URL . 'photo/' . $photoID);
      } else {
        $_SESSION['message'] = 'Fail to add comment';
        Redirect(URL . 'photo/' . $photoID);
      }

    } else {
      $_SESSION['message'] = 'Missing required POST header';
      Redirect(URL);
    }
  }

}

?>
