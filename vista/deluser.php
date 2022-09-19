<?php
include_once('superior.php');
if(isset($_POST['btnDel'])){
    include_once('../modelo/verificar.php');
    $user= new Usuario;
    $del= $user->delusuario($_POST['id']);
}
?>


<div class="container-fluid px-4">
        <h1 class="mt-4">Eliminar Usuarios</h1>    
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="../vista/inicio.php">Inicio</a></li>
            <li class="breadcrumb-item active"> Eliminar usuarios</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                Página de eliminación de usuarios registrados, colocar ID para eliminar usuario del registro.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
            <i class="fas fa-user-times me-1"></i>
                                Eliminación de Usuarios

            </div>
            <div class="card-body">
            <div class="row">
                            
            
                <!-- AQUI ESCRIBIR EL CONTENIDO -->

                <form action="#" method="post">
                    
                
                </div>
                <div class="container about-container wow fadeInUp">
                <div class="row">
                    <div class="col-md-6 col-md-push-6 about-content">
                         <!-- <h2 class="about-title">Usuario</h2> -->
                    <p class="about-text" >
                                <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">ID USUARIO</label>
                                <input type="text" id="form2Example1" class="form-control" name="id" maxlength="11" placeholder="El usuario sera eliminado permanentemente" required/>
                                
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                <label class="form-check-label" for="invalidCheck">
                                                    Estoy seguro de eliminar este usuario.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>          
                    </p>
                    <!-- <h2 class="about-title">VALORES</h2> -->
                    <p class="about-text">
                            
                            <br>
                        <button type="submit" class="btn btn-danger btn-block" name="btnDel">Eliminar Usuario <i class="fa fa-user-times me-2"></i> </button>
                    </p>
                    </form>
                        <!-- fin contenido -->
        
    </div>
<?php
include_once('inferior.php');
?>