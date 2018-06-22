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
              <form class="form-horizontal" method="POST" action="buyer_add.php">
                <div class="form-group">
                    <label for="isbn" class="col-sm-3 control-label">Date</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                </div>
              
               
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="bname" name="bname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="idno" class="col-sm-3 control-label">ID Number</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="idno" name="idno">
                    </div>
                </div>
                <div class="form-group">
                    <label for="bought" class="col-sm-3 control-label">Number Bought</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="bought" name="bought">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="course" class="col-sm-3 control-label">Mode of Payment</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="MOP" name="MOP" required>
                        
                       <option value="" >--Select mode of payment-- </option>
                        <option value="MPESA" >MPESA</option>
                        <option value="CASH" >CASH</option>
                      </select>
                    </div></div>
                     <div class="form-group">
                    <label for="amount" class="col-sm-3 control-label">Amount</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="amount" name="amount">
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

     