
<?php 

    $active='Shop';
    include("includes/header.php");

    
    if(isset($_SESSION['customer_email']))
    {
  

    $session_email = $_SESSION['customer_email'];
    
    $select_customer = "select * from customer where customer_email='$session_email'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $row_customer = mysqli_fetch_array($run_customer);
    
    $customer_id = $row_customer['customer_id'];
    }
    
    ?>
    <div id="content">
      <div class="container">

    <div class="bc-icons-2">

   <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="#">Home</a><i
          class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>
      <li class="breadcrumb-item"><a class="black-text" href="#">Shop</a><i
          class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>
      <li class="breadcrumb-item active">Accessories</li>
    </ol>
  </nav>
</div>

           <!-- col-md-3 Finish -->
          
           <div class="col-md-9"><!-- col-md-9 Begin -->
             
             <?php 
               
                if(!isset($_GET['p_cat'])){
                    
                    if(!isset($_GET['cat'])){
              
                      echo "

                       <div class='box'><!-- box Begin -->
                           <h1 '>Shop</h1>
                           <p>
                              With the increasing number of websites that have found their way into our daily lives, substantial resources are invested in enhancing user experience beyond mere functionality. <br>Optimizing flow—the psychological state of deep focus while conducting a fluent activity—seems a promising approach, resulting in a win–win situation for both users and website operators.<br><br>

                           </p>
                       </div>
                       ";
                        
                    }
                   
                   }
               
               ?>
               
<div class="row" style='margin:15px;'><!-- row Begin -->

   <?php 

        if(!isset($_GET['p_cat'])){

         if(!isset($_GET['cat'])){

            $per_page=6; 

            if(isset($_GET['page'])){

                $page = $_GET['page'];

            }else{

                $page=1;

            }

            $start_from = ($page-1) * $per_page;

            $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";

            $run_products = mysqli_query($con,$get_products);

            while($row_products=mysqli_fetch_array($run_products)){

                $pro_id = $row_products['product_id'];

                $pro_title = $row_products['product_title'];

                $pro_price = $row_products['product_price'];

                $pro_img1 = $row_products['product_img1'];

                $pro_img2 = $row_products['product_img2'];

                $pro_desc = $row_products['product_desc'];

                $product_color = $row_products['product_color'];

                $product_company = $row_products['product_company'];

                echo "
                   
                      <div class='col-md-4 col-sm-6' >
            <div class='product-grid5'>
                <div class='product-image5 rounded'>
                    <a href='details.php'>
                        <img class='pic-1' src='admin-dashboard/product_images/$pro_img1'>
                        <img class='pic-2' src='admin-dashboard/product_images/$pro_img2'>
                    </a>
                    <ul class='social'>
                       
                        <li><a href='details.php?pro_id=$pro_id' data-tip='Add to Cart'><i class='fa fa-shopping-cart'></i></a></li>
                       
                    </ul>
                    <a href='details.php?pro_id=$pro_id' class='select-options'><i class='fa fa-arrow-right'></i> Select Options</a>
                </div>
                <div class='product-content'>
                    <h3 class='title text-center'><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
                    <div class='price text-center' style='color:blue','font-style:bold'> Rs. $pro_price </div>
                    <div class='price text-center'style='color:red','font-style:italic'> $pro_desc </div>

                </div>
            </div>
        </div>
       
       
         
                ";

        }

   ?>
  </div>
</div>
 <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div>
</div><!-- row Finish -->

<center>
   <ul class="pagination"><!-- pagination Begin -->
     <?php

    $query = "select * from products";

    $result = mysqli_query($con,$query);

    $total_records = mysqli_num_rows($result);

    $total_pages = ceil($total_records / $per_page);

        echo "

            <li>

                <a href='shop.php?page=1'> ".'First Page'." </a>

            </li>

        ";

        for($i=1; $i<=$total_pages; $i++){

              echo "

            <li>

                <a href='shop.php?page=".$i."'> ".$i." </a>

            </li>

        ";  

        };

        echo "

            <li>

                <a href='shop.php?page=$total_pages'> ".'Last Page'." </a>

            </li>

        ";

            }

        }

     ?> 

   </ul><!-- pagination Finish -->
</center>

<div class="row">
    
    
    <?php
   getpcatpro();
    getpcat();
    ?>
    
</div>



</div><!-- col-md-9 Finish -->

</div><!-- container Finish -->
</div><!-- #content Finish -->

<?php 

include("footer.php");

?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

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