    <?php


    include('includes/header.php');

    ?>


    <!--New Page content starts-->


    <div id="content">
    <div class="container">
    <div class="col-md-12">
    <div class="row">
     
        <div class="btn-group btn-breadcrumb breadcrumb-primary">
            <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
            <div class="visible-lg-block">
            <div class="btn btn-warning btn-derecha"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></div>
            <div class="btn btn-default btn-derecha">Way to Go</div>
          </div>
            <a href="index.php" class="btn btn-primary visible-lg-block visible-md-block">Home</a>
            <a href="shop.php" class="btn btn-primary visible-lg-block visible-md-block">Shop</a>
            <a href="cart.php" class="btn btn-primary visible-lg-block visible-md-block ">Cart</a>
            <a href="details.php" class="btn btn-primary visible-lg-block visible-md-block active">Details</a>
            <div class="btn btn-default visible-xs-block hidden-xs visible-sm-block ">Details</div>
           >
        </div><br><br><br>
  </div><!-- col-md-12 finish-->


    <!-- col-md -9 starts for detasils pages of product-->

    <div class="col-md-9"><!-- col-md-9 Begin -->
    
<div class="card">
  <div class="row">
    <aside class="col-sm-5 border-right">
<article class="gallery-wrap"> 
<div class="img-big-wrap">
  <div> <a href="#"><img src="admin_area/product_images/<?php echo  $product_img1 ?>"></a></div>
</div> <!-- slider-product.// -->
<div class="img-small-wrap">
  <div class="item-gallery"> <img src="admin_area/product_images/<?php  echo  $product_img2?>"> </div>
  <div class="item-gallery"> <img src="admin_area/product_images/<?php  echo  $product_img3?>"> </div>
  <div class="item-gallery"> <img src="admin_area/product_images/<?php  echo  $product_img1?>"> </div>
  <div class="item-gallery"> <img src="admin_area/product_images/<?php  echo  $product_img2?>"> </div>
</div> <!-- slider-nav.// -->
</article> <!-- gallery-wrap .end// -->
    </aside>
    <aside class="col-sm-7">
<article class="card-body p-5">
  <h3 class="title mb-3"><?php echo $pro_title; ?></h3>

<p class="price-detail-wrap"> 
  <span class="price h3 text-warning"> 
    <span class="currency"> Rs. </span><span class="num"><?php echo $product_price; ?></span>
  </span> 
  <span>15% Discount</span> 
</p> <!-- price-detail-wrap .// -->
<dl class="item-property">
  <dt>Description</dt>
  <dd><p><?php echo $product_desc  ?> </p></dd>
</dl>
<dl class="param param-feature">
  <dt>Products Company</dt>
  <dd>Reebok</dd>
</dl>  <!-- item-property-hor .// -->
<dl class="param param-feature">
  <dt>Color Available : </dt>
  <dd>Black and white</dd>
</dl>  <!-- item-property-hor .// -->
<dl class="param param-feature">
  <dt>Enter Pincode to Check for availablity : </dt>
   <dd ><input class="form-control" type="text"  style="width: 70%;">
</dl>  <!-- item-property-hor .// -->

<hr>
  <div class="row">
    <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post">
    <?php add_cart(); ?>
            
    <div class="col-sm-5">

      <dl class="param param-inline" required>
        <dt>Quantity: </dt>
        <dd>
          <select class="form-control form-control-sm" style="width:100%;" name="product_qty" required>
            <option disabled selected="">  Select Quantity </option>
            <option> 1 </option>
            <option> 2 </option>
            <option> 3 </option>
          </select>
        </dd>
      </dl>  <!-- item-property .// -->
    </div> <!-- col.// -->
    <div class="col-sm-7">
      <dl class="param param-inline"  required>
          <dt>Size: </dt>
          <dd>
            <label class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="product_size" id="" value="SM" required>
            <span class="form-check-label">SM</span>
          </label>
          <label class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="product_size" id="" value="MD" required="">
            <span class="form-check-label">MD</span>
          </label>
          <label class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="product_size" id="" value="XXL" required="">
            <span class="form-check-label">XXL</span>
          </label>
          </dd>
      </dl>  <!-- item-property .// -->
    </div> <!-- col.// -->
  </div> <!-- row.// -->
  <hr>
  <a href="#" class="btn btn-lg btn-primary text-uppercase"> Buy now </a>
  <button class="btn btn-lg btn-primary text-uppercase" style="float: right"> <i class="fa fa-shopping-cart"></i> Add to cart </button>
  </form>
