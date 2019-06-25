<?php 
//include('functions/function.php');

?>
  
   

   
   <div class="panel panel-warning sidebar-menu" style="border-color:green,border-width:3px"><!-- panel panel-default sidebar-menu Begin -->
    <div class="panel-heading border"><!-- panel-heading Begin -->
        <h3 class="panel-title">Products Categories</h3>
    </div><!-- panel-heading Finish -->
    
    <div class="panel-body" style="background-color: pink"><!-- panel-body Begin -->
        <ul class="nav nav-pills nav-stacked category-menu"  ><!-- nav nav-pills nav-stacked category-menu Begin -->
            <?php 
            
                get_product_category();
            ?>
            
            
        </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
    </div><!-- panel-body Finish -->
    
</div><!-- panel panel-default sidebar-menu Finish -->


<div class="panel panel-warning sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
    <div class="panel-heading" style="font-style: italic;">
        <h3 class="panel-title" style="font-style: bold, font-size: 20px">Categories</h3>
    </div><!-- panel-heading Finish -->
    
    <div class="panel-body" style="background-color: pink;"><!-- panel-body Begin -->
        <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->
             <?php 
            
               get_category();
            ?>
            
            
        </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
    </div><!-- panel-body Finish -->
    
</div><!-- panel panel-default sidebar-menu Finish -->