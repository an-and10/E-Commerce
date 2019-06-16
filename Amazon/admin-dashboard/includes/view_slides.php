
<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fas fa-align-justify"></i> Dashboard / View Slides
                
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
                               <th>Sr. No.</th>
                               <th>Slide Name</th>
                               <th> Slide Image</th>
                               
                               <th> <i class="fas fa-trash"></i>Delete</th>

                                
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                                
                        <?php
                        $i=0;

                        include('includes/db.php');
                        $get_slides= "select * from slider";

                        $run_slides = mysqli_query($con,$get_slides);

                        while($row_slides = mysqli_fetch_array($run_slides))
                        {   
                            $slide_no = $row_slides['slide_id'];
                            $slide_name= $row_slides['slide_name'];
                            $slide_image = $row_slides['slide_image'];

                            $i++;
                        ?>

                        <tr>
                            <td> <?php echo $slide_no   ?></td>
                            <td> <?php echo $slide_name  ?></td>
                            <td><img src="slides_images/<?php echo $slide_image; ?>" width="80" height="80"> </td>
                            <td> <a href="index.php?delete_slides=<?php echo $slide_no ?>"> Delete</a></td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>

