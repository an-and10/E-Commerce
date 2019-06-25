 
<?php
$active='Account';  
    include("includes/header.php");
    
    $session_email = $_SESSION['customer_email'];
    
    $select_customer = "select * from customer where customer_email='$session_email'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $row_customer = mysqli_fetch_array($run_customer);
    
    $customer_id = $row_customer['customer_id'];
    

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

        
<div id="content">
      <div class="container">

    <div class="bc-icons-2">

   <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="index.php">Home</a><i
          class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>
      <li class="breadcrumb-item"><a class="black-text" href="shop.php">Shop</a><i
          class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>
           <li class="breadcrumb-item"><a class="black-text" href="shop.php">Contact</a><i
          class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>
      <li class="breadcrumb-item active">Details</li>
    </ol>
  </nav>
</div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");

    ?>
        
              
               <div id="order-summary" class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <h3>Order Summary</h3>
                       
                   </div><!-- box-header Finish -->
                   
                   <p class="text-muted"><!-- text-muted Begin -->
                       
                       Shipping and additional costs are calculated based on value you have entered
                       
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
                                   
                                   <td> Payable Amount </td>
                                   <th>Rs.  <?php echo total_price(); ?> </th>
                                   
                               </tr><!-- tr Finish -->
                               
                           </tbody><!-- tbody Finish -->
                           
                       </table><!-- table Finish -->
                       
                   </div><!-- table-responsive Finish -->
                   
               </div><!-- box Finish -->
               
     
    
   
               
           </div>




 <style>




