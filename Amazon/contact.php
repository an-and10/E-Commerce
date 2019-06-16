<?php

$active ='Contact_Us';
include('includes/header.php');

?>





<!--New Page conternt starts-->


<div id="content">
    <div class="container">
       <div class="row">
     
        <div class="btn-group btn-breadcrumb breadcrumb-primary">
            <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
            <div class="visible-lg-block">
            <div class="btn btn-warning btn-derecha"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></div>
            <div class="btn btn-default btn-derecha">Way to Go</div>
          </div>
            <a href="index.php" class="btn btn-primary visible-lg-block visible-md-block">Home</a>
            <a href="shop.php" class="btn btn-primary visible-lg-block visible-md-block">Shop</a>
            <a href="scart.php" class="btn btn-primary visible-lg-block visible-md-block active">Contact Us</a>
            
            <div class="btn btn-default visible-xs-block hidden-xs visible-sm-block ">...</div>
           >
        </div><br><br><br>
  </div>
     
             
             <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2> Feel free to Contact Us</h2>
                           
                           <p class="text-muted"><!-- text-muted Begin -->
                               
                               If you have any questions, feel free to contact us. Our Customer Service work <strong>24/7</strong>
                               
                           </p><!-- text-muted Finish -->
                           
                       </center><!-- center Finish -->
                       <br><br>
                       <form action="contact.php" method="post">

                <div class="row ">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" name="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select  name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="submit" class="btn btn-primary pull-right" >
                            Send Message</button>
                    </div>
                </div>
                </form><!-- form Finish -->
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           <div class="col-md-3">
               <?php
               include('includes/sidebar.php');
               ?>
               
           </div>
        </div>
    </div>


    
       
       <?php
            include('footer.php');
          
            ?>
            


            <?php
        
          if(isset($_POST['submit']))
          {
    

                   global $con;
                    $name =$_POST['name'];
                    $email =$_POST['email'];
                    $message =$_POST['message'];
                    $subject =$_POST['subject'];

                    


                    //function for random token/



                    
                        $token=(mt_rand(10,100));
                        $get_data = "INSERT INTO contact(contact_id,name,email,subject,message,date) VALUES ('$token','$name','$email','$subject','$message',NOW())";
                        $run_data= mysqli_query($con,$get_data);
                        
                        echo "<script>alert('Thank you for contacting Us')</script>";
                    
}

    





?>

        