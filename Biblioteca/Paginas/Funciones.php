
<?php

function fnConnect(&$msg){

$cn=mysql_connect("localhost","root","");

if (!$cn){

   $msg="Error en la conexion";

   return FALSE;

}

$rpta=mysql_select_db("biblioteca",$cn);

if (!$rpta){

    $msg="Base de Datos no existe";

                mysql_close($cn);

                return FALSE;

}

 return $cn;

}

function say($cad){   //Imprime un mensaje

  echo $cad."\n";

}

 

function fnShowMsg($title,$msg){  //Construye mensaje en  una tabla

say("<table width='2500'>");

say("<tr>");

say("<th align=center valing=middle>$title</th>");

say("</tr>");

say("<tr>");

say("<td align=left valing=middle>$msg</td>");

say("</tr>");

say ("</table>");

}

 

function fnLink($link,$target,$msg){       //Construuye un enlace utilizando etiqueta A

$cad="<A href='$link' target='$target'>$msg</A>";

return $cad;

}

?>

