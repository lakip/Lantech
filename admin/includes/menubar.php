<head>
  
    <link rel="shortcut icon" href="laron.ico" type="image/x-icon">

</head>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image"> </div>
      
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
    
      <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="header">MANAGE</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-refresh"></i>
          <span>Transaction</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="record_dailly.php"><i class="fa fa-keyboard-o"></i> Record Day`s collection</a></li>
          <li><a href="buyer.php"><i class="fa fa-money"></i> Sales</a></li>
                  <li><a href="#.php"><i class="fa fa-circle-o"></i> Invoicing</a></li>

        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-keyboard-o"></i>
          <span>Stock</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="stockng.php"><i class="fa fa-upload"></i> add stock $ culling</a></li>
          
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-bar-chart"></i>
          <span>Reports</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="daily_costing.php"><i class="fa fa-circle-o"></i> Daily collection </a></li>
          

               <li class="treeview">
        <a href="#">
          <i class="fa fa-chart"></i>
          <span>Sales</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="dreport.php"><i class="fa fa-chart-o"></i> Weekly</a></li>
          <li><a href="#.php"><i class="fa fa-circle-o"></i> Monthly</a></li>
          <li><a href="#.php"><i class="fa fa-circle-o"></i> Yearly</a></li>
        </ul>
      </li>

          </li>
        </ul>
      </li>
 <li class="treeview">
        <a href="notification.php">
          <i class="fa fa-bell"></i>
          <span>notification</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
                 <li><a href="notification.php"><i class="fa fa-chart-o"></i> notification</a></li>
               </ul></li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i>
          <span>Users</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#.php"><i class="fa fa-circle-o"></i> user management</a></li>
          
        </ul>
      </li>
      
 <li class="treeview">
         <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
<div id="notification-header">
         <div style="position:relative">
         <button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn"><span id="notification-count"><?php
include "includes/conn.php";

$sql2="SELECT * FROM notification status = 0 ";
   $result=mysqli_query($conn, $sql2);
//$count=mysqli_num_rows($result);

?>
<script type="text/javascript">

  function myFunction() {
    $.ajax({
      url: "view_notification.php",
      type: "POST",
      processData:false,
      success: function(data){
        $("#notification-count").remove();          
        $("#notification-latest").show();$("#notification-latest").html(data);
      },
      error: function(){}           
    });
   }
   
   $(document).ready(function() {
    $('body').click(function(e){
      if ( e.target.id != 'notification-icon'){
        $("#notification-latest").hide();
      }
    });
  });
     
  </script>
</span><img src="notification-icon.png" /></button>
         <div id="notification-latest"></div>
        </div>      
    </div>
 </li>

        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>