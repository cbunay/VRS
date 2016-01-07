<?php

require "Funciones.php";

$msgError=null;

$rs=null;

if (isset($_POST["enviar"])){
    
    $Cod_autor = $_POST["Cod_autor"];
    $Cod_libro = $_POST["Cod_libro"];

   $query="INSERT INTO autor_libro (Cod_autor, Cod_libro)".

   "VALUES ('$Cod_autor','$Cod_libro')";

    $cn=fnConnect($error);

    $rs=mysql_query($query,$cn);
    
    echo '<script type="text/javascript">alert("Los Datos se ingresaron correctamete") </script>';

    echo "<script> location.href= 'Nuevo.html'</script>";

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

                <h2>INGRESAR DATOS DEL LIBRO Y AUTOR</h2>

                <form class="fr" method="POST" action="<?php echo($pagina)?>">
                    
                    <br>
                    <fieldset class="autor">  
                    <legend class="fr"> Datos Libro AUTOR </legend>
                    <div> 
                            <br>
                          <label class="fr">Código Autor:</label><input name="Cod_autor" type="number"  min="1" max="9999"><br><br>
                         <label class="fr">Código Libro:</label><input name="Cod_libro" type="number"  min="1" max="9999"><br> <br>   
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