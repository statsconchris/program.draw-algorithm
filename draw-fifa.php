<?php
    //Definir bombos
    
    $pais1 = 'Rusia';
    $pais2 = 'Alemania';
    $pais3 = 'Brasil';
    $pais4 = 'Portugal';
    $pais5 = 'Argentina';
    $pais6 = 'Belgica';
    $pais7 = 'Polonia';
    $pais8 = 'Francia';
    
    $pais9 = 'España';
    $pais10 = 'Peru';
    $pais11 = 'Suiza';
    $pais12 = 'Inglaterra';
    $pais13 = 'Colombia';
    $pais14 = 'Mexico';
    $pais15 = 'Uruguay';
    $pais16 = 'Croacia';
    $pais17 = 'Dinamarca';
    $pais18 = 'Islandia';
    $pais19 = 'Costa Rica';
    $pais20 = 'Suecia';
    $pais21 = 'Tunez';
    $pais22 = 'Egipto';
    $pais23 = 'Senegal';
    $pais24 = 'Iran';
    
    $pais25 = 'Serbia';
    $pais26 = 'Nigeria';
    $pais27 = 'Australia';
    $pais28 = 'Japon';
    $pais29 = 'Panama';
    $pais30 = 'Marruecos';
    $pais31 = 'Corea del Sur';
    $pais32 = 'Arabia Saudita';
    
    //Definir grupos
    
    $A1 = '0'; $A2 = '0'; $A3 = '0'; $A4 = '0';
    $B1 = '0'; $B2 = '0'; $B3 = '0'; $B4 = '0';
    $C1 = '0'; $C2 = '0'; $C3 = '0'; $C4 = '0';
    $D1 = '0'; $D2 = '0'; $D3 = '0'; $D4 = '0';
    $E1 = '0'; $E2 = '0'; $E3 = '0'; $E4 = '0';
    $F1 = '0'; $F2 = '0'; $F3 = '0'; $F4 = '0';
    $G1 = '0'; $G2 = '0'; $G3 = '0'; $G4 = '0';
    $H1 = '0'; $H2 = '0'; $H3 = '0'; $H4 = '0';
    
    $grupoA = array($A1,$A2,$A3,$A4);
    $grupoB = array($B1,$B2,$B3,$B4);
    $grupoC = array($C1,$C2,$C3,$C4);
    $grupoD = array($D1,$D2,$D3,$D4);
    $grupoE = array($E1,$E2,$E3,$E4);
    $grupoF = array($F1,$F2,$F3,$F4);
    $grupoG = array($G1,$G2,$G3,$G4);
    $grupoH = array($H1,$H2,$H3,$H4);

?>

