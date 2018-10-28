
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
        Stock
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>stocks</li>
        <li class="active">Stock table</li>
      </ol>
    </section>
    <!-- Main content -->
  
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
          
            <table>
  <form method='post'>
  <tr>
   <div class="form-group">
    
                     <div class="col-sm-3">
                      <select class="form-control" id="hno" name="hno" required>
                        
                       <option value="" >--Select HOUSE-- </option>
                        <option value="HOUSE 1" >HOUSE 1 </option>
                        <option value="HOUSE 2" >HOUSE 2</option>
                        <option value="HOUSE 3" >HOUSE 3</option>
                        <option value="HOUSE 4" >HOUSE 4</option>
                      </select>
                    </div>

                     <div class="col-sm-3">
                      <select class="form-control" id="bno" name="bno" required>
                        
                       <option value="" >--Select HOUSE-- </option>
                        <option value="BATCH 1" >BATCH 1 </option>
                        <option value="BATCH 2" >BATCH 2</option>
                        <option value="BATCH 3" >BATCH 3</option>
                        <option value="BATCH 4" >BATCH 4</option>
                      </select>
                    </div>


        <button type="submit" class="btn btn-primary btn-flat" id="search" name="search"> Search</button>

      </tr>
    </form>
</table>
            <div class="box-body">
              <table id="stock" class="table table-bordered">

                <thead>
                 
                  <th>Date</th>
                  <th>House Number</th>
                  <th>Batch Number</th>
                  <th>Number</th>
                </thead>
                <tbody> 

                  <?php


global $hno;
global $bno;

                  include 'includes/conn.php';
           $sql = "SELECT * FROM stock WHERE hno='$hno' and bno='$bno'";


            if(isset($_POST['search'])){
                     $hno = $_POST['hno'];
                     $bno = $_POST['bno'];

        }

        // Sort
        $sql .= " ORDER BY hno DESC";

                  $query = $conn->query($sql);
                   while ($row=mysqli_fetch_array($query)) {?>
                     <!-- 
                      echo " -->
                        <tr>
                          <td><?php echo $row['date']?></td>
                          <td><?php echo $row['hno']?></td>
                           <td><?php echo $row['bno']?></td>
                            <td><?php echo $row['no']?></td>
                    
                           </tr>
                         <?php 
                       
                       }
                       ?>
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
