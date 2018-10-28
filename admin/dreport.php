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
        Sales
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Collection</li>
        <li class="active">Production table</li>
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
            
<table>
  <form method='post'>
  <tr>
   <div class="form-group">
    <div class="col-sm-4">
                    DATE FROM:
                      <input type="date" class="form-control" id="fromDate" name="fromDate" required>
                    </div>
                    
                          <div class="col-sm-4">
                             DATE TO:
                              <input type="date" class="form-control" id="endDate" name="endDate" required>
                         </div>
                  </tr>
        </div>
        <button type="submit" class="btn btn-primary btn-flat" id="search" name="search"> Search</button>
      </tr>
    </form>
</table>


            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                 
                  <th>Date</th>
                  <th>House Number</th>
                  <th>Batch Number</th>
                  <th>Number of Eggs</th>
                  <th>Broken</th>
                  <th>sales</th>
                </thead>
                <tbody>

      <?php
$sql = "SELECT * FROM daily_collection WHERE 1";
global $sales;
global $broken;
global $good;
global $total;
global $cost;
global $fromDate;
global $endDate;


   if(isset($_POST['search'])){
          $fromDate = $_POST['fromDate'];
          $endDate = $_POST['endDate'];

          if(!empty($fromDate) && !empty($endDate)){
             $sql .= " and tarehe 
                          between '".$fromDate."' and '".$endDate."' ";
          }
        }

        // Sort
        $sql .= " ORDER BY tarehe DESC";
        
          //  $sql .="SUM(noCollected)"; 

   $query = $conn->query($sql);
   if(mysqli_num_rows($query) > 0){
                   while ($row=mysqli_fetch_array($query)) {?>
                     <!-- 
                      echo " -->
                        <tr>
                          <td><?php echo $row['tarehe']?></td>
                          <td><?php echo $row['hno']?></td>
                           <td><?php echo $row['bno']?></td>
                            <td><?php echo $row['noCollected']?></td>
                            <td><?php echo $row['broken']?></td>

              
            <?php
           
            $good=$row['noCollected']-$row['broken'];
               $sales=($good*10)+($row['broken']*5);
              ?>      
                <td><?php echo $sales?></td>
              </tr>
              <td>

                 <?php
                      }  }?>


<tfoot>
      <tr>
    <!--   <?php
      $sqli =" SELECT SUM(noCollected) from daily_collection WHERE  tarehe 
                           between '".$fromDate."' and '".$endDate."'";
   

     ?> -->



       <th colspan="10" align="center">Total eggs collected</th>
  </tr>
      <tr>
      <th colspan="10" align="right">Broken</th>
      
      </tr>
    
    <tr>
    <th colspan="10" align="right">Total Sales cost </th>
    
      <?php
    $total_eggs=0;
    $hm=0;
    
    $q="SELECT SUM(noCollected) as total_eggs FROM daily_collection  ";
  
     
  $mes=mysqli_query($q);
  while ($qs = mysqli_fetch_array($mes)) { 
  $qstotal=$qs['total_eggs'];
  ?>
    

      </tr>
          <td> <?php echo $qs['total_eggs']?></td>

  <?php
 
  }
?>
  </tfoot>

                </tbody>

              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'daily_collection.php'; ?>
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


</script>
</body>
</html>
