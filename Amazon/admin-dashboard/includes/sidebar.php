    <?php


    

   // $admin_name= $_SESSION['admin_name'];
    $admin_email = $_SESSION['admin_email'];


    ?>




   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="font-size: 20px;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php?dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Products
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Products</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Categories:</h6>
            <a class="collapse-item" href="index.php?insert_product">Insert Products</a>
            <a class="collapse-item" href="index.php?view_product">View Products</a>
          </div>
        </div>
      </li>
       <hr class="sidebar-divider">

        <div class="sidebar-heading">
        Category
      </div>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Product Category</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Categories</h6>
            <a class="collapse-item" href="index.php?insert_product_category">Insert Product Category</a>
            <a class="collapse-item" href="index.php?view_product_category">View Product Category</a>
           
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories" aria-expanded="true" aria-controls="collapseCategories">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Category</span>
        </a>
        <div id="collapseCategories" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Categories:</h6>
            <a class="collapse-item" href="index.php?insert_categories">Insert Category</a>
            <a class="collapse-item" href="index.php?view_categories">View Category</a>
            
          </div>
        </div>
      </li>


      <hr class="sidebar-divider">

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseslides" aria-expanded="true" aria-controls="collapseslides">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Slider</span>
        </a>
        <div id="collapseslides" class="collapse" aria-labelledby="headingslides" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Categories:</h6>
            <a class="collapse-item" href="index.php?add_slides">Add Slides</a>
            <a class="collapse-item" href="index.php?view_slides">Edit Slides</a>
            
          </div>
        </div>
      </li>

        <hr class="sidebar-divider">




<div class="sidebar-heading">
       Customers
      </div>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?view_customer">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>View Customers</span></a>
      </li>

      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Orders and Payments
      </div>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?view_order">
          <i class="fas fa-fw fa-table"></i>
          <span>View Orders</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?view_payment">
          <i class="fas fa-fw fa-table"></i>
          <span>View Payments</span></a>
      </li>




       <div class="sidebar-heading">
        Administration
      </div>
      <!-- Heading -->
      

      <!-- Nav Item - Pages Collapse Menu -->
     

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsestaff" aria-expanded="true" aria-controls="collapsestaff">
          <i class="fas fa-fw fa-folder"></i>
          <span> Staff </span>
        </a>
        <div id="collapsestaff" class="collapse" aria-labelledby="headingstaff" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           <h6 class="collapse-header">Categories:</h6>
            <a class="collapse-item" href="index.php?add_staff">Add Staff</a>
             <a class="collapse-item" href="index.php?view_staff">View Staff</a>

            
          </div>
        </div>
      </li>



      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>