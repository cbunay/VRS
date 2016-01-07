<?php 
echo " <CENTER><H1>Modificar Libro</H1> </CENTER>";
            $codig="";
            require ("Funciones.php");
            $msgError=null;
            $rs=null;
           if (isset($_POST["enviar"])){        
            $Orig = $_POST["Ori"];
            
            $cn=fnConnect($msgError);
            $result=mysql_query("select * from libro where Cod_libro = '$Orig' ",$cn);
            
            $codig=$Orig;

        

                while($row = mysql_fetch_array($result)) {
                    
                    
                    
                echo"
                <form method='POST' >
                     <fieldset class='fr'>  
                     <legend class='fr'> Datos del Autor</legend>
                     <div> 
                     <br>
                     <label class='fr'>Código:</label><input name='Cod_libro' type='number' size='10' maxlength='5'  min='1' max='9999'  value=".$row["Cod_libro"]." readonly><br><br>
                     <label class='fr'>Titulo:</label><input name='Titulo' type='text' size='10' maxlength='20' value=".$row["Titulo"]."><br><br>  
                     <label class='fr'>Editorial:</label><input name='Editorial' type='text' size='10' maxlength='20' value=".$row["Editorial"]."><br><br>  
                     <label class='fr'>Número de Paginas:</label><input name='Nro_paginas' type='text' size='10' maxlength='20' value=".$row["Nro_paginas"]."><br><br>  
                     </div>

                </fieldset>               
                 <br><input name='Aceptar' type='submit' id='Aceptar' value='Aceptar Cambios'>
                </form>
                ";

                    
                }
            echo"</table>";
            mysql_free_result($result);
            mysql_close($cn);
           
            }

           if (isset($_POST["Aceptar"])){
                  
            $cn=fnConnect($msgError);
               
            $Cod_libro = $_POST["Cod_libro"];
            $Titulo = $_POST["Titulo"];
            $Editorial = $_POST["Editorial"];
            $Nro_paginas = $_POST["Nro_paginas"];
               
            $result=mysql_query("UPDATE libro 
                                        SET 
                                            Titulo ='$Titulo',
                                            Editorial = '$Editorial',
                                            Nro_paginas = '$Nro_paginas'
                                        where Cod_libro = '$Cod_libro' ",$cn);
            
             echo '<script type="text/javascript">alert("Libro Modificado Correctamente") </script>';
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