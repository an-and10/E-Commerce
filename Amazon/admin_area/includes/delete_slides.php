
<?php 
	
	include('includes/db.php');
    if(isset($_GET['delete_slides'])){
        
        $slide_id = $_GET['delete_slides'];
        
        $delete_pro = "delete from slider where slide_id='$slide_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('You have Delete one slider ')</script>";
            
            echo "<script>window.open('index.php?view_slides','_self')</script>";
            
        }
        
    }
