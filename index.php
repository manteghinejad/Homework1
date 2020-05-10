<?php
    $x=1;
    $y=1;
    $z=1;;
?>

<html>
    <head>
        <link href="main.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>*</th>
                    <?php
                    while ($x<=10){
                        echo "<th>$x</th>";
                        $x++;
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
            <?php
                    while ($y<=10){
                        echo "<tr>";
                        echo "<td class='firstcolumn'>$y</td>";
                        while ($z<=10) {
                            $d=$y*$z;
                            echo "<td>$d</td>";
                            $z++;
                        } ;
                        $y++;
                        echo "</tr>";
                        $z=1;

                    }
            ?>
            </tbody>

        </table>

    </body>
</html>

