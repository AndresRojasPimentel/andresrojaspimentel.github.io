<?php
if(isset($_POST['verificar'])){
    include_once('modelo/verificar.php');
    $user=New Usuario;
    $verificar= $user->VerificarUsuario($_POST['dni']);
    
}
if(isset($_POST['registro'])){
    include_once('modelo/verificar.php');
    $user=New Usuario;
    $verificar= $user->setUsuarios($_POST['nombre'],$_POST['apellido'],$_POST['dni'],$_POST['correo'],$_POST['celular'],$_POST['tipoparticipante'],$_POST['monto'],$_POST['operacion'],$_POST['campotexto'],$user->fechaHoy());
    $enviarcorreo=$user->sendmail($_POST['nombre'],$_POST['apellido'],$_POST['correo']);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Registro Simulacro - Academia</title>
    <style>
        body {
            background-image: url(img/fondo.jpg);
        }
    </style>
</head>

<body>
    <form action="#" method="POST" class="needs-validation" novalidate onsubmit="return validarform()" enctype="multipart/form-data">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card border-#004e9b">
                        <div class="card-header text-white text-center" style="background-color: #004e9b;">
                            <img src="img/logo-sf.png" alt="logo-seoane" width="100px" height="100px">
                            <h4 class="card-title text-uppercase">Registro Simulacro Academia 2022</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-2">
                                <script>
                                    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                                    var diasSemana = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
                                    var f = new Date();
                                    document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                                </script>
                            </div>
                            <div class="col-sm-6 col-md-12 col-xs-12">
                                <div class="form-group mb-2">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon3">DNI:</span>
                                        <input type="text" class="form-control" id="basic-url" name="dni" aria-describedby="basic-addon3" required onkeypress="return soloNumeros(event)" onpaste="return false" maxlength="8">
                                            <div class="float-right">
                                            <input   name="verificar" type="submit" value="Verificar"class="btn btn-primary rounded-0" style="background-color: #004e9b;" ></input>
                                            <a  href="#" class="btn btn-primary rounded-0 btn-verificar" product="1" style="background-color: #004e9b;">Verificar</a>
                                            </div>
                                        <div class="invalid-feedback">
                                            Ingrese numero de DNI.
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-12 col-xs-12">
                                    <div class="form-group mb-2">
                                        <div class="input-group">
                                            <span class="input-group-text">Nombre:</span>
                                            <input type="text" aria-label="First name" id="nombre" name="nombre" class="form-control" required>
                                            <div class="invalid-feedback">
                                                Ingresar nombre.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12 col-xs-12">
                                    <div class="form-group mb-2">
                                        <div class="input-group">
                                            <span class="input-group-text">Apellido:</span>
                                            <input type="text" aria-label="First name" id="apellido" name="apellido" class="form-control" required>
                                            <div class="invalid-feedback">
                                                Ingresar apellido.
                                            </div>
                                        </div>
                                        <!-- <label for="firstname">DNI</label>  
                                        <input type="text" id="firstname" placeholder="Nombre" class="form-control" aria-describedby="inputGroupPrepend" required />  
                                          -->
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-12 col-xs-12">
                                    <div class="form-group mb-2">
                                        <div class="input-group ">
                                            <span class="input-group-text" id="basic-addon3">Correo:</span>
                                            <input type="email" class="form-control" id="basic-url" name="correo" aria-describedby="basic-addon3" required>
                                            <div class="invalid-feedback">
                                                Ingrese correo.
                                            </div>
                                        </div>
                                        <!-- <label for="email">Correo</label>  
                                        <input type="email" class="form-control" id="email" placeholder="Correo" aria-describedby="inputGroupPrepend" required>  
                                         -->
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-12 col-xs-12">
                                    <div class="form-group mb-2">
                                        <div class="input-group ">
                                            <span class="input-group-text" id="basic-addon3">Celular:</span>
                                            <input type="text" class="form-control" id="basic-url" name="celular" aria-describedby="basic-addon3" required onkeypress="return soloNumeros(event)" onpaste="return false" maxlength="9">
                                            <div class="invalid-feedback">
                                                Ingrese numero celular.
                                            </div>
                                        </div>
                                        <!-- <label for="phonenumber">Teléfono</label>  
                                        <input type="tel"  class="form-control" id="phonenumber" placeholder="Número telefono" aria-describedby="inputGroupPrepend" required>  
                                          -->
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row mb-3">  
                                <div class="col-sm-12 col-md-12 col-xs-12">  
                                	
                                     <div class="form-group">  
                                        <label>Escoger un solo turno :</label>                                          
                                    </div>  
                                    <div class="border border-dark p-2">
                                        <div class="form-check-inline">  
                                            <div class="custom-control custom-radio custom-control-inline">  
                                                <input type="radio" class="custom-control-input form-check-input" id="" aria-describedby="inputGroupPrepend" name="ssalud" value="Isapre" required>  
                                                <label class="custom-control-label form-check-label" for="html">Mañana: 8:00 am - 12:45 pm</label>  
                                                  
                                            </div>                                          
                                        </div>  
                                        <div class="form-check-inline">  
                                            <div class="custom-control custom-radio ">  
                                                <input type="radio" class="form-check-input" id="" aria-describedby="inputGroupPrepend" name="ssalud" value="Fonasa" required>  
                                                <label class="form-check-label" for="javascript">Tarde: 1:15 PM - 6:00 pm</label>  
                                                  
                                            </div>  
                                        </div>  
                                        <div class="form-check-inline">  
                                            <div class="custom-control custom-radio ">  
                                                <input type="radio" class="form-check-input" id="" aria-describedby="inputGroupPrepend" name="ssalud" value="Particular"required>  
                                                <label class="form-check-label" for="csharp">Noche: 5:30 PM - 10:00 pm</label>  
                                                  
                                            </div>  
                                        </div>  
                                
                                        <div class="invalid-feedback  ">
                                        Falta marcar Sistema de salud.
                                    	</div>                                       
                                    </div>                                                               
                                </div>  
                            </div> -->


                            <div class="row">
                                <div class="col-sm-4 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon3">Monto:</span>
                                            <input type="number" class="form-control" id="monto" name="monto" maxlength="5" aria-describedby="basic-addon3" required>
                                            <div class="invalid-feedback">
                                                Ingrese Monto.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col-sm-4 col-md-6 col-xs-12">  
                                        <div class="form-group">  
                                            <div class="input-group mb-2">
                                                <label class="input-group-text" for="inputGroupSelect01">Concepto :</label>
                                                <select class="form-select" id="" name="sexo" required>
                                                  <option selected disabled value="">seleccionar</option>
                                                  <option value="Hombre">Matricula</option>
                                                  <option value="Mujer">Mensualidad</option>                                              
                                                </select>
                                                <div class="invalid-feedback">
                                                    Selecciona el sexo.
                                                  </div>
                                            </div>
                                        </div>  
                                    </div>  -->
                            </div>
                            <!--  <div class="row mb-3">  
                                <div class="col-sm-12 col-md-12 col-xs-12">  
                                    <div class="form-group">  
                                        <label>Tipo de Participante :</label>                                          
                                    </div>  
                                    <div class="border border-dark p-2">
                                        <div class="form-check-inline">  
                                            <div class="custom-control custom-radio ">  
                                                <input type="checkbox" class="custom-control-input" id="" aria-describedby="inputGroupPrepend" name="alergico" value="Medicamentos" >  
                                                <label class="custom-control-label" for="html">Estudiante Academia 2022</label>  
                                                  
                                            </div>                                          
                                        </div>  
                                        <div class="form-check-inline">  
                                            <div class="custom-control custom-radio ">  
                                                <input type="checkbox" class="form-check-input" id="" aria-describedby="inputGroupPrepend" name="alergico" value="Alimentos" >  
                                                <label class="form-check-label" for="javascript">Persona Externa</label>  
                                                  
                                            </div>  
                                        </div>  
                                         <div class="form-check-inline">  
                                            <div class="custom-control custom-radio ">  
                                                <input type="checkbox" class="form-check-input" id="" aria-describedby="inputGroupPrepend" name="alergico" value="Pastillas" >  
                                                <label class="form-check-label" for="csharp">Yape</label>  
                                                  
                                            </div>  
                                        </div>  
                                                
                                    </div>            
                                </div>  
                            </div> -->
                            <div class="form-group">
                                <label>Tipo de Participante :</label>
                            </div>
                            <div class="border border-blue p-2">

                                <div class="form-check-inline">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input form-check-input" id="" aria-describedby="inputGroupPrepend" name="tipoparticipante" value="Estudiante Academia 2022" required>
                                        <label class="custom-control-label form-check-label" for="html">Estudiante Academia 2022</label>

                                    </div>
                                </div>
                                <div class="form-check-inline">
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" class="form-check-input" id="" aria-describedby="inputGroupPrepend" name="tipoparticipante" value="Persona Externa" required>
                                        <label class="form-check-label" for="javascript">Persona Externa</label>
                                    </div>
                                </div>
                                <div class="invalid-feedback  ">
                                    Falta marcar Tipo de Participante.
                                </div>
                            </div><br>

                            <div class="col-sm-6 col-md-12 col-xs-12">
                                <div class="form-group mb-2">
                                    <div class="input-group">
                                        <span class="input-group-text">Nro de Operación:</span>
                                        <input type="text" aria-label="First name" id="operacion" name="operacion" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Ingrese su numero de operación
                                        </div>
                                    </div>
                                    <!-- <label for="lastname">Apellido</label>  
                                    <input type="text" id="lastname" placeholder=Apellido" class="form-control" aria-describedby="inputGroupPrepend" required />  
                                     -->
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="address">Suba el voucher en formato JPEG,JPG o PNG</label><br><br>
                                        <input type="file" name="foto" id="fotox" accept="image/*" required="1">
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                        <script>
                                            $(document).ready(function() {
                                                $("#fotox").change(function() {
                                                    let input = $(this);
                                                    let extencion = input.val().split(".").pop().toLowerCase();
                                                    if (input.val() != "") {
                                                        if (extencion != "jpg" && extencion != "png" && extencion != "jpeg") {
                                                            input.replaceWith(input.val('').clone(true));
                                                            alert("No se admite este tipo de archivo");
                                                        }
                                                    } else {
                                                        alert("favor de cargar una imagen");
                                                    }
                                                });
                                            });
                                        </script><br>
                                        <div class="invalid-feedback">Ingrese su archivo, por favor</div>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="address">Comentario:</label>
                                        <textarea class="form-control" rows="3" id="address" name="campotexto" placeholder="Escribir texto..." aria-describedby="inputGroupPrepend"></textarea>
                                        <div class="invalid-feedback">Escriba en Comentario</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                            <label class="form-check-label" for="invalidCheck">
                                                Los datos ingresados son correctos.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-xs-12 text-center">
                                    <div class="float-right">
                                        <button class="btn btn-danger rounded-0" type="reset">Limpiar</button>
                                        <button class="btn btn-primary rounded-0" type="submit" style="background-color: #004e9b;" name="registro">Registrar</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="javascript/scriptb.js"></script>
        <script src="javascript/validate.js"></script>
    </form>
</body>

</html>