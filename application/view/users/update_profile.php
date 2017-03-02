<div id="container">
  <h4>Updating Profile for userID = <?= $userID ?></h4>

  <form action="<?php echo URL; ?>user/update_profile" method="POST">
    <textarea type="text" name="about" value="" rows="4" cols="40" placeholder="Tell us more about yourself!" required></textarea><br>
    <input type="text" name="gender" value="" placeholder="Gender" required /><br>
    <input type="text" name="birthdate" value="" placeholder="Birth date YYYY-MM-DD" required /><br> 
    <input type="text" name="current_city" value="" placeholder="Current City" required /><br>
    <input type="text" name="home_city" value="" placeholder="Home City" required /><br>
    <input type="text" name="address" value="" placeholder="Address" required /><br>
    <input type="text" name="languages" value="" placeholder="Languages" required /><br>
    <input type="text" name="workplace" value="" placeholder="Workplace" required /><br>


    <input type="hidden" name="userID" value="<?= $userID ?>" />
    <input type="submit" name="submit" value="Submit" />
  </form>
</div>
