<?php
    $lat = 51.508929;
    $lon = -0.1304877;

    $rad = 1;

    $R = 6371;  // earth's mean radius, km

    $maxLat = $lat + rad2deg($rad / $R);
    $minLat = $lat - rad2deg($rad / $R);
    $maxLon = $lon + rad2deg(asin($rad / $R) / cos(deg2rad($lat)));
    $minLon = $lon - rad2deg(asin($rad / $R) / cos(deg2rad($lat)));

    echo $minLat."<br>";
    echo $maxLat."<br>";
    echo $minLon."<br>";
    echo $maxLon."<br>";

    // $sql = "location, From map Where lat Between :minLat And :maxLat And lon Between :minLon And :maxLon";