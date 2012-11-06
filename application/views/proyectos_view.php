<?php
    foreach($proyectos as $row):
        echo "Nombre: ".$row['Titulo']."<br>Resumen: ".$row['Cuerpo']."<br>";
        echo"Fecha: ".date('d-m-Y H:i:s', $row['Fecha'])."<br>";?>
        <img src="http://ctintelmex.com/<?=$row['Ruta_logo']?>">
        <?echo"<br><hr>";
    endforeach;
?>
