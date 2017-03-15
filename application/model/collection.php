<?php

require_once APP . 'core/model.php';

class Collection extends Model
{
  public function find_user_collection($userID)
  {
    $sql = "SELECT pc.collectionID, pc.accessRights, pc.userID, pc.name,
                   count(p.path) noOfPhotos, p.path coverPhoto
            FROM photoCollection pc
            LEFT JOIN
              (SELECT *
                FROM photo
                ORDER BY CREATED_AT DESC
              ) AS p
              ON pc.collectionID = p.collectionID
            WHERE pc.userID = :userID
            GROUP BY pc.collectionID";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function find_by_id($collectionID)
  {
    $sql = "SELECT a.collectionID, a.accessRights, a.userID, a.name,
                   count(*) noOfPhotos
            FROM photoCollection a
            LEFT JOIN photo p
                  ON a.collectionID = p.collectionID
            WHERE a.collectionID = :collectionID
            GROUP BY a.collectionID";

    $query = $this->db->prepare($sql);
    $params = array(':collectionID' => $collectionID);
    $query->execute($params);
    return $query->fetch();
  }

  public function find_circle_members_access($collectionID){
    $sql = "SELECT DISTINCT c.userID
            FROM circleFriends AS c, photoCollectionAccessRights AS p
            WHERE c.circleID = p.circleID
              AND p.collectionID = :collectionID";

    $query = $this->db->prepare($sql);
    $params = array(':collectionID' => $collectionID);
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
            FROM circle AS c, circleFriends AS cf, photoCollection as pc
            WHERE cf.circleID = c.circleID
              AND pc.userID = cf.userID
              AND cf.userID = :userID";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function find_access_circles($collectionID)
  {
    $sql = "SELECT *
            FROM photoCollectionAccessRights
            WHERE collectionID = :collectionID";

    $query = $this->db->prepare($sql);
    $params = array(':collectionID' => $collectionID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function create($userID, $name)
  {
    $timestamp = date("Y-m-d H:i:s");
    $sql = "INSERT INTO photoCollection (userID, name,CREATED_AT)
            VALUES (:userID, :name, '$timestamp')";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID,
                    ':name'   => $name);
    return $query->execute($params); // boolean result
  }

  public function delete($collectionID, $userID)
  {
    $sql = "DELETE FROM photoCollection
            WHERE collectionID = :collectionID
              AND userID = :userID";

    $query = $this->db->prepare($sql);
    $params = array(':collectionID' => $collectionID,
                    ':userID' => $userID);
    return $query->execute($params); // boolean result
  }

  public function update_collection_rights($collectionID, $userID, $accessRights)
  {
    $timestamp = date("Y-m-d H:i:s");
    $sql = "UPDATE photoCollection
            SET accessRights = :accessRights,
                UPDATED_AT = '$timestamp'
            WHERE userID = :userID
              AND collectionID = :collectionID";

    $query = $this->db->prepare($sql);
    $params = array(':accessRights' => $accessRights,
                    ':collectionID' => $collectionID,
                    ':userID' => $userID);
    return $query->execute($params); // boolean result
  }

  public function insert_access_circles($collectionID, $circleID)
  {
    $timestamp = date("Y-m-d H:i:s");
    $sql = "INSERT INTO photoCollectionAccessRights (collectionID, circleID, CREATED_AT)
            VALUES (:collectionID, :circleID, '$timestamp')";

    $query = $this->db->prepare($sql);
    $params = array(':collectionID' => $collectionID,
                    ':circleID' => $circleID);
    return $query->execute($params); // boolean result
  }

  public function delete_access_circles($collectionID, $circleID)
  {
    $sql = "DELETE FROM photoCollectionAccessRights
            WHERE collectionID=:collectionID
              AND circleID = :circleID";

    $query = $this->db->prepare($sql);
    $params = array(':collectionID' => $collectionID,
                    ':circleID' => $circleID);
    return $query->execute($params); // boolean result
  }

  public function update_collection_name($collectionID, $name)
  {
    $timestamp = date("Y-m-d H:i:s");
    $sql = "UPDATE photoCollection
            SET name = :name,
                UPDATED_AT = '$timestamp'
            WHERE (collectionID = :collectionID)";

    $query = $this->db->prepare($sql);
    $params = array(':collectionID' => $collectionID,
                    ':name' => $name);
    return $query->execute($params); // boolean result
  }
}
?>
