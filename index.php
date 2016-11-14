<?php 

$cp = '55716'; //coacalco
//$cp = '54958'; //tultitlan
$service_url = 'https://api-codigos-postales.herokuapp.com/v2/codigo_postal/' . $cp;
$curl = curl_init($service_url);
//curl_setopt($curl, CURLOPT_HEADER, true);
//curl_setopt($curl, CURLOPT_USERPWD, "ovio-api-key:the_api_key");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$curl_response = curl_exec($curl);
curl_close($curl);
//print $curl_response; 
//var_dump($curl_response);
echo '<h3>ejemplo de consumo de api con cURL</h3>';
echo '<pre>';
print_r (json_decode($curl_response)); //devuelve el json convertido en array
echo '</pre>';

?>