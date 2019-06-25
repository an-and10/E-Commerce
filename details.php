    <?php


    include('includes/header.php');


  



    $getproduct = "select * from products where product_id='$product_id'";
    $runproduct = mysqli_query($con,$getproduct);

    while($rowproduct = mysqli_fetch_array($runproduct))
    {
        $product_title = $rowproduct['product_title'];
        $product_price = $rowproduct['product_price'];
        $product_keywords = $rowproduct['product_keywords'];
        $product_id = $rowproduct['product_id'];
        $product_img1 = $rowproduct['product_img1'];
        $product_color = $rowproduct['product_color'];
        $product_company =  $rowproduct['product_company'];
          }
?>

<style>

h2 {
  color: #000;
  font-size: 26px;
  font-weight: 300;
  text-align: center;
  text-transform: uppercase;
  position: relative;
  margin: 30px 0 80px;
}
h2 b {
  color: #ffc000;
}
h2::after {
  content: "";
  width: 100px;
  position: absolute;
  margin: 0 auto;
  height: 4px;
  background: rgba(0, 0, 0, 0.2);
  left: 0;
  right: 0;
  bottom: -20px;
}
.carousel {
  margin: 50px auto;
  padding: 0 70px;
}
.carousel .item {
  min-height: 330px;
    text-align: center;
  overflow: hidden;
}
.carousel .item .img-box {
  height: 160px;
  width: 100%;
  position: relative;
}
.carousel .item img { 
  max-width: 100%;
  max-height: 100%;
  display: inline-block;
  position: absolute;
  bottom: 0;
  margin: 0 auto;
  left: 0;
  right: 0;
}
.carousel .item h4 {
  font-size: 18px;
  margin: 10px 0;
}
.carousel .item .btn {
  color: #333;
    border-radius: 0;
    font-size: 11px;
    text-transform: uppercase;
    font-weight: bold;
    background: none;
    border: 1px solid #ccc;
    padding: 5px 10px;
    margin-top: 5px;
    line-height: 16px;
}
.carousel .item .btn:hover, .carousel .item .btn:focus {
  color: #fff;
  background: #000;
  border-color: #000;
  box-shadow: none;
}
.carousel .item .btn i {
  font-size: 14px;
    font-weight: bold;
    margin-left: 5px;
}
.carousel .thumb-wrapper {
  text-align: center;
}
.carousel .thumb-content {
  padding: 15px;
}
.carousel .carousel-control {
  height: 100px;
    width: 40px;
    background: none;
    margin: auto 0;
    background: rgba(0, 0, 0, 0.2);
}
.carousel .carousel-control i {
    font-size: 30px;
    position: absolute;
    top: 50%;
    display: inline-block;
    margin: -16px 0 0 0;
    z-index: 5;
    left: 0;
    right: 0;
    color: rgba(0, 0, 0, 0.8);
    text-shadow: none;
    font-weight: bold;
}
.carousel .item-price {
  font-size: 13px;
  padding: 2px 0;
}
.carousel .item-price strike {
  color: #999;
  margin-right: 5px;
}
.carousel .item-price span {
  color: #86bd57;
  font-size: 110%;
}
.carousel .carousel-control.left i {
  margin-left: -3px;
}
.carousel .carousel-control.left i {
  margin-right: -3px;
}
.carousel .carousel-indicators {
  bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
  width: 10px;
  height: 10px;
  margin: 4px;
  border-radius: 50%;
  border-color: transparent;
}
.carousel-indicators li { 
  background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {  
  background: rgba(0, 0, 0, 0.6);
}
.star-rating li {
  padding: 0;
}
.star-rating i {
  font-size: 14px;
  color: #ffc000;

</style>

    <!--New Page content starts-->

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

    <!-- col-md -9 starts for detasils pages of product-->

    <div class="col-md-9"><!-- col-md-9 Begin -->
    
<div class="card">
  <div class="row">
    <aside class="col-sm-5 border-right">
<article class="gallery-wrap"> 
<div class="img-big-wrap">
  <div> <a href="#"><img src="admin-dashboard/product_images/<?php echo  $product_img1 ?>"></a></div>
</div> <!-- slider-product.// -->
<div class="img-small-wrap">
  <div class="item-gallery"> <img src="admin-dashboard/product_images/<?php  echo  $product_img2?>"> </div>
  <div class="item-gallery"> <img src="admin-dashboard/product_images/<?php  echo  $product_img3?>"> </div>
  <div class="item-gallery"> <img src="admin-dashboard/product_images/<?php  echo  $product_img1?>"> </div>
  <div class="item-gallery"> <img src="admin-dashboard/product_images/<?php  echo  $product_img2?>"> </div>
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
  <dd><?php echo $product_company  ?> </p></dd>
</dl></dd>
</dl>  <!-- item-property-hor .// -->
<dl class="param param-feature">
  <dt>Color Available : </dt>
  <dd><?php echo $product_color  ?> </p></dd>
</dl></dd>
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
            $product_company = $rowproduct['product_company'];
            $product_color =$rowproduct['product_color'];

              echo  " 
            <div class='col-sm-3'>
              <div class='thumb-wrapper'>
                <div class='img-box'>
                  <img src='admin-dashboard/product_images/$product_img1' class='img-responsive img-fluid' alt=''>
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