</article> <!-- card-body.// -->
    </aside> <!-- col.// -->
  </div> <!-- row.// -->
</div> <!-- card.// -->

    </div> <!-- col-md-3 for sidebar-->
    <div class="col-md-3">
    <?php
    include('includes/sidebar.php');
    ?>

    </div>
    <br>
    <br>

    <div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Trending <b>Products</b></h2>
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
      <!-- Carousel indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>   
      <!-- Wrapper for carousel items -->
      <div class="carousel-inner">

        <div class="item carousel-item active">
          <div class="row">
            <?php 


          global $con;

              $getproduct = "select * from products order by 1 desc limit 0,4";
              $runproduct = mysqli_query($con,$getproduct);

              while($rowproduct = mysqli_fetch_array($runproduct))
              {
            $product_title = $rowproduct['product_title'];
            $product_price = $rowproduct['product_price'];
            $product_keywords = $rowproduct['product_keywords'];
            $product_id = $rowproduct['product_id'];
            $product_img1 = $rowproduct['product_img1'];
            $product_img2 = $rowproduct['product_img2'];

              echo  " 
            <div class='col-sm-3'>
              <div class='thumb-wrapper'>
                <div class='img-box'>
                  <img src='admin_area/product_images/$product_img1' class='img-responsive img-fluid' alt=''>
                </div>
                <div class='thumb-content'>
                  <h4>$product_title</h4>
                  <p class='item-price'> <span>Rs. $product_price</span></p>
                  <div class='star-rating'>
                    <ul class='list-inline'>
                      <li class='list-inline-item'><i class='fa fa-star'></i></li>
                      <li class='list-inline-item'><i class='fa fa-star'></i></li>
                      <li class='list-inline-item'><i class='fa fa-star'></i></li>
                      <li class='list-inline-item'><i class='fa fa-star'></i></li>
                      <li class='list-inline-item'><i class='fa fa-star-o'></i></li>
                    </ul>
                  </div>
                  <a href='details.php?pro_id=$product_id' class='btn btn-primary'>Add to Cart</a>
                </div>            
              </div>
            </div> 

        
        ";



          }

?>
   
          </div>
        </div>

          <div class="item carousel-item ">
          <div class="row">
            <?php 



              $getproduct = "select * from products order by 1 desc limit 4,8";
              $runproduct = mysqli_query($con,$getproduct);

              while($rowproduct = mysqli_fetch_array($runproduct))
              {
            $product_title = $rowproduct['product_title'];
            $product_price = $rowproduct['product_price'];
            $product_keywords = $rowproduct['product_keywords'];
            $product_id = $rowproduct['product_id'];
            $product_img1 = $rowproduct['product_img1'];
            $product_img2 = $rowproduct['product_img2'];

              echo  " 
            <div class='col-sm-3'>
              <div class='thumb-wrapper'>
                <div class='img-box'>
                  <img src='admin_area/product_images/$product_img1' class='img-responsive img-fluid' alt=''>
                </div>
                <div class='thumb-content'>
                  <h4>$product_title</h4>
                  <p class='item-price'><strike>$400.00</strike> <span>$product_price</span></p>
                  <div class='star-rating'>
                    <ul class='list-inline'>
                      <li class='list-inline-item'><i class='fa fa-star'></i></li>
                      <li class='list-inline-item'><i class='fa fa-star'></i></li>
                      <li class='list-inline-item'><i class='fa fa-star'></i></li>
                      <li class='list-inline-item'><i class='fa fa-star'></i></li>
                      <li class='list-inline-item'><i class='fa fa-star-o'></i></li>
                    </ul>
                  </div>
                  <a href='details.php?pro_id=$product_id' class='btn btn-primary'>Add to Cart</a>
                </div>            
              </div>
            </div> 

        
        ";



          }

?>
   
          </div>
        </div>
        
      </div>
             
     
      <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
      </a>
      <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
      </a>
    </div>
    </div>
  </div>
</div>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </div>
    </div>
  </div>
    <?php
    include('footer.php');
    ?>
