<?php

foreach ($entradas as $row):
    if ($row['Estado']==2):
    echo "Título: " . $row['Titulo'];
    $this->db->where('Id_User', $row['Autor']);
    $query = $this->db->get('C2_Usuarios');
    $autor = $query->row();
    echo"Fecha: " . date('d-m-Y H:i:s', $row['Fecha']) . "<br>";
    echo "<br>Cuerpo: " . $row['Cuerpo'] . "<br>";
    ?>

    <?

    echo"<br><hr>";
    endif;
endforeach;
?>
