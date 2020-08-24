<?php
   if(isset($_POST['submit']))
   {
   	   $bg = $_POST['bg'];
   	   echo "Form submitted<br>";
   	   echo "Blood Group is $bg";
   }
   else
   	   header('location:bg.html');
?>