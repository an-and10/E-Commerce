<?php 
$active =  "My_Account";
session_start();
if(!isset($_SESSION['customer_email'])){
    
    echo "<script>window.open('../checkout.php','_self')</script>";
    
}else{



include("includes/header.php");
    
if(isset($_GET['order_id'])){
    
    $order_id = $_GET['order_id'];
    
}

}

?>


<!--New PAge conternt starts-->


        <div id="content">
            <div class="container">
                <div class="col-md-12">  
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="../index.php">Home</a>
                   </li>
                   <li>
                      My Account
                   </li>
               </ul><!-- breadcrumb Finish -->
         </div>
         <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div>
           
           <div class="col-md-9">
               <div class="box">
                   <?php
                   if(isset($_GET['my_orders']))
                   {
                       include('my_orders.php');
                       
                   }
                   if(isset($_GET['overview']))
                   {
                       include('overview.php');
                       
                   }
                   ?>
                   
                    <?php
                   if(isset($_GET['edit_account']))
                   {
                       include('edit_account.php');
                       
                   }
                   ?>
                   <?php
                   if(isset($_GET['change_pass']))
                   {
                       include('change_pass.php');
                       
                   }
                   ?>
                   <?php
                   if(isset($_GET['delete_account']))
                   {
                       include('delete_account.php');
                       
                   }
                   ?>
                   
                   
                   
                   
               </div>
           </div>
         </div>
    </div>
         
         <?php
            include('../footer.php');
            ?>
        </body>
 
</html>
         
          