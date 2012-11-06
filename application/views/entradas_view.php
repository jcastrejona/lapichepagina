<?php

foreach ($entradas as $row):
    if ($row['Estado'] == 2):
        echo "Título: " . $row['Titulo'];
        $this->load->model('entradas_model');
        $autor= $this->entradas_model->gauthor($row['Autor']);
        echo"Fecha: " . date('d-m-Y H:i:s', $row['Fecha']) . "<br>";
        echo "Autor: ".$autor['auser']." ~ ".$autor['aname'];
        echo "<br>Cuerpo: " . $row['Cuerpo'] . "<br>";
        ?>

        <?

        echo"<br><hr>";
    endif;
endforeach;
?>
