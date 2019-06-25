<?php

$active='Home';
include('includes/header.php');

?>



   <div class="container" id="slider"><!-- container Begin -->

       <div class="col-md-12"><!-- col-md-12 Begin -->

           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->

               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->

                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>

               </ol><!-- carousel-indicators Finish -->

               <div class="carousel-inner"><!-- carousel-inner Begin -->
                    <?php 
                   
                   $get_slides = "select * from slider LIMIT 0,1";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       
                       echo "
                       
                       <div class='item active'>
                       
                       <img src='admin-dashboard/slides_images/$slide_image'>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   $get_slides = "select * from slider LIMIT 1,3";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       
                       echo "
                       
                       <div class='item'>
                       
                       <img src='admin-dashboard/slides_images/$slide_image'>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   ?>
                   
                 
                 
                   
               </div><!-- carousel-inner Finish -->

               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->

                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>

               </a><!-- left carousel-control Finish -->

               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->

                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>

               </a><!-- left carousel-control Finish -->

           </div><!-- carousel slide Finish -->

       </div><!-- col-md-12 Finish -->

   </div><!-- container Finish -->
    
<div class="container">
  <h2>Our Features</h2>
  
  <div class="card-deck row">
    <div class="card bg-primary col-md-3 shadow">
      <div class="card-body text-center">
        <p class="card-text"><h3><b>Ease of Use</b></h3></p><br>
        <p class="card-text">Creating shopping categories</p><br>
        <p class="card-text">Adding filters</p>
        <p class="card-text">Incorporating comparison capabilities</p>
      </div>
    </div>
    <div class="card bg-warning col-md-3 shadow">
      <div class="card-body text-center">
        <p class="card-text"><h4><b>Site Speed</b></h4></p>
        <p class="card-text">Site speed is an indicator of an easy to use website and draws a lot of parallels with the ability to convert visitors. Online sellers literally have seconds to make a sale as shrinking attention spans influences e-commerce purchasing behavior.</p>
       
      </div>
    </div>
    <div class="card bg-success col-md-3">
            <div class="card-body text-center">
        <p class="card-text"><h4><b>Mobile Friendly</b></h4></p>
        <p class="card-text">People spend more than half their time on mobile phones (compared to computers), a trend that also applies to online shopping. If you still think that optimizing for mobile is optional—don’t. Google will penalize sites that aren’t optimized for mobile.</p>
       
      </div>
    </div>
    <div class="card bg-danger col-md-3">
                  <div class="card-body text-center">
        <p class="card-text"><h4><b>Related Items</b></h4></p>
        <p class="card-text">As an online entrepreneur, your primary motivation for starting an e-commerce store might have something to do with earning money. Even if it’s #2 or #3 on your list of motivations, earning money is still important to keeping your business afloat.</p>
       
      </div>
    </div>
    </div>  
  </div>
</div><!-- advantages ends -->
    
       <div id="hot">
               
                   
                   <div class="container">
                       <div class="col-md-12">
                          <h2>  Latest Products</h2>
                       </div>
                   </div>
               
       </div>     
         <!-- Hot div ends-->
         
             <div id="content" class="container"><!-- container Begin -->
       
            <div class="row" style="margin:10px;">
<?php


    global $con;

        $getproduct = "select * from products order by 1 desc limit 0,8";
        $runproduct = mysqli_query($con,$getproduct);

        while($rowproduct = mysqli_fetch_array($runproduct))
        {
            $product_title = $rowproduct['product_title'];
            $product_price = $rowproduct['product_price'];
            $product_keywords = $rowproduct['product_keywords'];
            $product_id = $rowproduct['product_id'];
            $product_img1 = $rowproduct['product_img1'];
            $product_img2 = $rowproduct['product_img2'];
            $pro_id = $rowproduct['product_id'];
               $product_color = $rowproduct['product_color'];
                $product_company = $rowproduct['product_company'];

        echo "  
        <div class='col-md-3 col-sm-6'>
            <div class='product-grid4'>
                <div class='product-image4'>
                    <a href='#''>
                        <img class='pic-1' src='admin-dashboard/product_images/$product_img1'>
                        <img class='pic-2' src='admin-dashboard/product_images/$product_img2'>
                    </a>
                    <ul class='social'>
                        
                        
                        <li><a href='details.php?pro_id=$pro_id' data-tip='Add to Cart'><i class='fa fa-shopping-cart'></i></a></li>
                    </ul>
                    <span class='product-new-label'>New</span>
                    <span class='product-discount-label'>-10%</span>
                </div>
                <div class='product-content'>
                    <h3 class='title'><a href='#'>$product_title</a></h3>
                    <div class='price'>
                        Rs. $product_price
                        <span>10%</span>
                    </div>
                    <a class='add-to-cart' href='details.php?pro_id=$pro_id'>ADD TO CART</a>
                </div>
            </div>
        </div>
         ";
}
?>
<br>
<br><br>
  

            </div>
    </div>    
    <?php 
    
    include("footer.php");
    
    ?>
        
          
         
          

            <script src="js/jquery-331.min.js">
            </script>
             <script src="js/bootstrap-337.min.js">
            </script>
        </body>
    </head>
</html>
