<?php 

include("includes/db.php");

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fas fa-align-justify"></i> Dashboard / View Customers
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Customers
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Order No. : </th>
                                <th> Customer Id: </th>
                                <th> Customer Name: </th>
                                <th> Customer Balanced Amt: </th>
                                <th> Order Invoice: </th>
                                <th> Order Quantity: </th>
                                <th> Order Product Size: </th>
                                <th> Order Date: </th>
                                <th> Order Status: </th>
                                  
                                
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                         <?php

                            $get_orders= "select * from customer_order ";
                            $run_orders= mysqli_query($con,$get_orders);

                            while($row_order=mysqli_fetch_array($run_orders))
                            {
                                $customer_id= $row_order['customer_id'];
                                $order_no = $row_order['order_no'];
                                $balance= $row_order['due_amount'];
                                $invoice =$row_order['invoice_no'];
                                $qty = $row_order['qty'];
                                $size = $row_order['size'];
                                $date= $row_order['order_date'];
                                $status = $row_order['order_status'];

                                // $get_customer = "select customer_name from customer where customer_id='$customer_id'";

                                // $run_customer = mysqli_query($con,$get_customer);

                                // while($row_customer= mysqli_fetch_array($run_customer))
                                // {
                                //     $customer_name= $row_customer['customer_name'];

                                        


                            ?>

                            <tr>
                            <td>    <?php echo $order_no ?> </td>
                             <td>    <?php echo $customer_id ?> </td>
                             <td>    </td>
                             <td>   <?php echo $balance ?> </td>

                              <td>   <?php echo $invoice ?> </td>

                               <td>   <?php echo $qty ?> </td>

                                <td>   <?php echo $size ?> </td>

                                 <td>   <?php echo $date ?> </td>

                                  <td>   <?php echo $status ?> </td>



                              


           

                         
                          <?php    }    ?>
                              
 </tr>
        </tbody>
    </table>
</div>
</div>
