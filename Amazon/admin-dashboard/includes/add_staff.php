

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Add Staff</h1>
              </div>
              <form class="user" method="POST" action =""  enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="admin_name" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="email" class="form-control form-control-user" name="admin_email" placeholder="Email">
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="admin_country" placeholder="Country">
                  </div>
                  <div class="col-sm-6">
                    <input type="number" class="form-control form-control-user" name="admin_contact" placeholder="Contact">
                  </div>
                </div>
                <div class="form-group row">
                  
                  <div class="col-sm-12">
                    <input type="text" class="form-control form-control-user" name="admin_about" placeholder="Description">
                  </div>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" name="admin_pass" placeholder="Enter Password">
                </div>

                <div class="form-group row">
                  
                  <div class="col-sm-12">
                    <input type="file" class="form-control btn-success" name="admin_image" placeholder="Upload Profile Picture">
                  </div>
                </div>

               <!--  <div class="form-group ">
                  <div class="col-sm-12 mb-6 mb-sm-0 btn btn-warning btn-file btn-block">
                    
                     <input type="file" name="admin_image">Upload Profile Pic
              </span>
                  </div>
                 
                </div> -->
                 <br><br>
                <button class="btn btn-primary btn-user btn-block" name="submit">
                  Register Account
                </button>
              
                
              </form>
              <hr>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>



<?php 

if(isset($_POST['submit'])){

    include('includes/db.php');
    
    $user_name = $_POST['admin_name'];
    $user_email = $_POST['admin_email'];
    $user_pass = $_POST['admin_pass'];
    $user_country = $_POST['admin_country'];
    $user_contact = $_POST['admin_contact'];
    
    $user_about = $_POST['admin_about'];
    
    $user_image = $_FILES['admin_image']['name'];
    $temp_admin_image = $_FILES['admin_image']['tmp_name'];
    
    move_uploaded_file($temp_admin_image,"admin_images/$user_image");
    
    $insert_user = "insert into admins (admin_name,admin_email,admin_pass,admin_country,admin_contact,admin_image,admin_desc) values ('$user_name','$user_email','$user_pass','$user_country','$user_contact','$user_image','$user_about')";
    
    $run_user = mysqli_query($con,$insert_user);
    
    if($run_user){
        
        echo "<script>alert('New Staff has been inserted to your admin sucessfully')</script>";
        echo "<script>window.open('index.php?view_staff','_self')</script>";
        
    }
    
}

?>
