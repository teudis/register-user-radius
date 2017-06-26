<?php
	require("Db.class.php");
	// The instance
	$db = new Db();
	$usuario = $_POST['usuario'];	
	$clave  = $_POST['clave'];	
	$dominio = $_POST['dominio'];	
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$email = $usuario.'@'.$dominio;
	$institucion = $_POST['institucion'];
	$departamento = $_POST['departamento'];
	$telefonoc = $_POST['telefonoc'];	
	$insert   =  $db->query("INSERT INTO userinfo(username,firstname,lastname,email,company,department,homephone,enableportallogin,portalloginpassword) VALUES(:username,:firstname,:lastname,:email,:company,:department,:homephone,:enableportallogin,:portalloginpassword)",
	array('username'=>$email,"firstname"=>$nombres,"lastname"=>$apellidos,"email"=>$email,"company"=>$institucion,"department"=>$departamento,"homephone"=>$telefonoc,"enableportallogin"=>1,"portalloginpassword"=>$clave));
	
	$insert_radiuscheck = $db->query("INSERT INTO radcheck(username,attribute,op,value) VALUES(:username,:attribute,:op,:value)",
	array("username"=>$email,"attribute"=>"Cleartext-Password","op"=>":=","value"=>$clave));
	
	$insert_radiogroup = $db->query("INSERT INTO radusergroup (username,groupname,priority) VALUES(:username,:groupname,:priority)", array("username"=>$email,"groupname"=>"25horas","priority"=>0));
    	
	//Do something with the data 
	if($insert > 0 && $insert_radiuscheck > 0 && $insert_radiogroup) {
	  echo 'El usuario ha sido registrado exitosamente';
	}
	else
	{
	  echo "Error";
	}