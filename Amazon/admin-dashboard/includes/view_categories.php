 <?php 

include("includes/db.php");

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Cateogries
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Categories
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Category ID: </th>
                                <th> Category Title: </th>
                                <th> Category  Description: </th>
                                <th> <i class="fas fa-edit"></i>Edit</th>
                                <th> <i class="fas fa-trash"></i>Delete</th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                         <?php
                       
                            $get_cat = "select * from categories";
                            $run_cat =  mysqli_query($con,$get_cat);
                            while($row_p_cat= mysqli_fetch_array($run_cat))
                            {
                                $cat_id=$row_p_cat['cat_id'];
                                $cat_title= $row_p_cat['cat_title'];
                                $cat_desc =  $row_p_cat['cat_desc'];



                    ?>
                        <tr>
                            <td><?php echo  $cat_id   ?></td>
                            <td><?php echo  $cat_title   ?></td>
                            <td><?php echo  $cat_desc   ?></td>
                            <th> <a href="index.php?edit_categories=<?php echo $cat_id ?>">Edit</a></th>
                            <th> <a href="index.php?delete_categories=<?php echo $cat_id ?>">Delete</a></th>


                          </tr>
                          

                                <?php  }  ?>

                                </tbody>
                          </table>	
                          
                        
                        
                        
                        
                        
                        
                        
                    
                        
                     
                       
      
