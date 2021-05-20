<?php
    $servername='localhost:3308';
    $username='root';
    $password='';
    $dbname = 'my_db2' ;
    $conn=mysqli_connect($servername,$username,$password,$dbname);
      if($conn){
		  echo 'Hello Roger - successfully connected!';
	  }
		  else {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>