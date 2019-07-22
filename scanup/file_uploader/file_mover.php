<?php
session_start();
$target_file=$_SESSION["file_name"] ;
//echo($target_file);
//echo "<br>";

$ki='copy C:\wamp64\www\044\scanup\file_uploader\\'. $target_file.' C:\wamp64\www\044\img';
$ki=str_replace("/","\\",$ki);
//exec('cd C:\wamp64\www\044\scanup\file_uploader\uploads ',$output);
//echo $ki;
exec($ki, $output); 
print_r($output); // to see the respond to your command

header("Location:http://localhost/044/equation/index.php ");

?>

