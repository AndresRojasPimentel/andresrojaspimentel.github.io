<?php
error_reporting(0);
session_start();

if(isset($_SESSION['id_admin'])){
    header('Location:vista/inicio.php');
}
if(isset($_POST['login'])){
    include_once('modelo/login.php');
    $admin= new Login;
    $login=$admin->loginAdmin($_POST['user'],sha1($_POST['pass']));
    
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stilo.css">
    
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" crossorigin="anonymous"></script>r     
     <script src="https://use.fontawesome.com/releases/v5.7.2/css/all.css" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <title>Login Admin Seoane</title>
</head>
<body>
    
    <div class="wrapper">
    <div class="logo"> <img src="img/logo.png" alt=""> </div>
    <div class="text-center mt-4 name" > I.E.S.T.P. <br>MANUEL SEOANE CORRALES </div>
    
    <form method="post" action="#" class="p-3 mt-3">
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text" name="user" id="userName" placeholder="Usuario"> </div>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password" name="pass" id="pwd" placeholder="Contraseña"> </div> <button type="submit" name="login"class="btn mt-3">Ingresar</button>
    </form>
</div>
</body>
</html>