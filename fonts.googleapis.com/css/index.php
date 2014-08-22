<?php

$root = '/public/www/mirrors/fonts.googleapis.com';

// chrome or firefox
$ua = $_SERVER["HTTP_USER_AGENT"];
$b = strpos($ua, 'Chrome') ? 'chrome' : false;
if ( !$b )
{
    $b = strpos($ua, 'Firefox') ? 'firefox' : false;
}

// switch font family.
switch ( $_GET['family'] )
{
    case 'Source Sans Pro:400,600':
        echo file_get_contents("../$b/css?family=Source+Sans+Pro:400,600");
        break;
    case 'Inconsolata':
        echo file_get_contents("../$b/css?family=Inconsolata");
        break;
    default:
}

header('Content-Type:text/css');
?>
