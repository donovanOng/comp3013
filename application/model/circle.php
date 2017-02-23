<?php

require_once APP . 'core/model.php';

class Circle extends Model
{

  public function find_user_circle($userID)
  {
    $sql = "SELECT *
            FROM circle
            WHERE userID = :userID";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function find_message_by_circleID($circleID)
  {
    $sql = "SELECT *
            FROM message
            WHERE circleID = :circleID";

    // TODO: Join user and blog to get detailed information

    $query = $this->db->prepare($sql);
    $params = array(':circleID' => $circleID);
    $query->execute($params);
    return $query->fetchAll();
  }

}

?>
