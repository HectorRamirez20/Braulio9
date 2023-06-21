
<HTML>
<HEAD>
<TITLE> JP Sports </TITLE>
<meta charset="UTF-8">

<body bgcolor="#ebebeb"> 

<table BORDER="0" CELLPADDING="0" CELLSPACING="0" BORDERCOLOR="#ebebeb" style="width:100%;" align="left">

<tr bgcolor="#ffffff">
<th align="center"><FONT COLOR="BLACK" SIZE="14" FACE="Helvetica"><i>
<a name="inicio" href="index.php" style="text-decoration: none; color: black;">JP Sports</a></i></FONT></th>
<th width="50%"></th>
<th><FONT SIZE="4" FACE="Helvetica"><a href="futbol.html" title="futbol" style="color: black; text-decoration: none;"><i>Futbol</i></th></a></font>
<th><FONT SIZE="4" FACE="Helvetica"><a href="basquetbol.html" title="basquetbol" style="color: black; text-decoration: none;"><i>Basquetbol</i></th></a></font>
<th><FONT SIZE="4" FACE="Helvetica"><a href="americano.html" title="americano" style="color: black; text-decoration: none;"><i>Americano</i></th></a></font>
<th><FONT SIZE="4" FACE="Helvetica"><a href="natacion.html" title="natacion" style="color: black; text-decoration: none;"><i>Natacion</i></th></a></font>
    <th width="5%"></th>
</tr>

</table>

<br><br><br><p align="center">
    <h1 align="center">Carrito</h1>
    <hr align="center" color="#00000" size ="2" width="70%"><br><br>

    <div align="center" style="font-size: 25;">
        
