<?php
 
$cit= false;
if(isset($_GET['city'])){
    $cit = $_GET['city'];
 } 
 $start_date = false;
if(isset($_GET['start_date'])){
    $start_date = $_GET['start_date'];
 } 
$end_date= false;
if(isset($_GET['end_date'])){
    $end_date = $_GET['end_date'];
 } 
$key="524c7c618a6b4d489c354d352a9788bb";
$url="http://api.weatherbit.io/v2.0/history/hourly?key=524c7c618a6b4d489c354d352a9788bb&City=$cit&start_date=$start_date&end_date=$end_date";
$json=file_get_contents($url);
$result=json_decode($json,true);

echo $json;
echo "<br><br><br><br><br><br><br>";
print_r ($result);
echo "<br><br><br><br>";
echo($result["data"][0]["weather"]["icon"]);

?>
