<?php
   if(isset($_POST['submit']))
   {
   	   $degree = $_POST['degree'];
   	   echo "Form submitted<br>";
   	   echo "Degree is $degree";
   }
   else
   	   header('location:degree.html');
?>