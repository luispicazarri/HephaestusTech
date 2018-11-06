<?php

/*if($conn->ping()){
    echo "Conectado";
}
else{
    echo "No!";
}*/

if(isset($_POST['agregar-admin']))
{
   
   // die(json_encode($_POST));
    $usuario=$_POST['usuario'];
   $nombre=$_POST['nombre'];
   $password=$_POST['password'];
    
    $opciones = array(
    'cost'=>12
    );
    
   $password_hashed=password_hash($password,PASSWORD_BCRYPT,$opciones);
    
   try{
       include_once 'funciones/funciones.php';
       $stmt = $conn->prepare("INSERT INTO mydb.admins (usuario,nombre,password) VALUES(?, ?, ?)");
       $stmt->bind_param("sss",$usuario, $nombre, $password_hashed);
       $stmt->execute();
       if($stmt->affected_rows){
           $respuesta=array(
           'respuesta'=>'exito',
            'id_admin'=>$stmt
           );
           
       }else
       {
           $respuesta=array(
           'respuesta'=>'error'); 
       }
       $stmt->close();
       $conn->close();
   }catch(Exception $e){
       echo "Error: " . $e->getMessage();
   }
    //die(json_encode($respuesta));  
    header('Content-type: application/json');
    echo json_encode($respuesta);
}

?>
