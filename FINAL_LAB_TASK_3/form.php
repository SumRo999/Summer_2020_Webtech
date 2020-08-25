<?php
   if(isset($_POST['Submit']))
   {
   	   $name = $_POST['name'];
   	   echo "Form submitted<br>";
   	   echo "Name is $name<br>";
   	   $email = $_POST['email'];
   	   echo "Email is $email<br>";
   	   $gender = $_POST['gender'];
   	   echo "Gender is $gender<br>";
   }
   else
   	   header('location:form.html');