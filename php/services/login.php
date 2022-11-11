<?php
    include('../conexion.php');
    $response = array();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['ci']) && $_POST['ci'] != '' && $_POST['ci'] != null){
            $ci = $_POST['ci'];
            $query = "SELECT * FROM usuarios WHERE ci = ".$ci.";";
            $result = mysqli_query($conexion,$query)or die(mysqli_error());
            $num_row = mysqli_num_rows($result);
            $row = mysqli_fetch_array($result);
            if( $num_row >= 1 ) {
                $response = array('status'=>true,'message'=>'Ci válido','data'=>$row,'code'=>0);
            }
            else{
                $response = array('status'=>false,'message'=>'El ci proporcionado no se encuentra registrado','code'=>1);
            }
        }else{
            $response = array('status'=>false,'message'=>'Parametro ci requerido','code'=>2);
        }
    }else{
        $response = array('status'=>false,'message'=>"La solicitud no es de tipo POST",'code'=>500);
    }
    echo json_encode($response);
?>