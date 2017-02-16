<?php

require APP . 'model/comment.php';

class CommentController
{

  public function create()
  {
    if (isset($_SESSION['current_user'])) {
      $current_user = $_SESSION['current_user'];

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
          header('location: ' . URL . 'photo/browse/' . $photoID);
        } else {
          $_SESSION['message'] = 'Fail to add comment';
          header('location: ' . URL . 'photo/browse/' . $photoID);
        }

      }

    } else {
      $_SESSION['message'] = 'Not logged in!';
      header('location: ' . URL);
    }
  }

}

?>
