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

  public function users()
  {
    // TODO: limit field retrieved
    $sql = "SELECT *
            FROM user";

    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function delete_user($userID)
  {
    $sql = "DELETE FROM user
            WHERE userID = :userID";

    $query = $this->db->prepare($sql);
    $params = array(':userID' => $userID);
    return $query->execute($params); // boolean result
  }

  public function update_user($userID, $first_name, $last_name, $email)
  {
    $sql = "UPDATE user
            SET first_name = :first_name, last_name = :last_name, email = :email
            WHERE userID = :userID";

    $query = $this->db->prepare($sql);
    $params = array(':first_name' => $first_name,
                    ':last_name' => $last_name,
                    ':email' => $email,
                    ':userID' => $userID);
    return $query->execute($params); // boolean result
  }

  public function circles()
  {
    $sql = "SELECT *
            FROM circle";

    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function delete_circle($circleID)
  {
    $sql = "DELETE FROM circle
            WHERE circleID = :circleID";

    $query = $this->db->prepare($sql);
    $params = array(':circleID' => $circleID);
    return $query->execute($params); // boolean result
  }

  public function update_circle($circleID, $name)
  {
    $sql = "UPDATE circle
            SET name = :name
            WHERE circleID = :circleID";

    $query = $this->db->prepare($sql);
    $params = array(':name' => $name,
                    ':circleID' => $circleID);
    return $query->execute($params); // boolean result
  }

  public function messages()
  {
    $sql = "SELECT *
            FROM message";

    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function delete_message($messageID)
  {
    $sql = "DELETE FROM message
            WHERE messageID = :messageID";

    $query = $this->db->prepare($sql);
    $params = array(':messageID' => $circleID);
    return $query->execute($params); // boolean result
  }

  public function update_message($messageID, $content)
  {
    $sql = "UPDATE message
            SET content = :content
            WHERE messageID = :messageID";

    $query = $this->db->prepare($sql);
    $params = array(':content' => $content,
                    ':messageID' => $messageID);
    return $query->execute($params); // boolean result
  }
}

?>
