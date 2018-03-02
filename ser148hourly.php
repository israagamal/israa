
<?php 
$id = false;
if(isset($_GET['city'])){
    $id = $_GET['city'];
 } 
echo $id;
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://api.weatherbit.io/v2.0/forecast/hourly?city=$id&key=cf1711fb4a5c4b889f68d9e047e08dae');
$result = curl_exec($ch);
curl_close($ch);
print_r ($result);
$obj = json_decode($result);
?>
