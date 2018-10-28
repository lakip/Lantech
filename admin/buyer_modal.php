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
              <form class="form-horizontal" method="POST" action="buyer_add.php" name="purchase">
                <div class="form-group">
                    <label for="isbn" class="col-sm-3 control-label">Date</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="dte" name="dte" required>
                    </div>
                </div>
              
               
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">First Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="fname" name="fname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Last Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lname" name="lname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="idno" class="col-sm-3 control-label">ID Number</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="idno" name="idno">
                    </div>
                </div>
                <div class="form-group">
                    <label for="number_bought" class="col-sm-3 control-label">Number Bought</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="number_bought" name="number_bought">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="course" class="col-sm-3 control-label">Mode of Payment</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="mop" name="mop" required 
                      onchange="if(this.options[this.selectedIndex].value=='MPESA'){document.purchase['MPESA'].style.visibility='visible'}else{document.purchase['MPESA'].style.visibility='hidden'};">

                        
                       <option value="" >--Select mode of payment-- </option>
                        <option value="MPESA" >MPESA</option>
                        <option value="CASH" >CASH</option>
                      </select>
                      <br>
                      <div class="form-group">

                    <div class="col-sm-9">
                  <input type="text" class="form-control" id="MPESA" name="mpesa_code" style="visibility: hidden;" placeholder="enter MPESA code eg :MHH059Q51">                   
                   </div>
                </div>
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
              <button type="submit" class="btn btn-primary btn-flat" id="Save" name="Save"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>