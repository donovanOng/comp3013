<form class="form-inline my-2 my-lg-0" action="<?= URL; ?>user/search" method="GET">
  <input class="form-control mr-sm-2" type="text" name="query" placeholder="Search" value="<? if (isset($_GET['query'])) { echo $_GET['query']; } ?>" required>
  <button class="btn my-2 my-sm-0" type="submit">Search</button>
</form>
