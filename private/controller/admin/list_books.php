<?php
    $aut_nombre = isset($_POST["i_aut_nombre"]) ? mb_strtoupper(trim($_POST["i_aut_nombre"]), 'UTF-8') : null;
    $cap_nombre = isset($_POST["i_cap_titulo"]) ? mb_strtoupper(trim($_POST["i_cap_titulo"]), 'UTF-8') : null;
    $sqlPhones = "SELECT * FROM capitulos, libros, autores WHERE 
        (capitulos.lib_codigo = libros.lib_codigo) AND
        (capitulos.aut_codigo = autores.aut_codigo) AND 
        (autores.aut_nombre LIKE '$aut_nombre%' AND
        capitulos.cap_titulo LIKE '$cap_nombre%')";
    include '../../../config/conexionBD.php';
    $resultPh = $conn->query($sqlPhones);

    echo "<tr>
            <th>Titulo Libro</th>
            <th>N. Paginas</th>
            <th> IBSN</th>
            <th>Titulo Capitulo</th>
            <th>N. Capítulo</th>
            <th>Nombre del autor</th>
            <th>Nacionalidad</th>
        </tr>";

    if($aut_nombre == "" || $cap_nombre == ""){
        echo " <td colspan='7'>Ingrese los parámetros de Búsqueda.</td>";
    }else if($resultPh){
        if ($resultPh -> num_rows > 0) {

            while($rowPh = $resultPh -> fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $rowPh['lib_nombre']."</td>";
                echo "<td>" . $rowPh['lib_numero_paginas']."</td>";
                echo "<td>" . $rowPh['lib_ISBN']."</td>";
                echo "<td>" . $rowPh['cap_titulo']."</td>";
                echo "<td>" . $rowPh['cap_numero']."</td>";
                echo "<td>" . $rowPh['aut_nombre']."</td>";
                echo "<td>" . $rowPh['aut_nacionalidad']."</td>";
                echo "</tr>";
                
            }
        } else {
            echo "<tr>";
            echo " <td colspan='7'> No se encontraron libros registrados.</td>";
        }
    }else{
        echo " <tr><td colspan='7'>Error: " . mysqli_error($conn) . "</td></tr>";
        echo "</tr>";
    }
    
    $conn->close();
?>