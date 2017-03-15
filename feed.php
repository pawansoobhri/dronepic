 <?php
 header('Access-Control-Allow-Origin: *');
 /*header("Content-Type: application/json");*/
 $basicfeed = array();
 $basicfeed["profile"] = array();
 $basicfeed["profile"]["username"] = "eric";

 $feed = $json_encode($basicfeed);
 echo($feed);

 ?>
 