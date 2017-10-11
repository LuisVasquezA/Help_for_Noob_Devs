<?php
session_start();
if(isset($_POST['usuario']) and isset($_POST['password'])){
        include ('conexion.php');
        $nombredesuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
        $password= mysqli_real_escape_string($conexion, $_POST['password']);
        $comprobacion_del_nombre= 'select * from registro WHERE nombre="'.$nombredesuario.'"';
        $comprobacion=$conexion->query($comprobacion_del_nombre);
        if ($comprobacion->num_rows>0){
            $consulta_a_la_base=mysqli_query($conexion, 'select passwor from registro where nombre="'.$nombredesuario.'"');
            $recoger_dato= mysqli_fetch_assoc($consulta_a_la_base);
            $comprobar_password = password_verify($password, $pass['passwor']);
            if ($comprobar_password){
                $_SESSION['nombre']=$nombredesuario;
            }else {
                print 'Los datos han sidos incorrectos<br>
                <a href="./">Volver</a> ';
            }
            }else  {
                print 'Los datos han sido incorrectos<br>
                <a href="./">Volver</a> ';

        }
} else{
    header('location: ./');
}


