<?php

header("Location: thankyou.php");

$uploaddir = 'profilephotouploads/';
     $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

     if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
         echo "File is valid, and was successfully uploaded.\n";
     } else {
         echo "Possible file upload attack!\n";
     }

     echo 'Here is some more debugging info:';
     print_r($_FILES);



?>

   