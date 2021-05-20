 <?php


/*

https://www.phptpoint.com/how-to-download-file-in-php/
*/
       $f="ASR_logo.jpg";   

       $file = ("C:/wamp64/www/SAR/demo_upload/w3Method/images/$f");

       $filetype=filetype($file);

       $filename=basename($file);

       header ("Content-Type: ".$filetype);

       header ("Content-Length: ".filesize($file));

       header ("Content-Disposition: attachment; filename=".$filename);

       readfile($file);

  ?>