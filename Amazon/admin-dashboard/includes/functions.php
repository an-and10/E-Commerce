

<?php

$con = mysqli_connect("localhost","root","","ecom_store_2");



function cal_products()
{


	global $con;

	$get_products = "select * from products";

	$run_products = mysqli_query($con,$get_products);

	 $count = mysqli_num_rows($run_products);
        

	return  $count;

}


function cal_customers()
{


	global $con;

	$get_products = "select * from customer";

	$run_products = mysqli_query($con,$get_products);

	 $count = mysqli_num_rows($run_products);
        

	return  $count;

}



function cal_pro_cat()
{


	global $con;

	$get_products = "select * from product_categories";

	$run_products = mysqli_query($con,$get_products);

	 $count = mysqli_num_rows($run_products);
        

	return  $count;

}



function cal_orders()
{


	global $con;

	$get_products = "select * from customer_order";

	$run_products = mysqli_query($con,$get_products);

	 $count = mysqli_num_rows($run_products);
        

	return  $count;

}






?>
