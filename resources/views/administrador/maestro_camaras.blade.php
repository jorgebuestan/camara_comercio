@extends('dashboard')

@section('pagename')
Maestro de Cámaras
@endsection

@section('content') 
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    .rowborder {
      margin: 20px; /* Establece el margen deseado */
      padding: 10px; /* Añade un relleno interno para separar el contenido del margen */
      border: 2px solid #ccc; /* Añade un borde para crear el efecto rectangular */
      border-radius: 10px; /* Agrega bordes circulares en las esquinas */
      box-sizing: border-box; /* Incluye el borde y el relleno en el tamaño total del elemento */
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-lg-11 text-end">
            &nbsp;
        </div> 
        <div class="col-lg-1">
            <a href="{{ route('dashboard') }}" id="videoLink">
                <button type="button" class="mb-1 mt-1 me-1 btn btn-primary">Regresar</button>
            </a>
        </div>
    </div>
    <div class="row"> 
        <div class="col-lg-12 text-end">
            &nbsp;
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="card" id="w3">
                <header class="card-header"> 
                    <h2 class="card-title">Gestión de Cámaras</h2>
                </header>
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-6"> 
                                <div class="row">
                                    <div class="col-md-12">   
                                        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalCamara">Agregar Nuevo Registro</button>
                                    </div> 
                                </div> 
                            </div>  
                            <div class="col-md-6">  
                                 
                            </div>  
                        </div>  
                        <div class="row">
                            <div class="col">
                                <section class="card">
                                    <header class="card-header">  
                                        <div class="card-actions">
                                            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                                        </div>

                                        <h2 class="card-title">Listado de Cámaras Registradas</h2>
                                    </header>
                                    <div class="card-body"> 
                                        <table class="table table-bordered table-striped mb-0" id="dataTable"> 
                                            <thead>
                                                <tr>
                                                    <th>Fecha de Ingreso</th>  
                                                    <th>Ruc</th>  
                                                    <th>Razón Social</th>  
                                                    <th>Representante Legal</th>  
                                                    <th>Cédula Rep. Legal</th>  
                                                    <th>Acciones</th>  
                                                </tr>
                                            </thead> 
                                        </table>
                                    </div>
                                </section>
                            </div>
                        </div>  
                    </div>    
                </div> 
            </section> 
        </div> 
    </div>
</div>  
<div class="container"> 
      <!-- Modal --> 

        <!-- Jbuestan Modales -->
        <form enctype="multipart/form-data" class="modal fade" id="ModalCamara" tabindex="-1" aria-labelledby="ModalCamaraLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog modal-xl"> 
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalCamaraLabel"><b>Agregar una Nueva Cámara de Comercio</b></h5>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                    <div class="modal-body">
                        <div class="form-group">  
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item active">
                                                <a class="nav-link" data-bs-target="#datos_generales" href="#datos_generales" data-bs-toggle="tab">Datos Generales</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-target="#datos_tributarios" href="#datos_tributarios" data-bs-toggle="tab">Datos Tributarios</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="datos_generales" class="tab-pane active">
                                                <div class="row">
                                                    <div class="col-md-2">  
                                                        Fecha de Ingreso
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <input type="text" data-plugin-datepicker class="form-control" name="fecha_ingreso" id="fecha_ingreso" placeholder="Fecha de Ingreso">
                                                    </div> 
                                                    <div class="col-md-2">  
                                                        RUC
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <input type="text" class="form-control" name="ruc" id="ruc" placeholder="RUC de la Cámara">
                                                        <div id="error-ruc" style="color: red; display: none;">El RUC debe tener 13 dígitos.</div>
                                                    </div> 
                                                </div>   
                                                <div class="row">
                                                    &nbsp;
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">  
                                                        Razón Social
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <input type="text" class="form-control" name="razon_social" id="razon_social" placeholder="Razón Social">
                                                    </div> 
                                                    <div class="col-md-2">  
                                                        Cédula Representante Legal
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <input type="text" class="form-control" name="cedula_representante_legal" id="cedula_representante_legal" placeholder="Cédula Representante Legal">
                                                        <div id="error-cedula" style="color: red; display: none;">La Cédula debe tener 10 dígitos.</div>
                                                    </div> 
                                                </div>   
                                                <div class="row">
                                                    &nbsp;
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">  
                                                        Nombres Representante Legal
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <input type="text" class="form-control" name="nombres_representante_legal" id="nombres_representante_legal" placeholder="Nombres Representante Legal">
                                                    </div> 
                                                    <div class="col-md-2">  
                                                        Apellidos Representante Legal
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <input type="text" class="form-control" name="apellidos_representante_legal" id="apellidos_representante_legal" placeholder="Apellidos Representante Legal">
                                                    </div> 
                                                </div>   
                                                <div class="row">
                                                    &nbsp;
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">  
                                                        Teléfono Representante Legal
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <input type="text" class="form-control" name="telefono_representante_legal"  id="telefono_representante_legal" placeholder="Teléfono Representante Legal">
                                                    </div> 
                                                    <div class="col-md-2">  
                                                        Correo Representante Legal
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <input type="text" class="form-control" name="correo_representante_legal"  id="correo_representante_legal" placeholder="Correo Representante Legal">
                                                        <div id="error-correo" style="color: red; display: none;">Ingrese un correo electrónico válido.</div>
                                                    </div>
                                                </div>   
                                                <div class="row">
                                                    &nbsp;
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">  
                                                        Cargo Representante Legal
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <input type="text" class="form-control" name="cargo_representante_legal"  id="cargo_representante_legal" placeholder="Cargo Representante Legal">
                                                    </div> 
                                                    <div class="col-md-2">  
                                                        Dirección Representante Legal
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <input type="text" class="form-control" name="direccion_representante_legal"  id="direccion_representante_legal" placeholder="Dirección Representante Legal">
                                                    </div> 
                                                </div>   
                                                <div class="row">
                                                    &nbsp;
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">  
                                                        Logo
                                                    </div>
                                                    <div class="col-md-4"> 
                                                        <input type="file" class="form-control-file" id="logoFile" name="file">
                                                        <input type="hidden" name="tipoDoc" value="1"> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="datos_tributarios" class="tab-pane">
                                                <div class="row">
                                                    <div class="col-md-2">  
                                                        Tipo de Régimen
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <select id="tipo_regimen" name="tipo_regimen" class="form-control populate">
                                                            <option value="-1">Seleccionar</option>
                                                            @foreach($regimen as $id => $descripcion)
                                                                <option value="{{ $id }}">{{ $descripcion }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div> 
                                                    <div class="col-md-2">  
                                                        Fecha de Registro
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <input type="text" data-plugin-datepicker class="form-control" name="fecha_registro" id="fecha_registro" placeholder="Fecha de Registro">
                                                    </div> 
                                                </div>  
                                                <div class="row">
                                                    &nbsp;
                                                </div> 
                                                <div class="row">
                                                    <div class="col-md-2">  
                                                        Fecha de Constitución
                                                    </div> 
                                                    <div class="col-md-4">  
                                                    <input type="text" data-plugin-datepicker class="form-control" name="fecha_constitucion" id="fecha_constitucion" placeholder="Fecha de Constitución">
                                                    <div id="error-fecha-constitucion" style="color: red; display: none;">La fecha de constitución debe ser menor a la fecha de registro.</div>
                                                    </div> 
                                                    <div class="col-md-2">  
                                                        Años de Creación
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <input type="text" class="form-control" name="anios_creacion"  id="anios_creacion" placeholder="Años de Creación" disabled>
                                                    </div> 
                                                </div>
                                                <div class="row">
                                                    &nbsp;
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">  
                                                        Agente de Retención
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <select id="agente_retencion" name="agente_retencion" class="form-control populate">
                                                            <option value="-1">Seleccionar</option>
                                                            <option value="1">Si</option>
                                                            <option value="2">No</option>
                                                        </select>
                                                    </div> 
                                                    <div class="col-md-2">  
                                                        Contributente Especial
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <select id="contribuyente_especial" name="contribuyente_especial" class="form-control populate">
                                                            <option value="-1">Seleccionar</option>
                                                            <option value="1">Si</option>
                                                            <option value="2">No</option>
                                                        </select>
                                                    </div> 
                                                </div>
                                                <div class="row">
                                                    &nbsp;
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">  
                                                        <h2 class="card-title">Dirección Principal</h2> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    &nbsp;
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">  
                                                        País
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <select id="pais" name="pais" class="form-control populate">
                                                            <option value="-1">Seleccionar</option>
                                                            @foreach($paises as $id => $nombre)
                                                                <option value="{{ $id }}" {{ $id == 57 ? 'selected' : '' }}>
                                                                    {{ $nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div> 
                                                    <div class="col-md-2">  
                                                        Provincia
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <select id="provincia" name="provincia" class="form-control populate">
                                                            <option value="-1">Seleccionar</option>
                                                            @foreach($provincias as $id => $nombre)
                                                                <option value="{{ $id }}" {{ $id == 2 ? 'selected' : '' }}>
                                                                    {{ $nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div> 
                                                </div>
                                                <div class="row">
                                                    &nbsp;
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">  
                                                        Cantón
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <select id="canton" name="canton" class="form-control populate">
                                                            <option value="-1" selected>Seleccionar</option>
                                                            @foreach($cantones as $id => $nombre)
                                                                <option value="{{ $id }}" {{ $id == 2 ? 'selected' : '' }}>
                                                                    {{ $nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div> 
                                                    <div class="col-md-2">  
                                                        Parroquia
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <select id="parroquia" name="parroquia" class="form-control populate">
                                                            <option value="-1">Seleccionar</option> 
                                                            @foreach($parroquias as $id => $nombre)
                                                                <option value="{{ $id }}">
                                                                    {{ $nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div> 
                                                </div>
                                                <div class="row">
                                                    &nbsp;
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">  
                                                        Calle
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <input type="text" class="form-control" name="calle"  id="calle" placeholder="Calle">
                                                    </div> 
                                                    <div class="col-md-2">  
                                                        Manzana
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <input type="text" class="form-control" name="manzana"  id="manzana" placeholder="Manzana">
                                                    </div> 
                                                </div>  
                                                <div class="row">
                                                    &nbsp;
                                                </div> 
                                                <div class="row">
                                                    <div class="col-md-2">  
                                                        Número
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <input type="text" class="form-control" name="numero"  id="numero" placeholder="Número">
                                                    </div> 
                                                    <div class="col-md-2">  
                                                        Intersección
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <input type="text" class="form-control" name="interseccion"  id="interseccion" placeholder="Intersección">
                                                    </div> 
                                                </div>  
                                                <div class="row">
                                                    &nbsp;
                                                </div> 
                                                <div class="row">
                                                    <div class="col-md-2">  
                                                        Referencia Ubicación
                                                    </div> 
                                                    <div class="col-md-4">  
                                                        <input type="text" class="form-control" name="referencia"  id="referencia" placeholder="Referencia Ubicación">
                                                    </div> 
                                                    <div class="col-md-2">  
                                                        Actividad Económica
                                                    </div> 
                                                    <div class="col-md-4">  
                                                         
                                                    </div> 
                                                </div>  
                                                <div class="row">
                                                    &nbsp;
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-camara">Guardar</button>
                    </div>
                </div>
            </div>
        </form>


        <form enctype="multipart/form-data" class="modal fade" id="ModalModificarCargo" tabindex="-1" aria-labelledby="ModalModificarCargoLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalModificarCargoLabel">Modificar Cargo</h5>
                        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> --> 
                    </div>
                    <div class="modal-body">
                        <div class="form-group"> 
                            <div class="row">
                                <div class="col-md-10">
                                    <label for="Cargo">Localidad</label>
                                    <select id="localidad_mod" name="localidad_mod" class="form-control populate">
                                         
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <label for="Cargo">Nombres</label>
                                    <input type="text" class="form-control" id="nombre_mod" name="nombre_mod">
                                    <input type="hidden" id="consolidado_id" name="consolidado_id">
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <label for="Cargo">Area</label>
                                    <input type="text" class="form-control" id="area_mod" name="area_mod"> 
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <label for="Cargo">Correo</label>
                                    <input type="text" class="form-control" id="correo_mod" name="correo_mod"> 
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="btn-close" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-save-changes">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </form>
 
    </div>

    <div id="carga" style="display: none; text-align: center; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9999;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <img src="{{ asset('storage/loading/loading_256.gif') }}" alt="Cargando..." style="width: 50px; height: 50px;">
            <p style="color: white;">Procesando petición, por favor espera...</p>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
 
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
     

    <script>

    $(document).ready(function(){ 

        var table = $('#dataTable').DataTable({
            destroy: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.obtener_listado_camaras') }}",
                type: "GET",
                data: function (d) {
                    d.start = d.start || 0;
                    d.length = d.length || 10;
                    d.localidad = $('#localidad').val(); // Enviar el valor de localidad seleccionada
                },
                error: function (error) {
                    console.error("Error al cargar los datos: ", error);
                }
            },
            pageLength: 10, // Establece el número de registros por página
            columns: [
                { data: 'fecha_ingreso', width: '10%' }, 
                { data: 'ruc', width: '15%' }, 
                { data: 'razon_social', width: '20%' }, 
                { data: 'representante_legal', width: '20%' } , 
                { data: 'cedula_representante_legal', width: '15%' } , 
                { data: 'btn', width: '20%' } 
            ],
            order: [[0, "asc"]],
            createdRow: function(row, data, dataIndex) {
                var td = $(row).find(".truncate");
                td.attr("title", td.text());

                var td2 = $(row).find(".truncate2");
                td2.attr("title", td2.text());
            }
        });

        // Evento para recargar el DataTable cuando cambia el valor del select de localidad
        $('#localidad').on('change', function() {
            table.ajax.reload();
        });

        function showFileDocumentoCargo(id){
                $.ajax({
                    url: "{{ asset('/documentosCargo/file/') }}/"+id,
                    type: "get",
                    dataType: "html",
                    contentType: false,
                    processData: false
                }).done(function(res){
                    url = JSON.parse(res).response.url
                    //http://miexperienciaune.test/colaborador/
                    //window.open('storage/'+url,'_blank');
                    var rutaRaiz = window.location.origin;
                    window.open(rutaRaiz+'/storage/'+url,'_blank');
                }).fail(function(res){
                    console.log(res)
                });
            }

        //jbuestan  

        /* $("#btn-register-camara").click(function() {
            var formData = new FormData(document.getElementById("ModalCamara"));

            $.ajax({
                url: "{{ route('admin.registrar_camara') }}",
                type: "POST",
                data: formData,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false
            }).done(function(res){
                alert(res.success);
                location.reload();
            }).fail(function(res){
                console.log(res.responseText); // Muestra el error completo en consola
            });
        }); */

        // Validar campo RUC
        $("#ruc").on("input", function() {
            var ruc = $(this).val();
            if (/^\d{13}$/.test(ruc)) { // Si tiene exactamente 13 dígitos
                $("#error-ruc").hide(); // Ocultar error
            } else {
                $("#error-ruc").show(); // Mostrar error
            }
        });

        $("#cedula_representante_legal").on("input", function() {
            var cedula = $(this).val();
            if (/^\d{10}$/.test(cedula)) { // Si tiene exactamente 13 dígitos
                $("#error-cedula").hide(); // Ocultar error
            } else {
                $("#error-cedula").show(); // Mostrar error
            }
        });

         // Validar campo Correo
        $("#correo_representante_legal").on("input", function() {
            var correo = $(this).val();
            var regexCorreo = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; // Regex para correo válido
            if (regexCorreo.test(correo)) { // Si es un correo válido
                $("#error-correo").hide(); // Ocultar error
            } else {
                $("#error-correo").show(); // Mostrar error
            }
        });

        $('#fecha_constitucion, #fecha_registro').on('change', function() {
            var fechaConstitucion = $('#fecha_constitucion').val();
            var fechaRegistro = $('#fecha_registro').val();

            // Validar que fecha_constitucion sea menor a fecha_registro
            if (fechaConstitucion && fechaRegistro) {
                if (new Date(fechaConstitucion) >= new Date(fechaRegistro)) {
                    $('#error-fecha-constitucion').show();
                } else {
                    $('#error-fecha-constitucion').hide();
                }
            }

            // Calcular años y meses desde fecha_constitucion hasta la fecha actual
            if (fechaConstitucion) {
                var hoy = new Date();
                var fechaConstitucionDate = new Date(fechaConstitucion);

                var years = hoy.getFullYear() - fechaConstitucionDate.getFullYear();
                var months = hoy.getMonth() - fechaConstitucionDate.getMonth();

                if (months < 0) {
                    years--;
                    months += 12;
                }

                $('#anios_creacion').val(years + ' años, ' + months + ' meses');
            }
        });

        $("#btn-register-camara").click(function() {

            if ($('#fecha_ingreso').val() == "") {
                alert('Debe ingresar la Fecha de Ingreso de la Cámara');
                $('.nav-tabs a[href="#datos_generales"]').tab('show');
                $('#fecha_ingreso').focus();
                return;
            }

            if (!/^\d{13}$/.test($('#ruc').val())) {
                /*$("#error-ruc").show();
                isValid = false;*/
                $("#error-ruc").show();
                alert('El RUC debe tener 13 dígitos');
                $('.nav-tabs a[href="#datos_generales"]').tab('show');
                $('#ruc').focus();
                return;
            }

            if ($('#razon_social').val() == "") {
                alert('Debe ingresar la Razón Social');
                $('.nav-tabs a[href="#datos_generales"]').tab('show');
                $('#razon_social').focus();
                return;
            }

            if (!/^\d{10}$/.test($('#cedula_representante_legal').val())) {
                /*$("#error-ruc").show();
                isValid = false;*/
                $("#error-cedula").show();
                alert('La Cédula del Representante Legal debe tener 10 dígitos');
                $('.nav-tabs a[href="#datos_generales"]').tab('show');
                $('#cedula_representante_legal').focus();
                return;
            }

            if ($('#nombres_representante_legal').val() == "") {
                alert('Debe ingresar los Nombres del Representante Legal');
                $('.nav-tabs a[href="#datos_generales"]').tab('show');
                $('#nombres_representante_legal').focus();
                return;
            }

            if ($('#apellidos_representante_legal').val() == "") {
                alert('Debe ingresar los Apellidos del Representante Legal');
                $('.nav-tabs a[href="#datos_generales"]').tab('show');
                $('#apellidos_representante_legal').focus();
                return;
            }

            if ($('#telefono_representante_legal').val() == "") {
                alert('Debe ingresar el Teléfono del Representante Legal');
                $('.nav-tabs a[href="#datos_generales"]').tab('show');
                $('#telefono_representante_legal').focus();
                return;
            }


            if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test($('#correo_representante_legal').val())) {
                /*$("#error-correo").show();
                isValid = false;*/
                $("#error-correo").show();
                alert('Debe registrar un correo con formato válido');
                $('.nav-tabs a[href="#datos_generales"]').tab('show');
                $('#correo_representante_legal').focus();
                return;
            }

            if ($('#cargo_representante_legal').val() == "") {
                alert('Debe ingresar el Cargo del Representante Legal');
                $('.nav-tabs a[href="#datos_generales"]').tab('show');
                $('#cargo_representante_legal').focus();
                return;
            }

            if ($('#direccion_representante_legal').val() == "") {
                alert('Debe ingresar la Dirección del Representante Legal');
                $('.nav-tabs a[href="#datos_generales"]').tab('show');
                $('#direccion_representante_legal').focus();
                return;
            }  

            if ($('#tipo_regimen').val() == "-1") {
                alert('Debe seleccionar un Tipo de Régimen');
                $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                $('#tipo_regimen').focus();
                return;
            }
            
            if ($('#fecha_registro').val() == "") {
                alert('Debe ingresar la Fecha de Registro de la Cámara');
                $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                $('#fecha_registro').focus();
                return;
            }

            if ($('#fecha_constitucion').val() == "") {
                alert('Debe ingresar la Fecha de Constitución de la Cámara');
                $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                $('#fecha_constitucion').focus();
                return;
            }

            //Validacion que Fecha de Constitucion sea menor a Fecha de Registro
            var fechaConstitucion = $('#fecha_constitucion').val();
            var fechaRegistro = $('#fecha_registro').val();

            // Validar que fecha_constitucion sea menor a fecha_registro
            if (fechaConstitucion && fechaRegistro) {
                if (new Date(fechaConstitucion) >= new Date(fechaRegistro)) {
                    alert('La Fecha de Constitución debe ser menor a la Fecha de Registro');
                    $('#error-fecha-constitucion').show();
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#fecha_constitucion').focus();
                    return;
                }  
            }

            if ($('#agente_retencion').val() == "-1") {
                alert('Debe indicar si la Cámara es o no un Agente de Retención');
                $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                $('#agente_retencion').focus();
                return;
            }

            if ($('#contribuyente_especial').val() == "-1") {
                alert('Debe indicar si la Cámara es o no un Contribuyente Especial');
                $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                $('#contribuyente_especial').focus();
                return;
            }

            if ($('#pais').val() == "-1") {
                alert('Debe seleccionar el País');
                $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                $('#pais').focus();
                return;
            }

            if ($('#provincia').val() == "-1") {
                alert('Debe seleccionar la Provincia');
                $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                $('#provincia').focus();
                return;
            }

            if ($('#canton').val() == "-1") {
                alert('Debe seleccionar el Cantón');
                $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                $('#canton').focus();
                return;
            }

            if ($('#parroquia').val() == "-1") {
                alert('Debe seleccionar la Parroquia');
                $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                $('#parroquia').focus();
                return;
            }

            if ($('#calle').val() == "") {
                alert('Debe ingresar la Calle en la Dirección Tributaria');
                $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                $('#calle').focus();
                return;
            }

            if ($('#manzana').val() == "") {
                alert('Debe ingresar la Manzana en la Dirección Tributaria');
                $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                $('#manzana').focus();
                return;
            }

            if ($('#numero').val() == "") {
                alert('Debe ingresar el Número en la Dirección Tributaria');
                $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                $('#numero').focus();
                return;
            }

            if ($('#interseccion').val() == "") {
                alert('Debe ingresar la Intersección en la Dirección Tributaria');
                $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                $('#interseccion').focus();
                return;
            }

            if ($('#referencia').val() == "") {
                alert('Debe ingresar la Referencia en la Dirección Tributaria');
                $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                $('#referencia').focus();
                return;
            }

            var formData = new FormData(document.getElementById("ModalCamara"));
            $('#carga').show();

            $.ajax({
                url: "{{ route('admin.registrar_camara') }}",
                type: "POST",
                data: formData,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false
            }).done(function(res){
                $('#carga').hide(); 
                alert(res.success); // Mostrar el mensaje de éxito en un alert
                location.reload(); // Recargar la página
            }).fail(function(res){
                $('#carga').hide(); 

                if (res.status === 422) {
                    // Mostrar mensaje de error de validación
                    let errors = res.responseJSON;
                    if (errors.error) {
                        alert(errors.error);
                    }
                } else {
                    // Mostrar mensaje genérico si no se recibió un error específico
                    alert("Ocurrió un error al registrar la cámara.");
                }

                console.log(res.responseText); // Muestra el error completo en la consola para depuración
            });
        });


    
        

        // Delegar el evento de clic al documento para asegurar que funcione con elementos dinámicos
        $(document).on('click', '.open-modal', function() {
            console.log('Botón clicado...');
            var button = $(this); 
            var camaraId = button.data('id'); 

            console.log('Cargo ID:', camaraId); 

            $.ajax({
                url: '/administrador/camara/detalle/' + camaraId,
                method: 'GET',
                success: function(response) {
                    console.log('Datos recibidos:', response);

                    var ConsolidadoId = $('#consolidado_id');
                    var Nombre = $('#nombre_mod'); 
                    var Area = $('#area_mod'); 
                    var Correo = $('#correo_mod'); 
                    var Localidad = $('#localidad_mod'); 

                    //console.log('Elemento Cargo encontrado:', CargoInput.length); // Verificar que el elemento se encuentra
                    //console.log('Elemento cargo_id encontrado:', camaraIdInput.length); // Verificar que el elemento se encuentra
                     
                    ConsolidadoId.val(response.id);
                    Nombre.val(response.nombres); 
                    Area.val(response.area); 
                    Correo.val(response.correo); 
                    Localidad.val(response.id_localidad); 

                    //console.log('Valor cargo_id:', camaraIdInput.val()); // Verificar que el valor se asigna
                    //console.log('Valor cargoname:', CargoInput.val()); // Verificar que el valor se asigna 


                    $('#ModalModificarCargo').modal('show');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        $('#btn-close').on('click', function () {
            // Aquí puedes añadir la lógica para enviar el formulario modificado
            $('#ModalModificarCargo').modal('hide'); // Cerrar el modal después de guardar
        });


        $('#btn-save-changes').on('click', function () {
            // Aquí puedes añadir la lógica para enviar el formulario modificado
            var formData = new FormData(document.getElementById("ModalModificarCargo"));
            $.ajax({
                url: "{{ route('dashboard') }}",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(res){
                msg = JSON.parse(res).response.msg
                alert(msg);
                location.reload();
            }).fail(function(res){
                console.log(res)
            });

            $('#ModalModificarCargo').modal('hide'); // Cerrar el modal después de guardar
        });

        $(document).on('click', '.delete-camara', function() {
            var button = $(this); 
            var camaraId = button.data('id'); 

            // Mostrar la confirmación antes de proceder con la eliminación
            var confirmDelete = confirm('¿Está seguro de que desea eliminar este registro?');

            if (confirmDelete) {
                $.ajax({
                    url: '/administrador/camara/eliminar/' + camaraId,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}' // Asegúrate de incluir el token CSRF
                    },
                    success: function(response) {
                        alert('Registro eliminado correctamente.'); 
                        // Actualizar la interfaz, por ejemplo, recargando la página o eliminando el Cargo de la lista
                        location.reload(); // O cualquier otra lógica para actualizar la interfaz
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Hubo un problema al eliminar el Registro.');
                    }
                });
            } else {
                // El usuario canceló la eliminación
                console.log('Eliminación cancelada por el usuario.');
            }
        });

        $('#pais').change(function () {
            let paisId = $(this).val();

            if (paisId != -1) {
                $.ajax({
                    url: '/get-provincias', // Ruta para obtener las provincias
                    method: 'GET',
                    data: { id_pais: paisId },
                    success: function (response) {
                        let provincias = response.provincias;
                        let $provinciaSelect = $('#provincia');
                        
                        $provinciaSelect.empty(); // Limpiamos el select de provincias
                        $provinciaSelect.append('<option value="-1">Seleccionar</option>'); // Opción por defecto

                        // Agregamos las provincias al select
                        provincias.forEach(function (provincia) {
                            $provinciaSelect.append(`<option value="${provincia.id}">${provincia.nombre}</option>`);
                        });
                    },
                    error: function () {
                        alert('Hubo un error al cargar las provincias.');
                    }
                });
            }
        });

        $('#provincia').change(function () {
            let paisId = $('#pais').val(); // ID del país seleccionado
            let provinciaId = $(this).val(); // ID de la provincia seleccionada

            if (paisId != -1 && provinciaId != -1) {
                $.ajax({
                    url: '/get-cantones', // Ruta para obtener los cantones
                    method: 'GET',
                    data: {
                        id_pais: paisId,      // Enviamos el ID del país
                        id_provincia: provinciaId // Enviamos el ID de la provincia
                    },
                    success: function (response) {
                        let cantones = response.cantones;
                        let $cantonSelect = $('#canton'); // Select de cantones
                        let $parroquiaSelect = $('#parroquia'); // Select de parroquias
                        
                        $cantonSelect.empty(); // Limpiamos el select de cantones
                        $parroquiaSelect.empty().append('<option value="-1">Seleccionar</option>'); // Limpiamos parroquias

                        $cantonSelect.append('<option value="-1">Seleccionar</option>'); // Opción por defecto

                        // Agregamos los cantones al select
                        cantones.forEach(function (canton) {
                            $cantonSelect.append(`<option value="${canton.id}">${canton.nombre}</option>`);
                        });
                    },
                    error: function () {
                        alert('Hubo un error al cargar los cantones.');
                    }
                });
            } else {
                $('#canton').empty().append('<option value="-1">Seleccionar</option>'); // Limpiar select de cantones
                $('#parroquia').empty().append('<option value="-1">Seleccionar</option>'); // Limpiar select de parroquias
            }
        });

        $('#canton').change(function () {
            let paisId = $('#pais').val(); // ID del país seleccionado
            let provinciaId = $('#provincia').val(); // ID de la provincia seleccionada
            let cantonId = $(this).val(); // ID del cantón seleccionado

            if (paisId != -1 && provinciaId != -1 && cantonId != -1) {
                $.ajax({
                    url: '/get-parroquias', // Ruta para obtener las parroquias
                    method: 'GET',
                    data: {
                        id_pais: paisId,      // Enviamos el ID del país
                        id_provincia: provinciaId, // Enviamos el ID de la provincia
                        id_canton: cantonId  // Enviamos el ID del cantón
                    },
                    success: function (response) {
                        let parroquias = response.parroquias; // Asegúrate de usar el nombre correcto en el JSON de respuesta
                        let $parroquiaSelect = $('#parroquia'); // Select de parroquias
                        
                        $parroquiaSelect.empty(); // Limpiamos el select de parroquias
                        $parroquiaSelect.append('<option value="-1">Seleccionar</option>'); // Opción por defecto

                        // Agregamos las parroquias al select
                        parroquias.forEach(function (parroquia) {
                            $parroquiaSelect.append(`<option value="${parroquia.id}">${parroquia.nombre}</option>`);
                        });
                    },
                    error: function () {
                        alert('Hubo un error al cargar las parroquias.');
                    }
                });
            } else {
                $('#parroquia').empty().append('<option value="-1">Seleccionar</option>'); // Limpiar select de parroquias
            }
        });

    });

</script>
@endsection  