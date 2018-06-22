<!-- culle -->
<?php
include 'includes/conn.php';

?>
<div class="modal fade" id="culle">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Culle</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="#.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Date</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="date" name="date" value="<?php echo $user['date']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="hno" class="col-sm-3 control-label">House NUmber</label>

                    <div class="col-sm-9"> 
                      <input type="hno" class="form-control" id="hno" name="hno" value="<?php echo $user['hno']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="bno" class="col-sm-3 control-label">Batch Number</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="bno" name="bno" value="<?php echo $user['bno']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="no" class="col-sm-3 control-label">Number of chicks</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="no" name="no" value="<?php echo $user['no']; ?>">
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="save"><i class="fa fa-check-square-o"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>