<?php

    //Set pots
    
    $team1 = 'Russia';
    $team2 = 'Germany';
    $team3 = 'Brazil';
    $team4 = 'Portugal';
    $team5 = 'Argentina';
    $team6 = 'Belgium';
    $team7 = 'Poland';
    $team8 = 'France';
    
    $team9 = 'Spain';
    $team10 = 'Peru';
    $team11 = 'Switzerland';
    $team12 = 'England';
    $team13 = 'Colombia';
    $team14 = 'Mexico';
    $team15 = 'Uruguay';
    $team16 = 'Croatia';
    
    $team17 = 'Denmark';
    $team18 = 'Iceland';
    $team19 = 'Costa Rica';
    $team20 = 'Sweden';
    $team21 = 'Tunisia';
    $team22 = 'Egypt';
    $team23 = 'Senegal';
    $team24 = 'Iran';
    
    $team25 = 'Serbia';
    $team26 = 'Nigeria';
    $team27 = 'Australia';
    $team28 = 'Japan';
    $team29 = 'Panama';
    $team30 = 'Morocco';
    $team31 = 'South Korea';
    $team32 = 'Saudi Arabia';
    
    //Set groups
    
    $A1 = '0'; $A2 = '0'; $A3 = '0'; $A4 = '0';
    $B1 = '0'; $B2 = '0'; $B3 = '0'; $B4 = '0';
    $C1 = '0'; $C2 = '0'; $C3 = '0'; $C4 = '0';
    $D1 = '0'; $D2 = '0'; $D3 = '0'; $D4 = '0';
    $E1 = '0'; $E2 = '0'; $E3 = '0'; $E4 = '0';
    $F1 = '0'; $F2 = '0'; $F3 = '0'; $F4 = '0';
    $G1 = '0'; $G2 = '0'; $G3 = '0'; $G4 = '0';
    $H1 = '0'; $H2 = '0'; $H3 = '0'; $H4 = '0';
    
    $groupA = array($A1,$A2,$A3,$A4);
    $groupB = array($B1,$B2,$B3,$B4);
    $groupC = array($C1,$C2,$C3,$C4);
    $groupD = array($D1,$D2,$D3,$D4);
    $groupE = array($E1,$E2,$E3,$E4);
    $groupF = array($F1,$F2,$F3,$F4);
    $groupG = array($G1,$G2,$G3,$G4);
    $groupH = array($H1,$H2,$H3,$H4);

?>

