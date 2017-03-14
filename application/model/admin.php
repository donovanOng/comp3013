<?php

require_once APP . 'core/model.php';

class Admin extends Model
{

  public function is_admin($userID)
  {
    $sql = "SELECT userID
            FROM user
            WHERE userID = :userID AND admin = '1'
            LIMIT 1";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetch();
  }

  public function get_user_table($search_query)
  {
    $sql = "SELECT *
            FROM user
            WHERE
              first_name LIKE :name
              OR last_name LIKE :name
              OR CONCAT(first_name, ' ', last_name) LIKE :name";

    $query = $this->db->prepare($sql);
    $params = array(':name' => $search_query . '%');
    $query->execute($params);
    return $query->fetchAll();
  }

  public function get_user_rows($userID, $table)
  {
    $sql = "SELECT *
            FROM $table
            WHERE userID = :userID";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function get_user_posts($userID)
  {
    $sql = "SELECT *
            FROM post p
            JOIN blog b
              ON b.blogID = p.blogID
            WHERE b.userID = :userID";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function get_user_relationship($userID)
  {
    $sql = "SELECT *
            FROM relationship
            WHERE userID = :userID
              OR userID_2 = :userID";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetchAll();
  }

  public function delete($table, $tableID, $id)
  {
    $sql = "DELETE FROM $table
            WHERE $tableID = :ID";

    $query = $this->db->prepare($sql);
    $params = array(':ID' => $id);
    return $query->execute($params); // boolean result
  }

}
?>
