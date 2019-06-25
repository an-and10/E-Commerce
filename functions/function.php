<?php

/// begin getRealIpUser functions ///

function getRealIpUser(){

    switch(true){

            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];

            default : return $_SERVER['REMOTE_ADDR'];

    }
}

//function closed for cart ip address

      function add_cart(){

        global $con;

        if(isset($_GET['add_cart'])){

            $ip_add = getRealIpUser();

            $p_id = $_GET['add_cart'];

            $product_qty = $_POST['product_qty'];

            $product_size = $_POST['product_size'];

        

            $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id' AND product_size='$product_size'";

            $run_check = mysqli_query($con,$check_product);

            if(mysqli_num_rows($run_check)>0){






                      echo "<script>window.open('index.php?pro_id=$p_id','_self')</script>";


            }else{

                $query = "insert into cart (p_id,ip_add,p_qty,p_size) values ('$p_id','$ip_add','$product_qty','$product_size')";

                $run_query = mysqli_query($con,$query);

                  echo "<script>alert('This product is added  in cart')</script>";
                    echo "<script>window.open('cart.php','_self')</script>";


            }


        }

      }
//function closed for cart table



// get product details//
function get_Product(){
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
        $product_color = $rowproduct['product_color'];
        $product_company =  $rowproduct['product_company'];

        echo "
                 <div class='col-sm-3 col-sm-4 single'>

               <div class='product'>
                   <a href='details.php?product_id=$product_id'>

                       <img class='img-responsive' src='admin-dashboard/product_images/$product_img1' alt='$product_title'>

                   </a>

                   <div class='text'>

                       <h3>
                           <a href='details.php?product_id=$product_id'>

                                $product_title
                           </a>
                       </h3>

                       <p class='price'>Rs.  $product_price</p>

                       <p class='button'>

                           <a href='details.php?product_id=$product_id' class='btn btn-default'>View Details</a>

                           <a href='details.php?product_id=$product_id'' class='btn btn-primary''>

                               <i class='fa fa-shopping-cart'>
                                   Add To Cart
                               </i>

                           </a>

                       </p>

                   </div>

               </div>

           </div>
        ";

    }

}

//product funtion ends//

function get_product_category()
    {
            global $con;
         $get_cat= "select * from  product_categories";
                $run_cat= mysqli_query($con,$get_cat);
                while($row_cat= mysqli_fetch_array($run_cat))
                {
                    $cat_title= $row_cat['p_cat_title'];
                    $cat_id=$row_cat['p_cat_id'];
                    echo "


                    <li><a href='shop.php?p_cat=$cat_id'>$cat_title</a></li>

             ";
                }

    }


//catergory//


function get_category()
{       global $con;
     $get_cat= "select * from categories";
                $run_cat= mysqli_query($con,$get_cat);
                while($row_cat= mysqli_fetch_array($run_cat))
                {
                     $cat_title= $row_cat['cat_title'];
                    $cat_id=$row_cat['cat_id'];
                    echo "


                    <li><a href='shop.php?cat=$cat_id'>$cat_title</a></li>





                    ";
                }

}

/* shopping categor function starts  */
// begin getpcatpro functions ///

