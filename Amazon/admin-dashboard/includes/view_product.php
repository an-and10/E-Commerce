<?php 

include("includes/db.php");

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fas fa-align-justify"></i> Dashboard / View Products
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading red"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fas fa-fw fa-file"></i>  View Products
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Product ID: </th>
                                <th> Product Title: </th>
                                <th> Product Image: </th>
                                <th> Product Price: </th>
                                <th> Product Sold: </th>
                                <th> Product Keywords: </th>
                                <th> Product Date: </th>
                                <th> Product Delete: </th>
                                <th> Product Edit: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                         
                        
                        <?php

                        global $con;

                        $getproduct = "select * from products order by 1 desc limit 0,10";
                        $runproduct = mysqli_query($con,$getproduct);
                            $i=0;
                        while($rowproduct = mysqli_fetch_array($runproduct))
                        {   
                            $product_id= $rowproduct['product_id'];
                            $product_title = $rowproduct['product_title'];
                            $product_price = $rowproduct['product_price'];
                            $product_keywords = $rowproduct['product_keywords'];
                            //$product_id = $rowproduct['product_id'];
                            $product_img1 = $rowproduct['product_img1'];
                            $date= $rowproduct['date'];
                            $i++;
                            ?>
                        <tr>
                        
                        <td> <?php echo $i; ?> </td>
                        <td> <?php echo $product_title; ?> </td>
                        <td> <img src="product_images/<?php echo $product_img1; ?>" width="60" height="60"></td>
                        <td> Rs. <?php echo $product_price; ?> </td>
                        <td> <?php

                            $get_sold = "select * from pending_orders where product_id='$product_id'";
                                                                
                            $run_sold = mysqli_query($con,$get_sold);

                            $count = mysqli_num_rows($run_sold);

                            echo $count;
                        
                        

                        ?>
                        <td><?php echo $product_keywords; ?>

                        <td> <?php echo $date ?> </td>
                        <td><center><i class="far fa-edit"></i> <a href="index.php?edit_product=<?php echo $product_id  ?>"  style="text-align: center">Edit</a></center></td>
                        <td><i class="fas fa-fw fa-trash"></i> <a href="index.php?delete_product=<?php echo $product_id  ?>" style="text-align: center;">Delete</a></td>

                      <?php   }   ?>
                    </table>

                        
                        
                        
                        
                        
                        
                        
                    
                        
                     
                       
      
