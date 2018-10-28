<!-- Add -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Culle</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="stock_update.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="date" class="col-sm-3 control-label">Date</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="date" name="date" value="<?php echo $user['date']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">username</label>

                    <div class="col-sm-9"> 
                      <input type="text" class="form-control" id="us" name="username" value="<?php echo $user['username']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9"> 
                      <input type="password" class="form-control" id="password" name="password" value="<?php echo $user['password']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">First Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $user['firstname']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Second Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>">
                    </div>
                </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="Save"><i class="fa fa-check-square-o"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>