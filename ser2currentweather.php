
<?php 
$id = false;
if(isset($_GET['city'])){
    $id = $_GET['city'];
 } 
echo $id;
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'http://samples.openweathermap.org/data/2.5/weather?q=$id&appid=b6907d289e10d714a6e88b30761fae22');
$result = curl_exec($ch);
curl_close($ch);
print_r ($result);
$obj = json_decode($result);
?>
