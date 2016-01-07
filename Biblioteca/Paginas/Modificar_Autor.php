<?php 
echo " <CENTER><H1>Modificar Autor</H1> </CENTER>";
            $codig="";
            require ("Funciones.php");
            $msgError=null;
            $rs=null;
           if (isset($_POST["enviar"])){        
            $Orig = $_POST["Ori"];
            
            $cn=fnConnect($msgError);
            $result=mysql_query("select * from autor where Cod_autor = '$Orig' ",$cn);
            
            $codig=$Orig;

        

                while($row = mysql_fetch_array($result)) {
                    
                    
                    
                echo"
                <form method='POST' >
                     <fieldset class='fr'>  
                     <legend class='fr'> Datos del Autor</legend>
                     <div> 
                     <br>
                     <label class='fr'>Código:</label><input name='Cod_autor' type='number' size='10' maxlength='5'  min='1' max='9999'  value=".$row["Cod_autor"]." readonly><br><br>
                     <label class='fr'>Nombre:</label><input name='Nombre' type='text' size='10' maxlength='20' value=".$row["Nombre"]."><br><br>  
                     <label class='fr'>Apellido:</label><input name='Apellido' type='text' size='10' maxlength='20' value=".$row["Apellido"]."><br><br>  
                     <label class='fr'>Origen:</label><input name='Origen' type='text' size='10' maxlength='20' value=".$row["Origen"]."><br><br>  
                     </div>

                </fieldset>               
                <input name='codigo' type='hidden' value=".$row["Cod_autor"].">
                 <br><input name='Aceptar' type='submit' id='Aceptar' value='Aceptar Cambios'>
                </form>

                ";

                    
                }
            echo"</table>";
            mysql_free_result($result);
            mysql_close($cn);
           
            }

           if (isset($_POST["Aceptar"])){
                  
            $Cd = $_POST["codigo"];
            $cn=fnConnect($msgError);
               
            $Cod_autor = $_POST["Cod_autor"];
            $Nombre = $_POST["Nombre"];
            $Apellido = $_POST["Apellido"];
            $Origen = $_POST["Origen"];
               
            $result=mysql_query("UPDATE autor 
                                        SET Cod_autor = '$Cod_autor',
                                            Nombre ='$Nombre',
                                            Apellido = '$Apellido',
                                            Origen = '$Origen'
                                        where Cod_autor = '$Cd' ",$cn);
            
            
            echo '<script type="text/javascript">alert("Autor Modificado Correctamente") </script>';
            echo "<script> location.href= 'Catalogo.php'</script>";
            mysql_close($cn);
           
            }


            $pagina="http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
    ?>
<html>
<head>

   <title>Consultas</title>

</head>

<body>
            <form method="POST" action="<?php echo($pagina)?>">
                    
        <label>Codigo Autor:
                </label><input name="Ori" type="text" size="10" maxlength="20">
            <input name="enviar" type="submit" id="enviar" value="Buscar">
        </form>

</body>

</html>