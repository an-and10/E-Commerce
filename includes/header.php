<?php
session_start();
include('includes/db.php');
include('functions/function.php');

?>

<?php

//Product Category Values in Every Page
if(isset($_GET['pro_id']))
{
    $product_id=$_GET['pro_id'];
    $get_product = "select * from products where product_id=$product_id";
    $run_product = mysqli_query($con,$get_product);
    $row_product = mysqli_fetch_array($run_product);

    $p_cat_id = $row_product['p_cat_id'];

    $pro_title = $row_product['product_title'];

    $product_img1 = $row_product['product_img1'];

    $product_img2 = $row_product['product_img2'];

    $product_img3 = $row_product['product_img3'];

    $product_price = $row_product['product_price'];

    $product_keywords = $row_product['product_keywords'];

    $product_desc = $row_product['product_desc'];




    $get_pro_cat = "select * from product_categories  where p_cat_id=$p_cat_id";
    $run_pro_cat= mysqli_query($con,$get_pro_cat);
    $row_pro_cat= mysqli_fetch_array($run_pro_cat);


        $p_cat_title= $row_pro_cat['p_cat_title'];
        $p_cat_desc= $row_pro_cat['p_cat_desc'];


}


?>

<?php

?>
<!DOCTYPE>
<html>
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Amazon Shopping Website</title>
        
        <link rel="stylesheet" href="styles/csser/cssmain2.css">
        <link rel="stylesheet" href="styles/bootstrap-337.min.css">
        <link rel="stylesheet" href=" styles/style.css">
        <link rel="stylesheet" href=" styles/style2.css">
        <link rel="stylesheet" type="text/css" href="styles/style3.css">
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="styles/products3.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link rel="stylesheet" type="text/css" href="styles/preloader.css">
      </head>
          <body> 

          <div class="pre-loader">
  <div class="sk-fading-circle">
    <div class="sk-circle1 sk-circle"></div>
    <div class="sk-circle2 sk-circle"></div>
    <div class="sk-circle3 sk-circle"></div>
    <div class="sk-circle4 sk-circle"></div>
    <div class="sk-circle5 sk-circle"></div>
    <div class="sk-circle6 sk-circle"></div>
    <div class="sk-circle7 sk-circle"></div>
    <div class="sk-circle8 sk-circle"></div>
    <div class="sk-circle9 sk-circle"></div>
    <div class="sk-circle10 sk-circle"></div>
    <div class="sk-circle11 sk-circle"></div>
    <div class="sk-circle12 sk-circle"></div>
  </div>
</div>

<!--  -->


<div id="flipkart-navbar">
    <div class="container">
        <div class="row row1">
          <li class="upper-links"><a class="links" href="" style="float: left; font-size: 15px"> <?php   
                    
                   
                    if(!isset($_SESSION['customer_email'])){

                        
                        echo "Welcome: Guest";
                        
                    }
                    else{
                      
                              $email = $_SESSION['customer_email'];

                              $get_customer = "select * from customer where customer_email='$email'";

                              $run_customer =  mysqli_query($con,$get_customer);

                               $row_customer =  mysqli_fetch_array($run_customer);

                              $customer_email = $row_customer['customer_email'];

                              $customer_name =  $row_customer['customer_name'];
                               

                                 echo "Welcome: " . $customer_name . "";
                        
                       
                  }
                    
                    ?></a></li>
            <ul class="largenav pull-right">
            
                <li class="upper-links"><a class="links" href="index.php">Home</a></li>
                <li class="upper-links"><a class="links" href="shop.php" >Shop</a></li>
                <li class="upper-links"><a class="links" href="cart.php">My Cart</a></li>
                <li class="upper-links"><a class="links" href="contact.php">Contact Us</a></li>
                <li class="upper-links"><a class="links" href="customer_register.php">Customer Register</a></li>
                 <li class="upper-links"><a class="links" href="checkout.php">Customer Login</a></li>
                <li class="upper-links"><a class="links" href="admin-dashboard/login.php">Admin Login</a></li>
                <li class="upper-links">
                    <a class="links" href="">
                        <svg class="" width="16px" height="12px" style="overflow: visible;">
                            <path d="M8.037 17.546c1.487 0 2.417-.93 2.417-2.417H5.62c0 1.486.93 2.415 2.417 2.415m5.315-6.463v-2.97h-.005c-.044-3.266-1.67-5.46-4.337-5.98v-.81C9.01.622 8.436.05 7.735.05 7.033.05 6.46.624 6.46 1.325v.808c-2.667.52-4.294 2.716-4.338 5.98h-.005v2.972l-1.843 1.42v1.376h14.92v-1.375l-1.842-1.42z" fill="#fff"></path>
                        </svg>
                    </a>
                </li>
                <li class="upper-links dropdown"><a class="links" href="customer/my_account.php">My Account</a>
                    <ul class="dropdown-menu">
                        <li class="profile-li"><a class="profile-links" href="customer/my_account.php?my_orders">My Orders</a></li>
                        <li class="profile-li"><a class="profile-links" href="customer/my_account.php?edit_account">Edit Account</a></li>
                        <li class="profile-li"><a class="profile-links" href="customer/my_account.php?change_pass">Change Password</a></li>
                        <li class="profile-li"><a class="profile-links" href="customer/my_account.php?delete_Account">Delete Account</a></li>
                        <li class="profile-li"><a class="profile-links" href="cart.php">My Cart</a></li>
                        <li class="profile-li"><a class="profile-links" href="customer_register.php">Create Accout</a></li>
                        <li class="profile-li"><a class="profile-links" href="customer/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="row row2">
            <div class="col-sm-2">
                <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ Brand</span></h2>
                <h1 style="margin:0px;"><span class="largenav">Brand</span></h1>
            </div>
            <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
                <div class="row">
                    <input class="flipkart-navbar-input col-xs-11" type="" placeholder="Search for Products, Brands and more" name="">
                    <button class="flipkart-navbar-button col-xs-1">
                        <svg width="15px" height="15px">
                            <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="cart largenav col-sm-2">
                <a class="cart-button">
                    <svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
                        <path d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86 " fill="#fff "></path>
                    </svg> My Cart
                    <span class="item-number "><?php echo cal_items();  ?></span>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="mySidenav" class="sidenav">
    <div class="container" style="background-color: #2874f0; padding-top: 10px; font-size: 10px;">
        <span class="sidenav-heading">Home</span>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    </div>

     <a class="links"  <?php if($active=='Home') ?> href="index.php" >Home</a></li>
                <a class="links" <?php if($active=='Shop')?> href="shop.php">Shop</a></li>
               <a class="links" <?php if($active=='cart') ?> href="cart.php">My Cart</a></li>
                <a class="links" <?php if($active=='Contact_Us') ?> href="contact.php">Contact Us</a></li>
                 <a class="links"  href="customer_register.php">Customer Register</a></li>
                 <a class="links"  <?php if($active=='Account') ?> href="contact.php">Customer Login</a></li>
                  <a class="links"  <?php if($active=='Account') ?> href="checkout.php">Customer Login</a></li>
                <a class="links" href="admin-dashboard/login.php">Admin Login</a>
 </li> 
