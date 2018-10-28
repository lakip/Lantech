<section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>

<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Record</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="daily_collection_add.php">
                <div class="form-group">
                    <label for="isbn" class="col-sm-3 control-label">Date</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="dte" name="dte" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="course" class="col-sm-3 control-label">House</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="hno" name="hno" required>
                        
                       <option value="" >--Select HOUSE-- </option>
                        <option value="HOUSE 1" >HOUSE 1 </option>
                        <option value="HOUSE 2" >HOUSE 2</option>
                        <option value="HOUSE 3" >HOUSE 3</option>
                        <option value="HOUSE 4" >HOUSE 4</option>
                      </select>
                    </div></div>
                <div class="form-group">
                    <label for="course" class="col-sm-3 control-label">Batch Number</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="bno" name="bno" required>
                        
                       <option value="" >--Select batch-- </option>
                        <option value="batch 1" >batch 1 </option>
                        <option value="batch 2" >batch 2</option>
                        <option value="batch 3" >batch 3</option>
                        <option value="batch 4" >batch 4</option>
                      </select>
                    </div></div>
                <div class="form-group">
                    <label for="eggs" class="col-sm-3 control-label">Eggs Collected</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="eggs" name="eggs">
                    </div>
                </div>
                <div class="form-group">
                    <label for="broken" class="col-sm-3 control-label">Broken</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="broken" name="broken">
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

     