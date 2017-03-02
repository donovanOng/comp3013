<?php

require_once APP . 'core/model.php';

class Blog extends Model
{

  public function find_user_blog($userID)
  {
    $sql = "SELECT *
            FROM blog
            WHERE userID = :userID";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function create($userID, $name)
  {
    $sql = "INSERT INTO blog (userID, name)
            VALUES (:userID, :name)";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID,
                    ':name' => $name);
    return $query->execute($params); // boolean result
  }

  public function find_by_name($name)
  {
    $sql = "SELECT *
            FROM blog
            WHERE name LIKE :name";

    $query = $this->db->prepare($sql);
    $params = array(':name' => "%" . $name . "%");
    $query->execute($params);
    return $query->fetchAll();
  }

  public function find_blog_posts($blogID)
  {
    $sql = "SELECT *
            FROM post
            WHERE blogID = :blogID";

    $query = $this->db->prepare($sql);
    $params = array(':blogID' => $blogID);
    $query->execute($params);
    return $query->fetchAll();
  }

}

?>
