<?php
 class Usuario{
    private $Usuarios;
    private $Db;

    public function __construct(){
        $this->Usuarios=array();
        $this->Db= new PDO('mysql:host=localhost;dbname=registroseoane1','root','');
    }

    public function fechaHoy(){
        date_default_timezone_set("America/Lima");
        return date("Y/m/d");
    }
    public function getUsuarios(){
        $sql="SELECT * FROM usuario ";
        foreach ($this->Db->query($sql) as $res) {
                $this->Usuarios[]=$res;
        }
        return $this->Usuarios;
    }
    public function getUsuarioId($id){
        $sql="SELECT * FROM usuario WHERE  `id`='$id' ";
        foreach ($this->Db->query($sql) as $res) {
                $this->Usuarios[]=$res;
        }
        return $this->Usuarios;
    }

    public function setUsuarios($nom,$ape,$dni,$correo,$cel,$tipo,$monto,$ope,$comentario,$fecha){
       //BUSCAR QUE NO SE REPITA EL dni
       $busqueda= new Usuario();
       $user= $busqueda->getUsuarios();
       $cont=0;
               for ($i=0; $i <count($user) ; $i++) { 
                    if($dni==$user[$i]['dni']){
                        echo "<script> alert('El dni ya se encuentra registrado'); </script>";
                        return ;
                    }else{
                            //SI NO ENCONTRO QUE AUMENTE EL CONTADOR.
                            

                        $cont++;
                    }
                }
                
                
                $nombreimg = $_FILES['foto']['name'];
                $archivo = $_FILES['foto']['tmp_name'];
                $ruta = "fotos";
                $Fecha = new DateTime();
                $nombrearchivo = ($nombreimg != "") ? $Fecha->getTimestamp() ."_" . $_FILES['foto']['name']: "imagen.jpg";
                $tmpFoto =$_FILES["foto"]["tmp_name"];

                if($tmpFoto!=""){
                    move_uploaded_file($tmpFoto,"fotos/".$nombrearchivo);
                  }
                  move_uploaded_file($archivo, $ruta);

               // SI NO SE REPETIO EL DNI, EJECUTAR SQL DE REGISTRO
       $sql="INSERT INTO `usuario`(`nombre`, `apellido`, `dni`, `correo`, `celular`, `monto`, `tipoparticipante`, `operacion`, `comentario`,`fecha`, `archivo`)
       VALUES ('$nom','$ape','$dni','$correo','$cel','$monto','$tipo','$ope','$comentario','".$fecha."','../fotos/$nombrearchivo')";
       if($cont>0){
               $resul=$this->Db->query($sql);
               if($resul){
                       echo '<script> alert("Usuario Registrado, Exitosamente"); </script>';
                       return true;
               }
               else{
                       return false;
               }
       } 

       
    }

    public function verificarUsuario($dni){

        //BUSCAR QUE NO SE REPITA EL NOMBRE
       $busqueda= new Usuario();
       $user= $busqueda->getUsuarios();
       $cont=0;
               for ($i=0; $i <count($user) ; $i++) { 
                if($dni==$user[$i]['dni']){
                       echo "<script> alert('El dni ya se encuentra registrado'); </script>";
                       return ;
                }else{
                       echo "<script> alert('El dni esta habilitado para registrarse');</script>";
                       return;  
                }
               }
        
    }

    public function editusuario($id,$nombre,$apellido,$dni,$correo,$celular,$monto,$tipop,$operacion){
        $sql="UPDATE `usuario` SET `nombre`='$nombre',`apellido`='$apellido',`dni`='$dni',`correo`='$correo',`celular`='$celular',`monto`='$monto',`tipoparticipante`='$tipop',`operacion`='$operacion' WHERE `id`='$id'";
        $resul=$this->Db->query($sql);
                if($resul){
                        echo '<script> alert("Usuario Actualizado"); </script>';
                        return true;
                }
                else{
                        echo '<script> alert("No se pudo actualizar el Usuario"); </script>';
                        return false;
                }
    
    }

    public function delusuario($id){
        $sql="DELETE FROM `usuario` WHERE `id`='$id'";        
        $resul=$this->Db->query($sql);
        if($resul){
                echo '<script> alert("Usuario Eliminado"); </script>';
                return true;
        }
        else{
                echo '<script> alert("No se pudo Eliminar el usuario"); </script>';
                return false;
        }

    }

    public function sendmail($nom,$ape,$correo){
        //enviar correo de verificación
        
        $name=$nom.", ".$ape;
        $asunto="Confirmación a simulacro Seoane";
        $mensaje="El IESTP 'MANUEL SEOANE CORRALES' le agradece a $name su participación al simulacro virtual que se dara este sábado. mediante la url:...";
        $email=$correo;
        $header="From: a.andresrojas@seoane.edu.pe"."\r\n";
        $header.="Reply-To: a.andresrojas@seoane.edu.pe"."\r\n";
        $header.="X-mailer: PHP/". phpversion();
        $mail= @mail($email,$asunto,$mensaje,$header);
        

    }

}

 

?>