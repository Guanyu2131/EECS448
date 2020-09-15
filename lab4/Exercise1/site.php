<?php
//Inside myfirstprogram.php
$numberA = 100;
$numberB = 100;

function mul($a, $b) {
    $c = $a * $b;
    return $c;
}

echo "<table border=\"1\">";

for( $x=1; $x <=$numberA; $x++){
    echo '<tr>';
    for( $y=1; $y <=$numberB; $y++){
        echo('<td>'.mul($x,$y).'</td>');
    }
    echo '</tr>';
}

echo"</table>";

?>