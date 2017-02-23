<?php

require_once APP . 'core/model.php';

class Message extends Model
{

  public function create($userID, $circleID, $content)
  {
    $sql = "INSERT INTO message (userID, circleID, content)
            VALUES (:userID, :circleID, :content)";
            
    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID,
                     ':circleID' => $circleID,               
                    ':content' => $content);
    return $query->execute($params); // boolean result
  }

}

?>
