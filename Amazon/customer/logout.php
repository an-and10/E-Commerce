<?php 

session_start();

session_destroy();
echo "<script>window.alert('You have logout')</script>"
echo "<script>window.open('../index.php','_self')</script>";






