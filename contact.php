<?php

$active ='Contact_Us';
include('includes/header.php');

?>





<!--New Page conternt starts-->

<div id="content">
      <div class="container">

    <div class="bc-icons-2">

   <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="index.php">Home</a><i
          class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>
      <li class="breadcrumb-item"><a class="black-text" href="shop.php">Shop</a><i
          class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>
           <li class="breadcrumb-item"><a class="black-text" href="shop.php">Contact</a><i
          class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>
      <li class="breadcrumb-item active">Details</li>
    </ol>
  </nav>
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


<style>


.bc-icons-2 .breadcrumb-item + .breadcrumb-item::before {
content: none; }
.bc-icons-2 .breadcrumb-item.active {
color: #455a64;
}
.blue-grey{
color: red;
} 
.breadcrumb{
background-color: yellow;
font-size: 15px;

}
.breadcrumb-item{
margin:7px;
padding:0px;
font-size: 13px;
}</style>

        