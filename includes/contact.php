<?php


if(isset($_POST['submit']))
{
    

                   
                    $name =$_POST['name'];
                    $email =$_POST['email'];
                    $message =$_POST['message'];
                    $subject =$_POST['subject'];

                    echo $name;
                    echo $email;
                    echo $message;
                    echo $subject;


                    //function for random token/



                    $get_db_data= "select * from contact where email=$email";
                    $run_db_data= mysqli_query($con,$get_db_data);
                    if($result=mysqli_num_rows($run_db_data)>1)
                    {   
                        echo "Hello wordl";

                        echo "<script>alert(' Us')</script>";
                    }
                    else{
                        $token=(mt_rand(10,100));
                        $get_data = "INSERT INTO contact(contact_id,name,email,subject,message,date) VALUES ('$token','$name','$email','$subject','$message',NOW())";
                        $run_data= mysqli_query($con,$get_data);
                        
                        echo "<script>alert('Thank you for contacting Us')</script>";
                    }
}

    


?>