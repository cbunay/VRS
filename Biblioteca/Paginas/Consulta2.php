
<?php 
            require ("Funciones.php");
            $msgError=null;
            $rs=null;
           if (isset($_POST["enviar"])){
                 
            echo " <CENTER><H1>Listado de los autores de un mismo Origen </H1> </CENTER>";
            
            $Orig = $_POST["Ori"];
            
            $cn=fnConnect($msgError);
            $result=mysql_query("select * from autor where Origen = '$Orig' ",$cn);
      
        

           echo "<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>

            <TR>
                <TD>&nbsp;Cod_autor</TD>
                <TD>&nbsp;Nombre&nbsp;</TD>
                <TD>&nbsp;Apellido&nbsp;</TD>
                <TD>&nbsp;Origen&nbsp;</TD>
            </TR>";
            

                while($row = mysql_fetch_array($result)) {
                   printf("<tr> 
                                <td>&nbsp;%d</td> 
                                <td>&nbsp;%s&nbsp;</td> 
                                <td>&nbsp;%s&nbsp;</td>
                                <td>&nbsp;%s&nbsp;</td>                                                 
                            </tr>"
                            ,$row["Cod_autor"]
                            ,$row["Nombre"]
                            ,$row["Apellido"]
                           ,$row["Origen"]);          
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
                    
            <label>Origen:</label><input name="Ori" type="text" size="10" maxlength="20"><br><br>
            <input name="enviar" type="submit" id="enviar" value="Consultar"><br><br>
            </form>
            
                
     
</body>

</html>