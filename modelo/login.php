<?php
class Login{
    private $Admin;
    private $Db;

    public function __construct(){
        $this->Admin=array();
        $this->Db= new PDO('mysql:host=localhost;dbname=registroseoane1','root','');
    }

    function loginAdmin($user,$pass){
        $sql="SELECT id_admin, usuario, `password`, nombre FROM administrador WHERE `usuario`='".$user."'";
                foreach ($this->Db->query($sql) as $result){
                        $this->Admin[]=$result;
                        if($this->Admin[0]['usuario']==$user){
                                
                                if($pass==$this->Admin[0]['password']){
                                        //GUARDAR DATOS
                                        session_start();
                                        $_SESSION['id_admin']=$this->Admin[0]['id_admin'];
                                        $_SESSION['usuario']=$user;
                                        $_SESSION['nombre']=$this->Admin[0]['nombre'];
                                    
                                        
                                        
                                                header('Location:vista/inicio.php');
                                                                        
                                        
                                }else{
                                        echo '<script> alert("La contraseña no coincide"); </script>';
                                }
                        }else {
                                echo '<script> alert("Admin no encontrado en la base de datos"); </script>';
                        }
                }
    }


}
?>