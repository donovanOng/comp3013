<?php

require APP . 'core/model.php';

class Collection extends Model
{
  public function find_user_collection($userID)
  {
    $sql = "SELECT * FROM photoCollection WHERE userID = :userID";
    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function find_by_id($collectionID)
  {
    $sql = "SELECT * FROM photoCollection WHERE collectionID = :collectionID";
    $query = $this->db->prepare($sql);
    $params = array(':collectionID' => $collectionID);
    $query->execute($params);
    return $query->fetch();
  }

  public function find_colllection_photos($collectionID)
  {
    $sql = "SELECT * FROM photo WHERE collectionID = :collectionID";
    $query = $this->db->prepare($sql);
    $params = array(':collectionID' => $collectionID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function create($userID)
  {
    #TODO insert collection to TABLE
  }

  public function update_upload_rights($collectionID)
  {

  }

  public function update_view_rights($collectionID)
  {

  }

}

?>
