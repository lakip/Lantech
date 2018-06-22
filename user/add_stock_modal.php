<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add Flock</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="add_stock.php">
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
                    <label for="chicks" class="col-sm-3 control-label">Number of chicks</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="chicks" name="chicks">
                    </div>
                </div>
                
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Add</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

     