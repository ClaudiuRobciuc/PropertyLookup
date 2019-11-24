<?php

/**
 * Get the address and get the lat long from the google API.
 *
 * @param  string  $address
 * @return array
 */
function getLatLong($address)
{
    $query = "";
    foreach($address as $key => $value) {
        $query .= urlencode($value) . ',';
    }
    $query = rtrim($query, ', ');
    $url = 'https://maps.google.com/maps/api/geocode/json?address=' . $query . '&key=' . urlencode(env('GOOGLE_MAPS_API'));
    $output = json_decode(file_get_contents($url));

    if(empty($output->results[0])) {
        return "Nothing Found";
    }
    
    $latlongarray = [
        "lat" => $output->results[0]->geometry->location->lat,
        "long" => $output->results[0]->geometry->location->lng
    ];
    return $latlongarray;
}