<?php
    if($_POST["draw"]){

        //Draw pot 1
        $pot1 = array($team1,$team2,$team3,$team4,$team5,$team6,$team7,$team8);
        $A1 = $groupA[0] = array_shift($pot1);
        shuffle($pot1);
        $B1 = $groupB[0] = array_shift($pot1);
        shuffle($pot1);
        $C1 = $groupC[0] = array_shift($pot1);
        shuffle($pot1);
        $D1 = $groupD[0] = array_shift($pot1);
        shuffle($pot1);
        $E1 = $groupE[0] = array_shift($pot1);
        shuffle($pot1);
        $F1 = $groupF[0] = array_shift($pot1);
        shuffle($pot1);
        $G1 = $groupG[0] = array_shift($pot1);
        shuffle($pot1);
        $H1 = $groupH[0] = array_shift($pot1);

        //Draw pot 2
        $pot2 = array($team9,$team10,$team11,$team12,$team13,$team14,$team15,$team16);
        shuffle($pot2);
        
        $ele9 = $pot2[0];
        $ele10 = $pot2[1];
        $ele11 = $pot2[2];
        $ele12 = $pot2[3];
        $ele13 = $pot2[4];
        $ele14 = $pot2[5];
        $ele15 = $pot2[6];
        $ele16 = $pot2[7];

        do {
            shuffle($pot2);
            $ele9 = $pot2[0];
            $ele10 = $pot2[1];
            $ele11 = $pot2[2];
            $ele12 = $pot2[3];
            $ele13 = $pot2[4];
            $ele14 = $pot2[5];
            $ele15 = $pot2[6];
            $ele16 = $pot2[7];
            } while (
            (($B1 == 'Brazil' || $B1 == 'Argentina') and ($ele10 == 'Peru' || $ele10 == 'Uruguay' || $ele10 == 'Colombia')) ||
            (($C1 == 'Brazil' || $C1 == 'Argentina') and ($ele11 == 'Peru' || $ele11 == 'Uruguay' || $ele11 == 'Colombia')) ||
            (($D1 == 'Brazil' || $D1 == 'Argentina') and ($ele12 == 'Peru' || $ele12 == 'Uruguay' || $ele12 == 'Colombia')) ||
            (($E1 == 'Brazil' || $E1 == 'Argentina') and ($ele13 == 'Peru' || $ele13 == 'Uruguay' || $ele13 == 'Colombia')) ||
            (($F1 == 'Brazil' || $F1 == 'Argentina') and ($ele14 == 'Peru' || $ele14 == 'Uruguay' || $ele14 == 'Colombia')) ||
            (($G1 == 'Brazil' || $G1 == 'Argentina') and ($ele15 == 'Peru' || $ele15 == 'Uruguay' || $ele15 == 'Colombia')) ||
            (($H1 == 'Brazil' || $H1 == 'Argentina') and ($ele16 == 'Peru' || $ele16 == 'Uruguay' || $ele16 == 'Colombia'))
            );

        $A2 = $pot2[0];
        $B2 = $pot2[1];
        $C2 = $pot2[2];
        $D2 = $pot2[3];
        $E2 = $pot2[4];
        $F2 = $pot2[5];
        $G2 = $pot2[6];
        $H2 = $pot2[7];

        //Draw pot 3
        $pot3 = array($team17,$team18,$team19,$team20,$team21,$team22,$team23,$team24);
        shuffle($pot3);
        
        $ele17 = $pot3[0];
        $ele18 = $pot3[1];
        $ele19 = $pot3[2];
        $ele20 = $pot3[3];
        $ele21 = $pot3[4];
        $ele22 = $pot3[5];
        $ele23 = $pot3[6];
        $ele24 = $pot3[7];

        do {
            shuffle($pot3);
            $ele17 = $pot3[0];
            $ele18 = $pot3[1];
            $ele19 = $pot3[2];
            $ele20 = $pot3[3];
            $ele21 = $pot3[4];
            $ele22 = $pot3[5];
            $ele23 = $pot3[6];
            $ele24 = $pot3[7];
            } while (
            (($A2 == 'Spain' || $A2 == 'England' || $A2 == 'Switzerland' || $A2 == 'Croatia') and ($ele17 == 'Sweden' || $ele17 == 'Iceland' || $ele17 == 'Denmark')) ||
            (($A2 == 'Mexico') and ($ele17 == 'Costa Rica')) ||
            (($B1 == 'Germany' || $B1 == 'Portugal' || $B1 == 'Belgium' || $B1 == 'Poland' || $B1 == 'France') and ($B2 == 'Spain' || $B2 == 'England' || $B2 == 'Switzerland' || $B2 == 'Croatia') and ($ele18 == 'Sweden' || $ele18 == 'Iceland' || $ele18 == 'Denmark')) ||
            (($B2 == 'Mexico') and ($ele18 == 'Costa Rica')) ||
            (($C1 == 'Germany' || $C1 == 'Portugal' || $C1 == 'Belgium' || $C1 == 'Poland' || $C1 == 'France') and ($C2 == 'Spain' || $C2 == 'England' || $C2 == 'Switzerland' || $C2 == 'Croatia') and ($ele19 == 'Sweden' || $ele19 == 'Iceland' || $ele19 == 'Denmark')) ||
            (($C2 == 'Mexico') and ($ele19 == 'Costa Rica')) ||
            (($D1 == 'Germany' || $D1 == 'Portugal' || $D1 == 'Belgium' || $D1 == 'Poland' || $D1 == 'France') and ($D2 == 'Spain' || $D2 == 'England' || $D2 == 'Switzerland' || $D2 == 'Croatia') and ($ele20 == 'Sweden' || $ele20 == 'Iceland' || $ele20 == 'Denmark')) ||
            (($D2 == 'Mexico') and ($ele20 == 'Costa Rica')) ||
            (($E1 == 'Germany' || $E1 == 'Portugal' || $E1 == 'Belgium' || $E1 == 'Poland' || $E1 == 'France') and ($E2 == 'Spain' || $E2 == 'England' || $E2 == 'Switzerland' || $E2 == 'Croatia') and ($ele21 == 'Sweden' || $ele21 == 'Iceland' || $ele21 == 'Denmark')) ||
            (($E2 == 'Mexico') and ($ele21 == 'Costa Rica')) ||
            (($F1 == 'Germany' || $F1 == 'Portugal' || $F1 == 'Belgium' || $F1 == 'Poland' || $F1 == 'France') and ($F2 == 'Spain' || $F2 == 'England' || $F2 == 'Switzerland' || $F2 == 'Croatia') and ($ele22 == 'Sweden' || $ele22 == 'Iceland' || $ele22 == 'Denmark')) ||
            (($F2 == 'Mexico') and ($ele22 == 'Costa Rica')) ||
            (($G1 == 'Germany' || $G1 == 'Portugal' || $G1 == 'Belgium' || $G1 == 'Poland' || $G1 == 'France') and ($G2 == 'Spain' || $G2 == 'England' || $G2 == 'Switzerland' || $G2 == 'Croatia') and ($ele23 == 'Sweden' || $ele23 == 'Iceland' || $ele23 == 'Denmark')) ||
            (($G2 == 'Mexico') and ($ele23 == 'Costa Rica')) ||
            (($H1 == 'Germany' || $H1 == 'Portugal' || $H1 == 'Belgium' || $H1 == 'Poland' || $H1 == 'France') and ($H2 == 'Spain' || $H2 == 'England' || $H2 == 'Switzerland' || $H2 == 'Croatia') and ($ele24 == 'Sweden' || $ele24 == 'Iceland' || $ele24 == 'Denmark')) ||
            (($H2 == 'Mexico') and ($ele24 == 'Costa Rica'))
            );

        $A3 = $pot3[0];
        $B3 = $pot3[1];
        $C3 = $pot3[2];
        $D3 = $pot3[3];
        $E3 = $pot3[4];
        $F3 = $pot3[5];
        $G3 = $pot3[6];
        $H3 = $pot3[7];

        //Draw pot 4
        $pot4 = array($team25,$team26,$team27,$team28,$team29,$team30,$team31,$team32);
        shuffle($pot4);
        
        $ele25 = $pot4[0];
        $ele26 = $pot4[1];
        $ele27 = $pot4[2];
        $ele28 = $pot4[3];
        $ele29 = $pot4[4];
        $ele30 = $pot4[5];
        $ele31 = $pot4[6];
        $ele32 = $pot4[7];

        do {
            shuffle($pot4);
            $ele25 = $pot4[0];
            $ele26 = $pot4[1];
            $ele27 = $pot4[2];
            $ele28 = $pot4[3];
            $ele29 = $pot4[4];
            $ele30 = $pot4[5];
            $ele31 = $pot4[6];
            $ele32 = $pot4[7];
            } while (
            ((($A2 == 'Spain' || $A2 == 'England' || $A2 == 'Switzerland' || $A2 == 'Croatia') || ($A3 == 'Sweden' || $A3 == 'Iceland' || $A3 == 'Denmark')) and ($ele25 == 'Serbia')) ||
            (($A3 == 'Iran') and ($ele25 == 'Saudi Arabia' || $ele25 == 'South Korea' || $ele25 == 'Japan' || $ele25 == 'Australia')) ||
            (($A2 == 'Mexico' || $A3 == 'Costa Rica') and ($ele25 == 'Panama')) ||
            (($A3 == 'Tunisia' || $A3 == 'Egypt' || $A3 == 'Senegal') and ($ele25 == 'Morocco' || $ele25 == 'Nigeria' )) ||
            (($B1 == 'Germany' || $B1 == 'Portugal' || $B1 == 'Belgium' || $B1 == 'Poland' || $B1 == 'France') and (($B2 == 'Spain' || $B2 == 'England' || $B2 == 'Switzerland' || $B2 == 'Croatia') || ($B3 == 'Sweden' || $B3 == 'Iceland' || $B3 == 'Denmark')) and ($ele26 == 'Serbia')) ||
            (($B3 == 'Iran') and ($ele26 == 'Saudi Arabia' || $ele26 == 'South Korea' || $ele26 == 'Japan' || $ele26 == 'Australia')) ||
            (($B2 == 'Mexico' || $B3 == 'Costa Rica') and ($ele26 == 'Panama')) ||
            (($B3 == 'Tunisia' || $B3 == 'Egypt' || $B3 == 'Senegal') and ($ele26 == 'Morocco' || $ele26 == 'Nigeria' )) ||
            (($C1 == 'Germany' || $C1 == 'Portugal' || $C1 == 'Belgium' || $C1 == 'Poland' || $C1 == 'France') and (($C2 == 'Spain' || $C2 == 'England' || $C2 == 'Switzerland' || $C2 == 'Croatia') || ($C3 == 'Sweden' || $C3 == 'Iceland' || $C3 == 'Denmark')) and ($ele27 == 'Serbia')) ||
            (($C3 == 'Iran') and ($ele27 == 'Saudi Arabia' || $ele27 == 'South Korea' || $ele27 == 'Japan' || $ele27 == 'Australia')) ||
            (($C2 == 'Mexico' || $C3 == 'Costa Rica') and ($ele27 == 'Panama')) ||
            (($C3 == 'Tunisia' || $C3 == 'Egypt' || $C3 == 'Senegal') and ($ele27 == 'Morocco' || $ele27 == 'Nigeria' )) ||
            (($D1 == 'Germany' || $D1 == 'Portugal' || $D1 == 'Belgium' || $D1 == 'Poland' || $D1 == 'France') and (($D2 == 'Spain' || $D2 == 'England' || $D2 == 'Switzerland' || $D2 == 'Croatia') || ($D3 == 'Sweden' || $D3 == 'Iceland' || $D3 == 'Denmark')) and ($ele28 == 'Serbia')) ||
            (($D3 == 'Iran') and ($ele28 == 'Saudi Arabia' || $ele28 == 'South Korea' || $ele28 == 'Japan' || $ele28 == 'Australia')) ||
            (($D2 == 'Mexico' || $D3 == 'Costa Rica') and ($ele28 == 'Panama')) ||
            (($D3 == 'Tunisia' || $D3 == 'Egypt' || $D3 == 'Senegal') and ($ele28 == 'Morocco' || $ele28 == 'Nigeria' )) ||
            (($E1 == 'Germany' || $E1 == 'Portugal' || $E1 == 'Belgium' || $E1 == 'Poland' || $E1 == 'France') and (($E2 == 'Spain' || $E2 == 'England' || $E2 == 'Switzerland' || $E2 == 'Croatia') || ($E3 == 'Sweden' || $E3 == 'Iceland' || $E3 == 'Denmark')) and ($ele29 == 'Serbia')) ||
            (($E3 == 'Iran') and ($ele29 == 'Saudi Arabia' || $ele29 == 'South Korea' || $ele29 == 'Japan' || $ele29 == 'Australia')) ||
            (($E2 == 'Mexico' || $E3 == 'Costa Rica') and ($ele29 == 'Panama')) ||
            (($E3 == 'Tunisia' || $E3 == 'Egypt' || $E3 == 'Senegal') and ($ele29 == 'Morocco' || $ele29 == 'Nigeria' )) ||
            (($F1 == 'Germany' || $F1 == 'Portugal' || $F1 == 'Belgium' || $F1 == 'Poland' || $F1 == 'France') and (($F2 == 'Spain' || $F2 == 'England' || $F2 == 'Switzerland' || $F2 == 'Croatia') || ($F3 == 'Sweden' || $F3 == 'Iceland' || $F3 == 'Denmark')) and ($ele30 == 'Serbia')) ||
            (($F3 == 'Iran') and ($ele30 == 'Saudi Arabia' || $ele30 == 'South Korea' || $ele30 == 'Japan' || $ele30 == 'Australia')) ||
            (($F2 == 'Mexico' || $F3 == 'Costa Rica') and ($ele30 == 'Panama')) ||
            (($F3 == 'Tunisia' || $F3 == 'Egypt' || $F3 == 'Senegal') and ($ele30 == 'Morocco' || $ele30 == 'Nigeria' )) ||
            (($G1 == 'Germany' || $G1 == 'Portugal' || $G1 == 'Belgium' || $G1 == 'Poland' || $G1 == 'France') and (($G2 == 'Spain' || $G2 == 'England' || $G2 == 'Switzerland' || $G2 == 'Croatia') || ($G3 == 'Sweden' || $G3 == 'Iceland' || $G3 == 'Denmark')) and ($ele31 == 'Serbia')) ||
            (($G3 == 'Iran') and ($ele31 == 'Saudi Arabia' || $ele31 == 'South Korea' || $ele31 == 'Japan' || $ele31 == 'Australia')) ||
            (($G2 == 'Mexico' || $G3 == 'Costa Rica') and ($ele31 == 'Panama')) ||
            (($G3 == 'Tunisia' || $G3 == 'Egypt' || $G3 == 'Senegal') and ($ele31 == 'Morocco' || $ele31 == 'Nigeria' )) ||
            (($H1 == 'Germany' || $H1 == 'Portugal' || $H1 == 'Belgium' || $H1 == 'Poland' || $H1 == 'France') and (($H2 == 'Spain' || $H2 == 'England' || $H2 == 'Switzerland' || $H2 == 'Croatia') || ($H3 == 'Sweden' || $H3 == 'Iceland' || $H3 == 'Denmark')) and ($ele32 == 'Serbia')) ||
            (($H3 == 'Iran') and ($ele32 == 'Saudi Arabia' || $ele32 == 'South Korea' || $ele32 == 'Japan' || $ele32 == 'Australia')) ||
            (($H2 == 'Mexico' || $H3 == 'Costa Rica') and ($ele32 == 'Panama')) ||
            (($H3 == 'Tunisia' || $H3 == 'Egypt' || $H3 == 'Senegal') and ($ele32 == 'Morocco' || $ele32 == 'Nigeria' ))
            );

        $A4 = $pot4[0];
        $B4 = $pot4[1];
        $C4 = $pot4[2];
        $D4 = $pot4[3];
        $E4 = $pot4[4];
        $F4 = $pot4[5];
        $G4 = $pot4[6];
        $H4 = $pot4[7];

        echo '
            <table style="border-collapse: collapse; width: 100%;">
            <thead>
            <tr>
            <th style="width: 25%;">GROUP A</th>
            <th style="width: 25%;">GROUP B</th>
            <th style="width: 25%;">GROUP C</th>
            <th style="width: 25%;">GROUP D</th>
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
            <th style="width: 25%;">GROUP E</th>
            <th style="width: 25%;">GROUP F</th>
            <th style="width: 25%;">GROUP G</th>
            <th style="width: 25%;">GROUP H</th>
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
        echo '<p style="text-align: justify;"> Text before clicking the button </p>';
    }
?>

<form action="" method="post">
    <p style="text-align: center;"><input name="draw" type="submit" value="Draw Group Stage" /></p>
</form>

<?php
    if($_POST["draw"]){
        echo '<p style="text-align: justify;"> Text after clicking the button </p>';
    }
?>