<?php
    if($_POST["sorteo"]){

        //Sortear bombo 1
        $bombo1 = array($pais1,$pais2,$pais3,$pais4,$pais5,$pais6,$pais7,$pais8);
        $A1 = $grupoA[0] = array_shift($bombo1);
        shuffle($bombo1);
        $B1 = $grupoB[0] = array_shift($bombo1);
        shuffle($bombo1);
        $C1 = $grupoC[0] = array_shift($bombo1);
        shuffle($bombo1);
        $D1 = $grupoD[0] = array_shift($bombo1);
        shuffle($bombo1);
        $E1 = $grupoE[0] = array_shift($bombo1);
        shuffle($bombo1);
        $F1 = $grupoF[0] = array_shift($bombo1);
        shuffle($bombo1);
        $G1 = $grupoG[0] = array_shift($bombo1);
        shuffle($bombo1);
        $H1 = $grupoH[0] = array_shift($bombo1);

        //Sortear bombo 2
        $bombo2 = array($pais9,$pais10,$pais11,$pais12,$pais13,$pais14,$pais15,$pais16);
        shuffle($bombo2);
        
        $ele9 = $bombo2[0];
        $ele10 = $bombo2[1];
        $ele11 = $bombo2[2];
        $ele12 = $bombo2[3];
        $ele13 = $bombo2[4];
        $ele14 = $bombo2[5];
        $ele15 = $bombo2[6];
        $ele16 = $bombo2[7];

        do {
            shuffle($bombo2);
            $ele9 = $bombo2[0];
            $ele10 = $bombo2[1];
            $ele11 = $bombo2[2];
            $ele12 = $bombo2[3];
            $ele13 = $bombo2[4];
            $ele14 = $bombo2[5];
            $ele15 = $bombo2[6];
            $ele16 = $bombo2[7];
            } while (
            (($B1 == 'Brasil' || $B1 == 'Argentina') and ($ele10 == 'Peru' || $ele10 == 'Uruguay' || $ele10 == 'Colombia')) ||
            (($C1 == 'Brasil' || $C1 == 'Argentina') and ($ele11 == 'Peru' || $ele11 == 'Uruguay' || $ele11 == 'Colombia')) ||
            (($D1 == 'Brasil' || $D1 == 'Argentina') and ($ele12 == 'Peru' || $ele12 == 'Uruguay' || $ele12 == 'Colombia')) ||
            (($E1 == 'Brasil' || $E1 == 'Argentina') and ($ele13 == 'Peru' || $ele13 == 'Uruguay' || $ele13 == 'Colombia')) ||
            (($F1 == 'Brasil' || $F1 == 'Argentina') and ($ele14 == 'Peru' || $ele14 == 'Uruguay' || $ele14 == 'Colombia')) ||
            (($G1 == 'Brasil' || $G1 == 'Argentina') and ($ele15 == 'Peru' || $ele15 == 'Uruguay' || $ele15 == 'Colombia')) ||
            (($H1 == 'Brasil' || $H1 == 'Argentina') and ($ele16 == 'Peru' || $ele16 == 'Uruguay' || $ele16 == 'Colombia'))
            );

        $A2 = $bombo2[0];
        $B2 = $bombo2[1];
        $C2 = $bombo2[2];
        $D2 = $bombo2[3];
        $E2 = $bombo2[4];
        $F2 = $bombo2[5];
        $G2 = $bombo2[6];
        $H2 = $bombo2[7];

        //Sortear bombo 3
        $bombo3 = array($pais17,$pais18,$pais19,$pais20,$pais21,$pais22,$pais23,$pais24);
        shuffle($bombo3);
        
        $ele17 = $bombo3[0];
        $ele18 = $bombo3[1];
        $ele19 = $bombo3[2];
        $ele20 = $bombo3[3];
        $ele21 = $bombo3[4];
        $ele22 = $bombo3[5];
        $ele23 = $bombo3[6];
        $ele24 = $bombo3[7];

        do {
            shuffle($bombo3);
            $ele17 = $bombo3[0];
            $ele18 = $bombo3[1];
            $ele19 = $bombo3[2];
            $ele20 = $bombo3[3];
            $ele21 = $bombo3[4];
            $ele22 = $bombo3[5];
            $ele23 = $bombo3[6];
            $ele24 = $bombo3[7];
            } while (
            (($A2 == 'España' || $A2 == 'Inglaterra' || $A2 == 'Suiza' || $A2 == 'Croacia') and ($ele17 == 'Suecia' || $ele17 == 'Islandia' || $ele17 == 'Dinamarca')) ||
            (($A2 == 'Mexico') and ($ele17 == 'Costa Rica')) ||
            (($B1 == 'Alemania' || $B1 == 'Portugal' || $B1 == 'Belgica' || $B1 == 'Polonia' || $B1 == 'Francia') and ($B2 == 'España' || $B2 == 'Inglaterra' || $B2 == 'Suiza' || $B2 == 'Croacia') and ($ele18 == 'Suecia' || $ele18 == 'Islandia' || $ele18 == 'Dinamarca')) ||
            (($B2 == 'Mexico') and ($ele18 == 'Costa Rica')) ||
            (($C1 == 'Alemania' || $C1 == 'Portugal' || $C1 == 'Belgica' || $C1 == 'Polonia' || $C1 == 'Francia') and ($C2 == 'España' || $C2 == 'Inglaterra' || $C2 == 'Suiza' || $C2 == 'Croacia') and ($ele19 == 'Suecia' || $ele19 == 'Islandia' || $ele19 == 'Dinamarca')) ||
            (($C2 == 'Mexico') and ($ele19 == 'Costa Rica')) ||
            (($D1 == 'Alemania' || $D1 == 'Portugal' || $D1 == 'Belgica' || $D1 == 'Polonia' || $D1 == 'Francia') and ($D2 == 'España' || $D2 == 'Inglaterra' || $D2 == 'Suiza' || $D2 == 'Croacia') and ($ele20 == 'Suecia' || $ele20 == 'Islandia' || $ele20 == 'Dinamarca')) ||
            (($D2 == 'Mexico') and ($ele20 == 'Costa Rica')) ||
            (($E1 == 'Alemania' || $E1 == 'Portugal' || $E1 == 'Belgica' || $E1 == 'Polonia' || $E1 == 'Francia') and ($E2 == 'España' || $E2 == 'Inglaterra' || $E2 == 'Suiza' || $E2 == 'Croacia') and ($ele21 == 'Suecia' || $ele21 == 'Islandia' || $ele21 == 'Dinamarca')) ||
            (($E2 == 'Mexico') and ($ele21 == 'Costa Rica')) ||
            (($F1 == 'Alemania' || $F1 == 'Portugal' || $F1 == 'Belgica' || $F1 == 'Polonia' || $F1 == 'Francia') and ($F2 == 'España' || $F2 == 'Inglaterra' || $F2 == 'Suiza' || $F2 == 'Croacia') and ($ele22 == 'Suecia' || $ele22 == 'Islandia' || $ele22 == 'Dinamarca')) ||
            (($F2 == 'Mexico') and ($ele22 == 'Costa Rica')) ||
            (($G1 == 'Alemania' || $G1 == 'Portugal' || $G1 == 'Belgica' || $G1 == 'Polonia' || $G1 == 'Francia') and ($G2 == 'España' || $G2 == 'Inglaterra' || $G2 == 'Suiza' || $G2 == 'Croacia') and ($ele23 == 'Suecia' || $ele23 == 'Islandia' || $ele23 == 'Dinamarca')) ||
            (($G2 == 'Mexico') and ($ele23 == 'Costa Rica')) ||
            (($H1 == 'Alemania' || $H1 == 'Portugal' || $H1 == 'Belgica' || $H1 == 'Polonia' || $H1 == 'Francia') and ($H2 == 'España' || $H2 == 'Inglaterra' || $H2 == 'Suiza' || $H2 == 'Croacia') and ($ele24 == 'Suecia' || $ele24 == 'Islandia' || $ele24 == 'Dinamarca')) ||
            (($H2 == 'Mexico') and ($ele24 == 'Costa Rica'))
            );

        $A3 = $bombo3[0];
        $B3 = $bombo3[1];
        $C3 = $bombo3[2];
        $D3 = $bombo3[3];
        $E3 = $bombo3[4];
        $F3 = $bombo3[5];
        $G3 = $bombo3[6];
        $H3 = $bombo3[7];

        //Sortear bombo 4
        $bombo4 = array($pais25,$pais26,$pais27,$pais28,$pais29,$pais30,$pais31,$pais32);
        shuffle($bombo4);
        
        $ele25 = $bombo4[0];
        $ele26 = $bombo4[1];
        $ele27 = $bombo4[2];
        $ele28 = $bombo4[3];
        $ele29 = $bombo4[4];
        $ele30 = $bombo4[5];
        $ele31 = $bombo4[6];
        $ele32 = $bombo4[7];

        do {
            shuffle($bombo4);
            $ele25 = $bombo4[0];
            $ele26 = $bombo4[1];
            $ele27 = $bombo4[2];
            $ele28 = $bombo4[3];
            $ele29 = $bombo4[4];
            $ele30 = $bombo4[5];
            $ele31 = $bombo4[6];
            $ele32 = $bombo4[7];
            } while (
            ((($A2 == 'España' || $A2 == 'Inglaterra' || $A2 == 'Suiza' || $A2 == 'Croacia') || ($A3 == 'Suecia' || $A3 == 'Islandia' || $A3 == 'Dinamarca')) and ($ele25 == 'Serbia')) ||
            (($A3 == 'Iran') and ($ele25 == 'Arabia Saudita' || $ele25 == 'Corea del Sur' || $ele25 == 'Japon' || $ele25 == 'Australia')) ||
            (($A2 == 'Mexico' || $A3 == 'Costa Rica') and ($ele25 == 'Panama')) ||
            (($A3 == 'Tunez' || $A3 == 'Egipto' || $A3 == 'Senegal') and ($ele25 == 'Marruecos' || $ele25 == 'Nigeria' )) ||
            (($B1 == 'Alemania' || $B1 == 'Portugal' || $B1 == 'Belgica' || $B1 == 'Polonia' || $B1 == 'Francia') and (($B2 == 'España' || $B2 == 'Inglaterra' || $B2 == 'Suiza' || $B2 == 'Croacia') || ($B3 == 'Suecia' || $B3 == 'Islandia' || $B3 == 'Dinamarca')) and ($ele26 == 'Serbia')) ||
            (($B3 == 'Iran') and ($ele26 == 'Arabia Saudita' || $ele26 == 'Corea del Sur' || $ele26 == 'Japon' || $ele26 == 'Australia')) ||
            (($B2 == 'Mexico' || $B3 == 'Costa Rica') and ($ele26 == 'Panama')) ||
            (($B3 == 'Tunez' || $B3 == 'Egipto' || $B3 == 'Senegal') and ($ele26 == 'Marruecos' || $ele26 == 'Nigeria' )) ||
            (($C1 == 'Alemania' || $C1 == 'Portugal' || $C1 == 'Belgica' || $C1 == 'Polonia' || $C1 == 'Francia') and (($C2 == 'España' || $C2 == 'Inglaterra' || $C2 == 'Suiza' || $C2 == 'Croacia') || ($C3 == 'Suecia' || $C3 == 'Islandia' || $C3 == 'Dinamarca')) and ($ele27 == 'Serbia')) ||
            (($C3 == 'Iran') and ($ele27 == 'Arabia Saudita' || $ele27 == 'Corea del Sur' || $ele27 == 'Japon' || $ele27 == 'Australia')) ||
            (($C2 == 'Mexico' || $C3 == 'Costa Rica') and ($ele27 == 'Panama')) ||
            (($C3 == 'Tunez' || $C3 == 'Egipto' || $C3 == 'Senegal') and ($ele27 == 'Marruecos' || $ele27 == 'Nigeria' )) ||
            (($D1 == 'Alemania' || $D1 == 'Portugal' || $D1 == 'Belgica' || $D1 == 'Polonia' || $D1 == 'Francia') and (($D2 == 'España' || $D2 == 'Inglaterra' || $D2 == 'Suiza' || $D2 == 'Croacia') || ($D3 == 'Suecia' || $D3 == 'Islandia' || $D3 == 'Dinamarca')) and ($ele28 == 'Serbia')) ||
            (($D3 == 'Iran') and ($ele28 == 'Arabia Saudita' || $ele28 == 'Corea del Sur' || $ele28 == 'Japon' || $ele28 == 'Australia')) ||
            (($D2 == 'Mexico' || $D3 == 'Costa Rica') and ($ele28 == 'Panama')) ||
            (($D3 == 'Tunez' || $D3 == 'Egipto' || $D3 == 'Senegal') and ($ele28 == 'Marruecos' || $ele28 == 'Nigeria' )) ||
            (($E1 == 'Alemania' || $E1 == 'Portugal' || $E1 == 'Belgica' || $E1 == 'Polonia' || $E1 == 'Francia') and (($E2 == 'España' || $E2 == 'Inglaterra' || $E2 == 'Suiza' || $E2 == 'Croacia') || ($E3 == 'Suecia' || $E3 == 'Islandia' || $E3 == 'Dinamarca')) and ($ele29 == 'Serbia')) ||
            (($E3 == 'Iran') and ($ele29 == 'Arabia Saudita' || $ele29 == 'Corea del Sur' || $ele29 == 'Japon' || $ele29 == 'Australia')) ||
            (($E2 == 'Mexico' || $E3 == 'Costa Rica') and ($ele29 == 'Panama')) ||
            (($E3 == 'Tunez' || $E3 == 'Egipto' || $E3 == 'Senegal') and ($ele29 == 'Marruecos' || $ele29 == 'Nigeria' )) ||
            (($F1 == 'Alemania' || $F1 == 'Portugal' || $F1 == 'Belgica' || $F1 == 'Polonia' || $F1 == 'Francia') and (($F2 == 'España' || $F2 == 'Inglaterra' || $F2 == 'Suiza' || $F2 == 'Croacia') || ($F3 == 'Suecia' || $F3 == 'Islandia' || $F3 == 'Dinamarca')) and ($ele30 == 'Serbia')) ||
            (($F3 == 'Iran') and ($ele30 == 'Arabia Saudita' || $ele30 == 'Corea del Sur' || $ele30 == 'Japon' || $ele30 == 'Australia')) ||
            (($F2 == 'Mexico' || $F3 == 'Costa Rica') and ($ele30 == 'Panama')) ||
            (($F3 == 'Tunez' || $F3 == 'Egipto' || $F3 == 'Senegal') and ($ele30 == 'Marruecos' || $ele30 == 'Nigeria' )) ||
            (($G1 == 'Alemania' || $G1 == 'Portugal' || $G1 == 'Belgica' || $G1 == 'Polonia' || $G1 == 'Francia') and (($G2 == 'España' || $G2 == 'Inglaterra' || $G2 == 'Suiza' || $G2 == 'Croacia') || ($G3 == 'Suecia' || $G3 == 'Islandia' || $G3 == 'Dinamarca')) and ($ele31 == 'Serbia')) ||
            (($G3 == 'Iran') and ($ele31 == 'Arabia Saudita' || $ele31 == 'Corea del Sur' || $ele31 == 'Japon' || $ele31 == 'Australia')) ||
            (($G2 == 'Mexico' || $G3 == 'Costa Rica') and ($ele31 == 'Panama')) ||
            (($G3 == 'Tunez' || $G3 == 'Egipto' || $G3 == 'Senegal') and ($ele31 == 'Marruecos' || $ele31 == 'Nigeria' )) ||
            (($H1 == 'Alemania' || $H1 == 'Portugal' || $H1 == 'Belgica' || $H1 == 'Polonia' || $H1 == 'Francia') and (($H2 == 'España' || $H2 == 'Inglaterra' || $H2 == 'Suiza' || $H2 == 'Croacia') || ($H3 == 'Suecia' || $H3 == 'Islandia' || $H3 == 'Dinamarca')) and ($ele32 == 'Serbia')) ||
            (($H3 == 'Iran') and ($ele32 == 'Arabia Saudita' || $ele32 == 'Corea del Sur' || $ele32 == 'Japon' || $ele32 == 'Australia')) ||
            (($H2 == 'Mexico' || $H3 == 'Costa Rica') and ($ele32 == 'Panama')) ||
            (($H3 == 'Tunez' || $H3 == 'Egipto' || $H3 == 'Senegal') and ($ele32 == 'Marruecos' || $ele32 == 'Nigeria' ))
            );

        $A4 = $bombo4[0];
        $B4 = $bombo4[1];
        $C4 = $bombo4[2];
        $D4 = $bombo4[3];
        $E4 = $bombo4[4];
        $F4 = $bombo4[5];
        $G4 = $bombo4[6];
        $H4 = $bombo4[7];

        echo '
            <table style="border-collapse: collapse; width: 100%;">
            <thead>
            <tr>
            <th style="width: 25%;">grupo A</th>
            <th style="width: 25%;">grupo B</th>
            <th style="width: 25%;">grupo C</th>
            <th style="width: 25%;">grupo D</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td style="width: 25%;">', $A1,'</td>
            <td style="width: 25%;">', $B1,'</td>
            <td style="width: 25%;">', $C1,'</td>
            <td style="width: 25%;">', $D1,'</td>
            </tr>
            <tr>
            <td style="width: 25%;">', $A2,'</td>
            <td style="width: 25%;">', $B2,'</td>
            <td style="width: 25%;">', $C2,'</td>
            <td style="width: 25%;">', $D2,'</td>
            </tr>
            <tr>
            <td style="width: 25%;">', $A3,'</td>
            <td style="width: 25%;">', $B3,'</td>
            <td style="width: 25%;">', $C3,'</td>
            <td style="width: 25%;">', $D3,'</td>
            </tr>
            <tr>
            <td style="width: 25%;">', $A4,'</td>
            <td style="width: 25%;">', $B4,'</td>
            <td style="width: 25%;">', $C4,'</td>
            <td style="width: 25%;">', $D4,'</td>
            </tr>
            </tbody>
            </table>
            <table style="border-collapse: collapse; width: 100%;">
            <thead>
            <tr>
            <th style="width: 25%;">grupo E</th>
            <th style="width: 25%;">grupo F</th>
            <th style="width: 25%;">grupo G</th>
            <th style="width: 25%;">grupo H</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td style="width: 25%;">', $E1,'</td>
            <td style="width: 25%;">', $F1,'</td>
            <td style="width: 25%;">', $G1,'</td>
            <td style="width: 25%;">', $H1,'</td>
            </tr>
            <tr>
            <td style="width: 25%;">', $E2,'</td>
            <td style="width: 25%;">', $F2,'</td>
            <td style="width: 25%;">', $G2,'</td>
            <td style="width: 25%;">', $H2,'</td>
            </tr>
            <tr>
            <td style="width: 25%;">', $E3,'</td>
            <td style="width: 25%;">', $F3,'</td>
            <td style="width: 25%;">', $G3,'</td>
            <td style="width: 25%;">', $H3,'</td>
            </tr>
            <tr>
            <td style="width: 25%;">', $E4,'</td>
            <td style="width: 25%;">', $F4,'</td>
            <td style="width: 25%;">', $G4,'</td>
            <td style="width: 25%;">', $H4,'</td>
            </tr>
            </tbody>
            </table>
        ';
    }

    else{
        echo '<p style="text-align: justify;"> Texto antes de hacer click en el botón </p>';
    }
?>

<form action="" method="post">
    <p style="text-align: center;"><input name="sorteo" type="submit" value="Sortear Fase de Grupos" /></p>
</form>

<?php
    if($_POST["sorteo"]){
        echo '<p style="text-align: justify;"> Texto después de hacer click en el botón </p>';
    }
?>
