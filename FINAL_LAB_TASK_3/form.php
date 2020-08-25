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
   	   $day = $_POST['day'];
   	   $month = $_POST['month'];
   	   $year = $_POST['year'];
   	   echo "Date of Birth is $day/$month/$year<br>";
   	   $bg = $_POST['bg'];
   	   echo "Blood Group is $bg<br>";
   	   $degree = $_POST['degree'];
   	   echo "Degree is $degree<br>";
   }
   else
   	   header('location:form.html');