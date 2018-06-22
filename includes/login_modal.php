<!-- Login -->
<div class="modal fade" id="login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Login</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="login.php">
                <div class="form-group">
                    <label for="user" class="col-sm-3 control-label">ID NO</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="idno" name="idno" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="userPassword" class="col-sm-3 control-label">password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="pass" name="pass" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="login"><i class="fa fa-sign-in"></i> Login</button>
              </form>
            </div>
        </div>
    </div>
</div>