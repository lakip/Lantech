<?php include 'includes/session.php'; ?>

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
        Order
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>stocks</li>
        <li class="active">List of Orders</li>
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
            
            <div class="box-body">
              <table id="Order" class="table table-bordered">
                <thead>
                 
                  <th>Date</th>
                  <th>Order Number</th>
                  <th>Customer Name</th>
                  <th>order</th>
                  <th>Status</th>
                </thead>
                <tbody> 
                  <?php
                  include 'includes/conn.php';
$sql = "SELECT * FROM customer_order";
                  $query = $conn->query($sql);
                   while ($row=mysqli_fetch_array($query)) {?>
                     <!-- 
                      echo " -->
                        <tr>
                         <td><?php echo $row['date']?></td>
                          <td><?php echo $row['orderNumber']?></td>
                           <td><?php echo $row['fname']." ". $row['lname']?> </td>
                            <td><?php echo $row['orderr']?></td>

                          
                    
                    <td>
                    </td>
                 
                </form>
              </div>
            </div>
                           </td>
                           </tr>
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
  <?php include 'add_Order_modal.php'; ?>
  <?php include 'culle_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>

  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

</script>
</body>
</html>
