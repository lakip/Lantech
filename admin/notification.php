<?php include 'includes/session.php'; ?>
<?php
  $catid = 0;
  $where = '';
  if(isset($_GET['category'])){
    $catid = $_GET['category'];
    $where = 'WHERE stockng.category_id = '.$catid;
  }

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Notification
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Notification center</li>
        <li class="active">notification</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content" align="center">
    

 <?php
	
	 $count=0;
	 if(!empty($_POST['add'])) {
	 	$date = mysqli_real_escape_string($conn,$_POST["date"]);
	 	$hno = mysqli_real_escape_string($conn,$_POST["hno"]);
	 	$bno = mysqli_real_escape_string($conn,$_POST["bno"]);
	 	$comment = mysqli_real_escape_string($conn,$_POST["comment"]);	
     	$sql = "INSERT INTO notification (date,hno,bno,comment) VALUES('" . $date . "','" . $hno . "','" . $bno . "','" . $comment . "')";
	 	mysqli_query($conn, $sql);
	 }
	 ?>
	<div class="demo-content">
		

	<?php if(isset($message)) { ?> <div class="error"><?php echo $message; ?></div> <?php } ?>


	<?php if(isset($success)) { ?> <div class="success"><?php echo $success;?></div> <?php } ?>
<head>
 
    <link rel="stylesheet" href="dist/css/notification-demo-style.css" type="text/css">
  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
 
</head>
   <form class="form-horizontal" method="POST" action="#.php">
                <div class="form-group">
                    <label for="isbn" class="col-sm-3 control-label">Date</label>

                    <div class="col-sm-5">
                      <input type="date" class="form-control" id="dte" name="dte" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="course" class="col-sm-3 control-label">House</label>

                    <div class="col-sm-5">
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

                    <div class="col-sm-5">
                      <select class="form-control" id="bno" name="bno" required>
                        
                       <option value="" >--Select batch-- </option>
                        <option value="batch 1" >batch 1 </option>
                        <option value="batch 2" >batch 2</option>
                        <option value="batch 3" >batch 3</option>
                        <option value="batch 4" >batch 4</option>
                      </select>
                    </div></div>
                <div class="form-group">
                    <label for="comment" class="col-sm-3 control-label">comment</label>

                    <div class="col-sm-5">
			       <textarea rows="5" cols="70%" name="comment" id="comment"></textarea>
                    </div>

                </div>
                  <div>
              <button type="button" class="btn btn-default btn-flat"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
                </div>
    </form>
</div></section></div>
</section>
  <?php include 'includes/footer.php'; ?>
  <?php include 'buyer_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $('#select_category').change(function(){
    var value = $(this).val();
    if(value == 0){
      window.location = 'stockng.php';
    }
    else{
      window.location = 'stockng.php?category='+value;
    }
  });

  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'stockng_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.stockngid').val(response.stockngid);
      $('#edit_isbn').val(response.isbn);
      $('#edit_title').val(response.title);
      $('#catselect').val(response.category_id).html(response.name);
      $('#edit_author').val(response.author);
      $('#edit_publisher').val(response.publisher);
      $('#datepicker_edit').val(response.publish_date);
      $('#del_stockng').html(response.title);
    }
  });
}
</script>
</body>
</html>
