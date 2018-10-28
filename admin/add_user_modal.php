<!-- Add -->
<div class="modal fade" id="add_user">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Culle</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="add_user.php">
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">lastname</label>

                    <div class="col-sm-9"> 
                      <input type="lastname" class="form-control" id="lastname" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">username</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="username" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                  </div>
                     <div class="form-group">
                    <label for="password" class="col-sm-3 control-label"> confirm password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="created_date" class="col-sm-3 control-label">created date</label>

                    <div class="col-sm-9"> 
                      <input type="date" class="form-control" id="created_date" name="created_date">
                    </div>
                </div>
                <div class="form-group">
                    <label for="created_date" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9"> 
                      <input type="file" class="form-control" id="photo" name="photo">
                    </div>
                </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="add_user"><i class="fa fa-check-square-o"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>