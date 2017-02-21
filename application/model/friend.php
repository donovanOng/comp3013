<?php

require_once APP . 'core/model.php';

class Friend extends Model
{

  public function find_user_friend($userID)
  {
    $sql = "SELECT *
            FROM relationship
            WHERE userID = :userID";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

}

?>
