<?php

include 'includes/conn.php';
   if ($_POST['approve']) {
        $sql="update customer_order set status='approved' where status='order pending'"; 
 
		 mysqli_query($sql) or die(mysqli_error());     

}
?>