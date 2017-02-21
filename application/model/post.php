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

}

?>
