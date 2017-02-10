<h2>Log in to ###</h2>

<form action="<?php echo URL; ?>auth/login" method="POST">
  <label>Email</label>
  <input type="text" name="email" value="" required /><br>
  <label>Password</label>
  <input type="password" name="password" value="" required /><br>
  <input type="submit" name="login" value="Log In" />
</form>
