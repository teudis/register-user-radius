$(document).ready(function() {

	 // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 20), '+', randomNumber(1, 50), '='].join(' '));
	var captcha = $('#captchaOperation').html().split("+");	
	var numero1 = captcha[0];
	var numero2 = captcha[1].split(" ");
	numero2 = numero2[1] ;
	
	
	var validar = false
	var url = window.location.protocol+'//'+window.location.host
	
	
    /*
        Fullscreen background
    */
    $.backstretch("assets/img/backgrounds/1.jpg");
    
    $('#top-navbar-1').on('shown.bs.collapse', function(){
    	$.backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function(){
    	$.backstretch("resize");
    });
    
    /*
        Form
    */
    $('.registration-form fieldset:first-child').fadeIn('slow');
    
    $('.registration-form input[type="text"], .registration-form input[type="password"], .registration-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
	

	
	
    // next step
    $('.registration-form .btn-next').on('click', function() {
		 
		var usuario = $("#username").val();
		var clave  = $("#password").val();	
		var dominio = $("#dominio option:selected").text();	
		dominio = dominio.trim();
		var servidor = $("#dominio").val();	
		var usernanme = usuario+"@"+dominio;
		var next_step = false;
	    var suma = $("#captcha").val();
		var checksuma = parseInt(numero1) + parseInt(numero2);
		//console.log(checksuma);
		//console.log(suma);	
		
		if(suma!=checksuma)  
		{
		  
		  $("#captcha").addClass('input-error');
		  $('#captchaOperation').html([randomNumber(1, 20), '+', randomNumber(1, 50), '='].join(' '));
		  captcha = $('#captchaOperation').html().split("+");	
		  numero1 = captcha[0];
		  numero2 = captcha[1].split(" ");
		  numero2 = numero2[1] ;
		  //next_step = false;
		}
		else		
			if(validar == false)
       {		
		
		var next_step = function () {
			var tmp = null;
			$.ajax({
					'async': false,
					'type': "POST",	
					'url': url+"/pages/checkUser.php",
					'data': {  usuario: usernanme, clave: clave , servidor : servidor},
					'success': function (data) {
					
							
						if(data==2)
						{
						  alert("El usuario ya se encuentra registrado");
						  $("#username").val("");
						  $("#password").val("");
						  $("#captcha").addClass('input-error');
						  $('#captchaOperation').html([randomNumber(1, 20), '+', randomNumber(1, 50), '='].join(' '));
						  captcha = $('#captchaOperation').html().split("+");	
						  numero1 = captcha[0];
						  numero2 = captcha[1].split(" ");
						  numero2 = numero2[1] ;
						}
						else
						if(data==1)
						{
						  tmp = true;
						  $("#email").val(usuario+"@"+dominio);						  
						  validar = true;
						}
						else
						{
						  tmp = false;
						  alert("Datos incorrectos");
						  $("#username").val("");
						  $("#password").val("");
						  $("#captcha").addClass('input-error');
						  $('#captchaOperation').html([randomNumber(1, 20), '+', randomNumber(1, 50), '='].join(' '));
						  captcha = $('#captchaOperation').html().split("+");	
						  numero1 = captcha[0];
						  numero2 = captcha[1].split(" ");
						  numero2 = numero2[1] ;
						  
						  
						}					
					}
				});
				return tmp;
			}();
					

		}
		else		
		{
		  next_step = true;		
		}
    	var parent_fieldset = $(this).parents('fieldset');
    	 
    	
		
    	parent_fieldset.find('input[type="text"], input[type="password"], textarea').each(function() {
		    if(suma!=checksuma )
			{
			   $("#captcha").addClass('input-error');
    			next_step = false;
			}
			else
    		if( $(this).val() == "" ) {
    			$(this).addClass('input-error');
    			next_step = false;
    		}

    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    	if( next_step ) {		
    		parent_fieldset.fadeOut(400, function() {
			
	    		$(this).next().fadeIn();
	    	});
    	}
    	
    });
    
    // previous step
    $('.registration-form .btn-previous').on('click', function() {
    	$(this).parents('fieldset').fadeOut(400, function() {
    		$(this).prev().fadeIn();
    	});
    });
    
    // submit
    $("button#submit").click(function() {
    	
		var usuario = $("#username").val();
		var clave  = $("#password").val();	
		var dominio = $("#dominio option:selected").text();	
		dominio = dominio.trim();
		var nombres = $("#nombres").val();
		var apellidos = $("#apellidos").val();
		var email = usuario+'@'+dominio;
		var institucion = $("#institucion").val();
		var departamento = $("#departamento").val();
		var telefonoc = $("#telefonoc").val();
		
		
    	$(this).find('input[type="text"], input[type="password"], textarea').each(function() {
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
		
		$.ajax({
					'async': false,
					'type': "POST",	
					'url': url+"/pages/registerUser.php",
					'data': {  usuario: usuario, clave: clave , dominio : dominio , nombres: nombres, apellidos : apellidos, email: email , institucion : institucion, departamento: departamento , telefonoc : telefonoc},
					'success': function (data) {
								
						 alert(data);
						 window.location.href = "http://portal.wifi.grm.sld.cu";
					}
				});
		
    	
    });
    
    
});
