<HTML>
    <HEAD>
    <TITLE>Formulario</TITLE>
    <meta charset="UTF-8">
    
        <body bgcolor="#ebebeb"><center><FONT COLOR="black" SIZE="10" FACE="Helvetica"><b>CUESTIONARIO</b></FONT> <br><br><br>
            <form type="text" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <FONT COLOR="black" SIZE="6" FACE="Helvetica"> Comentar </FONT> <br><br>
            <input type="radio" name="naturaleza" value="Recomendación" /> Recomendación
            <input type="radio" name="naturaleza" value="Oferta trabajo" /> Oferta trabajo
            <input type="radio" name="naturaleza" value="Comunicación" /> Comunicación
            <input type="radio" name="naturaleza" value="Queja" /> Queja
            </p>
            <br>
            <p>
            ¿Como calificaria la pagina?<br><br>
            <select name="especificar">
        <option value="Básica">Mala</option>
        <option value="Preparatoria">Aceptable</option>
        <option value="Técnica" selected>Genial</option>
        <option value="Universidad">Perfecta!</option>
        </select> <br><br><br><br>
        </p>
        
        <p>
        Comentarios <br>
        <textarea name="comentario" rows="10" cols="50"></textarea><br><br>
        </p>
        <p>
        ¿Cómo puedo comunicarme contigo? <br><br>
        <table>
        <tr> <td>Nombre: </td><td> <input type="text" name="nombre" size="30"/> </td></tr>
        <tr> <td>Correo electrónico:</td><td> <input type="text" name="correo" size="30"/> </td></tr>
        <tr> <td>Teléfono:</td><td> <input type="text" name="telefono" size="30"/> </td></tr>
        </table>
        </p>
        <p>
        <input type="checkbox" name="regresar" checked="checked"/> Comunícate conmigo vía correo electrónico.
        </p>
        <p>
        <input type="checkbox" name="regresar"/> Comunícate conmigo por teléfono.
        </p>
        <p>
            <input type="submit" name="formulario" value="Enviar"/>
            <input type="reset" value="Borrar">
            </p>
            </TABLE></form>

            <?php

$fp1=fopen("count.txt", "r+");
$n=fgets($fp1, 7);
$n++;
rewind($fp1);
fputs($fp1, $n);
fclose($fp1);

if(isset($_POST['formulario'])){

$fp=fopen("guestbook.txt", "r+");

$nombre=$_POST['nombre'];
$email=$_POST['correo'];
$telefono=$_POST['telefono'];
$coment=$_POST['comentario'];

$old=fread($fp, filesize("guestbook.txt"));
$email="<a href='\mailto:'$email\'>$email</a>";
$dateOfentry=date("y-n-j");
$entry="<p>Nombre: <b>$nombre</b> Correo: $email Fecha: <i>$dateOfentry</i> Ha visitado la página: $n veces
<br>Comentó: $coment</p>\n";

rewind($fp);
fputs($fp, "$entry \n $old");
fclose($fp); 
}
readfile("guestbook.txt");

            ?>
<br>
            <center><FONT COLOR="BLACK" SIZE="6" FACE="Helvetica"><a href="index.php" title="Catalogo" style="color: black; text-decoration: none;">- Regresar -</FONT></p></center>

    </center>

    </BODY>
</HEAD>
    </HTML>