<table cellpadding="10">
    <tr>
        <td>Producto:</td>
        <td>Cantidad:</td>
    </tr>
    <tr>
        <td>
            <?php

                $fp=fopen("carrito.txt", "r+");
                $n=fgets($fp, 30);

                if(isset($_POST['FC_Barcelona_Local_22/23-$1,799'])){
                echo "FC Barcelona Local 22/23<br>$1,799"; 
                $n='FC Barcelona Local 22/23<br>$1,799'; }

                if(isset($_POST['BrasilLocal2023<br>$1,899'])){
                echo "Brasil Local 2023<br>$1,899";
                $n='Brasil Local 2023<br>$1,899'; }

                if(isset($_POST['ParisLocal23/24<br>$1,899'])){
                echo "Paris Local 23/24<br>$1,899";
                $n='Paris Local 23/24<br>$1,899'; }

                if(isset($_POST['REAL MADRID Local 23/24<br>$2,699'])){
                echo "REAL MADRID Local 23/24<br>$2,699";
                $n='REAL MADRID Local 23/24<br>$2,699'; }


                if(isset($_POST['JerseyMangalargadeMéxico<br>$1,819'])){
                echo "Jersey Manga larga de México<br>$1,819";
                $n='Jersey Manga larga de México<br>$1,819'; }

                if(isset($_POST['TigresUANLLocal22/23<br>$2,294'])){
                echo "Tigres UANL Local 22/23<br>$2,294";
                $n='Tigres UANL Local 22/23<br>$2,294'; }

                if(isset($_POST['QueretaroFCLocal22/23<br>$1,093'])){
                echo "Queretaro FC Local 22/23<br>$1,093";
                $n='Queretaro FC Local 22/23<br>$1,093'; }

                if(isset($_POST['ItaliaVisitante23<br>$1,799'])){
                echo "Italia Visitante 23<br>$1,799";
                $n='Italia Visitante 23<br>$1,799'; }


                if(isset($_POST['MéxicoVisitaMundial2022<br>$899'])){
                echo "México Visita Mundial 2022<br>$899";
                $n='México Visita Mundial 2022<br>$899'; }

                if(isset($_POST['TottenhamTercero22/23<br>$1,079'])){
                echo "Tottenham Tercero 22/23<br>$1,079";
                $n='Tottenham Tercero 22/23<br>$1,079'; }

                if(isset($_POST['Argentina22<br>$2,027'])){
                echo "Argentina 22<br>$2,027";
                $n='Argentina 22<br>$2,027'; }

                if(isset($_POST['ManchesterCityF.C.22/23<br>$1,399'])){
                echo "Manchester City F.C. 22/23<br>$1,399";
                $n='Manchester City F.C. 22/23<br>$1,399'; }





                if(isset($_POST['LakersStatementEdition<br>$2,099'])){
                echo "Lakers Statement Edition<br>$2,099";
                $n='Lakers Statement Edition<br>$2,099'; }

                if(isset($_POST['PhoenixSunsIconEdition2022/23<br>$1,259'])){
                echo "Phoenix Suns Icon Edition 2022/23<br>$1,259";
                $n='Phoenix Suns Icon Edition 2022/23<br>$1,259'; }

                if(isset($_POST['WarriorsIconEdition2022/23<br>$1,379'])){
                echo "Warriors Icon Edition 2022/23<br>$1,379";
                $n='Warriors Icon Edition 2022/23<br>$1,379'; }

                if(isset($_POST['ChicagoBullsIconEdition2022/23<br>$1,379'])){
                echo "Chicago Bulls Icon Edition 2022/23<br>$1,379";
                $n='Chicago Bulls Icon Edition 2022/23<br>$1,379'; }


                if(isset($_POST['Philadelphia76ersEmbiidIconEdition<br>$1,259'])){
                echo "Philadelphia76ersEmbiidIconEdition<br>$1,259";
                $n='Philadelphia 76ers Embiid Icon Edition<br>$1,259'; }

                if(isset($_POST['All-StarEdition2023<br>$2,399'])){
                echo "All-Star Edition 2023<br>$2,399";
                $n='All-Star Edition 2023<br>$2,399'; }

                if(isset($_POST['DallasMavericksLukaDoncic22/23<br>$1,259'])){
                echo "Dallas Mavericks Luka Doncic 22/23<br>$1,259";
                $n='Dallas Mavericks Luka Doncic 22/23<br>$1,259'; }

                if(isset($_POST['MilwaukeeBucksIconEdition2022/23<br>$2,099'])){
                echo "Milwaukee Bucks Icon Edition 2022/23<br>$2,099";
                $n='Milwaukee Bucks Icon Edition 2022/23<br>$2,099'; }


                if(isset($_POST['SanAntonioSpurs<br>$1,259'])){
                echo "San Antonio Spurs<br>$1,259";
                $n='San Antonio Spurs<br>$1,259'; }

                if(isset($_POST['JerseyRetroooMéxico<br>$599'])){
                echo "Jersey Retrooo México<br>$599";
                $n='Jersey Retrooo México<br>$599'; }

                if(isset($_POST['GrizzliesIconEdition2022/23<br>$1,469'])){
                echo "Grizzlies Icon Edition 2022/23<br>$1,469";
                $n='Grizzlies Icon Edition 2022/23<br>$1,469'; }

                if(isset($_POST['Raptors15VinceCarter<br>$2,990'])){
                echo "Raptors 15 Vince Carter<br>$2,990";
                $n='Raptors 15 Vince Carter<br>$2,990'; }





                if(isset($_POST['CowboysElliott<br>$1,389'])){
                echo "Cowboys Elliott<br>$1,389";
                $n='Cowboys Elliott<br>$1,389'; }

                if(isset($_POST['LasVegasRaiders<br>$599'])){
                echo "Las Vegas Raiders<br>$599";
                $n='Las Vegas Raiders<br>$599'; }

                if(isset($_POST['49ersGaroppolo<br>$1,361'])){
                echo "49ers Garoppolo<br>$1,361";
                $n='49ers Garoppolo<br>$1,361'; }

                if(isset($_POST['Patriots<br>$599'])){
                echo "Patriots<br>$599";
                $n='Patriots<br>$599'; }


                if(isset($_POST['WashingtonCommanders<br>$2,236'])){
                echo "Washington Commanders<br>$2,236";
                $n='Washington Commanders<br>$2,236'; }

                if(isset($_POST['C.J.StroudHoustonTexans<br>$2,236'])){
                echo "C.J. Stroud Houston Texans<br>$2,236";
                $n='C.J. Stroud Houston Texans<br>$2,236'; }

                if(isset($_POST['BryceYoungCarolinaPanthers<br>$2,236'])){
                echo "Bryce Young Carolina Panthers<br>$2,236";
                $n='Bryce Young Carolina Panthers<br>$2,236'; }

                if(isset($_POST['DevonWitherspoonSeattleSeahawks<br>$2,236'])){
                echo "Devon Witherspoon Seattle Seahawks<br>$2,236";
                $n='Devon Witherspoon Seattle Seahawks<br>$2,236'; }


                if(isset($_POST['BijanRobinsonAtlantaFalcons<br>$2,236'])){
                echo "Bijan Robinson Atlanta Falcons<br>$2,236";
                $n='Bijan Robinson Atlanta Falcons<br>$2,236'; }

                if(isset($_POST['JalenCarterPhiladelphiaEagles<br>$2,236'])){
                echo "Jalen Carter Philadelphia Eagles<br>$2,236";
                $n='Jalen Carter Philadelphia Eagles<br>$2,236'; }

                if(isset($_POST['DeAndreHopkinsArizonaCardinals<br>$1,720'])){
                echo "DeAndre Hopkins Arizona Cardinals<br>$1,720";
                $n="DeAndre Hopkins Arizona Cardinals<br>$1,720"; }

                if(isset($_POST['DeAndreHopkinsArizonaCardinals<br>$3,011'])){
                echo "DeAndre Hopkins Arizona Cardinals<br>$3,011";
                $n='DeAndre Hopkins Arizona Cardinals<br>$3,011'; }





                if(isset($_POST['TRAJEDENATACIÓNBRANDLOVEFRANCHISE<br>$1,699'])){
                $n='TRAJE DE NATACIÓN BRAND LOVE FRANCHISE<br>$1,699';
                echo $n; }

                if(isset($_POST['TRAJEDENATACIÓNMID3FRANJAS<br>$629'])){
                $n='TRAJE DE NATACIÓN MID 3 FRANJAS<br>$629';
                echo $n; }

                if(isset($_POST['BODYFARMRIO<br>$1,399'])){
                $n='BODY FARM RIO<br>$1,399';
                echo $n; }

                if(isset($_POST['BODYFARMRIO2<br>$1,399'])){
                $n='BODY FARM RIO2<br>$1,399';
                echo $n; }


                if(isset($_POST['TRAJEDEBAÑOLARGO3FRANJAS<br>$1,099'])){
                $n='TRAJE DE BAÑO LARGO 3 FRANJAS<br>$1,099';
                echo $n; }

                if(isset($_POST['SHORTSDENATACIÓNCLASSIC3FRANJAS<br>$799'])){
                $n='SHORTS DE NATACIÓN CLASSIC 3 FRANJAS<br>$799';
                echo $n; }

                if(isset($_POST['SHORTSDENATACIÓNLARGOCLÁSICO3FRANJAS<br>$719'])){
                $n='SHORTS DE NATACIÓN LARGO CLÁSICO 3 FRANJAS<br>$719';
                echo $n; }

                if(isset($_POST['SHORTSDENATACIÓNPARLEY<br>$1,599'])){
                $n='SHORTS DE NATACIÓN PARLEY<br>$1,599';
                echo $n; }


                if(isset($_POST['SANDALIASADILETTECOMFORT<br>$769'])){
                $n='SANDALIAS ADILETTE COMFORT<br>$769';
                echo $n; }

                if(isset($_POST['SANDALIASADILETTECOMFORT2<br>$769'])){
                $n='SANDALIAS ADILETTE COMFORT2<br>$769';
                echo $n; }

                if(isset($_POST['SANDALIASADISSAGE(UNISEX)<br>$999'])){
                $n='SANDALIAS ADISSAGE (UNISEX)<br>$999';
                echo $n; }

                if(isset($_POST['SANDALIASADILETTEAQUA<br>$799'])){
                $n='SANDALIAS ADILETTE AQUA<br>$799';
                echo $n; }


                if(isset($_POST['Gorranatación500negrorevestidodesilicona<br>$150'])){
                $n='Gorra natación 500 negro revestido de silicona<br>$150';
                echo $n; }

                if(isset($_POST['Gorranataciónblancoestampadofiresilicón<br>$150'])){
                $n='Gorra natación blanco estampado fire silicón<br>$150';
                echo $n; }

                if(isset($_POST['Gogglesnataciónxbase<br>$150'])){
                $n='Goggles natación xbase<br>$150';
                echo $n; }

                if(isset($_POST['Goggles_natación_xbase_rosa<br>$130'])){
                $n='Goggles natación xbase rosa<br>$130';
                echo $n; }

                rewind($fp);
                fputs($fp, $n);
                fclose($fp);

            ?>
        </td>
        <td>1X</td>
    </tr>
</table>
    </div>

<p align="center"><button onclick="location.href='gracias.php'">Confirmar compra</button></p><br><br><br>

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