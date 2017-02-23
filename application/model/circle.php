<?php

require_once APP . 'core/model.php';

class Circle extends Model
{
  public function find_user_circle_admin($userID)
  {
    // Circles that I manage
    $sql = "SELECT *
            FROM circle
            WHERE userID = :userID";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function find_user_circle_member($userID)
  {
    //Circles that I belong to but do not manage
    $sql = "SELECT c.* 
            FROM circle as c, circlefriends as cf 
            WHERE cf.userID = :userID 
            AND cf.circleID = c.circleID
            AND c.circleID NOT IN (
              SELECT circleID 
              FROM circle 
              WHERE userID = :userID 
            )";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

}

?>
