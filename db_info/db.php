<?php
    $servername='localhost:3308';
    $username='root';
    $password='';
    $dbname = 'ars_reasearch_db' ;
    $conn=mysqli_connect($servername,$username,$password,$dbname);
      if($conn){
		  echo 'Hello S.A.R. - database successfully connected!';
		  echo "<br><br>";
	  }
		  else {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>