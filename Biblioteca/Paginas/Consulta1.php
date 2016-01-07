
        <?php 
            require ("Funciones.php");
            $msgError=null;
            $rs=null;
           if (isset($_POST["enviar"])){
                 
            echo " <CENTER><H1>Listado de los libros de una Editorial </H1> </CENTER>";
            
            $Edit = $_POST["Editorial"];
            
            $cn=fnConnect($msgError);
            $result=mysql_query("select * from libro where Editorial = '$Edit' ",$cn);
      
        

           echo "<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1

            <TR>
                <TD>&nbsp;Cod_libro</TD>
                <TD>&nbsp;Titulo&nbsp;</TD>
                <TD>&nbsp;Editorial&nbsp;</TD>
                <TD>&nbsp;Nro_paginas&nbsp;</TD>
            </TR>";
            

                while($row = mysql_fetch_array($result)) {
                    printf("<tr> 
                                <td>&nbsp;%d</td> 
                                <td>&nbsp;%s&nbsp;</td> 
                                <td>&nbsp;%s&nbsp;</td>
                                <td>&nbsp;%d&nbsp;</td>                      
                            </tr>"
                            ,$row["Cod_libro"]
                            ,$row["Titulo"]
                            ,$row["Editorial"]
                            ,$row["Nro_paginas"]);          
                }
            echo"</table>";
            mysql_free_result($result);
            mysql_close($cn);
            echo "<br><br>";
            echo "<a href='OpcionesC.html'><input name='aceptar' type='button' value='Aceptar'></a>";
            }
            $pagina="http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
    ?>
<html>
<head>

   <title>Consultas</title>

</head>

<body>
        <br><br><br>
        <form method="POST" action="<?php echo($pagina)?>">
                    
        <label>Editorial:</label><input name="Editorial" type="text" size="10" maxlength="20"><br><br>
            <input name="enviar" type="submit" id="enviar" value="Consultar"><br><br>
        </form>
        
     
</body>

</html>