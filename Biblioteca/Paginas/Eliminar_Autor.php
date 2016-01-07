<?php

require "Funciones.php";

$msgError=null;

$rs=null;

if (isset($_POST["enviar"])){
    

    $Cod_autor = $_POST["Cod_autor"];
    
   $query="DELETE FROM autor WHERE Cod_autor = '$Cod_autor'";

   $cn=fnConnect($error);

   $rs=mysql_query($query,$cn);
    
   $query1="DELETE FROM autor_libro WHERE Cod_autor = '$Cod_autor'";

   $cn1=fnConnect($error);

   $rs1=mysql_query($query1,$cn1);

    echo '<script type="text/javascript">alert("Eliminacion Correcta") </script>';

    echo "<script> location.href= 'Catalogo.php'</script>";
    }


$pagina="http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];

?>


<HTML>

<head>
                <meta charset=UTF-8> 
                <title>Eliminar Autor</title>

</head>

<body>

        <br><br>
        <form method="POST" action="<?php echo($pagina)?>">
                    
        <label>Código del Autor:</label><input name="Cod_autor" type="number" min="1" max="9999"><br><br>
        <input name="enviar" type="submit" id="enviar" value="Eliminar"><br><br>
        </form>
    
</body>

</HTML>