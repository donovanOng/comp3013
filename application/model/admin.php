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
            WHERE first_name LIKE :name
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

  public function update_or_insert($table, $columns, $values, $update)
  {
    $primaryKey = $columns[0];
    $primaryKeyValue = $values[0];

    $data_exist = 0;

    if ($table != 'annotation') {
      $sql = "SELECT *
              FROM $table
              WHERE $primaryKey = $primaryKeyValue
              LIMIT 1";
      $query = $this->db->prepare($sql);
      $query->execute();
      $data_exist = $query->fetch();
      if ($data_exist) {
        $update_sql = 'UPDATE ' . $table . ' SET '. implode(", ", $update) . ' WHERE ' . $primaryKey . '=' . $primaryKeyValue;
        $query = $this->db->prepare($update_sql);
        return 'update: ' . $query->execute(); // boolean result
      } else {
        $insert_query = 'INSERT INTO ' . $table . ' ('. implode(", ", $columns) . ') VALUES (' . implode(", ", $values) . ')';
        $query = $this->db->prepare($insert_query);
        return 'insert: ' . $query->execute(); // boolean result
      }
    } else {
      $sql = "SELECT *
              FROM $table
              WHERE $columns[0] = $values[0]
                AND $columns[1] = $values[1]
              LIMIT 1";
      $query = $this->db->prepare($sql);
      $query->execute();
      $data_exist = $query->fetch();
      if (!$data_exist) {
        $insert_query = 'INSERT INTO ' . $table . ' ('. implode(", ", $columns) . ') VALUES (' . implode(", ", $values) . ')';
        $query = $this->db->prepare($insert_query);
        return $query->execute(); // boolean result
      } else {
        return 'data already exist';
      }
    }
  }

}
?>
