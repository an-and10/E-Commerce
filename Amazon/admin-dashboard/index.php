<?php 


include('includes/header.php');


   
    include("includes/db.php");
    
    


?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid" >
 
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


<!--  -->
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
