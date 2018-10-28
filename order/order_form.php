
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<b>LaRon</b>
  	</div>

  
  	<div class="login-box-body">
    	<p class="login-box-msg">Place your order</p>

    	<form   class="form-horizontal" method="POST">
        <div class="form-group has-feedback">
            <input type="date" class="form-control" id="dte" name="dte">
            <span class="form-control-feedback"></span>
          </div>  
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" id="fname" name=" fname" placeholder="Enter First Name" required autofocus>
        		<span class="form-control-feedback"></span>
      		</div>
            <div class="form-group has-feedback">
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" required autofocus>
            <span class="form-control-feedback"></span>
          </div>
            <div class="form-group has-feedback">
            <input type="text" class="form-control" name="idno" id="idno" placeholder="Enter idno" required autofocus>
            <span class="form-control-feedback"></span>
          </div> 
          <div class="form-group has-feedback">
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone Number" required autofocus>
            <span class="form-control-feedback"></span>
          </div>
           <div class="form-group has-feedback">
            <input type="text" class="form-control" id="orderr" name="orderr" placeholder="Number of egg" required autofocus>
            <span class="form-control-feedback"></span>
          </div>
           <div class="form-group has-feedback">
            <input type="text" class="form-control" id="orderNumber" name="orderNumber"  placeholder="Order Number" required>
            <span class="form-control-feedback"></span>
          </div>
          
          <div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="add"><i class="fa fa-sign-in"></i> Order</button>

        		</div>
          </div>
          </form>
        </div>
      		</div>
    	</form>
  	  
</div>
	
<?php
  include 'includes/conn.php';

  if(isset($_POST['add'])){
    $dte=$_POST['dte'];

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $idno=$_POST['idno'];
    $phone=$_POST['phone'];
    $orderr=$_POST['orderr'];
    $orderNumber=$_POST['orderNumber'];


  $sql = "INSERT INTO customer_order(date,fname,lname,idno,phone,orderr,orderNumber)
             VALUES ('$dte','$fname', '$lname','$idno','$phone','$orderr','$orderNumber')";
    if($conn->query($sql)){
      $_SESSION['success'] = 'order placed successfully';
    }
    else{
      $_SESSION['error'] = $conn->error;
    }
  }
  else{
    echo "window.location='order_form.php'";
  }

  
     
  header('location: order_form.php');

?>

<?php include 'includes/scripts.php' ?>
</body>
</html>