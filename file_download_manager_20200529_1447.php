<?php
$file_path = 'localhost/SAR/';
$filename = 'Website_Demo.zip';

header("Content-Type: application/octet-stream");
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"".$filename."\""); 
echo readfile($file_path);
?>