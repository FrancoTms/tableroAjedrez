<?php
        require_once('php/encabezado.php');
        require_once('php/piezas.php');
        $tablero = [[]];
        for ($i = 0; $i < 8; $i++) {
            for ($j = 0; $j < 8; $j++) {
                $posicion = array_rand($piezas_tab);
                $pieza = $piezas_tab[$posicion];
                unset($piezas_tab[$posicion]);
                $tablero[$i][$j] = $pieza;
                }
        }                              
    
?>
<main >
    <section class="mt-5 d-flex justify-content-center">
        <table class="border border-dark">
            <?php
                for ($i = 0; $i < 8; $i++) {
                    echo '<tr>';
                    for ($j = 0; $j < 8; $j++) {
                        if (($i + $j) % 2 === 0) {
                            echo '<td class="bg-light p-3">';
                            if ($tablero[$i][$j] === 'vacio') {
                                echo '<img src="./img/vacio_b.jpg">';
                                } else {
                                    echo '<img src="./img/' . $tablero[$i][$j] . '.jpg">';
                                }
                                echo '</td>';
                        } else {
                                echo '<td class="bg-dark p-3">';
                                if ($tablero[$i][$j] === 'vacio') {
                                    echo '<img src="./img/vacio_n.jpg">';
                                } else {
                                    echo '<img src="./img/' . $tablero[$i][$j] . '.jpg">';
                                }
                                echo '</td>';
                            }
                    }
                        echo '</tr>';
                }
            ?>
        </table>
    </section>
</main>

<?php
    require_once('php/pie.php');
?>