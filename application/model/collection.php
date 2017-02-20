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

  public function find_users_with_collection_access($collection_userdID, $privacy)
  {
    if ($privacy == 0) {
      // Friends and accepted
      $sql = "SELECT R.status, U.userID, U.first_name
              FROM relationship R, user U
              WHERE
              CASE
                WHEN R.userID = :collection_userdID THEN R.userID_2 = U.userID
                WHEN R.userID_2 = :collection_userdID THEN R.userID = U.userID
              END
              AND status = 0";

      $query = $this->db->prepare($sql);
      $params = array(':collection_userdID' => $collection_userdID);
      $query->execute($params);
      return $query->fetchAll();

    } elseif ($privacy == 1) {
      // Friends and Friends of friends
      echo 'Error - FOF SQL not done!';
      return NULL;
    }
  }


  public function find_colllection_photos($collectionID)
  {
    $sql = "SELECT * FROM photo
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

  public function update_collection_rights($collectionID, $userID, $uploadRights, $viewRights)
  {
    $sql = "UPDATE photoCollection
            SET uploadRights = :uploadRights, viewRights = :viewRights
            WHERE userID = :userID AND collectionID = :collectionID";
            
    $query = $this->db->prepare($sql);
    $params = array(':uploadRights' => $uploadRights,
                    ':viewRights' => $viewRights,
                    ':collectionID' => $collectionID,
                    ':userID' => $userID);
    return $query->execute($params); // boolean result
  }


}

?>
