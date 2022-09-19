<?php
include_once('superior.php');
error_reporting(0);
if(isset($_POST['btnEditar'])){
    include_once('../modelo/verificar.php');
    $use= new Usuario;
    $edit=$use->editusuario($_POST['id'],$_POST['nombre'],$_POST['apellido'],$_POST['dni'],$_POST['correo'],$_POST['celular'],$_POST['monto'],$_POST['tipop'],$_POST['operacion']);
}
if(isset($_POST['id'])){
    include_once('../modelo/verificar.php');
    $us= new Usuario;
    $user=$us->getUsuarioId($_POST['id']);
    $nombre=$user[0]['nombre'];
    $apellido=$user[0]['apellido'];
    $dni=$user[0]['dni'];
    $correo=$user[0]['correo'];
    $celular=$user[0]['celular'];
    $monto=$user[0]['monto'];
    $tipop=$user[0]['tipoparticipante'];
    $operacion=$user[0]['operacion'];
     
    
}
?>

<div class="container-fluid px-4">
        <h1 class="mt-4">Editar Usuarios</h1>    
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="../vista/inicio.php">Inicio</a></li>
            <li class="breadcrumb-item active"> Editar usuarios</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                Página de edición de usuarios registrados, colocar ID para editar usuario del registro.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
            <i class="fas fa-edit me-1"></i>
                                Edición de Usuarios

            </div>
            <div class="card-body">
            <div class="row">
                            
                        <!-- inicio contenido -->
                        <form action="#" method="post" >
                    
                
                </div>
                <div class="container about-container wow fadeInUp">
                <div class="row">
                    <div class="col-md-6 col-md-push-6 about-content">
                         <!-- <h2 class="about-title">Usuario</h2> -->
                    <p class="about-text" >
                                <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">ID USUARIO</label>
                                <input type="text" id="form2Example1" class="form-control" name="id" maxlength="11" value="<?php echo $_POST['id']?>" placeholder="Necesario para Modificar" onchange="this.form.submit()" required/>
                                
                                </div>          
                    </p>
                    <!-- <h2 class="about-title">Usuario</h2> -->
                    <p class="about-text" >
                                <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">NOMBRE</label>
                                <input type="text" id="form2Example1" class="form-control" name="nombre" value="<?php echo $nombre ?>" maxlength="49" required/>
                                
                                </div>          
                    </p>

                    <!-- <h2 class="about-title">MISIÓN</h2> -->
                    <p class="about-text">
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form1Example2">APELLIDO</label>
                                <input type="text" id="form1Example2" class="form-control" name="apellido" value="<?php echo $apellido ?>" required maxlength="40" />
                                
                            </div>
                    </p>
                    <!-- <h2 class="about-title">MISIÓN</h2> -->
                    <p class="about-text">
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form1Example2">DNI</label>
                                <input type="text" id="form1Example2" class="form-control" name="dni" value="<?php echo $dni ?>" required maxlength="40" />
                                
                            </div>
                    </p><!-- <h2 class="about-title">MISIÓN</h2> -->
                    <p class="about-text">
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form1Example2">CORREO</label>
                                <input type="email" id="form1Example2" class="form-control" name="correo" value="<?php echo $correo ?>" required maxlength="40" />
                                
                            </div>
                    </p><!-- <h2 class="about-title">MISIÓN</h2> -->
                    <p class="about-text">
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form1Example2">CELULAR</label>
                                <input type="text" id="form1Example2" class="form-control" name="celular" value="<?php echo $celular ?>" required maxlength="9" />
                                
                            </div>
                    </p><!-- <h2 class="about-title">MISIÓN</h2> -->
                    <p class="about-text">
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form1Example2">MONTO</label>
                                <input type="text" id="form1Example2" class="form-control" name="monto"  value="<?php echo $monto ?>" placeholder="ejemplo: 20" required maxlength="11"/>
                                
                                
                            </div>
                    </p><!-- <h2 class="about-title">MISIÓN</h2> -->
                    <p class="about-text">
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form1Example2">TIPO DE PARTICIPANTE</label>
                                <input type="text" id="form1Example2" class="form-control" placeholder="ESTUDIANTE ACADEMIA 2022 / PERSONA EXTERNA" name="tipop" value="<?php echo $tipop ?>" required maxlength="40" />
                                
                            </div>
                    </p>
                    <!-- <h2 class="about-title">VALORES</h2> -->
                    <p class="about-text">
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form1Example2">NÚMERO DE OPERACIÓN</label>
                                <input type="text" id="form1Example2" class="form-control" name="operacion" placeholder="Número del Voucher" value="<?php echo $operacion ?>" required maxlength="30" />
                                
                            </div>
                            <div class="row">
                                    <div class="col-sm-12 col-md-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                <label class="form-check-label" for="invalidCheck">
                                                    He modificado correctamente todos los cambios.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                    </p><!-- <h2 class="about-title">MISIÓN</h2> -->
                    <p class="about-text">
                            
                            <br>
                        <button type="submit" class="btn btn-primary btn-block" name="btnEditar">Modificar Usuario <i class="fa fa-user-edit me-2"></i> </button>
                    </p>
                    </form>
                        <!-- fin contenido -->
        </div>
    </div>

<?php
include_once('inferior.php');
?>