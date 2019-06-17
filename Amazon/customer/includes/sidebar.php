
<?php



if(isset($_SESSION['customer_email'])){


            
       
        $customer_session = $_SESSION['customer_email'];
        
        $get_customer = "select * from customer where customer_email='$customer_session'";

          $run_customer = mysqli_query($con,$get_customer);
        
        $row_customer = mysqli_fetch_array($run_customer);
        
        $customer_image = $row_customer['customer_image'];
        
        $customer_name = $row_customer['customer_name'];

        $customer_email = $row_customer['customer_email'];
        

        }
  


?>


 
   
      <div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        <div class="profile-userpic">
          <img src="customer_images/<?php echo $customer_image ?>" class="img-responsive" alt="">
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
           <?php echo $customer_name ?>
          </div>
          <div class="profile-usertitle-job">
            <?php echo $customer_email ?>
          </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <div class="profile-userbuttons">
          <button type="button" class="btn btn-success btn-sm">Complaint</button>
          <button type="button" class="btn btn-danger btn-sm">OverView</button>
        </div>
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu">
          <ul class="nav">

            <li class="<?php if(isset($_GET['my_orders'])) {
    echo 'active';
}?>">
              <a href="my_account.php?my_orders">
              <i class="glyphicon glyphicon-user"></i>
             My Orders </a>
            </li>
            <li class="<?php if(isset($_GET['edit_account'])) {
    echo 'active';
}?>">
              <a href="my_account.php?edit_account">
              <i class="glyphicon glyphicon-ok"></i>
              Edit Profile</a>
            </li>
            <li class="<?php if(isset($_GET['change_pass'])) {
    echo 'active';
}?>">
              <a href="my_account.php?change_pass">
              <i class="glyphicon glyphicon-flag"></i>
              Change Password </a>
            </li>
            <li class="<?php if(isset($_GET['delete_account'])) {
    echo 'active';
}?>">
              <a href="my_account.php?delete_account">
              <i class="glyphicon glyphicon-flag"></i>
              Delete Account </a>
            </li>
            <li>
              <a href="logout.php">
              <i class="glyphicon glyphicon-flag"></i>
              Logout </a>
            </li>
          </ul>
        </div>
        <!-- END MENU -->
      </div>
  
    
  