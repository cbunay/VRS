<?php

require "Paginas/Funciones.php";

$msgError=null;

$rs=null;

if (isset($_POST["Ingresar"]))
{

   
    $Correo = $_POST['txtcorreo'];
    $Password = $_POST["txtpassword"];
    $cn=fnConnect($error);
    $qingreso=mysql_query("Select Correo ,Password from usuario where Correo='$Correo'",$cn);
    $row=mysql_fetch_array($qingreso);
 
     
    if($row["Password"]==$Password)
    {
        echo '<script>alert("Ingreso éxitoso!")</script>';
        
      
   
        echo "<script>location.href='Paginas/menu.html'</script>";
        
        
    }
     
    
    else 
    {
        echo '<script>alert("Usuario o contraseña incorrecta")</script>';
    }

   
 
}

$pagina="http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];

?>



<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8>
<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
<script type="text/javascript" src="js/js.js"></script>
</head>
    
<body>
      
	<div id="contenedor">
    
		<form  method="POST">
			<h2>Biblioteca</h2>
            <h3>Escuela Superior Politécnica de Chimborazo</h3>
			<div>
                
				<div id="ing">  
                    <form method="post" action="<?php echo($pagina)?> ">
					<span>Correo</span> 
	  				<input class="Fnt" type="text" name="txtcorreo" maxlength="20"/>
                    <span>Contraseña</span> 
	  				<input class="Fnt" type="password" name="txtpassword" maxlength="20"  />
	  		</form>
                        </div>
                
                <a href="Paginas/menu.html"> <input class="btn" type="submit" id="btIng" value="Ingresar" name="Ingresar"/></a>
                <a href="Paginas/registro.php"><input class="btn" type="button" value="Registrarse"></a>
			</div>	
		</form>
	</div>	
</body>
</html>
