<?php

require "funciones.php";

$msgError=null;

$rs=null;

if (isset($_POST["enviar"])){

    $Cod_autor = $_POST["Cod_autor"];
    $Nombre = $_POST["Nombre"];
    $Apellido = $_POST["Apellido"];
    $Origen = $_POST["Origen"];

   $query="INSERT INTO autor (Cod_autor, Nombre, Apellido, Origen)".

   "VALUES ('$Cod_autor','$Nombre','$Apellido','$Origen')";

    $cn=fnConnect($error);

    $rs=mysql_query($query,$cn);
    

    header ("location: Ingresar_Libro_Autor.php");

   //echo " dato ingresado!!";

}

$pagina="http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];

?>


<HTML>

<head>
                <meta charset=UTF-8> 
                <meta http-equiv="Content-Type" content+"text/html; charset=UTF-8"/>
                <link href="../css/stiloI.css" type="text/css" rel="stylesheet">
                <title></title>

</head>

<body>

                <h2>INGRESAR DATOS DE LOS AUTORES</h2>

                <form class="fr" method="POST" action="<?php echo($pagina)?>">
                    
                    <br>
                    <fieldset class="fr">  
                    <legend class="fr"> Datos del Autor</legend>
                    <div> 
                        <br>
                         <label class="fr">Código:</label><input name="Cod_autor" type="number" size="5" maxlength="5"  min="1" max="9999"><br><br>
                         <label class="fr">Nombre:</label><input name="Nombre" type="text" size="20" maxlength="40"><br><br>    
                         <label class="fr">Apellido:</label><input name="Apellido" type="text" size="20" maxlength="40"><br><br>   
                         <label class="fr">Origen:</label><input name="Origen" type="text" size="20" maxlength="40"><br> <br>
                    </div>
                    </fieldset>
                    
                   
                    <br><br>
                    <center>
                    <div class="botones">  
                    <input name="enviar" type="submit" id="enviar" value="Enviar">
                    <input name="borrar" type="reset" id="limpiar" value="Cancelar">
                    </div>
                    </center>
                </form>

</body>

</HTML>