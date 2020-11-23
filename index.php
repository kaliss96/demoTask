<?php
//constantes token de api y url 
define("API_TOKEN","55676080f1464a1c4410687f1d4c25401ce1c0f322df7f3e591a00");
define("URL_API","https://api.tookanapp.com/v2/");
define("SITE_NAME","demoTask");
$defaultController="TaskControllers";

require_once("libraries/Uri.php");
date_default_timezone_set('Europe/London');

if(isset($_POST))
{
	$llaves=array_keys($_POST);
	foreach ($llaves as $val)
	$$val=$_POST[$val];
}

$uri=_parse_request_uri();
 
$nsegments=explode("/",$uri);

if(isset($nsegments[1]) && $nsegments[1]!="")
{

$segmentos=_set_uri_string($uri);
}
else
$segmentos[1]=$defaultController;

if(!in_array($segmentos[1],array("js","css")))
{
	 
require("controller/".$segmentos[1].".php");
$_controlador=strtolower($segmentos[1]);
$$_controlador=new $segmentos[1]();

$method=(isset($segmentos[2])?$segmentos[2]:"index");

${strtolower($defaultController)}->{$method}();
 
}