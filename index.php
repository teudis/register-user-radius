<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro de Usuario :: Infomed Granma | Zona Wifi </title>

        <!-- CSS -->

        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

		<!-- Top menu -->
		

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	
                        	<form class="registration-form" name="registration-form">
                        		
                        		<fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Registro de Usuario 1 / 3</h3>
		                            		<p>Verificando sus datos</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<img src="logo.png" alt="Infomed Granma">
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                    	<div class="form-group">
				                    		<label class="sr-only" >Nombre de Usuario</label>
				                        	<input type="text" name="username" placeholder="Nombre de Usuario..." class="form-first-name form-control" id="username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" >Clave</label>
				                        	<input type="password" name="password" placeholder="Clave..." class="form-last-name form-control" id="password">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" >Dominio</label>
				                        	<select name="dominio" class="form-about-yourself form-control" id="dominio">
				                        				<option value="pop3.sld.cu">infomed.sld.cu</option>
  														<option value="mail.grm.sld.cu">cpicm.grm.sld.cu</option>
				                        	</select>
				                        </div>
										<div class="form-group">
											<label class="col-sm-6 control-label" id="captchaOperation"></label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="captcha" id="captcha" />
											</div>
										</div>
				                        <br>
				                        <button type="button" class="btn btn-next">Siguiente</button>
				                    </div>
			                    </fieldset>
			                    
			                    <fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Registro de Usuario 2 / 3</h3>
		                            		<p>Datos del Usuario</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<img src="logo.png" alt="Infomed Granma">
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                        <div class="form-group">
				                        	<label class="sr-only">Nombres</label>
				                        	<input type="text" name="nombres" placeholder="Nombres..." class="form-email form-control" id="nombres">
				                        </div>
				                        <div class="form-group">
				                    		<label class="sr-only">Apellidos</label>
				                        	<input type="text" name="apellidos" placeholder="Apellidos..." class="form-password form-control" id="apellidos">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="email">email</label>
				                        	<input type="text" name="email" placeholder="Direccion de correo..." 
				                        				class="form-repeat-password form-control" id="email">
				                        </div>
				                        <button type="button" class="btn btn-previous">Anterior</button>
				                        <button type="button" class="btn btn-next">Siguiente</button>
				                    </div>
			                    </fieldset>
			                    
			                    <fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Registro de Usuario 3 / 3</h3>
		                            		<p>Datos de su institucion:</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<img src="logo.png" alt="Infomed Granma">
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-facebook">Institucion</label>
				                        	<input type="text" name="institucion" placeholder="Institucion..." class="form-facebook form-control" id="institucion">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-twitter">Departamento/Area</label>
				                        	<input type="text" name="departamento" placeholder="Departamento/Area..." class="form-twitter form-control" id="departamento">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-google-plus">Telefono de Contacto</label>
				                        	<input type="text" name="telefonoc" placeholder="Telefono de Contacto..." class="form-google-plus form-control" id="telefonoc">
				                        </div>
				                        <button type="button" class="btn btn-previous">Previous</button>
				                        <button type="button" class="btn" id="submit">Registrar</button>
										
				                    </div>
			                    </fieldset>
		                    
		                    </form>
		                    
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
      
        <script src="assets/js/scripts.js"></script>
       
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>