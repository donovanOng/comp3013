<?php

require_once APP . 'core/model.php';

class Collection extends Model
{
  public function find_user_collection($userID)
  {
    $sql = "SELECT *
            FROM photoCollection
            WHERE userID = :userID";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function find_by_id($collectionID)
  {
    $sql = "SELECT *
            FROM photoCollection
            WHERE collectionID = :collectionID";

    $query = $this->db->prepare($sql);
    $params = array(':collectionID' => $collectionID);
    $query->execute($params);
    return $query->fetch();
  }

  public function find_friends($collection_userID){
    $sql = "SELECT U.userID
              FROM relationship R, user U
              WHERE
              CASE
                WHEN R.userID = :collection_userID THEN R.userID_2 = U.userID
                WHEN R.userID_2 = :collection_userID THEN R.userID = U.userID
              END
              AND status = 0";
    $query = $this->db->prepare($sql);
    $params = array(':collection_userID' => $collection_userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function find_friends_of_friends($collection_userID){
    $sql = "SELECT userID 
            FROM relationship 
            WHERE STATUS = 0 AND userID_2 = :collection_userID
            UNION 
            SELECT userID_2 
            FROM relationship 
            WHERE STATUS = 0 AND userID = :collection_userID 
            UNION
            SELECT userID 
            FROM relationship 
            WHERE userID != :collection_userID AND status = 0 AND userID_2 IN (
                SELECT userID 
                FROM relationship 
                WHERE STATUS = 0 AND userID_2 = :collection_userID 
                UNION
                SELECT userID_2 
                FROM relationship 
                WHERE STATUS = 0 AND userID = :collection_userID
                )
            UNION 
            SELECT userID_2 
            FROM relationship 
            WHERE userID_2 != :collection_userID AND STATUS = 0 AND userID IN ( 
                SELECT userID 
                FROM relationship 
                WHERE STATUS=0 AND userID_2 = :collection_userID 
                UNION
                SELECT userID_2 
                FROM relationship 
                WHERE STATUS = 0 AND userID = :collection_userID
                )";
    $query = $this->db->prepare($sql);
    $params = array(':collection_userID' => $collection_userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function find_circle_members_access($collectionID){
    $sql = "SELECT DISTINCT c.userID 
            FROM circleFriends AS c, photoCollectionAccessRights AS p 
            WHERE c.circleID = p.circleID AND p.collectionID = :collectionID";
    $query = $this->db->prepare($sql);
    $params = array(':collectionID' => $collectionID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function access_collection($userID)
  {
    $sql = "SELECT *  
            FROM photocollection
            WHERE (
              accessRights = 0 AND userID IN (
                SELECT U.userID 
                FROM relationship R, user U 
                WHERE 
                CASE 
                  WHEN R.userID = :userID THEN R.userID_2 = U.userID 
                  WHEN R.userID_2 = :userID THEN R.userID = U.userID 
                END 
                AND status = 0
              )
            ) 
            OR (
              accessRights = :userID AND userID IN (
                SELECT userID 
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
                  WHERE STATUS = 0 AND userID_2 = :userID 
                  UNION 
                  SELECT userID_2 
                  FROM relationship 
                  WHERE STATUS = 0 AND userID = :userID
                )
              )
            ) 
            OR (accessRights = 2) 
            AND userID != :userID
            UNION
            SELECT DISTINCT pc.* 
            FROM photocollectionaccessrights AS pcar, circlefriends AS cf, photocollection as pc
            WHERE cf.circleID = pcar.circleID AND pc.collectionID = pcar.collectionID AND cf.userID = :userID AND pc.userID != :userID
            ORDER BY collectionID";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }


  public function find_colllection_photos($collectionID)
  {
    $sql = "SELECT *
            FROM photo
            WHERE collectionID = :collectionID";

    $query = $this->db->prepare($sql);
    $params = array(':collectionID' => $collectionID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function find_all_user_circles($userID)
  {
    $sql = "SELECT DISTINCT c.* 
            FROM circle AS c, circlefriends AS cf, photocollection as pc 
            WHERE cf.circleID = c.circleID AND pc.userID = cf.userID AND cf.userID = :userID";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function find_access_circles($collectionID)
  {
    $sql = "SELECT * 
            FROM photocollectionaccessrights 
            WHERE collectionID = :collectionID";

    $query = $this->db->prepare($sql);
    $params = array(':collectionID' => $collectionID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function create($userID)
  {
    $sql = "INSERT INTO photoCollection (userID)
            VALUES (:userID)";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    return $query->execute($params); // boolean result
  }

  public function delete($collectionID, $userID)
  {
    $sql = "DELETE FROM photoCollection
            WHERE collectionID = :collectionID AND userID = :userID";

    $query = $this->db->prepare($sql);
    $params = array(':collectionID' => $collectionID,
                    ':userID' => $userID);
    return $query->execute($params); // boolean result
  }

  public function update_collection_rights($collectionID, $userID, $accessRights)
  {
    $sql = "UPDATE photoCollection
            SET accessRights = :accessRights
            WHERE userID = :userID AND collectionID = :collectionID";

    $query = $this->db->prepare($sql);
    $params = array(':accessRights' => $accessRights,
                    ':collectionID' => $collectionID,
                    ':userID' => $userID);
    return $query->execute($params); // boolean result
  }

  public function insert_access_circles($collectionID, $circleID)
  {
    $sql = "INSERT INTO photocollectionaccessrights (collectionID, circleID) 
            VALUES (:collectionID, :circleID)";

    $query = $this->db->prepare($sql);
    $params = array(':collectionID' => $collectionID,
                    ':circleID' => $circleID);
    return $query->execute($params); // boolean result
  }

  public function delete_access_circles($collectionID, $circleID)
  {
    $sql = "DELETE FROM photocollectionaccessrights 
            WHERE collectionID=:collectionID AND circleID = :circleID";

    $query = $this->db->prepare($sql);
    $params = array(':collectionID' => $collectionID,
                    ':circleID' => $circleID);
    return $query->execute($params); // boolean result
  }
}

?>
