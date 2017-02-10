<div class="container">
<h2>Home</h2>
<? if ($current_user != null) { ?>
  <p>Hello <?= $current_user->email ?>!</p>
<? } ?>
</div>
