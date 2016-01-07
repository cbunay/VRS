
<html>
<head>

   <title>Consultas</title>

</head>

<body>
        <?php 
           
            echo " <CENTER><H1>Listado de los datos de libros con sus autores</H1> </CENTER>";

            require("Funciones.php");
            $msgError=null;
            $cn=fnConnect($msgError);
            $result=mysql_query("select libro.Cod_libro, Titulo, autor.Cod_autor, Nombre from autor
            inner join autor_libro on autor.Cod_autor = autor_libro.Cod_autor
            inner join libro on libro.Cod_libro = autor_libro.Cod_libro ",$cn);
      
        ?>

            <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>

            <TR>
                <TD>&nbsp;Cod_libro</TD>
                <TD>&nbsp;Titulo&nbsp;</TD>
                <TD>&nbsp;Cod_autor&nbsp;</TD>
                <TD>&nbsp;Nombre&nbsp;</TD>
            </TR>

        <?php      

                while($row = mysql_fetch_array($result)) {
                    printf("<tr> 
                                <td>&nbsp;%d</td> 
                                <td>&nbsp;%s&nbsp;</td> 
                                <td>&nbsp;%d&nbsp;</td> 
                                <td>&nbsp;%s&nbsp;</td> 
                            </tr>"
                            ,$row["Cod_libro"]
                            ,$row["Titulo"]
                            ,$row["Cod_autor"]
                            ,$row["Nombre"]);          
                }

            mysql_free_result($result);
            mysql_close($cn);
            echo "<a href='OpcionesC.html'><input name='aceptar' type='button' value='Aceptar'></a>";
        ?>
   
        </TABLE>
                
     
</body>

</html>