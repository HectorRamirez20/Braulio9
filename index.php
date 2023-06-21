
<HTML>
<HEAD>
<TITLE> JP Sports </TITLE>
<meta charset="UTF-8">

<body bgcolor="#ebebeb"> 

<table BORDER="0" CELLPADDING="0" CELLSPACING="0" BORDERCOLOR="#ebebeb" style="width:100%;" align="left">

<tr bgcolor="#ffffff">
<th align="center"><FONT COLOR="BLACK" SIZE="14" FACE="Helvetica"><i><a name="inicio">JP Sports</a></i></FONT>
<th width="45%"></th>
<th><FONT SIZE="4" FACE="Helvetica"><a href="#futbol" title="futbol" style="color: black; text-decoration: none;"><i>Futbol</i></th></a></font>
<th><FONT SIZE="4" FACE="Helvetica"><a href="#basquetbol" title="basquetbol" style="color: black; text-decoration: none;"><i>Basquetbol</i></th></a></font>
<th><FONT SIZE="4" FACE="Helvetica"><a href="#americano" title="americano" style="color: black; text-decoration: none;"><i>Americano</i></th></a></font>
<th><FONT SIZE="4" FACE="Helvetica"><a href="#natacion" title="natacion" style="color: black; text-decoration: none;"><i>Natacion</i></th></a></font>
<th><FONT SIZE="4" FACE="Helvetica"><a href="sesion.php" style="color: black; text-decoration: none;"><i>Iniciar Sesión</i></th></a>
</font>
</th>
</tr>

</table>

<?php

if(isset($_POST['subir'])){

$nom=$_POST['nombre'];

if(isset($_FILES['imagen'])){
$nomarchivo=$_FILES['imagen']['name'];
$ruta=$_FILES['imagen']['tmp_name'];
$rutades='C:\xampp\htdocs\tienda de ropa\_'.$nomarchivo;
if(move_uploaded_file($ruta, $rutades)){
    if($nom=="JuanPA"){
echo "<br><br><br><h1 align=center>Bienvenido ".$nom."!<br><img src=_".$nomarchivo." width=30 height=30></h1>"; 
}
else{
   echo "<br><br><br><h1 align=center>Bienvenido! (Usuario desconocido)<br><img src=_".$nomarchivo." width=30 height=30></h1>";
}

}
else{
echo "<br><br>Bienvenido! (Error al subir el avatar)"; }
}

}
else{
}

?>

<br><br><br><br>

<center><a href="https://www.nike.com/mx/w/yoga-anrlj"><img src="img/anuncio1.jpg" width="100%" hspace="0" vspace="0"></a></center>
<br><br><br><br><br>

<center><FONT COLOR="BLACK" SIZE="14" FACE="Helvetica"><a name="futbol">Fútbol </FONT></a> </center>
<hr align="center" color="#00000" size ="2" width="70%">


<table  BORDER="0" CELLPADDING="2" CELLSPACING="20" BORDERCOLOR="#ebebeb">
        <tr><td width="8%"></td>
            <td align="center"><img src="img/fut1.webp" align="center" width="300" height="300"></td>
            <td align="center"><img src="img/fut2.webp" align="center" width="300" height="300"></td>
            <td align="center"><img src="img/fut3.webp" align="center" width="300" height="300"></td>
            <td align="center"><img src="img/fut4.webp" align="center" width="300" height="300"></td>
        </tr>

        <tr><td width="8%"></td>
            <td align="center"><FONT COLOR="BLACK" SIZE="3" FACE="Helvetica"><br> FC Barcelona Local 22/23<br><br><b>$1,799</b><br><br><button onclick="location.href='futbol.html'">Comprar</button></FONT></td>
            <td align="center"><FONT COLOR="BLACK" SIZE="3" FACE="Helvetica"><br> Brasil Local 2023<br><br><b>$1,899</b><br><br><button onclick="location.href='futbol.html'">Comprar</button></FONT></td>
            <td align="center"><FONT COLOR="BLACK" SIZE="3" FACE="Helvetica"><br> Paris Local 23/24<br><br><b>$1,899</b><br><br><button onclick="location.href='futbol.html'">Comprar</button></FONT></td>
            <td align="center"><FONT COLOR="BLACK" SIZE="3" FACE="Helvetica"><br> REAL MADRID Local 23/24<br><br><b>$2,699</b><br><br><button onclick="location.href='futbol.html'">Comprar</button></FONT></td>
        </tr>

</TABLE>
<center><a href="futbol.html"><img src="img/boton-VER-MAS.png"width="200"></a></center>
<br><br><br><br><br>

<center><FONT COLOR="BLACK" SIZE="14" FACE="Helvetica"><a name="basquetbol">Basquetbol </FONT></a> </center>
<hr align="center" color="#00000" size ="2" width="70%">


<table  BORDER="0" CELLPADDING="2" CELLSPACING="20" BORDERCOLOR="#ebebeb">
        <tr><td width="8%"></td>
            <td align="center"><img src="img/bas1.webp" align="center" width="300" height="300"></td>
            <td align="center"><img src="img/bas2.jpg" align="center" width="300" height="300"></td>
            <td align="center"><img src="img/bas3.jpg" align="center" width="300" height="300"></td>
            <td align="center"><img src="img/bas4.jpg" align="center" width="300" height="300"></td>
        </tr>

        <tr><td width="8%"></td>
            <td align="center"><FONT COLOR="BLACK" SIZE="3" FACE="Helvetica"><br> Lakers Statement Edition<br><br><b>$2,099</b><br><br><button onclick="location.href='basquetbol.html'">Comprar</button></FONT></td>
            <td align="center"><FONT COLOR="BLACK" SIZE="3" FACE="Helvetica"><br> Phoenix Suns Icon Edition 2022/23<br><br><b>$1,259</b><br><br><button onclick="location.href='basquetbol.html'">Comprar</button></FONT></td>
            <td align="center"><FONT COLOR="BLACK" SIZE="3" FACE="Helvetica"><br> Warriors Icon Edition 2022/23<br><br><b>$1,379</b><br><br><button onclick="location.href='basquetbol.html'">Comprar</button></FONT></td>
            <td align="center"><FONT COLOR="BLACK" SIZE="3" FACE="Helvetica"><br> Chicago Bulls Icon Edition 2022/23<br><br><b>$1,379</b><br><br><button onclick="location.href='basquetbol.html'">Comprar</button></FONT></td>
        </tr>

