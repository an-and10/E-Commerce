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
                <div class="row">
     
        <div class="btn-group btn-breadcrumb breadcrumb-primary">
            <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
            <div class="visible-lg-block">
            <div class="btn btn-warning btn-derecha"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></div>
            <div class="btn btn-default btn-derecha">Way to Go</div>
          </div>
            <a href="index.php" class="btn btn-primary visible-lg-block visible-md-block">Home</a>
            <a href="shop.php" class="btn btn-primary visible-lg-block visible-md-block">Shop</a>
            <a href="scart.php" class="btn btn-primary visible-lg-block visible-md-block active">My Account</a>
            
            <div class="btn btn-default visible-xs-block hidden-xs visible-sm-block ">...</div>
           >
        </div><br><br><br>
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
         
          