<?php
// Receive GET Request
// lotsize bathrms stories driveway
// recroom fullbase gashw airco garagepl 
// prefarea

$lotsize = $_GET["lotsize"];
$bathrms = $_GET["bathrms"];
$stories = $_GET["stories"];
$driveway = $_GET["driveway"];
$recroom = $_GET["recroom"];
$fullbase = $_GET["fullbase"];
$gashw = $_GET["gashw"];
$airco = $_GET["airco"];
$garagepl = $_GET["garagepl"];
$prefarea = $_GET["prefarea"];

// Execute a sytem command 
system("/usr/anaconda/bin/python3 model.py ".$lotsize." ".$bathrms." ".$stories." ".$driveway." ".$recroom." ".$fullbase." ".$gashw." ".$airco." ".$garagepl." ".$prefarea." 2>&1");

?>