function getpcatpro(){

    global $con;

    if(isset($_GET['p_cat'])){

        $p_cat_id = $_GET['p_cat'];

        $get_p_cat ="select * from product_categories where p_cat_id='$p_cat_id'";

        $run_p_cat = mysqli_query($con,$get_p_cat);

        $row_p_cat = mysqli_fetch_array($run_p_cat);

        $p_cat_title = $row_p_cat['p_cat_title'];

        $p_cat_desc = $row_p_cat['p_cat_desc'];

        $get_products ="select * from products where p_cat_id='$p_cat_id'";

        $run_products = mysqli_query($con,$get_products);

        $count = mysqli_num_rows($run_products);

        if($count==0){

            echo "

                <div class='shop'>

                    <h4 class='text-center'>We are Sorry<br> No Product Found In This Product Categories </h4>

                </div>

            ";

        }else{

            echo "

                <div class='shop'>

                    <h1 style='color:red'> $p_cat_title </h1>

                    <p> $p_cat_desc </p><br><br>

                </div>

            ";

        }

        while($row_products=mysqli_fetch_array($run_products)){

            $pro_id = $row_products['product_id'];

            $pro_title = $row_products['product_title'];
            $pro_desc  = $row_products['product_desc'];
            $pro_price = $row_products['product_price'];

            $pro_img1 = $row_products['product_img1'];
            $pro_img2 = $row_products['product_img2'];
            $product_color =  $row_products['product_color'];
            $product_company =  $row_products['product_company'];

            echo "

               <div class='col-md-4 col-sm-6' >
            <div class='product-grid5'>
                <div class='product-image5 rounded'>
                    <a href='details.php'>
                        <img class='pic-1' src='admin_area/product_images/$pro_img1'>
                        <img class='pic-2' src='admin_area/product_images/$pro_img2'>
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

    }

}


function getpcat()
{



    global $con;

    if(isset($_GET['cat'])){

        $cat_id = $_GET['cat'];

        $get_cat ="select * from categories where cat_id='$cat_id'";

        $run_cat = mysqli_query($con,$get_cat);

        $row_cat = mysqli_fetch_array($run_cat);

        $cat_title = $row_cat['cat_title'];

        $cat_desc = $row_cat['cat_desc'];

        $get_products ="select * from products where cat_id='$cat_id'";

        $run_products = mysqli_query($con,$get_products);

        $count = mysqli_num_rows($run_products);

        if($count==0){

            echo "

                <div class='box'>

                    <h1> No Product Found In This Product Categories </h1>

                </div>

            ";

        }else{

            echo "

                <div class='box'>

                    <h1> $cat_title </h1>

                    <p> $cat_desc </p>

                </div>

            ";

        }

        while($row_products=mysqli_fetch_array($run_products)){

            $pro_id = $row_products['product_id'];

            $pro_title = $row_products['product_title'];

            $pro_price = $row_products['product_price'];

            $pro_img1 = $row_products['product_img1'];

            echo "

                <div class='col-md-4 col-sm-6 center-responsive'>

            <div class='product'>

                <a href='details.php?pro_id=$pro_id'>

                    <img class='img-responsive' src='admin-dashboard/product_images/$pro_img1'>

                </a>

                <div class='text'>

                    <h3>

                        <a href='details.php?pro_id=$pro_id'>

                            $pro_title

                        </a>

                    </h3>

                    <p class='price'>

                        $ $pro_price

                    </p>

                    <p class='button'>

                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                            View Details

                        </a>

                        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                            <i class='fa fa-shopping-cart'></i> Add to Cart

                        </a>

                    </p>

                </div>

            </div>

        </div>

            ";

        }

    }

}






/* shopping category function ends  */


//calcualate total items //
function cal_items()
{
  global $con;

    $ip_add =getRealIpUser();
    $get_items= "select * from cart where ip_add='$ip_add'";
    $run_items= mysqli_query($con,$get_items);
    $count_items= mysqli_num_rows($run_items);

    return $count_items;

}

  function cal_price()
  {
    global $con;
    $total=0;
    $ip_add =getRealIpUser();
    $get_items= "select * from cart where ip_add='$ip_add'";
    $run_items = mysqli_query($con,$get_items);
    while($row_result= mysqli_fetch_array($run_items))
    {
      $pro_id = $row_result['p_id'];
      $pro_qty = $row_result['p_qty'];
      $get_price = "select * from products  where product_id='$pro_id'";
      $run_price=   mysqli_query($con,$get_price);
      while($result= mysqli_fetch_array($run_price))
      {
        $price = $pro_qty * $result['product_price'];
        $total= $total + $price;
      }
    }

    return $total;
  }



  // function to display cart//

  function cart_display()
  { 
    //     global $con;
    // $ip_add =getRealIpUser();
    // $get_items= "select * from cart where ip_add='$ip_add'";
    // $run_items= mysqli_query($con,$get_items);
    // $row_items= mysqli_fetch_array($run_items);
    // $pro_id= 
    // $count_items= mysqli_num_rows($run_items);
    // $get_product = "select * from products  where product_id='$pro_id'";
    //   $run_price=   mysqli_query($con,$get_product);
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
            $pro_img1 = $result['product_img1'];
            $unit_price= $result['product_price'];
            $subtotal=  $pro_qty * $unit_price;
            echo "
       
        <tbody>
                                   
        <tr>
            
            <td>
                
            <img class='img-responsive' src='admin-dashboard/product_images/$pro_img1'>
                
            </td>
            
            <td>
                
                <a href='details.php?pro_id=$pro_id'> $pro_title  </a>
                
            </td>
            
            <td>
               
                 $pro_qty  
                
            </td>
            
            <td>
                
                $unit_price 
                
            </td>
            
            <td>
                
                $pro_size 
                
            </td>
            
            <td>
                
                <input type='checkbox' name='remove[]'>
                
            </td>
            
            <td>
                
               $subtotal  
                
            </td>
            
        </tr><!-- tr Finish -->
        
    </tbody><!-- tbody Finish -->
    ";
      }
    }

  }



//  total  function//

function tax_price()
{
    $tax_total =   cal_price() * 0.18 ;
     return $tax_total;  
}


function delivery_price()
{
$shipping= 60;
return $shipping;
}

function total_price()
{
    $total_items_price=   tax_price() + delivery_price() + cal_price();
    return $total_items_price;
}

?>
