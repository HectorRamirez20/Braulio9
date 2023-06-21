<HTML>
<HEAD>
<TITLE> Gracias </TITLE>
<meta charset="UTF-8">

<body background="img/fondo j.jpg">

<BODY> 

<br><br><br><br><br><br><br><br>
<h1 align="center"><FONT COLOR="BLACK" SIZE="9" FACE="MV Boli">RH MUEBLES</h1></FONT></p>

<?php

$fp=fopen("carrito.txt", "r+");
$n=fgets($fp, 30);

if($n!=0){
echo "<h2 align=center><FONT COLOR=BLACK SIZE=6 FACE=MV Boli>Te agradecemos por tu compra de un ".$n." :D</h2></FONT></p>";
}

fclose($fp);

?>

<br><br>

<h1 align="center"><FONT COLOR="BLACK" SIZE="6" FACE="MV Boli"><a href="index.php" title="Catalogo">Seguir comprando</h1></FONT></p>
    <br><br>

    <center><FONT COLOR="BLACK" SIZE="6" FACE="MV Boli"><a href="Formulario.php" title="Catalogo">¿Desea contestar una encuesta?</a></FONT>

</BODY>
</HTML>