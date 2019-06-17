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
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="styles/products3.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


 <!--=========-TOP_BAR============-->
  <nav class="topBar">
    <div class="container">
      <ul class="list-inline pull-left hidden-sm hidden-xs">
        <li><span class="text-primary">Have a question? </span> Call +91 9702620581</li>
      </ul>
      <ul class="topBarNav pull-right">
        <li class="">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fa  mr-5">
            <?php   
                    
                   
                    if(!isset($_SESSION['customer_email'])){
                        
                        echo "Welcome: Guest";
                        
                    }else{
                        
                        echo "Welcome: " . $_SESSION['customer_email'] . "";
                        
                    }  
                    
                    ?>
                    
          </i><i class="fa  ml-5"></i>
          </a>
      
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <img src="http://diamondcreative.net/plus-v1.2/img/flags/flag-french.jpg" class="mr-5" alt=""> <span class="hidden-xs"> More <i class="fa fa-angle-down ml-5"></i></span> </a>
          <ul class="dropdown-menu w-100" role="menu">
            <li>
              <a href="#"><img src="http://diamondcreative.net/plus-v1.2/img/flags/flag-english.jpg" class="mr-5" alt="">Complaint</a>
            </li>
            <li class="">
              <a href="#"><img src="http://diamondcreative.net/plus-v1.2/img/flags/flag-french.jpg" class="mr-5" alt="">FAQ</a>
            </li>
            <li>
              <a href="#"><img src="http://diamondcreative.net/plus-v1.2/img/flags/flag-german.jpg" class="mr-5" alt="">Comming Soon</a>
            </li>
            <li>
              <a href="#"><img src="http://diamondcreative.net/plus-v1.2/img/flags/flag-spain.jpg" class="mr-5" alt="">Reach Us</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fa fa-user mr-5"></i><span class="hidden-xs">My Account<i class="fa fa-angle-down ml-5"></i></span> </a>
          <ul class="dropdown-menu w-150" role="menu">
            <li><a href="checkout.php">Login</a>
            </li>
            <li><a href="customer_register.php">Create Account</a>
            </li>
            
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fa fa-shopping-basket mr-5"></i> <span class="hidden-xs">
                                Cart<sup class="text-primary">(<?php echo cal_items();  ?>)</sup>
                                <i class="fa fa-angle-down ml-5"></i>
                            </span> </a>
          <ul class="dropdown-menu cart w-250" role="menu">
            <li>
              <div class="cart-items">
                <ol class="items">
                  <?php

                                      $ip_add =getRealIpUser();
                    $get_items= "select * from cart where ip_add='$ip_add'";
                    $run_items = mysqli_query($con,$get_items);
                    while($row_result= mysqli_fetch_array($run_items))
                    {
                      $pro_id = $row_result['p_id'];
                      $pro_qty = $row_result['p_qty'];
                      $pro_size = $row_result['p_size'];
                      $get_poduct = "select * from products  where product_id='$pro_id'";
                      $run_product=   mysqli_query($con,$get_poduct);
                      while($result= mysqli_fetch_array($run_product))
                      {     $pro_title= $result['product_title'];
                            $pro_img1 = $result['product_img1'];
                            $unit_price= $result['product_price'];
                            $subtotal=  $pro_qty * $unit_price;

                    echo "      


                  <li>
                    <a href='#' class='product-image'> <img src='admin_area/product_images/$pro_img1' alt='Sample Product'> </a>
                    <div class='product-details'>
                      <div class='close-icon'> <a href='#''><i class='fa fa-close'></i></a> </div>
                      <p class='product-name'> <a href='#'>$pro_title</a> </p> <strong>$pro_qty</strong> x <span class='price text-primary'>Rs. $unit_price</span> </div>
                   
                  </li>
 ";
 }
 }
 ?>                 
                  <!-- <li>
                    <a href="#" class="product-image"> <img src="https://lh3.googleusercontent.com/-Gy3KAlilHAw/WNf7a2eL5YI/AAAAAAAAD2Y/V3jUt14HiZA3HLpeOKkSaOu57efGuMw9ACL0B/w245-d-h318-n-rw/shoes_01.jpg" class="img-responsive" alt="Sample Product "> </a>
                    <div class="product-details">
                      <div class="close-icon"> <a href="#"><i class="fa fa-close"></i></a> </div>
                      <p class="product-name"> <a href="#">Lorem Ipsum dolor sit</a> </p> <strong>1</strong> x <span class="price text-primary">$39.99</span> </div>
                    end product-details -->
                 
                  <!-- end item -->
                 <!--  <li>
                    <a href="#" class="product-image"> <img src="https://lh3.googleusercontent.com/-ydDc-0L0WFY/WNf7a6Awe_I/AAAAAAAAD2Y/I8IzJtYRWegkOUxCZ5SCK6vbdiiSxVsCQCL0B/w245-d-h318-n-rw/bags_07.jpg" class="img-responsive" alt="Sample Product "> </a>
                    <div class="product-details">
                      <div class="close-icon"> <a href="#"><i class="fa fa-close"></i></a> </div>
                      <p class="product-name"> <a href="#">Lorem Ipsum dolor sit</a> </p> <strong>1</strong> x <span class="price text-primary">$29.99</span> </div>
                    
                  </li> -->
                  <!-- end item -->
                </ol>
              </div>
            </li>
            <li>
              <div class="cart-footer"> <a href="#" class="pull-left"><i class="fa fa-cart-plus mr-5"></i>View
          Cart</a> <a href="#" class="pull-right"><i class="fa fa-shopping-basket mr-5"></i>Checkout</a> </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav><!--=========-TOP_BAR============-->
    
 <!--=========MIDDEL-TOP_BAR============-->
    
    <div class="middleBar">
    <div class="container">
  <div class="row display-table">
    <div class="col-sm-3 vertical-align text-left hidden-xs">
      <a href="javascript:void(0);"> <img width="" src="images/ecom-store-logo.png" alt=""></a>
    </div>
    <!-- end col -->
    <div class="col-sm-7 vertical-align text-center">
      <form>
        <div class="row grid-space-1">
          <div class="col-sm-6">
            <input type="text" name="keyword" class="form-control input-lg" placeholder="Search">
         </div>
          <!-- end col -->
          <div class="col-sm-3">
            <select class="form-control input-lg" name="category">

              



              <option value="all">All Categories</option>
              <?php
              /*
                global $con;
                $get_cat= "select * from categories ";
                $run_cat= mysqli_query($con,$get_cat);
                while($row_cat= mysqli_fetch_array($run_cat))
                {
                     $cat_title= $row_cat['cat_title'];
                    $cat_id=$row_cat['cat_id'];
                    echo "<optgroup label='$cat_title'></optgroup> ";
                  
                     $get_cat= "select * from  product_categories where p_cat_id=$cat_id";
                      $run_cat= mysqli_query($con,$get_cat);
                      while($row_cat= mysqli_fetch_array($run_cat))
                      {
                          $p_cat_title= $row_cat['p_cat_title'];
                          echo " <option value=''>$p_cat_title</option>";
                      
                      }
                    
                          ?>
                        <?php }  
                        */ ?>
           

            
            </select>
          </div>
          <!-- end col -->
          <div class="col-sm-3">
            <input type="submit" class="btn btn-default btn-block btn-lg" value="Search">
         </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </form>
    </div>
    <!-- end col -->
    <div class="col-sm-2 vertical-align header-items hidden-xs">
      <!-- <div class="header-item mr-5">
        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist"> <i class="fa fa-heart-o"></i> <sub>32</sub> </a>
      </div> -->
      <!-- <div class="header-item">
        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"> <i class="fa fa-refresh"></i> <sub>2</sub> </a>
      </div> -->

      
      <a href="admin-dashboard/login.php"> <button type="btn" class="btn btn-primary" style="margin:8px;">Admin Login</button></a>

    </div>
    <!-- end col -->
  </div>
  <!-- end  row -->
