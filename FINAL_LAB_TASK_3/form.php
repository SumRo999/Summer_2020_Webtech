<?php
   if(isset($_POST['Submit']))
   {
   	   $name = $_POST['name'];
   	   echo "Form submitted<br>";
   	   echo "Name is $name";
   }
   else
   	   header('location:form.html');