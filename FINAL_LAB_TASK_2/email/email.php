<?php
   if(isset($_POST['submit']))
   {
   	   $email = $_POST['email'];
   	   echo "Form submitted<br>";
   	   echo "Email is $email";
   }
   else
   	   header('location:email.html')
?>