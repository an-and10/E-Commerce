



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amazon Store Panel</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                <center>
                <?php


                if(isset($_GET['dashboard']))
                    include('includes/dashboard.php');
                

                //Product//
                if(isset($_GET['insert_product']))
                    include('includes/insert_product.php');

                if(isset($_GET['view_product']))
                    include('includes/view_product.php');

                if(isset($_GET['delete_product']))
                    include('includes/delete_product.php');

                if(isset($_GET['edit_product']))
                    include('includes/edit_product.php');
                
                //Product Category//

                if(isset($_GET['insert_product_category']))
                    include('includes/insert_product_category.php');

                if(isset($_GET['view_product_category']))
                    include('includes/view_product_category.php'); 

                if(isset($_GET['edit_product_categories']))
                    include('includes/edit_product_categories.php'); 

                if(isset($_GET['delete_product_category']))
                    include('includes/delete_product_category.php'); 


                //categories//
                if(isset($_GET['insert_categories']))
                    include('includes/insert_categories.php'); 

                if(isset($_GET['view_categories']))
                    include('includes/view_categories.php'); 

                if(isset($_GET['edit_categories']))
                    include('includes/edit_categories.php'); 

                if(isset($_GET['delete_categories']))
                    include('includes/delete_categories.php'); 


                // customer section

                if(isset($_GET['view_customer']))
                    include('includes/view_customer.php'); 


                // order section//
                if(isset($_GET['view_order']))
                    include('includes/view_order.php'); 

                if(isset($_GET['delete_order']))
                    include('includes/delete_order.php'); 


                //staff section
                if(isset($_GET['view_staff']))
                    include('includes/view_staff.php'); 

                if(isset($_GET['add_staff']))
                    include('includes/add_staff.php'); 
                

                //  Slider Sections
                if(isset($_GET['add_slides']))
                    include('includes/add_slides.php');

                if(isset($_GET['view_slides']))
                    include('includes/view_slides.php');

                if(isset($_GET['delete_slides']))
                    include('includes/delete_slides.php');
                
                    ?>




               </center>
            </div>
        </div>

    </div>



    <script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>
</html>