</div>
</div>
    
    
<nav class="navbar navbar-main navbar-default" role="navigation" style="opacity: 1;">
          <div class="container">
            <!-- Brand and toggle -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>             
            </div>
        
            <!-- Collect the nav links,  -->
            <div class="collapse navbar-collapse navbar-1" style="margin-top: 0px;">            
              <ul class="nav navbar-nav">
                <li class="<?php if($active=='Home')   echo 'active'?>"><a href="index.php">Home</a></li>
                <li class="<?php if($active=='Shop')   echo 'active'?>">
                  <a href="shop.php" >Shop </a>
                </li>
               
                 
                    <!-- <li class="col-sm-3 col-xs-12">
                      <ul class="list-unstyled">
                        <li>Product Categories</li>
                        <li><a href="#"> Sidebar Left</a></li>
                        <li><a href="#">Products Left</a></li>
                        <li><a href="#">Products Sidebar</a></li>
                       </ul>
                    </li>

                    <li class="col-sm-3 col-xs-12">
                      <ul class="list-unstyled">
                        <li>Oroduct Categories</li>
                        <li><a href="#"> Sidebar Left</a></li>
                        <li><a href="#">Products Left</a></li>
                        <li><a href="#">Products Sidebar</a></li>
                       </ul>
                    </li> -->
                    
                    
                  
                </li>
                  
                <li class="<?php if($active== 'My_Account') echo 'active' ?>">
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='checkout.php'>My Account</a>";
                               
                           }else{
                               
                              echo"<a href='customer/my_account.php?my_orders'>My Account</a>"; 
                               
                           }
                           
                           ?>
                         </li>

                           
                 <li class="<?php if($active=='Cart')   echo 'active'?>">
                  <a href="cart.php" >Cart </a>
                  
                </li>
                 <li class="<?php if($active=='Contact_Us')   echo 'active'?>">
                  <a href="contact.php" >Contact Us </a>
                  
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div>
        </nav>
    
    
    
    
    
    
    
    
    
    
    
  
  <script type="text/javascript">
    ! function($, n, e) {
      var o = $();
      $.fn.dropdownHover = function(e) {
        return "ontouchstart" in document ? this : (o = o.add(this.parent()), this.each(function() {
          function t(e) {
            o.find(":focus").blur(), h.instantlyCloseOthers === !0 && o.removeClass("open"), n.clearTimeout(c), i.addClass("open"), r.trigger(a)
          }
          var r = $(this),
            i = r.parent(),
            d = {
              delay: 100,
              instantlyCloseOthers: !0
            },
            s = {
              delay: $(this).data("delay"),
              instantlyCloseOthers: $(this).data("close-others")
            },
            a = "show.bs.dropdown",
            u = "hide.bs.dropdown",
            h = $.extend(!0, {}, d, e, s),
            c;
          i.hover(function(n) {
            return i.hasClass("open") || r.is(n.target) ? void t(n) : !0
          }, function() {
            c = n.setTimeout(function() {
              i.removeClass("open"), r.trigger(u)
            }, h.delay)
          }), r.hover(function(n) {
            return i.hasClass("open") || i.is(n.target) ? void t(n) : !0
          }), i.find(".dropdown-submenu").each(function() {
            var e = $(this),
              o;
            e.hover(function() {
              n.clearTimeout(o), e.children(".dropdown-menu").show(), e.siblings().children(".dropdown-menu").hide()
            }, function() {
              var t = e.children(".dropdown-menu");
              o = n.setTimeout(function() {
                t.hide()
              }, h.delay)
            })
          })
        }))
      }, $(document).ready(function() {
        $('[data-hover="dropdown"]').dropdownHover()
      })
    }(jQuery, this);
  </script>



  <script src="js/jquery-3.1.1.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>