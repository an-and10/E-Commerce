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

    <div class="bc-icons-2">

   <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="index.php">Home</a><i
          class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>
      <li class="breadcrumb-item"><a class="black-text" href="shop.php">Shop</a><i
          class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>
           <li class="breadcrumb-item"><a class="black-text" href="shop.php">Contact</a><i
          class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>
      <li class="breadcrumb-item active">Details</li>
    </ol>
  </nav>
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
         
         
<style>


.bc-icons-2 .breadcrumb-item + .breadcrumb-item::before {
content: none; }
.bc-icons-2 .breadcrumb-item.active {
color: #455a64;
}
.blue-grey{
color: red;
} 
.breadcrumb{
background-color: yellow;
font-size: 15px;

}
.breadcrumb-item{
margin:7px;
padding:0px;
font-size: 13px;
}</style>
          