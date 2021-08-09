<table class="centpercent"> 
<?php
include("conexionSeguimiento.php");
$id_cliente = $_GET['id_cliente'];
$Consulta = "SELECT * FROM clientes WHERE id_cliente = $id_cliente";
$consultaContactos = "SELECT * FROM contactos WHERE id_cliente = $id_cliente";
if ($resultado = $mysqli->query($Consulta)) {
    /* obtener el array de objetos */
    while ($fila = $resultado->fetch_row()) {
        echo "<tr><td colspan='6'><br></td></tr>
              <tr>
                <td><span class='fas fa-building paddingright' style='color: #37a;'></span></td><td style='font-weight: bold;color: #37a;'> Razon Social : </td><td>" . $fila[1] . "</td>
                <td><span class='fas fa-address-book paddingright' style='color: #37a;'></span></td><td style='font-weight: bold;color: #37a;'> RFC :  </td><td>" . $fila[2]. "</td>
              </tr>
              <tr><td colspan='6'><br></td></tr>
              <tr>
                <td colspan='6'>
                    <hr color='#095c8d' size=2> 
                </td>
              </tr>
              <tr>
                <td colspan='6' style='text-align: center; background-color: #37a;'>
                <H1 style='color:white;'>LISTADO DE CONTACTOS</H1>
                </td>
              </tr>
              <tr>
                <td colspan='6'>
                    <hr color='#095c8d' size=2> 
                </td>
              </tr>
              ";
    } 
}

if ($resultadoContactos = $mysqli->query($consultaContactos)){
    while($fila = $resultadoContactos->fetch_row()){
        echo "
              <tr>
                <td><span class='' style='color: #37a'></td>
                <td style='font-weight: bold; color: #37a'>Contacto : </td>
                <td>". utf8_decode($fila[3]). " " . utf8_decode($fila[2]) ."</td>              
                <td><span class='' style='color: #37a'></td>
                <td style='font-weight: bold; color: #37a'>Puesto de Trabajo : </td>
                <td>".$fila[4]."</td>
              </tr>
              <tr>
                <td><span class='fas fa-phone' style='color: #37a'></td>
                <td style='font-weight: bold; color: #37a'>Télefono : </td>
                <td>" . $fila[9] . "</td>              
                <td><span class='fas fa-mobile-alt' style='color: #37a'></td>
                <td style='font-weight: bold; color: #37a'>Celular : </td>
                <td>" . $fila[10] . "</td>
              </tr>
              <tr>
                <td><span class='fas fa-envelope' style='color: #37a'></td>
                <td style='font-weight: bold; color: #37a'>Email : </td>
                <td>" . $fila[11] . "</td>                              
              </tr>
              <tr>
                <td colspan='6'>
                    <hr color='#095c8d' size=1> 
                </td>
              </tr>
              <tr><td colspan='6'><br></td></tr>
        ";
    }
}
$mysqli->close();
?>

</table>