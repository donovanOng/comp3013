<?php

require_once APP . 'core/model.php';

class Post extends Model
{

  public function find_by_id($postID)
  {
    $sql = "SELECT *
            FROM post
            WHERE postID = :postID";

    // TODO: Join user and blog to get detailed information

    $query = $this->db->prepare($sql);
    $params = array(':postID' => $postID);
    $query->execute($params);
    return $query->fetch();
  }

  public function create($blogID, $title, $body)
  {
    $sql = "INSERT INTO post (blogID, title, body)
            VALUES (:blogID, :title, :body)";

    $query = $this->db->prepare($sql);
    $params = array(':blogID' => $blogID,
                    ':title' => $title,
                    ':body' => $body);
    return $query->execute($params); // boolean result
  }

  public function delete($postID)
  {
    $sql = "DELETE FROM post
            WHERE postID = :postID";

    $query = $this->db->prepare($sql);
    $params = array(':postID' => $postID);
    return $query->execute($params); // boolean result
  }

}

?>
