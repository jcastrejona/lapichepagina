<?php
    foreach($usuarios as $row):
        echo "Nombre: ".$row['Nombre']."<br>Correo: ".$row['Correo']." <br>Experto En: ".$row['Experto']."<br>";
        echo"Fecha De Ingreso: ".date('d-m-Y H:i:s', $row['Ingreso'])."<br>";?>
        <img src="http://ctintelmex.com/<?=$row['Foto']?>">
        <?echo"<br><hr>";
    endforeach;
?>
