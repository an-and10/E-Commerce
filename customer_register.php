<?php 

    $active='Account';
    include("includes/header.php");

?>
   
   
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
     
      
        <!-- col-md-12 Finish -->
           
           <!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2> Register a new account </h2>
                           <p class="text-nuted"> Kindly Provides the details to access our full service</p>
                       </center><!-- center Finish -->
                       
                       <form action="customer_register.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Name</label>
                               
                               <input type="text" class="form-control" name="c_name" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Email</label>
                               
                               <input type="text" class="form-control" name="c_email" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Password</label>
                               
                               <input type="password" class="form-control" name="c_pass" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Country</label>
                               
                               <input type="text" class="form-control" name="c_country" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your City</label>
                               
                               <input type="text" class="form-control" name="c_city" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Contact</label>
                               
                               <input type="text" class="form-control" name="c_contact" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Address</label>
                               
                               <input type="text" class="form-control" name="c_address" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Profile Picture</label>
                               
                               <input type="file" class="form-control form-height-custom" name="c_image" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="register" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Register
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
                       
                   </div><!-- box-header Finish -->
                   
               </div>

  <center><!-- center Begin -->
      
     <a href="customer_register.php">
         
         <h5>Already Have Account ? Sign In </h5>
         
     </a> 
      
  </center><!-- box Finish -->
               
           </div>
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
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
    
              // $c_email = $_POST['c_email'];
    
        
        $duplicate=mysqli_query($con,"select * from customer where customer_email='$c_email'");
        if (mysqli_num_rows($duplicate)>0)
        {
          echo "<script>alert('You have been already Registered ')</script>";
              
              echo "<script>window.open('customer_register.php','_self')</script>";
        }
        else
        {
          $insert_customer = "insert into customer (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";

          $run_customer = mysqli_query($con,$insert_customer);
          
          $sel_cart = "select * from cart where ip_add='$c_ip'";
          
          $run_cart = mysqli_query($con,$sel_cart);
          
          $check_cart = mysqli_num_rows($run_cart);


    
    
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
              
              echo "<script>window.open('checkout.php','_self')</script>";
              
          }


        }




        
          
}

?>



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

        