</div> 


  <script src="js/jquery-3.1.1.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
    (function($){
  'use strict';
    $(window).on('load', function () {
        if ($(".pre-loader").length > 0)
        {
            $(".pre-loader").fadeOut("slow");
        }
    });
})(jQuery)
</script>


</body>

</html>

<style>


#flipkart-navbar {
    background-color: #2874f0;
    color: #FFFFFF;
}

.row1{
    padding-top: 10px;
    padding-right: 50px;
}

.row2 {
    padding-bottom: 20px;
}

.flipkart-navbar-input {
    padding: 11px 16px;
    border-radius: 2px 0 0 2px;
    border: 0 none;
    outline: 0 none;
    font-size: 15px;
}

.flipkart-navbar-button {
    background-color: #ffe11b;
    border: 1px solid #ffe11b;
    border-radius: 0 2px 2px 0;
    color: #565656;
    padding: 10px 0;
    height: 43px;
    cursor: pointer;
}

.cart-button {
    background-color: #2469d9;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .23), inset 1px 1px 0 0 hsla(0, 0%, 100%, .2);
    padding: 10px 0;
    text-align: center;
    height: 41px;
    border-radius: 2px;
    font-weight: 500;
    width: 120px;
    display: inline-block;
    color: #FFFFFF;
    text-decoration: none;
    color: inherit;
    border: none;
    outline: none;
}

.cart-button:hover{
    text-decoration: none;
    color: #fff;
    cursor: pointer;
}

.cart-svg {
    display: inline-block;
    width: 16px;
    height: 16px;
    vertical-align: middle;
    margin-right: 8px;
}

.item-number {
    border-radius: 3px;
    background-color: rgba(0, 0, 0, .1);
    height: 20px;
    padding: 3px 6px;
    font-weight: 500;
    display: inline-block;
    color: #fff;
    line-height: 12px;
    margin-left: 10px;
}

.upper-links {
    display: inline-block;
    padding: 0 11px;
    line-height: 23px;
    font-family: 'Roboto', sans-serif;
    letter-spacing: 0;
    color: inherit;
    border: none;
    outline: none;
    font-size: 12px;
}

.dropdown {
    position: relative;
    display: inline-block;
    margin-bottom: 0px;
}

.dropdown:hover {
    background-color: #fff;
}

.dropdown:hover .links {
    color: #000;
}

.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown .dropdown-menu {
    position: absolute;
    top: 100%;
    display: none;
    background-color: #fff;
    color: #333;
    left: 0px;
    border: 0;
    border-radius: 0;
    box-shadow: 0 4px 8px -3px #555454;
    margin: 0;
    padding: 0px;
}

.links {
    color: #fff;
    text-decoration: none;
}

.links:hover {
    color: #fff;
    text-decoration: none;
}

.profile-links {
    font-size: 12px;
    font-family: 'Roboto', sans-serif;
    border-bottom: 1px solid #e9e9e9;
    box-sizing: border-box;
    display: block;
    padding: 0 11px;
    line-height: 23px;
}

.profile-li{
    padding-top: 2px;
}

.largenav {
    display: none;
}

.smallnav{
    display: block;
}

.smallsearch{
    margin-left: 15px;
    margin-top: 15px;
}

.menu{
    cursor: pointer;
}

@media screen and (min-width: 768px) {
    .largenav {
        display: block;
    }
    .smallnav{
        display: none;
    }
    .smallsearch{
        margin: 0px;
    }
}

/*Sidenav*/
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #fff;
    overflow-x: hidden;
    transition: 0.5s;
    box-shadow: 0 4px 8px -3px #555454;
    padding-top: 0px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    color: #fff;        
}

@media screen and (max-height: 450px) {
  .sidenav a {font-size: 18px;}
}

.sidenav-heading{
    font-size: 36px;
    color: #fff;
}
</style>


<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    // document.getElementById("flipkart-navbar").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}
</script>