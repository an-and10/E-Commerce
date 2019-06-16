<?php 

$active='Account';  
    include("includes/header.php");

?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="row">
     
        <div class="btn-group btn-breadcrumb breadcrumb-primary">
            <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
            <div class="visible-lg-block">
            <div class="btn btn-warning btn-derecha"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></div>
            <div class="btn btn-default btn-derecha">Way to Go</div>
          </div>
            <a href="index.php" class="btn btn-primary visible-lg-block visible-md-block">Home</a>
            <a href="shop.php" class="btn btn-primary visible-lg-block visible-md-block">Shop</a>
            <a href="scart.php" class="btn btn-primary visible-lg-block visible-md-block active">Checkout</a>
            
            <div class="btn btn-default visible-xs-block hidden-xs visible-sm-block ">...</div>
           >
        </div><br><br><br>
  </div>
        <!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");

    ?>
        
              
               <div id="order-summary" class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <h3>Order Summary</h3>
                       
                   </div><!-- box-header Finish -->
                   
                   <p class="text-muted"><!-- text-muted Begin -->
                       
                       Shipping and additional costs are calculated based on value you have entered
                       
                   </p><!-- text-muted Finish -->
                   
                   <div class="table-responsive"><!-- table-responsive Begin -->
                       
                       <table class="table"><!-- table Begin -->
                           
                           <tbody><!-- tbody Begin -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Order Sub-Total </td>
                                   <th> Rs.<?php echo cal_price();?> </th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td>Delivery Charges </td>
                                   <th>Rs. <?php  echo  delivery_price();  ?> </th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> GST and Other Services </td>
                                   <th>Rs.  <?php    
                                            echo tax_price();
                                   ?> </th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr class="total"><!-- tr Begin -->
                                   
                                   <td> Payable Amount </td>
                                   <th>Rs.  <?php echo total_price(); ?> </th>
                                   
                               </tr><!-- tr Finish -->
                               
                           </tbody><!-- tbody Finish -->
                           
                       </table><!-- table Finish -->
                       
                   </div><!-- table-responsive Finish -->
                   
               </div><!-- box Finish -->
               
     
    
   
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
              

           <?php 
           
           if(!isset($_SESSION['customer_email'])){
               
               include("customer/customer_login.php");

               
           }else{
               
               include('pay_option.php');
               
           }
           
           ?>


           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>


<?php 

if(isset($_POST['register'])){
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_pass = $_POST['c_pass'];
    
    $c_country = $_POST['c_country'];
    
    $c_city = $_POST['c_city'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_address = $_POST['c_address'];
    
    $c_image = $_FILES['c_image']['name'];
    
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    
    $c_ip = getRealIpUser();
    
    move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
    
    $insert_customer = "insert into customer (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
    
    $run_customer = mysqli_query($con,$insert_customer);
    
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($con,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_cart>0){
        
        /// If register have items in cart ///
        
        $_SESSION['customer_email']=$c_email;
       // $_SESSION['customer_name']= $c_name;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
        
    }else{
        
        /// If register without items in cart ///
        
        $_SESSION['customer_email']=$c_email;
       // $_SESSION['customer_name']= $c_name;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
        
    }
    
}

?>