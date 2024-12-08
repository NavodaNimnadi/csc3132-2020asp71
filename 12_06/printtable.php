<!DOCTYPE html>
<html>
<head>
    <title>printtable</title>
</head>
<body>
   
<?php

 
require_once 'dbconf.php'; //(conf/dbconf.php) (folder/file)
require_once 'myfunc.php';


 $book_id = $_GET['book_id'];

bookdetails($book_id,$connect);


?>


</body>
</html>

