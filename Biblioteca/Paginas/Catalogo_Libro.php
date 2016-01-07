<HTML>

<head>
                <meta charset=UTF-8> 
                <meta http-equiv="Content-Type" content+"text/html; charset=UTF-8"/>
                <title></title>

</head>

<body>

 <?php
       


   require("Funciones.php");

   $msgError=null;

   $cn=fnConnect($msgError);

   $result=mysql_query("select * from libro",$cn);

    ?>
    <h1>Libros</h1>
    <form>
            <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
                <TR>
                    <TD></TD>
                    <TD>Codigo</TD>
                    <TD>Título</TD>
                    <TD>Editorial</TD>
                    <TD>N.Paginas</TD>
                    <TD></TD>
                    <TD></TD>
               </TR>
                
                <?php      
                    $i=1;
                    while($row = mysql_fetch_array($result)) {
                        echo "<tr>
                                    <TD>$i</TD>
                                    <td>".$row["Cod_libro"]."</td>
                                    <td>".$row["Titulo"]."</td>
                                    <td>".$row["Editorial"]."</td>
                                    <td>".$row["Nro_paginas"]."</td>
                                    <TD><a href=''><input name='Edi' type='button' value='Editar'></a></TD>
                                    <TD><a href=''><input name='Eli' type='button' value='Eliminar'></a></TD>
                              </tr>";
                       $i++;
                   }
                ?>            
            </TABLE>
    </form>
    <a href="Modificar_Libro.php"><input name="modificar" type="button" value="Modificar un libro"></a>&nbsp;&nbsp;
    <a href="Eliminar_Libro.php"><input name="eliminar" type="button" value="Eliminar un libro"></a><br><br>
     
        <a href="Catalogo.php"><input name="atras" type="button" value="Atras" </a>
            
    
</body>

    
</HTML>