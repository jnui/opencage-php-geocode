<?php
//you need to have the openCage PHP library installed
//then make sure the following line points to the class
require_once('../src/OpenCage.Geocoder.php');

//$query = "82 Clerkenwell Road, London";
$key = 'use your free openCage key here';
//$geocoder = new OpenCage\Geocoder($key);
//$result = $geocoder->geocode($query);
//print_r($result);

//print_r($result['results'][0]['geometry']['lat']);
//print_r($result['results'][1]['geometry']['lng']); //this seems to work for UK addresses

//please note, the php object returned from openCage class differs by country
//the following function works for USA addresses
function getCoords($query, $zip, $mykey) {
	$geocoder = new OpenCage\Geocoder($mykey);
	$result = $geocoder->geocode($query);
	$empty[0] = "";
	if (empty($result['results'][0])){
		array_push($empty, $result);
	} else {
		$jsst = '{"lat":' . $latlng['lat'] = $result['results'][0]['geometry']['lat'];
		$jsst .= ', "long":' . $latlng['lng'] = $result['results'][0]['geometry']['lng'];
		$jsst .= ', "zip":' . $zip . '}, ';
	}
	if(empty($latlng['lat'])){
		return;
	} else {
		return($jsst);
	}
	
}

$work[1251] =[' 480 NORTH WOLF ROAD NORTHLAKE IL 60164', '60164 ' ];
$work[1252] =[' 48d0 NORTH WOLF ROAD NORTHLAKE IL 60164', '60164 ' ];


header( 'Content-type: text/html; charset=utf-8' );

print_r("[");

foreach ($work as &$value) {

	print_r(getCoords($value[0],$value[1], $key) );

	flush();

}
print_r("{}]"); //my ugly way of dealing with trailing comma, since PHP has no nice way to get last index.
//{"lat": 38.7603106, "long": -121.2946768, "zip" : "95678"},
?>
