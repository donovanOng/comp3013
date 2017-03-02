
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Social Media</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?= URL ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= URL ?>fonts/font-awesome/css/font-awesome.min.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<div class="bg-inverse">
  <div class="container">
  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= URL ?>">Home</a>
        </li>
        <?php if (isset($_SESSION['current_user'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= URL . $this->current_userID ?>">
              <?= $this->current_user->first_name . ' ' . $this->current_user->last_name ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= URL ?>logout">Log Out</a>
          </li>
          </ul>
          <? require APP . 'view/users/search.php' ?>
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= URL ?>signup">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= URL ?>login">Log In</a>
          </li>
          </ul>
        <?php } ?>
    </div>
  </nav>
  </div>
</div>

<div class="container pb-5">

<? if (isset($_SESSION['message'])) { ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <?= $_SESSION['message'] ?>
  <? unset($_SESSION['message']) ?>
</div>
<? } ?>
