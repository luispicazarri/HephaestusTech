<?php
include_once 'funciones/funciones.php';
if($_POST['registro'] == 'nuevo')
{
     $nombre = $_POST['nombre_producto'];
     $descripcion = $_POST['descripcion_producto'];
     $precio = $_POST['precio_producto'];
    
    try{
    $stmt = $conn->prepare("INSERT INTO products (nombre_producto,descripcion_producto,precio_producto) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $descripcion, $precio);
    $stmt->execute();
    $id_insertado = $stmt->insert_id;
    if($stmt->affected_rows){
        $respuesta = array(
        'respuesta' => 'exito',
        'id_insertado' => $id_insertado
        );
    } else{
        $respuesta = array(
        'respuesta' => 'error'
        
        );
    }
    $stmt->close();
    $conn->close();
    } catch(Exception $e){
        $respuesta = array(
        'respuesta' => $e->getMessage()
        
        );
    }
    
    header('Content-type: application/json');
    echo json_encode($respuesta); 
    
}

if($_POST['registro'] == 'actualizar')
{   
    $nombre = $_POST['nombre_producto'];
    $descripcion = $_POST['descripcion_producto'];
    $precio = $_POST['precio_producto'];
    $id_registro = $_POST['id_registro'];
    try{
        $stmt = $conn->prepare("UPDATE products SET nombre_producto = ?, descripcion_producto = ?, precio_producto = ?, editado = NOW() WHERE producto_id = ?");
        $stmt->bind_param("ssi", $nombre, $descripcion, $precio); 
        
       $stmt->execute();
       if($stmt->affected_rows){
           $respuesta = array(
             'respuesta' => 'exito',
             'id_actualizado' =>$id_registro
           );
       } else {
           $respuesta = array(
             'respuesta' => 'error'
           );
       }
        $stmt->close();
        $conn->close();
   }catch(Exception $e){ 
       $respuesta = array(
             'respuesta' => $e->getMessage()
           );
   }
    //die(json_encode($respuesta));
    header('Content-type: application/json');
    echo json_encode($respuesta);

}


if($_POST['registro'] == 'eliminar')
{   
    $id_borrar = $_POST['id'];
    
    try{
        $stmt = $conn->prepare('DELETE FROM products WHERE producto_id = ?');
        $stmt->bind_param('i', $id_borrar);
        $stmt->execute();
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta' => 'exito',
                'id_eliminado' => $id_borrar
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error',
            );
        }
    }catch(Exception $e){
        $respuesta = array(
        'respuesta' => $e->getMessage()
        );
    }
    die(json_encode($respuesta));
}

?>
