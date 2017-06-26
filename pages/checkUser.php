<?php

require("Db.class.php");

function CheckPOP3($server, $user, $passwd, $port = 110)
{

if (empty($server) || empty($user) || empty($passwd))
return false;
// connect to POP3 Server
$fs = fsockopen ($server, $port,$errno,$errstr, 5);

// check if connection valid
if (!$fs)
return false;

//connected..
$msg = fgets($fs,256);
// step 1. send ID
fputs($fs, "USER $user\r\n");
$msg = fgets($fs,256);

if (strpos($msg,"+OK")===false)
return false;

// step 2. send password
fputs($fs, "PASS $passwd\r\n");
$msg = fgets($fs,256);

if (strpos($msg,"+OK")===false)
return false;
//step 3. auth passwd, QUIT
fputs($fs, "QUIT \r\n");
fclose($fs);

return true;
}

// DATA POST
//$hostname = 'pop3.sld.cu';
$user       =  $_POST['usuario'];
$passwd     =  $_POST['clave'];
$hostname 	=  $_POST['servidor'];

$db = new Db();
$db->bind("username",$user);
$exist   =  $db->query("SELECT count(*) as cantidad FROM userinfo WHERE username = :username");

$cantidad = $exist[0]['cantidad'];
if($cantidad!=0)
{
  echo "2";
}	
else
{

  $usuario = $porciones = explode("@", $user);

$auth = CheckPOP3($hostname,$usuario[0],$passwd);
if($auth==1)
{

echo "1";
}
else{

echo "0";

    }
}

