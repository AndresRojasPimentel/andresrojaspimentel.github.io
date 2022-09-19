<?php
include_once('superior.php');
?>

<div class="container-fluid px-4">
        <h1 class="mt-4">Página Principal</h1>    
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"> Inicio</li>
            <li class="breadcrumb-item active"> Panel de control</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                Página de inicio, navegación en modo usuario.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
            <i class="fas fa-table me-1"></i>
                                Panel de control

            </div>
            <div class="card-body">
            <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Ver lista de usuarios</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="../controlador/contusuarios.php">Ir a Página Usuarios</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Editar usuario <i class="fa fa-edit"></i></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="../vista/edituser.php">Editar Usuario registrado</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Eliminar Usuario <i class="fa fa-times-circle"></i></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="../vista/deluser.php">Eliminar Usuario registrado</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
<?php
include_once('inferior.php');
?>