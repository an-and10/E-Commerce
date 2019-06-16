
<?php 
	
	include('includes/db.php');
    if(isset($_GET['delete_product_category'])){
        
        $delete_id = $_GET['delete_categories'];
        
        $delete_pro = "delete from categories where cat_id='$delete_id'";
    
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('One of your Product Category has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_categories','_self')</script>";
            
        }
        
    }
