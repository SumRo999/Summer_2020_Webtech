<?php
   if(isset($_POST['submit']))
   {
   	   $gender = $_POST['gender'];
   	   echo "Form submitted<br>";
   	   echo "Gender is $gender";
   }
   else
   	   header('location:gender.html');
?>