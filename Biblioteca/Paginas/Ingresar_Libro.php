<?php

require "Funciones.php";

$msgError=null;

$rs=null;

if (isset($_POST["enviar"])){
    

    $Cod_libro = $_POST["Cod_libro"];
    $Titulo = $_POST["Titulo"];
    $Editorial = $_POST["Editorial"];
    $Nro_paginas = $_POST["Nro_paginas"];
    
   
   $query="INSERT INTO libro (Cod_libro, Titulo, Editorial, Nro_paginas)".

   "VALUES ('$Cod_libro','$Titulo','$Editorial','$Nro_paginas')";

   $cn=fnConnect($error);

   $rs=mysql_query($query,$cn);

    header ("location: Ingresar_Autor.php");
    
}

$pagina="http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];

?>


<HTML>

<head>
                <meta charset=UTF-8> 
                <link href="../css/stiloI.css" type="text/css" rel="stylesheet">

                <title></title>

</head>

<body>

                <h2>INGRESAR DATOS DE LOS LIBROS</h2>

                <form method="POST" action="<?php echo($pagina)?>">
                    
                <fieldset class="fr">  
                    <legend class="fr"> Datos del Libro</legend>
                    <div> 
                         <br>
                         <label class="fr">Código:</label><input name="Cod_libro" type="number" size="5" maxlength="5" min="1" max="9999"><br><br>
                         <label class="fr">Titulo:</label><input name="Titulo" type="text" size="40" maxlength="60"><br><br>    
                         <label class="fr">Editorial:</label><input name="Editorial" type="text" size="30" maxlength="50"><br><br>   
                         <label class="fr">Número de Paginas:</label><input name="Nro_paginas" type="number" size="10" maxlength="20"  min="1" max="9999"><br> <br>   
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