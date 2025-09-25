<?php 
        echo '<h2>Задание 3</h2>';
        echo '<table border = "1">';
        echo "<br>";
        for($i = 1  ; $i<=10 ; $i++){
                echo 'tr';
            for($j = 1  ; $j<=9 ; $j++){
            $n = $i * $j;
            echo "<td style = 'width: 20px; height: px;'>", $n, "</td>";
        }
        echo '</tr>';
    }
    echo '</table>'
    ?> 

<?php
    echo '<h2>Задание 4</h2>';
    echo '<table border="1">';
    echo '<tr>';
    for ($i = 10; $i<=99; $i++) {
        echo "<td>". ($i**2). "</td>";
        if ( $i % 10 == 9){
            echo  '</tr>';
    }
}
    echo '</tr>';
echo '</table>';
?>

<?php
    echo '<h2>Задание 5</h2>';
?>


