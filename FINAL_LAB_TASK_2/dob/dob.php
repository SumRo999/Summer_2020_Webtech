<?php
   if(isset($_POST['submit']))
   {
   	   $day = $_POST['day'];
   	   $month = $_POST['month'];
   	   $year = $_POST['year'];
   	   echo "Form submitted<br>";
   	   echo "Date of Birth is $day/$month/$year";
   }
   else
   	   header('location:gender.html');
?>