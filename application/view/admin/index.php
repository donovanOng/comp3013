<div class="pt-4 small">
  <h3 class="mb-3">Admin Console</h3>

  <form class="row m-0 mb-3" action="<?php echo URL . 'admin' ?>" method="GET">
    <input class="form-control col-11" type="text" name="q" placeholder="Search User" value="<?php if (isset($_GET['q'])) { echo $_GET['q']; } ?>" />
    <button class="btn btn-primary col-1" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
  </form>

  <div class="row">
    <div class="col-12">
      <?php
      if ($result != NULL){
        foreach($tables_data as $table => $table_data) {
          echo '<table class="w-100 mb-5 table table-hover table-bordered table-striped"><thead><tr>';
          foreach ($table_data[0] as $key => $value) {
            echo '<th>' . $key . '</th>';
          }
          echo '<th width="20px">Action</h>';
          echo '</tr></thead><tbody>';

          foreach ($table_data as $row => $column) {
            echo '<tr>';
            foreach ($column as $key => $value) {
              echo '<td style="word-break:break-all;">' . $value . '</td>';
            }
            echo '<td>
              <a class="btn-link" href="' . URL . 'admin/user?' .
              'userID=' . $tables_data['user'][0]->userID .
              '">View</a>';
            echo '</tr>';
          }
          echo '</tbody></table>';
        }
      } else {
        echo '<div class="bg-faded p-3">' .
        '<i class="fa fa-question-circle-o mr-2" aria-hidden="true"></i>' .
        'No user with name that contain \'' . $_GET['q'] . '\' found.'.
        ' </div>';
      }
      ?>
    </div>
  </div>
</div>
