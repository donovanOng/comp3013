
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>COMP3013 Coursework</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!-- navigation -->
<div class="navigation">
    <a href="<?php echo URL; ?>">Home</a>
    <? if(isset($_SESSION['current_user']))  { ?>
      <a href="<?php echo URL; ?>auth/logout">Log Out</a>
    <? } else { ?>
      <a href="<?php echo URL; ?>auth/signup">Sign Up</a>
      <a href="<?php echo URL; ?>auth">Log In</a>
    <? } ?>
</div>

<div>
  <?php
    if (isset($_SESSION['message'])) {
      echo $_SESSION['message'];
      unset($_SESSION['message']);
    }
   ?>
</div>
