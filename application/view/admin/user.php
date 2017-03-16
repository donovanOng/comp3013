<div class="pt-4 small">
  <div class="row">
    <div class="col-2">
      <nav class="nav flex-column">
      <?php
      foreach($tables_data as $table => $table_data) {
        echo '<a class="nav-link" href="#'. $table . '">' . $table .'</a>';
      }
      ?>
      </nav>
    </div>
    <div class="col-10">
    <?php
    foreach($tables_data as $table => $table_data) {
      echo '<h5><a name="' . $table .'">'. $table .'</a></h5>';

      if ($table_data) {
        echo '<table class="mb-5 table table-hover table-bordered table-striped"><thead><tr>';
        foreach ($table_data[0] as $key => $value) {
          if ($key != "CREATED_AT" && $key != "UPDATED_AT") {
            echo '<th>' . $key . '</th>';
          }
        }
        echo '<th width="20px">Action</h>';
        echo '</tr></thead><tbody>';

        foreach ($table_data as $row => $column) {
          echo '<tr>';
          foreach ($column as $key => $value) {
            if ($key != "CREATED_AT" && $key != "UPDATED_AT") {
              echo '<td style="word-break:break-all;">' . $value . '</td>';
            }
          }
          echo '<td>
            <a class="btn-link" href="' . URL . 'admin/delete?' .
            'userID=' . $tables_data['user'][0]->userID .
            '&table=' . $table .
            '&tableID=' . key($column) .
            '&ID=' . $column->{key($column)} .
            '">Delete</a>';
          echo '</tr>';
        }
        echo '</tbody></table>';
      } else {
        echo "<p>No data found.</p>";
      }
    }
    ?>
    </div>
  </div>
</div>
