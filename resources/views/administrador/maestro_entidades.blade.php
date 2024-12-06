@extends('dashboard')

@section('pagename')
Maestro de Entidades
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

    /* Contenedor de elementos seleccionados */
   /* Contenedor de elementos seleccionados */
   .selected-items {
        margin-top: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        max-height: 200px;
        overflow-y: auto;
    }

    .selected-items .badge {
        font-size: 12px;
        padding: 5px 10px;
        margin: 5px 5px 0 0;
        display: inline-block;
        background-color: #007bff;
        color: #fff;
        border-radius: 3px;
    }

    .selected-items .badge .remove-item {
        margin-left: 5px;
        color: #fff;
        font-weight: bold;
        cursor: pointer;
    }

    .selected-items .badge .remove-item:hover {
        color: #ff0000;
    }
</style> 

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/i18n/datepicker-es.js"></script>

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
                    <h2 class="card-title">Gestión de Entidades</h2>
                </header>
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-6"> 
                                <div class="row">
                                    <div class="col-md-12">   
                                        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalObligacion">Agregar Nuevo Registro</button>  
                                        <!-- <button id="abrirModal" class="btn btn-primary mb-3">Agregar Nuevo Registro</button> -->
                                    </div> 
                                </div> 
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

                                        <h2 class="card-title">Listado de Entidades creadas hasta la fecha</h2>
                                    </header>
                                    <div class="card-body"> 
                                        <table class="table table-bordered table-striped mb-0" id="dataTable"> 
                                            <thead>
                                                <tr>
                                                    <th>Fecha de Ingreso</th>   
                                                    <th>Nombre</th>  
                                                    <th>Tipo</th>     
                                                    <th>Dirección</th>   
                                                    <th>Representante</th>     
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
        <form enctype="multipart/form-data" class="modal fade" id="ModalObligacion" tabindex="-1" aria-labelledby="ModalObligacionLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog modal-xl"> 
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalObligacionLabel"><b>Agregar una nueva Entidad</b></h5>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                    <div class="modal-body">
                        <div class="form-group">  
                            <div class="row">
                                <div class="col-md-2">  
                                    Nombre
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="entidad"  id="entidad" placeholder="Entidad">
                                </div> 
                                <div class="col-md-2">  
                                    Ruc
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="ruc"  id="ruc" placeholder="Ruc">
                                </div> 
                            </div>  
                            <div class="row">
                                &nbsp;
                            </div> 
                            <div class="row">
                                <div class="col-md-2">  
                                    Clase
                                </div> 
                                <div class="col-md-4">  
                                    <select id="tipo_entidad" name="tipo_entidad" class="form-control populate">
                                        <option value="-1">Seleccionar</option>
                                        @foreach($tipo_entidad as $id => $nombre)
                                            <option value="{{ $id }}">
                                                {{ $nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div> 
                                <div class="col-md-2">  
                                    Alcance
                                </div> 
                                <div class="col-md-4">  
                                    <select id="alcance" name="alcance" class="form-control populate">
                                        <option value="-1">Seleccionar</option>
                                        <option value="1">GENERAL</option>
                                        <option value="2">LOCAL</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="row">
                                &nbsp;
                            </div> 
                            <div class="row">
                                <div class="col-md-2">  
                                    Dirección
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="direccion"  id="direccion" placeholder="Calle">
                                </div> 
                                <div class="col-md-2">  
                                    Teléfono
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="telefono"  id="telefono" placeholder="Manzana">
                                </div> 
                            </div>  
                            <div class="row">
                                &nbsp;
                            </div> 
                            <div class="row">
                                <div class="col-md-2">  
                                    Representante
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="representante"  id="representante" placeholder="Número">
                                </div> 
                                <div class="col-md-2">  
                                    Teléfono Representante
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="telefono_representante"  id="telefono_representante" placeholder="Intersección">
                                </div> 
                            </div>  
                            <div class="row">
                                &nbsp;
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
                                    &nbsp;
                                </div> 
                                <div class="col-md-4">  
                                    &nbsp;
                                </div> 
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <!-- <button type="button" class="btn btn-secondary cerrar-modal">Cerrar</button> -->
                        <button type="button" class="btn btn-primary" id="btn-register-entidad">Guardar</button>
                    </div>
                </div>
            </div>
        </form>


        <form enctype="multipart/form-data" class="modal fade" id="ModalModificarEstablecimiento" tabindex="-1" aria-labelledby="ModalModificarEstablecimientoLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalModificarEstablecimientoLabel"><b>Modificar Entidad</b></h5>
                        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> --> 
                    </div>
                    <div class="modal-body">
                        <div class="form-group">  
                            <div class="row">
                                <div class="col-md-2">  
                                    Entidad
                                    <input type="hidden" id="entidad_id" name="entidad_id" value="">
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="entidad_mod"  id="entidad" placeholder="Entidad">
                                </div> 
                                <div class="col-md-2">  
                                    Ruc
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="ruc"  id="ruc" placeholder="Ruc">
                                </div> 
                            </div>  
                            <div class="row">
                                &nbsp;
                            </div> 
                            <div class="row">
                                <div class="col-md-2">  
                                    Clase
                                </div> 
                                <div class="col-md-4">  
                                    <select id="tipo_entidad" name="tipo_entidad" class="form-control populate">
                                        <option value="-1">Seleccionar</option>
                                        @foreach($tipo_entidad as $id => $nombre)
                                            <option value="{{ $id }}">
                                                {{ $nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div> 
                                <div class="col-md-2">  
                                    &nbsp;
                                </div> 
                                <div class="col-md-4">  
                                    &nbsp;
                                </div> 
                            </div>
                            <div class="row">
                                &nbsp;
                            </div> 
                            <div class="row">
                                <div class="col-md-2">  
                                    Dirección
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="direccion"  id="direccion" placeholder="Calle">
                                </div> 
                                <div class="col-md-2">  
                                    Teléfono
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="telefono"  id="telefono" placeholder="Manzana">
                                </div> 
                            </div>  
                            <div class="row">
                                &nbsp;
                            </div> 
                            <div class="row">
                                <div class="col-md-2">  
                                    Representante
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="representante"  id="representante" placeholder="Número">
                                </div> 
                                <div class="col-md-2">  
                                    Teléfono Representante
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="telefono_representante"  id="telefono_representante" placeholder="Intersección">
                                </div> 
                            </div>  
                            <div class="row">
                                &nbsp;
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
                                    &nbsp;
                                </div> 
                                <div class="col-md-4">  
                                    &nbsp;
                                </div> 
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="btn-close" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-modificar-camara">Guardar Cambios</button>
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
                url: "{{ route('admin.obtener_listado_entidades') }}",
                type: "GET",
                data: function (d) {
                    d.start = d.start || 0;
                    d.length = d.length || 10;
                    d.id_camara = $('#camara').val(); // Enviar el valor de localidad seleccionada
                },
                error: function (error) {
                    console.error("Error al cargar los datos: ", error);
                }
            },
            pageLength: 10, // Establece el número de registros por página
            columns: [
                { data: 'fecha_ingreso', width: '15%' }, 
                { data: 'entidad', width: '25%' }, 
                { data: 'tipo_entidad', width: '10%' },  
                { data: 'direccion', width: '15%' } ,  
                { data: 'representante', width: '15%' } , 
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


        $('#abrirModal').click(function (e) {
            e.preventDefault(); // Evita el comportamiento predeterminado del botón

            // Verificar si se seleccionó una opción válida en el select
            var camaraSeleccionada = $('#camara').val();
            var nombreCamaraSeleccionada = $('#camara option:selected').text();

            if (camaraSeleccionada === '-1') {
                alert('Por favor, selecciona una Cámara para poder registrar un Establecimiento');
            } else {
                // Mostrar el nombre de la cámara seleccionada en el modal
                $('#nombreCamaraSeleccionada').text(nombreCamaraSeleccionada);

                // Cargar el valor de la cámara en el campo oculto
                $('#camaraHidden').val(camaraSeleccionada);

                // Abrir el modal
                $('#ModalObligacion').modal('show');
            }
        });

        // Cerrar el modal manualmente
        $('.cerrar-modal').click(function () {
            $('#ModalObligacion').modal('hide'); // Cerrar el modal
        });

        // Escucha el cambio en el select tipo_entidad
        $('#alcance').change(function () {
            // Obtén el valor seleccionado
            const tipoEntidad = $(this).val();

            // Deshabilitar o habilitar los selects según el valor
            if (tipoEntidad === '1') { // General
                $('#pais, #provincia, #canton').prop('disabled', true);
            } else if (tipoEntidad === '2') { // Local
                $('#pais, #provincia, #canton').prop('disabled', false);
                // Seleccionar automáticamente el valor '1' en el combo de país
                $('#pais').val('-1').change(); // Llamamos a .change() para disparar eventos asociados si los hay
            } else {
                // Si no se selecciona una opción válida, deshabilitamos los campos por defecto
                $('#pais, #provincia, #canton').prop('disabled', true);
            }
        });

        // Inicializar los selects deshabilitados por defecto
        $('#pais, #provincia, #canton').prop('disabled', true);

        $("#btn-register-entidad").click(function() { 

            if ($('#entidad').val() == "") {
                alert('Debe ingresar el nombre de la Entidad'); 
                $('#entidad').focus();
                return;
            }

            if ($('#ruc').val() == "") {
                alert('Debe ingresar el Ruc de la Entidad'); 
                $('#entidad').focus();
                return;
            }

            if ($('#tipo_entidad').val() == "1") {
                alert('Debe seleccionar la Clase de Entidad'); 
                $('#entidad').focus();
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

                // Función para convertir una fecha en formato dd/mm/yyyy a objeto Date
                function convertirFechaAObjetoDate(fecha) {
                    if (!fecha) return new Date('Invalid Date'); // Retorna una fecha inválida si la entrada es nula
                    var partes = fecha.split('/'); // Divide la fecha por '/'
                    return new Date(partes[2], partes[1] - 1, partes[0]); // Formato DD/MM/YYYY
                }

                // Validación de que la Fecha de Constitución sea menor a la Fecha de Registro
                var fechaConstitucion = $('#fecha_constitucion').val();
                var fechaRegistro = $('#fecha_registro').val();

                if (fechaConstitucion && fechaRegistro) {
                    // Convertir las fechas al formato correcto
                    var fechaConstitucionDate = convertirFechaAObjetoDate(fechaConstitucion);
                    var fechaRegistroDate = convertirFechaAObjetoDate(fechaRegistro);

                    // Validar si las fechas son válidas
                    if (!isNaN(fechaConstitucionDate.getTime()) && !isNaN(fechaRegistroDate.getTime())) {
                        if (fechaConstitucionDate >= fechaRegistroDate) {
                            alert('La Fecha de Constitución debe ser menor a la Fecha de Registro');
                            $('#error-fecha-constitucion').show();
                            $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                            $('#fecha_constitucion').focus();
                            return;
                        }
                    } else {
                        alert('Una o ambas fechas no son válidas. Por favor, verifica los campos.');
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

                if ($('#hiddenSelectedItems').val() == "") {
                    alert('Debe seleccionar al menos una Actividad Económica');  
                    $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show'); 
                    $('#hiddenSelectedItems').focus();
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


        // Función para cargar provincias
        function cargarProvincias(paisId) {
            return $.ajax({
                url: '/get-provincias',
                method: 'GET',
                data: { id_pais: paisId },
                success: function (response) {
                    let provincias = response.provincias;
                    let $provinciaSelect = $('#provincia_mod');
                    $provinciaSelect.empty().append('<option value="-1">Seleccionar</option>');

                    provincias.forEach(function (provincia) {
                        $provinciaSelect.append(`<option value="${provincia.id}">${provincia.nombre}</option>`);
                    });
                },
                error: function () {
                    alert('Hubo un error al cargar las provincias.');
                }
            });
        }

        // Función para cargar cantones
        function cargarCantones(paisId, provinciaId) {
            return $.ajax({
                url: '/get-cantones',
                method: 'GET',
                data: { id_pais: paisId, id_provincia: provinciaId },
                success: function (response) {
                    let cantones = response.cantones;
                    let $cantonSelect = $('#canton_mod');
                    $cantonSelect.empty().append('<option value="-1">Seleccionar</option>');

                    cantones.forEach(function (canton) {
                        $cantonSelect.append(`<option value="${canton.id}">${canton.nombre}</option>`);
                    });
                },
                error: function () {
                    alert('Hubo un error al cargar los cantones.');
                }
            });
        }

        // Función para cargar parroquias
        function cargarParroquias(paisId, provinciaId, cantonId) {
            return $.ajax({
                url: '/get-parroquias',
                method: 'GET',
                data: { id_pais: paisId, id_provincia: provinciaId, id_canton: cantonId },
                success: function (response) {
                    let parroquias = response.parroquias;
                    let $parroquiaSelect = $('#parroquia_mod');
                    $parroquiaSelect.empty().append('<option value="-1">Seleccionar</option>');

                    parroquias.forEach(function (parroquia) {
                        $parroquiaSelect.append(`<option value="${parroquia.id}">${parroquia.nombre}</option>`);
                    });
                },
                error: function () {
                    alert('Hubo un error al cargar las parroquias.');
                }
            });
        }

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
                        let $cantonSelect = $('#canton');
                        let $parroquiaSelect = $('#parroquia');
                        
                        $provinciaSelect.empty(); // Limpiamos el select de provincias
                        $provinciaSelect.append('<option value="-1">Seleccionar</option>'); // Opción por defecto

                        $cantonSelect.empty(); // Limpiamos el select de provincias
                        $cantonSelect.append('<option value="-1">Seleccionar</option>'); // Opción por defecto
                        
                        $parroquiaSelect.empty(); // Limpiamos el select de provincias
                        $parroquiaSelect.append('<option value="-1">Seleccionar</option>'); // Opción por defecto

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

        $('#pais_mod').change(function () {
            let paisId = $(this).val();

            if (paisId != -1) {
                $.ajax({
                    url: '/get-provincias', // Ruta para obtener las provincias
                    method: 'GET',
                    data: { id_pais: paisId },
                    success: function (response) {
                        let provincias = response.provincias;
                        let $provinciaSelect = $('#provincia_mod');
                        let $cantonSelect = $('#canton_mod');
                        let $parroquiaSelect = $('#parroquia_mod');
                        
                        $provinciaSelect.empty(); // Limpiamos el select de provincias
                        $provinciaSelect.append('<option value="-1">Seleccionar</option>'); // Opción por defecto

                        $cantonSelect.empty(); // Limpiamos el select de provincias
                        $cantonSelect.append('<option value="-1">Seleccionar</option>'); // Opción por defecto
                        
                        $parroquiaSelect.empty(); // Limpiamos el select de provincias
                        $parroquiaSelect.append('<option value="-1">Seleccionar</option>'); // Opción por defecto

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

        $('#provincia_mod').change(function () {
            let paisId = $('#pais_mod').val(); // ID del país seleccionado
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
                        let $cantonSelect = $('#canton_mod'); // Select de cantones
                        let $parroquiaSelect = $('#parroquia_mod'); // Select de parroquias
                        
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
                $('#canton_mod').empty().append('<option value="-1">Seleccionar</option>'); // Limpiar select de cantones
                $('#parroquia_mod').empty().append('<option value="-1">Seleccionar</option>'); // Limpiar select de parroquias
            }
        });

        $('#canton_mod').change(function () {
            let paisId = $('#pais_mod').val(); // ID del país seleccionado
            let provinciaId = $('#provincia_mod').val(); // ID de la provincia seleccionada
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
                        let $parroquiaSelect = $('#parroquia_mod'); // Select de parroquias
                        
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
                $('#parroquia_mod').empty().append('<option value="-1">Seleccionar</option>'); // Limpiar select de parroquias
            }
        });


   
    });

</script>
@endsection  