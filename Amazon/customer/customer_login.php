<?php



?>



<div class="box">
    

      
  <div class="box-header"><!-- box-header Begin -->
      
      <center><!-- center Begin -->
          
          <h1> Login </h1>
          
          <p class="lead"> Already have our account..? </p>
          
          <p class="text-muted"> Provide the details to access the account!! </p>
          
      </center><!-- center Finish -->
      
  </div><!-- box-header Finish -->

   
  <form method="post" action="checkout.php"><!-- form Begin -->
      
      <div class="form-group"><!-- form-group Begin -->
          
          <label> Email </label>
          
          <input name="c_email" type="text" class="form-control" required>
          
      </div><!-- form-group Finish -->
      
       <div class="form-group"><!-- form-group Begin -->
          
          <label> Password </label>
          
          <input name="c_pass" type="password" class="form-control" required>
          
      </div><!-- form-group Finish -->
      
      <div class="text-center"><!-- text-center Begin -->
          
          <button name="login" value="Login" class="btn btn-primary">
              
              <i class="fa fa-sign-in"></i> Login
              
          </button>
          
      </div><!-- text-center Finish -->     
      
  </form>
  <!-- form-group Finish -->
  
  
   
</div>
 
  <center><!-- center Begin -->
      
     <a href="customer_register.php">
         
         <h5>Don't have an Account ? Sign Up </h5>
         
     </a> 
      
  </center>




<?php

    if(isset($_POST['login']))
    {
        $customer_email = $_POST['c_email'];
        $customer_pass =  $_POST['c_pass'];


        $select_customer = "select * from customer where customer_email= '$customer_email' AND customer_pass = '$customer_pass'";
        $run_customer= mysqli_query($con,$select_customer);
        $customer_ip= getRealIpUser();
        $check_customer= mysqli_num_rows($run_customer);
        $select_cart=      "select * from cart where ip_add='$customer_ip'";
        $run_cart = mysqli_query($con,$select_cart);
        $check_cart= mysqli_num_rows($run_cart);

 
        if($check_customer==0){
        
            echo "<script>alert('Your email or password is wrong')</script>";
            
            exit();
            
        }
        
        if($check_customer==1 AND $check_cart==0){
            
            $_SESSION['customer_email']=$customer_email;
            
           echo "<script>alert('You are Logged in')</script>"; 
            
           echo "<script>window.open('my_account?my_order.php','_self')</script>";
            
        }else{
            
            $_SESSION['customer_email']=$customer_email;
            
           echo "<script>alert('You are Logged in')</script>"; 
            
           echo "<script>window.open('checkout.php','_self')</script>";
            
        }

    }




?>