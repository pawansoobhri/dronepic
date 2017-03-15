 <?php
 header('Access-Control-Allow-Origin: *');
 header("Content-Type: application/json");
 $resJSON = file_get_contents('res.json');
echo $resJSON;
 ?>
 
 