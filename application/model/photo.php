<?php

require_once APP . 'core/model.php';

class Photo extends Model
{
  public function find_user_photos($userID)
  {
    $sql = "SELECT * FROM photo WHERE userID = :userID";
    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }


  public function find_by_id($photoID)
  {
    $sql = "SELECT * FROM photo WHERE photoID = :photoID";
    $query = $this->db->prepare($sql);
    $params = array(':photoID' => $photoID);
    $query->execute($params);
    return $query->fetch();
  }


  public function find_photo_comments($photoId)
  {
    $sql = "SELECT * FROM comment WHERE photoId = :photoId";
    $query = $this->db->prepare($sql);
    $params = array(':photoId' => $photoId);
    $query->execute($params);
    return $query->fetchAll();
  }


  public function create($userID, $collectionID,  $path)
  {
    $sql = "INSERT INTO photo (userID, collectionID, path) VALUES (:userID, :collectionID, :path)";
    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID,
                    ':collectionID' => $collectionID,
                    ':path' => $path);
    return $query->execute($params); // boolean result
  }


}

?>
