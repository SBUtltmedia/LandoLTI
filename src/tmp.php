<?php 
session_name("dsad");
session_start();
echo "a";
print_r($_SESSION);
$_SESSION['fsdf']=3;
print_r($_SESSION);
?>
