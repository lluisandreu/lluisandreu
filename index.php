<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "ca":
        //echo "PAGE FR";
        include("ca.html");//include check session FR
        break;
    case "es":
    	include("es.html");
    	break;
    default:
        //echo "PAGE EN - Setting Default";
        include("en.html"); //include EN in all other cases of different lang detection
        break;
}
?>