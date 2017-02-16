<?php

require APP . 'core/model.php';

class Comment extends Model
{

  public function create($userID, $photoID, $comment)
  {
    $sql = "INSERT INTO comment (userID, photoID, content) VALUES (:userID, :photoID, :content)";
    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID,
                    ':photoID' => $photoID,
                    ':content' => $comment);
    return $query->execute($params); // boolean result
  }

}

?>
