<?php 

include("includes/db.php");

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Customers
                
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
                                <th> Customer ID: </th>
                                <th> Customer Name: </th>
                                <th> Customer Email: </th>
                                <th> Customer Country: </th>
                                <th> Customer City: </th>
                                <th> Customer Contact: </th>
                                <th> Customer Address: </th>
                                <th> Customer Photo: </th>
                                
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                         <?php

                            $get_customer= "select * from customer";
                            $run_customer= mysqli_query($con,$get_customer);

                            while($row_customer=mysqli_fetch_array($run_customer))
                            {



                                $customer_name= $row_customer['customer_name'];
                                 $customer_email= $row_customer['customer_email'];
                                  $customer_country= $row_customer['customer_country'];
                                   $customer_city= $row_customer['customer_city'];
                                    $customer_id = $row_customer['customer_id'];
                                    $customer_contact= $row_customer['customer_contact'];
                                     $customer_address= $row_customer['customer_address'];
                                      $customer_image= $row_customer['customer_image'];


                            ?>
                            <tr>
                                <td> <?php echo $customer_id ?> </td>
                                <td> <?php echo $customer_name ?> </td>
                                <td> <?php echo $customer_email ?> </td>
                                <td> <?php echo $customer_country ?> </td>
                                <td> <?php echo $customer_city ?> </td>
                                <td> <?php echo $customer_contact ?> </td>
                                <td> <?php echo $customer_address ?> </td>
                                <td><img src="../customer/customer_images/<?php echo $customer_image; ?>" width="60" height="60"> </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



                           <?php    }    ?>                        