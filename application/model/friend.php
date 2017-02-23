<?php

require_once APP . 'core/model.php';

class Friend extends Model
{

  public function find_user_friend($userID, $status)
  {
    $sql = "SELECT * 
            FROM user
            WHERE userID IN (
              SELECT userID 
              FROM relationship 
              WHERE STATUS = :status 
              AND userID_2 = :userID
              UNION
              SELECT userID_2 
              FROM relationship 
              WHERE STATUS = :status 
              AND userID = :userID
            )";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID, 
                    ':status' => $status);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function find_user_friend_ID($userID, $status)
  {
    $sql = "SELECT userID 
            FROM relationship 
            WHERE STATUS = :status 
            AND userID_2 = :userID
            UNION
            SELECT userID_2 
            FROM relationship 
            WHERE STATUS = :status 
            AND userID = :userID";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID, 
                    ':status' => $status);
    $query->execute($params);
    return $query->fetchAll();
  }
}

?>