.header{margin-top:10px;}
.phone-no{ float:right; font-family:myriad pro;}
.book-online{ font-size:12px;font-family:myriad pro; padding-left:36px; }
.phone-no h3{    margin-top: 2px;
    color: #9e0b0f;
    background: url(../image/telephone.png)no-repeat;
    padding-left: 36px;}
	.payment-info{background:#036c9b;padding: 13px 0;}
	.payment-info h5{margin:0;padding-left:15px;color:#fff;font-size: 16px;}
	.payment-methodcard{padding: 5px 10px;}
	.star{ color:red;}
	.payment-method{ padding-left:15px;}
	.payment-method{font: italic 700 14px/29px "myriad pro";margin: 0;padding: 0px 0;}} 
	.payment-wrapper{ border:1px solid #e3e3e3;}
	.visa select{ width:100%; font:italic 400 15px/20px "myriad pro";}
	.card-1{ float:left; margin-right:4px;}
	.payment-wrapper {
    border: 1px solid #e3e3e3;
    padding-bottom: 10px;
}
.payment-wrapper .text-control{ height:33px;}
.card-number span{ font-size:13px;}

.Month-cntrl select{ width:45%; margin-right:10px; float:left;}
.otp{
    background: url(../image/card.jpg)no-repeat right center;
    background-position: 84% 0;
    height: 27px;
}
.Acceptance{ text-decoration:underline; font-size:12px; margin-right:20px;}
.icon-class{ padding-right:10px;}
.norton{float:right;position: absolute;right: 12px;bottom: -7px;}
.norton-payment{ position:relative; padding-bottom:0;} 
.billig{ margin-top:20px;}
.adress input{ margin-bottom:15px;}


</style>
	

	<div class="col-md-9">
	
	<div class="payment-wrapper">
	<div class="payment-info">
		Kindly fill the details to  place the orders
	</div>
	<div class="billig">
	<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	<div class="payment-wrapper">
	<div class="payment-info">
	
	<h5><i class="fa fa-info" aria-hidden="true"></i> Billing Information</h5>
	
	</div>
		<div class="payment-methodcard">
	<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<label class="payment-method">country<span class="star">*</span></label>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  <div class="visa">
  <select class="form-control text-control">
   <option value="volvo">India</option>
  <option value="saab">USA</option>
  <option value="opel">Australia</option>
  <option value="audi">Newzeland</option>
</select>
  
  </div>
  </div>
 
	
	</div>
	</div>
		<div class="payment-methodcard">
	<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<div class="payment-method">
	<span>Address<span class="star">*</span></span>
	</div>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  <div class="visa adress">
  <input type="text" class="form-control text-control" placeholder=""/>
  </div>
  <div class="visa adress">
  <input type="text" class="form-control text-control" placeholder=""/>
  </div>
  <div class="visa adress">
  <input type="text" class="form-control text-control" placeholder=""/>
  </div>
  </div>
  
	
	</div>
	</div>
	<div class="payment-methodcard">
	<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<div class="payment-method">
	<span>Name<span class="star">*</span></span>
	</div>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  
  <div class="visa adress">
  <input type="text" class="form-control text-control" placeholder=""/>
  </div>
  </div>
  
	
	</div>
	</div>
	<div class="payment-methodcard">
	<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<div class="payment-method">
	<span>Email<span class="star">*</span></span>
	</div>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  
  <div class="visa adress">
  <input type="text" class="form-control text-control" placeholder=""/>
  </div>
  </div>
  <div class="payment-methodcard">
	<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<div class="payment-method">
	<span>Contact<span class="star">*</span></span>
	</div>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  
  <div class="visa adress">
  <input type="text" class="form-control text-control" placeholder=""/>
  </div>
  </div>
  
	
	</div>
	</div>
  
	
	</div>
	</div>

	<div class="payment-methodcard">
	<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<div class="payment-method">
	<span>City<span class="star">*</span></span>
	</div>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  <div class="visa adress">
  <input type="text" class="form-control text-control" placeholder="City Name"/>
  </div>
  
  </div>
  
	
	</div>
	</div>
		<div class="payment-methodcard">
	<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<label class="payment-method">State<span class="star">*</span></label>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  <div class="visa">
  <select class="form-control text-control">
   <option value="volvo">India</option>
  <option value="saab">USA</option>
  <option value="opel">Australia</option>
  <option value="audi">Newzeland</option>
</select>
  
  </div>
  </div>
 
	
	</div>
	</div>
	<div class="payment-methodcard">
	<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<div class="payment-method">
	<span>Zip<span class="star">*</span></span>
	</div>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  <div class="visa adress">
  <input type="text" class="form-control text-control" placeholder=""/>
  </div>
  
  </div>
  
	
	</div>
	</div>
	</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	<div class="payment-wrapper">
	<div class="payment-info">
	
	<h5><i class="fa fa-info" aria-hidden="true"></i>Shipping Information</h5>
	
	</div>
		<div class="payment-methodcard">
	<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<label class="payment-method">country<span class="star">*</span></label>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  <div class="visa">
  <select class="form-control text-control">
  <option value="volvo">India</option>
  <option value="saab">USA</option>
  <option value="opel">Australia</option>
  <option value="audi">Newzeland</option>
</select>
  
  </div>
  </div>
 
	
	</div>
	</div>
		<div class="payment-methodcard">
	<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<div class="payment-method">
	<span>Address<span class="star">*</span></span>
	</div>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  <div class="visa adress">
  <input type="text" class="form-control text-control" placeholder=""/>
  </div>
  <div class="visa adress">
  <input type="text" class="form-control text-control" placeholder=""/>
  </div>
  <div class="visa adress">
  <input type="text" class="form-control text-control" placeholder=""/>
  </div>
  </div>
  
	
	</div>
	</div>
	<div class="payment-methodcard">
	<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<div class="payment-method">
	<span>City<span class="star">*</span></span>
	</div>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  <div class="visa adress">
  <input type="text" class="form-control text-control" placeholder="City Name"/>
  </div>
  
  </div>
  
	
	</div>
	</div>
	<div class="payment-methodcard">
	<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<div class="payment-method">
	<span>Name<span class="star">*</span></span>
	</div>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  <div class="visa adress">
  <input type="text" class="form-control text-control" placeholder=""/>
  </div>
  
  </div>
  
	
	</div>
	</div>
	<div class="payment-methodcard">
	<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<div class="payment-method">
	<span>Email<span class="star">*</span></span>
	</div>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  <div class="visa adress">
  <input type="text" class="form-control text-control" placeholder=""/>
  </div>
  
  </div>
  
	
	</div>
	</div>
	<div class="payment-methodcard">
	<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<div class="payment-method">
	<span>Contact<span class="star">*</span></span>
	</div>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  <div class="visa adress">
  <input type="text" class="form-control text-control" placeholder="Zip"/>
  </div>
  
  </div>
  
	
	</div>
	</div>

		<div class="payment-methodcard">
	<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<label class="payment-method">State<span class="star">*</span></label>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  <div class="visa">
  <select class="form-control text-control">
 <option value="volvo">India</option>
  <option value="saab">USA</option>
  <option value="opel">Australia</option>
  <option value="audi">Newzeland</option>
</select>
  
  </div>
  </div>
 
	
	</div>
	</div>
	<div class="payment-methodcard">
	<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<div class="payment-method">
	<span>Zip<span class="star">*</span></span>
	</div>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  <div class="visa adress">
  <input type="text" class="form-control text-control" placeholder="Zip"/>
  </div>
  
  </div>
  
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-4"></div>
	
	</div>

	<a href="orders.php?c_id=<?php echo $customer_id ?>"><button class="btn btn-primary" style="float: right"> Place Orders</button></a>
</div>
     
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>