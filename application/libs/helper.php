<?php

function Redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

function in_array_field($needle, $needle_field, $haystack, $strict = false) {
    if ($strict) {
        foreach ($haystack as $item)
            if (isset($item->$needle_field) && $item->$needle_field === $needle)
                return true;
    }
    else {
        foreach ($haystack as $item)
            if (isset($item->$needle_field) && $item->$needle_field == $needle)
                return true;
    }
    return false;
}

function user_name($userID) {

  require_once APP . 'model/user.php';
  $model = new User();
  $user = $model->find_by_id($userID);
  if ($user) {
    return $user->first_name . ' ' . $user->last_name;
  }
  return NULL;
}

?>
