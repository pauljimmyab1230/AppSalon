<?php

function obtenerServicios()
{

    try {

        //importar una conexion
        require 'database.php';

        //escribir el codigo sql
        $sql = 'SELECT * FROM clientes;';
        $consulta = mysqli_query($db, $sql);

        $cliente = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) {
            $cliente[$i]['id'] = $row['id'];
            $cliente[$i]['nombre']= $row['nombre'];
            $cliente[$i]['apellido'] = $row['apellido'];
            $cliente[$i]['telefono'] = $row['telefono'];
            $cliente[$i]['email'] = $row['email'];
            $i++;
        }
        // echo "<pre>";
        // var_dump(json_encode($cliente));
        // var_dump($cliente);
        // echo "</pre>";
        return $cliente;
        
    } catch (\Throwable $th) {
        var_dump($th);
    }
    // try {
    //     
    //     require 'includes/database.php';
    //     var_dump($db);

    //     
    //     $sql = "SELECT * FROM clientes";
    //     $consulta = mysqli_query($db, $sql);

    //     //obtener los resultados
    //     
    //     $i = 0;
    //     $servicios = [];
    //     while ($row = mysqli_fetch_assoc($consulta)) {
    //         $servicios[$i]['id'] = $row['id'];
    //         $servicios[$i]['nombre'] = $row['nombre'];
    //         $servicios[$i]['precio'] = $row['precio'];
    //         $i++;
    //     }

    //     return $servicios;
    // } catch (\Throwable $th) {
    //     //throw $th;

    //     var_dump($th);
    // }
}

obtenerServicios();
