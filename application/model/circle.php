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

}

?>
