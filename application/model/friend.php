<?php

require_once APP . 'core/model.php';

class Friend extends Model
{

  public function find_user_friend($userID)
  {
    $sql = "SELECT *
            FROM user
            WHERE userID IN (
              SELECT userID_friend
              FROM friends
              WHERE userID_user = :userID
            )";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function find_friends_of_friends($userID){
    $sql = "SELECT userID_friendOfFriend
            FROM friendAndFriendsOfFriends
            WHERE userID_user = :userID";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function recommend_friends_based_on_mutual_friends($userID)
  {
    $sql = "SELECT userID_friendOffriend as userID, count(*) as rank
            FROM friendandfriendsoffriends
            WHERE userID_user = :userID 
            AND userID_friendOffriend NOT IN (
            SELECT userID
              FROM relationship
              WHERE userID_2 = :userID
              UNION
              SELECT userID_2
              FROM relationship
              WHERE userID = :userID )
            GROUP BY userID_friendOfFriend
            ORDER BY rank DESC
            ";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function recommend_friends_based_on_photos_liked($userID)
  {
    $sql = "SELECT *
            FROM (SELECT similar.userID userID, count(*) rank
              FROM annotation target
              JOIN annotation similar
              	ON target.photoID = similar.photoID
                  AND target.userID != similar.userID
              WHERE target.userID = :userID
              GROUP BY similar.userID
              ORDER BY rank DESC) as temp_friends
            WHERE userID NOT IN (
              SELECT userID
              FROM relationship
              WHERE userID_2 = :userID
              UNION
              SELECT userID_2
              FROM relationship
              WHERE userID = :userID
            ) AND userID != :userID";

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

  public function friendship_initiator($userID, $userID_2)
  {
    $sql = "SELECT userID
            FROM relationship
            WHERE relationshipID =
              (SELECT relationshipID
               FROM relationship
               WHERE (userID = :userID AND userID_2 = :userID_2)
                OR (userID = :userID_2  AND userID_2 = :userID)
              )";

      $query = $this->db->prepare($sql);
      $params = array(':userID' => $userID,
                      ':userID_2' => $userID_2);
      $query->execute($params);
      return $query->fetch();
  }

  public function add_friend($userID, $userID_2, $status)
  {
    $timestamp = date("Y-m-d H:i:s");
    $sql = "INSERT INTO relationship (userID, userID_2, status, CREATED_AT)
            VALUES (:userID, :userID_2, :status, '$timestamp')";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID,
                    ':userID_2' => $userID_2,
                    ':status' => $status);
    return $query->execute($params); // boolean result
  }

  public function accept_friendship($userID, $userID_2)
  {
    $timestamp = date("Y-m-d H:i:s");
    $sql = " UPDATE relationship AS r,
              (SELECT relationshipID
                FROM relationship
                WHERE (userID = :userID AND userID_2 = :userID_2)
                OR (userID = :userID_2  AND userID_2 =:userID)
     					) AS  q
             SET status = 0,
             UPDATED_AT = '$timestamp'
             WHERE r.relationshipID = q.relationshipID";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID,
                    ':userID_2' => $userID_2);
    return $query->execute($params); // boolean result
  }

  public function reject_friendship($userID, $userID_2)
  {
    $sql = "DELETE FROM relationship
            WHERE relationshipID =
              (SELECT relationshipID
               FROM
                (SELECT relationshipID
                FROM relationship
                WHERE (userID = :userID AND userID_2 = :userID_2)
                  OR (userID = :userID_2  AND userID_2 = :userID)
                ) a
              )";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID,
                    ':userID_2' => $userID_2);
    return $query->execute($params); // boolean result
  }

}
?>
