<?php

require "Funciones.php";

$msgError=null;

$rs=null;

if (isset($_POST["enviar"])){

    $Nombre = $_POST["Nombre"];
    $Apellido = $_POST["Apellido"];
    $Correo = $_POST["Correo"];
    $Password = $_POST["Password"];
    

   $query="INSERT INTO usuario (Nombre, Apellido, Correo, Password)".

   "VALUES ('$Nombre','$Apellido','$Correo','$Password')";

   $cn=fnConnect($error);

   $rs=mysql_query($query,$cn);
    
     echo '<script type="text/javascript">alert("Registro Correcto") </script>';

    echo "<script> location.href= 'menu.html'</script>";
    
}

$pagina="http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];

?>


<html>
<head>
<meta charset=UTF-8>
<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="../css/rEst.css"/>
<script type="text/javascript"></script>
</head>
    
<body>
      
	
		<form id="contenedor" method="POST" action="<?php echo($pagina)?>">
            
			<h2>Registro</h2>
			<div>
				<div>  			
					<span>Nombre</span> 
	  				<input class="Fnt" type="text" name="Nombre" />
                    <span>Apellido</span> 
	  				<input class="Fnt" type="text" name="Apellido" />
                    <span>Correo</span> 
	  				<input class="Fnt" type="text" name="Correo" />
                    <span>Contraseña</span> 
	  				<input class="Fnt" type="password" name="Password" />
                    <span>Confirmar Contraseña</span> 
	  				<input class="Fnt" type="password" name="psswrd" />
	  			</div>
                
                <input class="btn" type="submit" id="btEnv" value="Enviar" name="enviar"/>
                <input class="btn" type="reset" id="btEnv" value="Cancelar"/>
			</div>	
		</form>
</body>
</html>
