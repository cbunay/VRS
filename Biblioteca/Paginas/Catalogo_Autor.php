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
    

   $result=mysql_query("select * from autor",$cn);

    ?>
    <h1>Autores</h1>

   <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
        <TR>
            <TD></TD>
            <TD>Codigo</TD>
            <TD>Nombre</TD>
            <TD>Apellido</TD>
            <TD>Origen</TD>
            <TD></TD>
            <TD></TD>
        </TR>

        <?php      
            $i=1;
            while($row = mysql_fetch_array($result)) {
                    
                     echo "<tr>
                                <TD>$i</TD>
                                <td>".$row["Cod_autor"]."</td>
                                <td>".$row["Nombre"]."</td>
                                <td>".$row["Apellido"]."</td>
                                <td>".$row["Origen"]."</td>
                                <TD><a href=''><input name='Edi' type='button' value='Editar'></a></TD>
                                <TD><a href=''><input name='Eli' type='button' value='Eliminar'></a></TD>
                        </tr>";
                     $i++;
           }
        ?> 
       
    
       
       
    </TABLE>
        <br>
        <a href="Modificar_Autor.php"><input name="modificar" type="button" value="Modificar un autor"></a>&nbsp;&nbsp;
        <a href="Eliminar_Autor.php"><input name="eliminar" type="button" value="Eliminar un autor"></a><br><br>
        
        <a href="Catalogo.php"><input name="atras" type="button" value="Atras" </a>
</body>

</HTML>