<!-- <?php include 'includes/session.php'; ?>
<?php
  $catid = 0;
  $where = '';
  if(isset($_GET['category'])){
    $catid = $_GET['category'];
    $where = 'WHERE stockng.category_id = '.$catid;
  }

?> -->
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<head>
 
    <link rel="stylesheet" href="dist/css/notification-demo-style.css" type="text/css">
  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
 
</head>


</div>
<div class="login-box-body">
      <p class="login-box-msg">add user</p>

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
  

 <?php
  
   $count=0;
   if(!empty($_POST['add'])) {
    $date =$_POST["date"];
    $hno =$_POST["hno"];
    $bno =$_POST["bno"];
    $comment =$_POST["comment"];  
      $sql = "INSERT INTO notification (date,hno,bno,comment) VALUES('$date','$hno','$bno','$comment')";
    mysqli_query($conn, $sql);
   }
   ?>
     <?php include 'includes/footer.php'; ?>
</body>
</html>
