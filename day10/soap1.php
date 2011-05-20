<?php
$soap = new SoapClient("http://www.weather.gov/forecasts/xml/DWMLgen/wsdl/ndfdXML.wsdl");
$t = $soap->LatLonListZipCode(27596);
echo $t;
$y = simplexml_load_string($t);
print_r($y->latLonList);
