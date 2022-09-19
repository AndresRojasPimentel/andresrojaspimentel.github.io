<?php
include_once('superior.php');

?>

<!-- links para exportar a excel -->
<script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>


<div class="container-fluid px-4">
        <h1 class="mt-4">Tablas de Usuarios</h1>    
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"> <a href="../vista/inicio.php">Inicio</a></li>
            <li class="breadcrumb-item active"> Tablas de Usuarios</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                Esta tabla contiene Datos de los usuarios registrados en los simulacros.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
            <i class="fas fa-table me-1"></i>
                                Base de datos Usuarios
                                
                <!-- <button type="button" class="btn btn-success" name="excel" >Exportar datos a Excel</button>
            -->
            <button id="btnExportar" class="btn btn-success" style="margin-left:71%;" >
                <i class="fas fa-file-excel"></i> Exportar datos a Excel
            </button>

            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>nombre</th>
                                            <th>apellido</th>
                                            <th>dni</th>
                                            <th>correo</th>
                                            <th>celular</th>
                                            <th>monto</th>
                                            <th>tipoparticipante</th>
                                            <th>operación</th>
                                            <th>comentario</th>
                                            <th>fecha</th>
                                            <th>voucher</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>nombre</th>
                                            <th>apellido</th>
                                            <th>dni</th>
                                            <th>correo</th>
                                            <th>celular</th>
                                            <th>monto</th>
                                            <th>tipoparticipante</th>
                                            <th>operación</th>
                                            <th>comentario</th>
                                            <th>fecha</th>
                                            <th>voucher</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        
                                            for ($i=0; $i <count($datos) ; $i++) { 
                                                echo "<tr>
                                                      <td>".$datos[$i]['id']."</td>
                                                      <td>".$datos[$i]['nombre']."</td>
                                                      <td>".$datos[$i]['apellido']."</td>
                                                      <td>".$datos[$i]['dni']."</td>
                                                      <td>".$datos[$i]['correo']."</td>
                                                      <td>".$datos[$i]['celular']."</td>
                                                      <td>".$datos[$i]['monto']."</td>
                                                      <td>".$datos[$i]['tipoparticipante']."</td>
                                                      <td>".$datos[$i]['operacion']."</td>
                                                      <td>".$datos[$i]['comentario']."</td>
                                                      <td>".$datos[$i]['fecha']."</td>
                                                      <td align='center'> " . '<a href="'.$foto = $datos[$i]['archivo'] . '" target=_blank><img src="'.$foto = $datos[$i]['archivo'].'" width="50" heigth="50" />'. "</a></td>;
                                                      
                                                      
                                                      </tr>";
                                            }
                                        ?>
                                    </tbody>
                                        </table>

                                        <!-- script para exportar a excel -->
                                    <script>
                                        const $btnExportar = document.querySelector("#btnExportar"),
                                            $datatablesSimple = document.querySelector("#datatablesSimple");

                                        $btnExportar.addEventListener("click", function() {
                                            let tableExport = new TableExport($datatablesSimple, {
                                                exportButtons: false, // No queremos botones
                                                filename: "Reporte de Usuarios", //Nombre del archivo de Excel
                                                sheetname: "Reporte de Usuarios", //Título de la hoja
                                            });
                                            let datos = tableExport.getExportData();
                                            let preferenciasDocumento = datos.datatablesSimple.xlsx;
                                            tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento.fileExtension, preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
                                        });
                                    </script>
        </div>
    </div>
    
<?php
include_once('inferior.php');
?>