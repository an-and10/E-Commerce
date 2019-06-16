

<?php 
include('includes/db.php');

    if(isset($_GET['edit_product_categories'])){
        
        $edit_p_cat_id = $_GET['edit_product_categories'];
        
        $edit_p_cat_query = "select * from product_categories where p_cat_id='$edit_p_cat_id'";
        
        $run_edit = mysqli_query($con,$edit_p_cat_query);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $p_cat_id = $row_edit['p_cat_id'];
        
        $p_cat_title = $row_edit['p_cat_title'];
        
        $p_cat_desc = $row_edit['p_cat_desc'];
        
    }

?>
<!DOCTYPE html>
<html>
<head>
    <script src="js/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</head>
<body>

</body>
</html>
<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Product Category
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-pencil fa-fw"></i> Edit Product Category
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Product Category Title 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $p_cat_title; ?> " name="p_cat_title" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Product Category Description 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <textarea type='text' name="product_category_desc" id="" cols="30" rows="10" class="form-control"><?php echo $p_cat_desc; ?></textarea>
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                             
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value="Update" name="update" type="submit" class="form-control btn btn-primary">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->
<script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script> 
<?php



          if(isset($_POST['update'])){
              
              $p_cat_title = $_POST['p_cat_title'];
              
              $p_cat_desc = $_POST['product_category_desc'];
              
              $update_p_cat = "update product_categories set p_cat_title='$p_cat_title', p_cat_desc='$p_cat_desc' where p_cat_id='$p_cat_id'";
              
              $run_p_cat = mysqli_query($con,$update_p_cat);
              
              if($run_p_cat){
                  
                  echo "<script>alert('Your Product Category Has Been Updated')</script>";
                  
                  echo "<script>window.open('index.php?view_product_category','_self')</script>";
                  
              }
              
          }

?>


