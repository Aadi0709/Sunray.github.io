<?php
  
  $con = mysqli_connect('localhost:3307','root');
 if ($con){
 	echo "Connection successful";

}else{
	 echo "No connection";
}	
  
  mysqli_select_db($con, 'aksite');
   $user = $_POST['user'];
   $email = $_POST['email'];
   $message = $_POST['message'];
 
   $query = " insert into userinfodata (user, email, message)
   values ('$user', '$email', '$message')";

   echo "$query";

  mysqli_query($con, $query);
   header('location:home.php');
 ?>