<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $Title = $_POST['Title'];
     $Author = $_POST['Author'];
     $Description = $_POST['Description'];
	 $isbn_num = $_POST['isbn_num'];
     $article_num = $_POST['article_num'];
    
     $sql = "INSERT INTO `ars_reasearch_db`.`tblreviewsandfeedback` (`Title`,`Author`,`Description`,`isbn_num` , `article_num`) VALUES ('$Title','$Author', '$Description' ,
	 
			'$isbn_num' , '$article_num'
	 
	 )";
 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
		
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>