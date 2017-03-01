<?php

require_once APP . 'core/model.php';

class User extends Model
{
  public function get_all()
  {
    // TODO: limit field retrieved
    $sql = "SELECT *
            FROM user";

    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function authenticate_user($email, $password)
  {
    $sql = "SELECT userID, first_name, last_name
            FROM user
            WHERE email = :email AND password = :password
            LIMIT 1";

    $query = $this->db->prepare($sql);
    $params = array(':email' => $email,
                    ':password' => $password);
    $query->execute($params);
    return $query->fetch();
  }

  public function find_by_id($userID)
  {
    $sql = "SELECT first_name, last_name, userID
            FROM user
            WHERE userID = :userID
            LIMIT 1";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetch();
  }

  public function find_by_email($email)
  {
    $sql = "SELECT *
            FROM user
            WHERE email = :email
            LIMIT 1";

    $query = $this->db->prepare($sql);
    $params = array(':email' => $email);
    $query->execute($params);
    return $query->fetch();
  }

  public function find_by_name($name)
  {
    $sql = "SELECT *
            FROM user
            WHERE first_name LIKE :name
            OR last_name LIKE :name
            OR CONCAT(first_name, ' ', last_name) LIKE :name";

    $query = $this->db->prepare($sql);
    $params = array(':name' => $name . '%');
    $query->execute($params);
    return $query->fetchAll();
  }

  public function is_friend($userID,$userID_2)
  {
    $sql = "SELECT status
            FROM relationship
            WHERE (userID = :userID AND userID_2 = :userID_2)
            OR (userID = :userID_2  AND userID_2 = :userID)
          ";
    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID,
                    ':userID_2' => $userID_2);
    $query->execute($params);
    return $query->fetch();
  }


  public function create($first_name, $last_name, $email, $password)
  {
    $sql = "INSERT INTO user (first_name, last_name, email, password)
            VALUES (:first_name, :last_name, :email, :password)";

    $query = $this->db->prepare($sql);
    $params = array(':first_name' => $first_name,
                    ':last_name' => $last_name,
                    ':email' => $email,
                    ':password' => $password);
    return $query->execute($params); // boolean result
  }

  public function fetch_profile($userID)
  {
    $sql = "SELECT *
            FROM profile
            WHERE (userID = :userID)";
    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetch();
  }

  public function update()
  {

  }

  public function delete()
  {

  }

}
?>
