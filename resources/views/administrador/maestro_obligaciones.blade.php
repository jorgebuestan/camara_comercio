@extends('dashboard')

@section('pagename')
Maestro de Obligaciones
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
                    <h2 class="card-title">Gestión de Obligaciones</h2>
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

                                        <h2 class="card-title">Listado de Obligaciones creadas</h2>
                                    </header>
                                    <div class="card-body"> 
                                        <table class="table table-bordered table-striped mb-0" id="dataTable"> 
                                            <thead>
                                                <tr>
                                                    <th>Obligación</th>   
                                                    <th>Tiempo de Presentación</th>  
                                                    <th>Tipo de Presentación</th>      
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
                        <h5 class="modal-title" id="ModalObligacionLabel"><b>Agregar una nueva Obligación</b></h5>
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
                                <div class="col-md-10">  
                                    <input type="text" class="form-control" name="obligacion"  id="obligacion" placeholder="Obligación">
                                </div>  
                            </div>  
                            <div class="row">
                                &nbsp;
                            </div> 
                            <div class="row">
                                <div class="col-md-2">  
                                    Tiempo de Presentación
                                </div> 
                                <div class="col-md-4">  
                                    <select id="tiempo_presentacion" name="tiempo_presentacion" class="form-control populate">
                                        <option value="-1">Seleccionar</option>
                                        @foreach($tiempo_presentacion as $id => $nombre)
                                            <option value="{{ $id }}">
                                                {{ $nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div> 
                                <div class="col-md-2">  
                                    Tipo de Presentación
                                </div> 
                                <div class="col-md-4">  
                                    <select id="tipo_presentacion" name="tipo_presentacion" disabled class="form-control populate">
                                        <option value="-1">Seleccionar</option>
                                        @foreach($tipo_presentacion as $id => $nombre)
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
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <!-- <button type="button" class="btn btn-secondary cerrar-modal">Cerrar</button> -->
                        <button type="button" class="btn btn-primary" id="btn-register-obligacion">Guardar</button>
                    </div>
                </div>
            </div>
        </form>


        <form enctype="multipart/form-data" class="modal fade" id="ModalModificarObligacion" tabindex="-1" aria-labelledby="ModalModificarObligacionLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalModificarObligacionLabel"><b>Modificar Entidad</b></h5>
                        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> --> 
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="btn-close" data-dismiss="modal">Cerrar</button>
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> -->
                        <button type="button" class="btn btn-primary" id="btn-modificar-entidad">Guardar Cambios</button>
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
                url: "{{ route('admin.obtener_listado_obligaciones') }}",
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
                { data: 'obligacion', width: '50%' },   
                { data: 'tiempo_presentacion', width: '15%' } ,  
                { data: 'tipo_presentacion', width: '15%' } , 
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

        //Manejo de Upercase 
        $('#obligacion').on('input', function() {
            // Convierte el valor del campo a mayúsculas
            $(this).val($(this).val().toUpperCase());
        }); 

        $('#obligacion_mod').on('input', function() {
            // Convierte el valor del campo a mayúsculas
            $(this).val($(this).val().toUpperCase());
        }); 

        // Escucha el cambio en el select tipo_presentacion
        $('#tiempo_presentacion').change(function () {
            // Obtén el valor seleccionado
            const tiempoPresentacion = $(this).val();

            // Deshabilitar o habilitar los selects según el valor
            if (tiempoPresentacion === '1') { // General

                $('#tipo_presentacion').prop('disabled', true);
                $('#tipo_presentacion').val('-1').change();  

            } else if (tiempoPresentacion === '2') { // Local
                $('#tipo_presentacion').prop('disabled', false); 
                $('#tipo_presentacion').val('-1').change();  
            } else {
                // Si no se selecciona una opción válida, deshabilitamos los campos por defecto
                $('#tipo_presentacion').prop('disabled', true);
                $('#tipo_presentacion').val('-1').change();  
            }
        });

        $('#tiempo_presentacion_mod').change(function () {
            // Obtén el valor seleccionado
            const tiempoPresentacion = $(this).val();

            // Deshabilitar o habilitar los selects según el valor
            if (tiempoPresentacion === '1') { // General

                $('#tipo_presentacion_mod').prop('disabled', true);
                $('#tipo_presentacion_mod').val('-1').change();  

            } else if (tiempoPresentacion === '2') { // Local
                $('#tipo_presentacion_mod').prop('disabled', false); 
                $('#tipo_presentacion_mod').val('-1').change();  
            } else {
                // Si no se selecciona una opción válida, deshabilitamos los campos por defecto
                $('#tipo_presentacion_mod').prop('disabled', true);
                $('#tipo_presentacion_mod').val('-1').change();  
            }
        }); 

        // Inicializar los selects deshabilitados por defecto
        $('#tipo_presentacion_mod').prop('disabled', true);

        $('#btn-close').on('click', function () {
            // Aquí puedes añadir la lógica para enviar el formulario modificado
            $('#ModalModificarObligacion').modal('hide'); // Cerrar el modal después de guardar
        });

        $("#btn-register-obligacion").click(function () {

            if ($('#obligacion').val() == "") {
                alert('Debe ingresar el nombre de la Obligación');
                $('#entidad').focus();
                return;
            } 

            if ($('#tiempo_presentacion').val() == "-1") {
                alert('Debe seleccionar el Tiempo de Presentación');
                $('#entidad').focus();
                return;
            }

            if ($('#tiempo_presentacion').val() == "2") {
                if ($('#tipo_presentacion').val() == "-1") {
                    alert('Debe seleccionar el Tipo de Presentación');
                    $('#entidad').focus();
                    return;
                }
            } 

            // Verificar si hay registros similares antes de proceder
            const entidad = $('#obligacion').val(); 

            $.ajax({
                url: "{{ route('admin.check_obligacion') }}", // Ruta para verificar similitudes
                type: "POST",
                data: {
                    entidad: entidad, 
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    if (response.similar.length > 0) {
                        // Mostrar mensaje de confirmación al usuario
                        const similarMessage = `Se encontraron registros similares:\n- ${response.similar.join('\n- ')}\n\n¿Está seguro de registrar esta entidad de todas formas?`;

                        if (!confirm(similarMessage)) {
                            return; // Detener la ejecución si el usuario cancela
                        }
                    }

                    // Si no hay similitudes o el usuario confirma, proceder con el registro
                    registrarEntidad();
                },
                error: function () {
                    alert('Error al verificar registros similares. Intente nuevamente.');
                }
            });
        });

        $("#btn-modificar-entidad").click(function () {

            if ($('#entidad_mod').val() == "") {
                alert('Debe ingresar el nombre de la Entidad');
                $('#entidad_mod').focus();
                return;
            }

            if (!/^\d{13}$/.test($('#ruc_mod').val())) {
                $("#error-ruc-mod").show();
                alert('El RUC debe tener 13 dígitos');
                $('#ruc_mod').focus();
                return;
            }

            if ($('#tipo_presentacion_mod').val() == "-1") {
                alert('Debe seleccionar la Clase de Entidad');
                $('#entidad_mod').focus();
                return;
            }

            if ($('#alcance_mod').val() == "-1") {
                alert('Debe seleccionar un alcance para la Entidad');
                $('#entidad_mod').focus();
                return;
            }

            if ($('#direccion_mod').val() == "") {
                alert('Debe ingresar la Dirección de la Entidad');
                $('#direccion_mod').focus();
                return;
            }

            if ($('#telefono_mod').val() == "") {
                alert('Debe ingresar el Teléfono de la Entidad');
                $('#telefono_mod').focus();
                return;
            }

            if ($('#alcance_mod').val() == "2") {

                if ($('#pais_mod').val() == "-1" || $('#provincia_mod').val() == "-1" || $('#canton_mod').val() == "-1") {
                    alert('Si seleccionó que alcance de la Entidad es local, debe seleccionar País, Provincia y Cantón');
                    return;
                }
            }

            // Verificar si hay registros similares antes de proceder
            const entidadId = $('#entidad_id').val();
            const entidad = $('#entidad_mod').val();
            const ruc = $('#ruc_mod').val();

            $.ajax({
                url: "{{ route('admin.check_entidad_modificar') }}", // Ruta para verificar similitudes
                type: "POST",
                data: {
                    entidad: entidad,
                    ruc: ruc,
                    entidad_id: entidadId, // Enviar el ID actual
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    /*if (response.similar.length > 0) {
                        // Filtrar el propio registro en caso de estar en los resultados
                        const registrosSimilares = response.similar.filter(sim => sim.id !== entidadId);

                        if (registrosSimilares.length > 0) {
                            const similarMessage = `Se encontraron registros similares:\n- ${registrosSimilares.map(s => s.entidad).join('\n- ')}\n\n¿Está seguro de modificar esta entidad de todas formas?`;

                            if (!confirm(similarMessage)) {
                                return; // Detener la ejecución si el usuario cancela
                            }
                        }
                    }*/
                    if (response.similar.length > 0) {
                        // Mostrar mensaje de confirmación al usuario
                        const similarMessage = `Se encontraron registros similares:\n- ${response.similar.join('\n- ')}\n\n¿Está seguro de registrar esta entidad de todas formas?`;

                        if (!confirm(similarMessage)) {
                            return; // Detener la ejecución si el usuario cancela
                        }
                    }

                    // Proceder con la modificación
                    modificarEntidad();
                },
                error: function () {
                    alert('Error al verificar registros similares. Intente nuevamente.');
                }
            });
        }); 

        function registrarEntidad() {
            var formData = new FormData(document.getElementById("ModalObligacion"));
            $('#carga').show();

            $.ajax({
                url: "{{ route('admin.registrar_obligacion') }}",
                type: "POST",
                data: formData,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false
            }).done(function (res) {
                $('#carga').hide();
                alert(res.success); // Mostrar el mensaje de éxito en un alert
                location.reload(); // Recargar la página
            }).fail(function (res) {
                $('#carga').hide();

                if (res.status === 422) {
                    let errors = res.responseJSON;
                    if (errors.error) {
                        alert(errors.error);
                    }
                } else {
                    alert("Ocurrió un error al registrar la obligacion.");
                }

                console.log(res.responseText); // Muestra el error completo en la consola para depuración
            });
        }

        function modificarEntidad() {
            var formData = new FormData(document.getElementById("ModalModificarObligacion"));
            $('#carga').show();

            $.ajax({
                url: "{{ route('admin.modificar_entidad') }}",
                type: "POST",
                data: formData,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false
            }).done(function (res) {
                $('#carga').hide();
                alert(res.success); // Mostrar el mensaje de éxito en un alert
                location.reload(); // Recargar la página
            }).fail(function (res) {
                $('#carga').hide();

                if (res.status === 422) {
                    let errors = res.responseJSON;
                    if (errors.error) {
                        alert(errors.error);
                    }
                } else {
                    alert("Ocurrió un error al modificar la entidad.");
                }

                console.log(res.responseText); // Muestra el error completo en la consola para depuración
            });
        }

        // Delegar el evento de clic al documento para asegurar que funcione con elementos dinámicos
        $(document).on('click', '.open-modal', function() {
            console.log('Botón clicado...');
            var button = $(this); 
            var entidadId = button.data('id'); 

            console.log('Cargo ID:', entidadId);  

            $('#carga').show();

            
            $.ajax({
                url: '/administrador/entidad/detalle/' + entidadId,
                method: 'GET',
                success: function(response) {
                    console.log('Datos recibidos:', response);

                    var entidadId = $('#entidad_id');
                    var Entidad = $('#entidad_mod');  
                    var Ruc = $('#ruc_mod'); 
                    var tiempoPresentacion = $('#tipo_presentacion_mod'); 
                    var Alcance = $('#alcance_mod'); 
                    var Direccion = $('#direccion_mod');  
                    var Telefono = $('#telefono_mod');  
                    var Representante = $('#representante_mod');  
                    var TelefonoRepresentante = $('#telefono_representante_mod');  
                    var Pais = $('#pais_mod'); 
                    var Provincia = $('#provincia_mod'); 
                    var Canton = $('#canton_mod'); 

 
                    entidadId.val(response.id); 
                    Entidad.val(response.entidad);
                    Ruc.val(response.ruc); 
                    tiempoPresentacion.val(response.id_tipo_presentacion); 
                    Alcance.val(response.alcance); 
                    Direccion.val(response.direccion); 
                    Telefono.val(response.telefono); 
                    Representante.val(response.representante); 
                    TelefonoRepresentante.val(response.telefono_representante);  
                     
                    if(response.id_pais!=0){
                             // Asignar país y disparar cambio para cargar provincias
                        $('#pais_mod').val(response.id_pais).trigger('change');

                        // Cargar provincias y asignar provincia
                        cargarProvincias(response.id_pais).then(() => {
                            $('#provincia_mod').val(response.id_provincia).trigger('change');

                            // Cargar cantones y asignar cantón
                            cargarCantones(response.id_pais, response.id_provincia).then(() => {
                                $('#canton_mod').val(response.id_canton).trigger('change'); 
                            });
                        });   
                    }else{
                        $('#pais_mod, #provincia_mod, #canton_mod').prop('disabled', true);
                        $('#pais_mod').val('-1').change(); // Llamamos a .change() para disparar eventos asociados si los hay
                        $('#provincia_mod').val('-1').change();
                        $('#canton_mod').val('-1').change();
                    }
                   
                    $('#carga').hide();
                    $('#ModalModificarObligacion').modal('show');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        $(document).on('click', '.delete-entidad', function() {
            var button = $(this); 
            var entidadId = button.data('id'); 

            // Mostrar la confirmación antes de proceder con la eliminación
            var confirmDelete = confirm('¿Está seguro de que desea eliminar este registro?');

            if (confirmDelete) {
                $.ajax({
                    url: '/administrador/entidad/eliminar/' + entidadId,
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