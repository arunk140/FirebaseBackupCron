<?php
// Database Secret (Example below)
$authkey = JeiswGeqY4JUJewpGHSBJS2xpYwlUG9NTBbjWbaP6;

// Firebase URL (Example below)
$url = https://exampleurl.firebaseio.com/;


$filename = date('m-d-Y_H:i:s').'.json';
$fileloc = $_SERVER['DOCUMENT_ROOT'].'/'.'SBX/backups/'.$filename;
$myfile = fopen($fileloc, "wb");
$fullurl = $url.".json?format=export&print=pretty&auth=".$authkey;
$response = file_get_contents($fullurl);

fwrite($myfile, $response);
fclose($myfile);
 ?>
