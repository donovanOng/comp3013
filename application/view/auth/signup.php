<h2>Sign Up</h2>

<form action="<?php echo URL; ?>signup" method="POST">
  <label>First Name</label>
  <input type="text" name="first_name" value="" required/><br>
  <label>Last Name</label>
  <input type="text" name="last_name" value="" required/><br>
  <label>Email</label>
  <input type="text" name="email" value="" required /><br>
  <label>Password</label>
  <input type="password" name="password" value="" required /><br>
  <input type="submit" name="signup" value="Sign Up" />
</form>