</TABLE>
<center><a href="basquetbol.html"><img src="img/boton-VER-MAS.png"width="200"></a></center>
<br><br><br><br><br>


<center><FONT COLOR="BLACK" SIZE="14" FACE="Helvetica"><a name="americano">Americano </FONT></a> </center>
<hr align="center" color="#00000" size ="2" width="70%">


<table  BORDER="0" CELLPADDING="2" CELLSPACING="20" BORDERCOLOR="#ebebeb">
        <tr><td width="8%"></td>
            <td align="center"><img src="img/ame1.png" align="center" width="300" height="300"></td>
            <td align="center"><img src="img/ame2.jpg" align="center" width="300" height="300"></td>
            <td align="center"><img src="img/ame4.jpg" align="center" width="300" height="300"></td>
            <td align="center"><img src="img/ame3.webp" align="center" width="300" height="300"></td>
        </tr>

        <tr><td width="8%"></td>
            <td align="center"><FONT COLOR="BLACK" SIZE="3" FACE="Helvetica"><br> Cowboys Elliott<br><br><b>$1,389</b><br><br><button onclick="location.href='americano.html'">Comprar</button></FONT></td>
            <td align="center"><FONT COLOR="BLACK" SIZE="3" FACE="Helvetica"><br> Las Vegas Raiders<br><br><b>$599</b><br><br><button onclick="location.href='americano.html'">Comprar</button></FONT></td>
            <td align="center"><FONT COLOR="BLACK" SIZE="3" FACE="Helvetica"><br> 49ers Garoppolo<br><br><b>$1,361</b><br><br><button onclick="location.href='americano.html'">Comprar</button></FONT></td>
            <td align="center"><FONT COLOR="BLACK" SIZE="3" FACE="Helvetica"><br> Patriots<br><br><b>$599</b><br><br><button onclick="location.href='americano.html'">Comprar</button></FONT></td>
        </tr>

</TABLE>
<center><a href="americano.html"><img src="img/boton-VER-MAS.png"width="200"></a></center>
<br><br><br><br><br>


<center><FONT COLOR="BLACK" SIZE="14" FACE="Helvetica"><a name="natacion">Natacion y Complementos </FONT></a> </center>
<hr align="center" color="#00000" size ="2" width="70%">


<table  BORDER="0" CELLPADDING="2" CELLSPACING="20" BORDERCOLOR="#ebebeb">
        <tr><td width="8%"></td>
            <td align="center"><img src="img/nata.avif" align="center" width="300" height="300"></td>
            <td align="center"><img src="img/nata2.avif" align="center" width="300" height="300"></td>
            <td align="center"><img src="img/nata3.avif" align="center" width="300" height="300"></td>
            <td align="center"><img src="img/nata4.avif" align="center" width="300" height="300"></td>
        </tr>

        <tr><td width="8%"></td>
            <td align="center"><FONT COLOR="BLACK" SIZE="3" FACE="Helvetica"><br> TRAJE DE NATACIÓN BRAND LOVE FRANCHISE<br><br><b>$1,699</b><br><br><button onclick="location.href='natacion.html'">Comprar</button></FONT></td>
            <td align="center"><FONT COLOR="BLACK" SIZE="3" FACE="Helvetica"><br> TRAJE DE NATACIÓN MID 3 FRANJAS<br><br><b>$629</b><br><br><button onclick="location.href='natacion.html'">Comprar</button></FONT></td>
            <td align="center"><FONT COLOR="BLACK" SIZE="3" FACE="Helvetica"><br> BODY FARM RIO<br><br><b>$1,399</b><br><br><button onclick="location.href='natacion.html'">Comprar</button></FONT></td>
            <td align="center"><FONT COLOR="BLACK" SIZE="3" FACE="Helvetica"><br> BODY FARM RIO<br><br><b>$1,399</b><br><br><button onclick="location.href='natacion.html'">Comprar</button></FONT></td>
        </tr>

</TABLE>
<center><a href="natacion.html"><img src="img/boton-VER-MAS.png"width="200"></a></center>
<br><br><br><br><br>

<left><a href="#inicio"><img src="img/arriba.png"width="100"></a></left>

<hr align="center" color="#00000" size ="2" width="70%">
<table BORDER="0" CELLPADDING="45" CELLSPACING="0" BORDERCOLOR="#ebebeb" style="width:100%;" align="left">
    
    <tr bgcolor="#00000">
    <th width="40%"></th>
    <th align="center"><a href="Formulario.php" style="text-decoration: none; color: aliceblue;"><FONT COLOR="white" SIZE="7" FACE="Helvetica"><b>Comentarios</b></FONT></a><br><br><br><FONT COLOR="white" SIZE="5" FACE="Freestyle Script"><i>Hector y Jp</i></FONT> </th>
    <th width="40%"></th>

    </tr>
    
    </table>
</BODY>
</HTML>