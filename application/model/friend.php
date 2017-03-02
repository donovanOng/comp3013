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

  public function find_friends_of_friends($userID){
    $sql = "SELECT userID 
            FROM relationship 
            WHERE STATUS = 0 AND userID_2 = :userID
            UNION 
            SELECT userID_2 
            FROM relationship 
            WHERE STATUS = 0 AND userID = :userID 
            UNION
            SELECT userID 
            FROM relationship 
            WHERE userID != :userID AND status = 0 AND userID_2 IN (
                SELECT userID 
                FROM relationship 
                WHERE STATUS = 0 AND userID_2 = :userID 
                UNION
                SELECT userID_2 
                FROM relationship 
                WHERE STATUS = 0 AND userID = :userID
                )
            UNION 
            SELECT userID_2 
            FROM relationship 
            WHERE userID_2 != :userID AND STATUS = 0 AND userID IN ( 
                SELECT userID 
                FROM relationship 
                WHERE STATUS=0 AND userID_2 = :userID 
                UNION
                SELECT userID_2 
                FROM relationship 
                WHERE STATUS = 0 AND userID = :userID
                )";
    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function find_friend_req_sent($userID)
  {
    $sql = "SELECT *
            FROM user
            WHERE userID IN (
              SELECT userID_2
              FROM relationship
              WHERE STATUS = 1
              AND userID = :userID
            )";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function find_friend_req_received($userID)
  {
    $sql = "SELECT *
            FROM user
            WHERE userID IN (
              SELECT userID
              FROM relationship
              WHERE STATUS = 1
              AND userID_2 = :userID
            )";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
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

  public function friendship_initiator($userID, $userID_2)
  {
    $sql = "SELECT userID
            FROM relationship
            WHERE relationshipID =  (SELECT relationshipID
                                     FROM relationship
                                     WHERE (userID = :userID AND userID_2 = :userID_2)
                                     OR (userID = :userID_2  AND userID_2 = :userID)
                                    )
            ";

      $query = $this->db->prepare($sql);
      $params = array(':userID' => $userID,
                      ':userID_2' => $userID_2);
      $query->execute($params);
      return $query->fetch();
  }



  public function add_friends($userID, $userID_2, $status)
  {
    $sql = "INSERT INTO relationship (userID, userID_2, status)
            VALUES (:userID, :userID_2, :status)";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID,
                    ':userID_2' => $userID_2,
                    ':status' => $status);
    return $query->execute($params); // boolean result
  }

  public function accept_friendship($userID, $userID_2)
  {
    $sql = " UPDATE relationship AS r,
              (SELECT relationshipID
                FROM relationship
                WHERE (userID = :userID AND userID_2 = :userID_2)
                OR (userID = :userID_2  AND userID_2 =:userID)
     					) AS  q
             SET status = 0
             WHERE r.relationshipID = q.relationshipID
          ";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID,
                    ':userID_2' => $userID_2);
    return $query->execute($params); // boolean result
  }

  public function reject_friendship($userID, $userID_2)
  {
    $sql = "DELETE FROM relationship
            WHERE relationshipID = (SELECT relationshipID
                                    FROM
                                      (SELECT relationshipID
                                      FROM relationship
                                      WHERE (userID = :userID AND userID_2 = :userID_2)
                                      OR (userID = :userID_2  AND userID_2 = :userID)
                                      )a
                                  )
          ";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID,
                    ':userID_2' => $userID_2);
    return $query->execute($params); // boolean result
  }
}

?>
