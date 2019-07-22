<?php
session_start();
$target_file=$_SESSION["file_name"] ;

$ki= "tesseract C:\wamp64\www\\044\img\\".$target_file." dipesh.txt";
$ki=str_replace("uploads/","\\",$ki);

//echo $ki;
echo "<br>";
exec($ki, $output); 
print_r($output); // to see the respond

header("Location:http://localhost/044/graph.php");

?>