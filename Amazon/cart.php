<?php

$active = "Cart";
include('includes/header.php');
//include('functions/function.php');

?>


<!--New PAge conternt starts-->
<style>



  .update{
    margin:10px;
    color:blue;
    font-size: 15px;
    float: right;


  }
  .update:hover{
    color:red;
    font-size: 20px;
  }
  .price{
    font-size: 15px;
  }

  /* carasoule top trending products/.  */   


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

<div id="content">
    <div class="container">
         <div class="row">
     
        <div class="btn-group btn-breadcrumb breadcrumb-primary">
            <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
            <div class="visible-lg-block">
            <div class="btn btn-warning btn-derecha"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></div>
            <div class="btn btn-default btn-derecha">Way to Go</div>
          </div>
            <a href="index.php" class="btn btn-primary visible-lg-block visible-md-block">Home</a>
            <a href="shop.php" class="btn btn-primary visible-lg-block visible-md-block">Shop</a>
            <a href="scart.php" class="btn btn-primary visible-lg-block visible-md-block active">Cart</a>
            
            <div class="btn btn-default visible-xs-block hidden-xs visible-sm-block ">...</div>
           >
        </div><br><br><br>
  </div>
         
          <div id="" class="col-md-9"><!-- col-md-9 Begin -->
        <div class ="boxes">
            <h3>Your Shopping Cart</h3>
        <p>
        Currently You have <?php echo cal_items(); ?>  product(s) in your Cart </p>
         </div>    
    <main class="boxes">
    <section class="shopping-cart">
      <div class="container">
            
          <div class="row">
            <div class="col-md-8 col-lg-8 ">
              <div class="items">
               <?php 
                global $con;
    //$total=0;
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
                        $pro_desc = $result['product_desc'];
                        $pro_img1 = $result['product_img1'];
                        $unit_price= $result['product_price'];
                        $subtotal=  $pro_qty * $unit_price;
                        echo "
               
               
               
               
               
               
                <div class='product box'>
                  <div class='row'>
                    <div class='col-md-3'>
                      <img class='img-fluid mx-auto d-block image' src='admin-dashboard/product_images/$pro_img1'>
                    </div>
                    <div class='col-md-8'>
                      <div class='info'>
                        <div class='row'>
                          <div class='col-md-5 product-name'>
                            <div class='product-name'>
                              <h4><a href='#'>$pro_title</a></h4>
                              <div class='product-info'>
                                <div><b>Description:</b> <span class='value'>$pro_desc</span></div><br>
                                <div><b>Colors Available:</b> <span class='value' ></span></div><br>
                                <div><b>Size:</b> <span class='value' >$pro_size</span></div></h5><br>
                                <div><b>Unit Price:</b> <span class='value' > Rs.$unit_price</span></div><br>
                                <div >
                          <form method='post' action='cart.php'>
                          <button type='submit' name='remove' class='btn btn-primary btn-block'><i class='fa fa-trash'></i>  Remove</button>
                        </div>

                        </form>
                        </h5><br>
                              </div>
                            </div>
                          </div>
                          <div class='col-md-4 quantity'>
                            <label for='quantity'>Quantity:</label>
                            <input id='quantity' type='number' value ='$pro_qty' class='form-control quantity-input'><br>
                            
                            
                          </div>
                          <div class='col-md-3 price'>
                            <span>Rs. $subtotal</span>
                          </div>
                            <br><br>
                            
                          
                                               
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                ";
                  }
                }
                  
                    ?>
                
                
                
                
                
                
                
<!--
                <div class='product'>
                  <div class='row'>
                    <div class='col-md-3'>
                      <img class='img-fluid mx-auto d-block image' src='admin_area/product_images/image.jpg'>
                    </div>
                    <div class="col-md-8">
                      <div class="info">
                        <div class="row">
                          <div class="col-md-5 product-name">
                            <div class="product-name">
                              <a href="#">Lorem Ipsum dolor</a>
                              <div class="product-info">
                                <div>Display: <span class="value">5 inch</span></div>
                                <div>RAM: <span class="value">4GB</span></div>
                                <div>Memory: <span class="value">32GB</span></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 quantity">
                            <label for="quantity">Quantity:</label>
                            <input id="quantity" type="number" value ="1" class="form-control quantity-input">
                          </div>
                          <div class="col-md-3 price">
                            <span>$120</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
-->
                
              </div>
            </div>
          
          </div> 
        </div><br>
      <div class="col-md-4 col-lg-4 ">
     <a href="shop.php"> <button class="btn btn-success btn-block">Contiue Shopping</button></a>
    </div>
    <div class="col-md-4 col-lg-4">
      <button class="btn btn-danger btn-block">Update Cart</button>
    </div>
    <div class="col-md-4 col-lg-4">
     <a href="checkout.php"> <button class="btn btn-primary btn-block">Place Order</button></a>
    </div>
    </section>

  </main>

 </div>
         <div class="col-md-3">
              
               <div id="order-summary" class="shop"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <h3>Order Summary</h3>
                       
                   </div><!-- box-header Finish -->
                   
                   <p class="text-muted"><!-- text-muted Begin -->
                       
                       The amount is based on the total cart products and quatity. Delivery Charged are applied to each product.
                       
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
                                   
                                   <td> Total </td>
                                   <th>Rs.  <?php echo total_price(); ?> </th>
                                   
                               </tr><!-- tr Finish -->
                               
                           </tbody><!-- tbody Finish -->
                           
                       </table><!-- table Finish -->
                       
                   </div><!-- table-responsive Finish -->
                   
               </div><!-- box Finish -->
               
         </div>  
    </div>

            </div>
    



    <div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2> <b>Products</b>  &nbsp;You May Also Like</h2>
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

              $getproduct = "select * from products order by rand() desc limit 0,4";
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
                  <img src='admin-dashboard/product_images/$product_img1' class='img-responsive img-fluid' alt=''>
                </div>
                <div class='thumb-content'>
                  <h4>$product_title</h4>
                  <p class='item-price'><span>Rs. $product_price</span></p>
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
</div>
</div>
</div>
</div>
   
       

            <?php
            include('footer.php');
            ?>
            
            <!-- 
            