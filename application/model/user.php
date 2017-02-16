<?php

require APP . 'core/model.php';

class User extends Model
{
  public function getAll()
  {
    // TODO: limit field retrieved
    $sql = "SELECT * FROM user";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function authenticate_user($email, $password)
  {
    // TODO: limit field retrieved
    $sql = "SELECT * FROM user WHERE email = :email AND password = :password LIMIT 1";
    $query = $this->db->prepare($sql);
    $params = array(':email' => $email, ':password' => $password);
    $query->execute($params);
    return $query->fetch();
  }

  public function find_by_id($userID)
  {
    // TODO: limit field retrieved
    $sql = "SELECT first_name, last_name FROM user WHERE userID = :userID LIMIT 1";
    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    $query->execute($params);
    return $query->fetch();
  }

  public function find_by_email($email)
  {
    $sql = "SELECT * FROM user WHERE email = :email LIMIT 1";
    $query = $this->db->prepare($sql);
    $params = array(':email' => $email);
    $query->execute($params);
    return $query->fetch();
  }

  public function create($first_name, $last_name, $email, $password)
  {
    $timestamp = date('Y-m-d G:i:s');
    $sql = "INSERT INTO user (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)";
    $query = $this->db->prepare($sql);
    $params = array(':first_name' => $first_name,
                    ':last_name' => $last_name,
                    ':email' => $email,
                    ':password' => $password);
    return $query->execute($params); // boolean result
  }

  public function update()
  {

  }

  public function delete()
  {

  }

}
?>
