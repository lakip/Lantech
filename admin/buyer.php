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
        Purchase
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Collection</li>
        <li class="active">Purchase Details</li>
      </ol>
    </section>
    <!-- Main content -->
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
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Capture Details</a>
              <div class="box-tools pull-right">
                <form class="form-inline">
                 
                </form>
              </div>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                 
                  <th>Date</th>
                  <th>Name</th>
                  <th>ID Number</th>
                  <th>Number of Eggs</th>
                  <th>Payment Mode</th>
<!--                   <th>MPESA CODE</th>
 -->                  <th>Amount Paid</th>
                </thead>
                <tbody>
                  
      <?php
$sql = "SELECT * FROM purchases";

   $query = $conn->query($sql);
                   while ($row=mysqli_fetch_array($query)) {?>
                     <!-- 
                      echo " -->
                        <tr>
                          <td><?php echo $row['dte']?></td>
                          <td><?php echo $row['fname']." ". $row['lname']?></td>
                           <td><?php echo $row['idno']?></td>
                            <td><?php echo $row['number_bought']?></td>
                            <td><?php echo $row['mop']?></td>
                            <td><?php echo $row['amount']?></td>
                            
                <?php }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
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
