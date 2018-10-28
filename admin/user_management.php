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
        Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>USER</li>
        <li class="active">user table</li>
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
              <a href="#add_user" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> ADD</a>
              <div class="box-tools pull-right">
                <form class="form-inline">
                 
                </form>
              </div>
            </div>
            <div class="box-body">
              <table id="stock" class="table table-bordered">
                <thead>
                 
                  <th>Name</th>
                  <th>username</th>
                  <th>Password</th>
                  <th>Date Created</th>
                 <th>action</th>
                </thead>
                <tbody> 
                  <?php
                  include 'includes/conn.php';
$sql = "SELECT * FROM admin";
                  $query = $conn->query($sql);
                   while ($row=mysqli_fetch_array($query)) {?>
                     <!-- 
                      echo " -->
                        <tr>
                          <td><?php echo $row['firstname']." ".$row['lastname']?></td>
                          <td><?php echo $row['username']?></td>
                           <td><?php echo $row['password']?></td>
                            <td><?php echo $row['created_on']?></td>

                    
                    <td>
                            <div class="box-header with-border">
              <a href="#edit" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i> edit</a>
                            <a href="#delete" data-toggle="modal" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-minus"></i> Delete</a>

              <div class="box-tools pull-right">
                <form class="form-inline">
                 
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
  <?php include 'add_stock_modal.php'; ?>
  <?php include 'add_user_modal.php'; ?>
  <?php include 'edit_user_m.php'; ?>
    <?php include 'delete_user_modal.php'; ?>

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
