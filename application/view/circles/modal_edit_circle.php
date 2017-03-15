<div class="modal fade" id="editCircle<?php echo $circle->circleID ?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Circle <?php echo $circle->circleID ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo URL ?>circle/update_circle" method="POST">
          <div class="form-group row">
            <label class="col-sm-3 mt-2">Name</label>
            <div class="form-group col-sm-9">
              <input class="form-control" type="text" name="name" value="<?php echo $circle->name ?>" placeholder="Circle name" required />
            </div>
          </div>
          <input type="hidden" name="circleID" value="<?php echo $circle->circleID ?>" />
          <input class="btn btn-primary col-md-2 offset-md-10" type="submit" name="update" value="Create" />
        </form>
      </div>
    </div>
  </div>
</div>
