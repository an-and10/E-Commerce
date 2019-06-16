<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Products
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Products
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Product Category ID </th>
                                <th> Product Category Title </th>
                                <th> Product Category Description </th>
                                <th> <i class="fa fa-pencil"></i>Edit</th>
                                <th><i class="fa fa-trash-o"></i>  Delete</th>
                                
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->


                            <?php
                            include('includes/db.php');
                            $get_p_cat = "select * from product_categories";
                            $run_p_cat =  mysqli_query($con,$get_p_cat);
                            while($row_p_cat= mysqli_fetch_array($run_p_cat))
                            {
                                $p_cat_id=$row_p_cat['p_cat_id'];
                                $p_cat_title= $row_p_cat['p_cat_title'];
                                $p_cat_desc =  $row_p_cat['p_cat_desc'];



                    ?>
                        <tr>
                            <td><?php echo  $p_cat_id   ?></td>
                            <td><?php echo  $p_cat_title   ?></td>
                            <td><?php echo  $p_cat_desc   ?></td>
                            <th> <a href="index.php?edit_product_categories=<?php echo $p_cat_id  ?>">Edit</a></th>
                            <th> <a href="index.php?delete_product_category=<?php echo $p_cat_id  ?>"">Delete</a></th>
                                <?php  }  ?>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>