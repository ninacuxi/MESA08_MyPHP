<table border="1" width="100%">
    <?php
        for($k=0;$k<2;$k++){
            echo'<tr>';
            for($j=2;$j<=5;$j++){
                $newj = $j + 4 * $k;
                switch ($newj){
                    case 2:
                    case 4:
                    case 7:
                    case 9:
                        echo'<td bgcolor="yellow">';
                        break;
                    case 3:
                    case 5:
                    case 6:
                    case 8:
                        echo'<td bgcolor="orange">';
                        break;
                }

                for ($i=1;$i<=9;$i++){
                    $r = $newj * $i;
                    echo "{$newj} x {$i} = {$r}<br>";
                }
            echo'</td>';

            }
            echo'</tr>';
        }
    ?>
</table>