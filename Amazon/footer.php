<?php


   
?>
   <div id="footer"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col-sm-6 col-md-2"><!-- col-sm-6 col-md-3 Begin -->
               
     <h4>Customer Section</h4>
                
                <ul><!-- ul Begin -->
                    <li><a href="checkout.php">Login</a></li>
                    <li><a href="customer_register.php">Register</a></li>
                </ul><!-- ul Finish -->
                
                
                <hr>
                
                <h4>Admin Section</h4>
                
                <ul><!-- ul Begin -->
                    <li><a href="admin-dashboard/register.php">Register</a></li>
                    <li><a href="admin-dashboard/login.php">Login</a></li>
                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="com-sm-6 col-md-2"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Top Products Categories</h4>
                <?php
                
                $get_cat= "select * from  product_categories";
                $run_cat= mysqli_query($con,$get_cat);
                while($row_cat= mysqli_fetch_array($run_cat))
                {
                    $cat_title= $row_cat['p_cat_title'];
                    
                    echo "
                    
                    <ul>
                    <li><a href='#'>$cat_title</a></li>
                    
                
                    
                    
                    
                    
                    ";

                }
                    
                    
                    ?>
                    <li> For more to visit</li>
                    </ul>
                    
            
            
                <hr class="hidden-md hidden-lg">
                
            </div>

            <div class="com-sm-6 col-md-2"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4> Categories</h4>
                <?php
                
                $get_cat= "select * from  categories ";
                $run_cat= mysqli_query($con,$get_cat);
                while($row_cat= mysqli_fetch_array($run_cat))
                {
                    $cat_title= $row_cat['cat_title'];
                    
                    echo "
                    
                    <ul>
                    <li><a href='#'>$cat_title</a></li>
                    
                
                    
                    
                    
                    
                    ";

                }
                    
                    
                    ?>
                    <li> For more to visit</li>
                    </ul>
                    
            
            
                <hr class="hidden-md hidden-lg">
                
            </div>
            <!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Reach Us</h4>
                
                <p><!-- p Start -->
                    
                    <strong>shopping  Online Service</strong>
                    <br/>Mumbai
                    <br/>India
                    <br/>9702620581
                    <br/>mauryaanand10@gmail.com
                    <br/><strong>Mr. Anand Maurya</strong>
                    
                </p><!-- p Finish -->
                
                <a href="contact.php">Check Our Contact Page</a>
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3">
                
                <h4>Get The Update</h4>
                
                <p class="text-muted">
                    Don't forget to subscribe us to get the news regarding the latest products
                </p>
                
               <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=M-devMedia', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post"><!-- form begin -->
                    <div class="input-group"><!-- input-group begin -->
                        
                        <input type="text" class="form-control" name="email">
                        
                        <input type="hidden" value="Anand-Shoppee" name="uri"/><input type="hidden" name="loc" value="en_IND"/>
                        
                        <span class="input-group-btn"><!-- input-group-btn begin -->
                            
                            <input type="submit" value="subscribe" class="btn btn-default">
                            
                        </span><!-- input-group-btn Finish -->
                        
                    </div><!-- input-group Finish -->
                </form><!-- form Finish -->
                
                <hr>
                
                <h4>Keep In Touch</h4>
                
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>
                
            </div>
        </div><!-- row Finish -->
    </div><!-- container Finish -->
</div><!-- #footer Finish -->


<div id="copyright"><!-- #copyright Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-left">&copy; Online Shopping Website | All rights reserved |</p>
            
        </div><!-- col-md-6 Finish -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
          Design and Developed by <a href="https://knowabout-me.000webhostapp.com">Anand Maurya</a>  
            
        </div><!-- col-md-6 Finish -->
    </div><!-- container Finish -->
</div><!-- #copyright Finish -->