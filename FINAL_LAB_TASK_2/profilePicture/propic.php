<?php
   if(isset($_POST['submit']))
   {
   		$id = $_POST['id'];
   	    $propic = $_FILES['image']['name'];
   	    echo "Form submitted<br>";
   	    echo "User ID is $id<br>";
   	    echo "Profile picture name $propic";
   }
   else
   	   header('location:propic.html');
?>