
<?php 
	
	include('includes/db.php');
    if(isset($_GET['delete_categories'])){
        
        $cat_id = $_GET['delete_categories'];
        
        $delete_pro = "delete from categories where cat_id='$cat_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('One of your Product Category has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_categories','_self')</script>";
            
        }
        
    }
