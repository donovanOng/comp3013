<div class="p-5">
  <div class="row justify-content-center">
    <h5 style="margin-bottom: 24px;">Log in to Social Media</h5>
  </div>
  <div class="row justify-content-center">
    <div class="col-5 bg-faded rounded" style="padding: 32px 64px;">
    <form action="<?php echo URL; ?>login" method="POST">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" value="" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" value="" required />
      </div>
      <input type="submit" class="btn btn-primary form-control" name="login" value="Log In" />
    </form>
  </div>
  </div>
</div>
