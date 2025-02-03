@extends('dashboard')

@section('pagename')
    Socios por Cámara
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .rowborder {
            margin: 20px;
            /* Establece el margen deseado */
            padding: 10px;
            /* Añade un relleno interno para separar el contenido del margen */
            border: 2px solid #ccc;
            /* Añade un borde para crear el efecto rectangular */
            border-radius: 10px;
            /* Agrega bordes circulares en las esquinas */
            box-sizing: border-box;
            /* Incluye el borde y el relleno en el tamaño total del elemento */
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
                        <h2 class="card-title">Gestión de Socios por Cámara</h2>
                    </header>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <select id="camara" name="camara" data-plugin-selectTwo class="form-control populate"
                                            @if (!$isAdmin) disabled @endif>
                                            @if ($isAdmin)
                                                <option value=-1>Seleccionar Cámara</option>
                                            @endif
                                            @foreach ($camaras as $id => $descripcion)
                                                <option value={{ $id }}>{{ $descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalEstablecimiento">Agregar Nuevo Registro</button> -->
                                        <button id="abrirModal" class="btn btn-primary mb-3">Agregar Nuevo Socio</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 d-flex align-items-end">
                                Estado
                            </div>
                            <div class="col-md-2">
                                <div class="row">
                                    <select id="estado_socios" name="estado_socios" class="form-control populate">  
                                        <option value=1>Todos</option> 
                                        <option value=2>Afiliados</option> 
                                        <option value=3>Desafiliados</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-1">
                                &nbsp;
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                &nbsp;
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <section class="card">
                                    <header class="card-header">
                                        <h2 class="card-title">Listado de Socios Registrados por Cámara</h2>
                                    </header>
                                    <div class="card-body overflow-x-auto max-w-full">
                                        <table class="table table-bordered table-striped mb-0" id="dataTable">
                                            <thead>
                                                <tr>
                                                    <th>CONSECUTIVO</th>
                                                    <th>FECHA AFILIACIÓN</th>
                                                    <th>IDENTIFICACIÓN</th>
                                                    <th>RAZÓN SOCIAL</th>
                                                    <th>TIPO DE PERSONERÍA</th>
                                                    <th>FECHA DESAFILIACIÓN</th>
                                                    <th>MOTIVO DESAFILIACIÓN</th>
                                                    <th>ACCIONES</th>
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
    <!-- Jbuestan Modales -->
    <form enctype="multipart/form-data" class="modal fade" id="ModalSocio" tabindex="-1" aria-labelledby="ModalSocioLabel"
        aria-hidden="true">
        @csrf
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalSocioLabel"><b>Agregar una nuevo Socio a la Cámara</b></h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <p><strong>Cámara Seleccionada:</strong> <span id="nombrecamaraSeleccionada"></span></p>
                                <!-- Campo oculto para enviar el valor de la entidad -->
                                <input type="hidden" id="socio_id" name="socio_id" value="">
                                <input type="hidden" id="camara_id" name="camara_id" value="">
                            </div>
                            <div class="col-3">
                                &nbsp;
                            </div>
                            <div class="col-3 text-end">
                                <button type="button" id="agregarSocio" class="btn btn-primary mb-3">Agregar Socio</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Nombre
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="razon_social" disabled id="razon_social"
                                    placeholder="Razón Social">
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Identificación
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="identificacion" disabled
                                    id="identificacion" placeholder="Identificación">
                            </div>
                            <div class="col-md-2">
                                Fecha de Afiliación
                            </div>
                            <div class="col-md-4">
                                <input type="text" data-plugin-datepicker class="form-control" name="fecha_afiliacion"
                                    id="fecha_afiliacion" placeholder="Fecha de Afiliación">
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped mb-0" id="dataTableSocios">
                                    <thead>
                                        <tr>
                                            <th>CONSECUTIVO</th>
                                            <th>IDENTIFICACIÓN</th>
                                            <th>RAZÓN SOCIAL</th>
                                            <th>TIPO DE PERSONERÍA</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> -->
                    <button type="button" class="btn btn-secondary cerrar-modal">Cerrar</button>
                    <!--<button type="button" class="btn btn-primary" id="btn-register-obligacion">Guardar</button>-->
                </div>
            </div>
        </div>
    </form>

    <form enctype="multipart/form-data" class="modal fade" id="ModalModificarSocio" tabindex="-1"
        aria-labelledby="ModalModificarSocioLabel" aria-hidden="true">
        @csrf
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalModificarSocioLabel"><b>Modificar Socio del listado de la Cámara</b>
                    </h5>
                    <button type="button" class="btn btn-warning" id="btn-more-info">
                        <i class="fas fa-info"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <p><strong>Cámara Seleccionada:</strong> <span id="nombrecamaraSeleccionadaMod"></span></p>
                                <!-- Campo oculto para enviar el valor de la entidad -->
                                <input type="hidden" id="socio_camara_id_mod" name="socio_camara_id_mod"
                                    value="">
                                <input type="hidden" id="socio_id_mod" name="socio_id_mod" value="">
                                <input type="hidden" id="camara_id_mod" name="camara_id_mod" value="">
                            </div>
                            <div class="col-3">
                                &nbsp;
                            </div>
                            <div class="col-3 text-end">
                                <button type="button" id="modificarSocio" name = "modificarSocio"
                                    class="btn btn-primary mb-3">Modificar Socio</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Nombre
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="razon_social_mod" disabled
                                    id="razon_social_mod" placeholder="Razón Social">
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Identificación
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="identificacion_mod" disabled
                                    id="identificacion_mod" placeholder="Identificación">
                            </div>
                            <div class="col-md-2">
                                Fecha de Afiliación
                            </div>
                            <div class="col-md-4">
                                <input type="text" data-plugin-datepicker class="form-control"
                                    name="fecha_afiliacion_mod" id="fecha_afiliacion_mod"
                                    placeholder="Fecha de Afiliación">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> -->
                    <button type="button" class="btn btn-secondary cerrar-modal-mod">Cerrar</button>
                    <!--<button type="button" class="btn btn-primary" id="btn-register-obligacion">Guardar</button>-->
                </div>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {

            //alert($('#camara').val());
            let establecimientos = [];
            let camara_socio_selected = null;
            Swal.fire({
                title: 'Cargando',
                text: 'Por favor espere',
                icon: 'info',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading()
                }
            });

            var table = $('#dataTable').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.obtener_listado_socios_por_camara') }}",
                    type: "GET",
                    data: function(d) {
                        d.start = d.start || 0;
                        d.length = d.length || 10;
                        d.id_camara = $('#camara').val(); // Enviar el valor de localidad seleccionada
                        d.estado = $('#estado_socios').val(); // Enviar el valor de localidad seleccionada
                    },
                    error: function(error) {
                        console.error("Error al cargar los datos: ", error);
                    },
                    complete: function(response) {
                        establecimientos = response.responseJSON.data;
                        Swal.close();
                    },
                },
                pageLength: 10, // Establece el número de registros por página
                columns: [{
                        data: 'consecutivo',
                        width: '5%'
                    },{
                        data: 'fecha_afiliacion',
                        width: '10%'
                    },
                    {
                        data: 'identificacion',
                        width: '10%'
                    },
                    {
                        data: 'razon_social',
                        width: '30%'
                    },
                    {
                        data: 'tipo_personeria',
                        width: '15%'
                    },
                    {
                        data: 'fecha_desafiliacion',
                        width: '10%'
                    },
                    {
                        data: 'motivo_desafiliacion',
                        width: '10%'
                    },
                    {
                        data: 'btn',
                        width: '20%'
                    }
                ],
                order: [
                    [0, "asc"]
                ],
                createdRow: function(row, data, dataIndex) {
                    var td = $(row).find(".truncate");
                    td.attr("title", td.text());

                    var td2 = $(row).find(".truncate2");
                    td2.attr("title", td2.text());
                }
            });

            // Escuchar el evento change del select de cámaras
            $('#camara').change(function() {
                let selectedCamara = $(this).val();

                if (selectedCamara === '-1') {
                    //alert('Por favor selecciona una cámara válida.');
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Por favor selecciona una cámara válida.',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    table.ajax.reload();
                } else {
                    Swal.fire({
                        title: 'Cargando',
                        text: 'Por favor espere',
                        icon: 'info',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    });
                    table.ajax.reload(); // Recargar la tabla con la cámara seleccionada
                }
            });

            $('#estado_socios').change(function() { 
                Swal.fire({
                    title: 'Cargando',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });
                table.ajax.reload(); // Recargar la tabla con la cámara seleccionada 
            });


            $('#abrirModal').click(function(e) {
                e.preventDefault(); // Evita el comportamiento predeterminado del botón

                // Verificar si se seleccionó una opción válida en el select
                var camaraSeleccionada = $('#camara').val();
                var nombrecamaraSeleccionada = $('#camara option:selected').text();

                if (camaraSeleccionada === '-1') {
                    //alert('Por favor, selecciona una Entidad para poder registrar una Obligación');
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Por favor, selecciona una Cámara para poder registrar un nuevo Socio',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    // return;
                } else {
                    // Mostrar el nombre de la cámara seleccionada en el modal
                    $('#nombrecamaraSeleccionada').text(nombrecamaraSeleccionada);
                    // Cargar el valor de la cámara en el campo oculto
                    $('#camara_id').val(camaraSeleccionada);
                    // Abrir el modal

                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        title: 'Cargando',
                        text: 'Por favor espere',
                        icon: 'info',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    });
                    var table = $('#dataTableSocios').DataTable({
                        destroy: true,
                        processing: true,
                        serverSide: true,
                        ajax: {
                            url: "{{ route('admin.obtener_listado_socios_registros_camara') }}",
                            type: "GET",
                            data: function(d) {
                                d.start = d.start || 0;
                                d.length = d.length || 10;
                                d.tipo_boton = 2; // Enviar el valor de localidad seleccionada
                            },
                            error: function(error) {
                                console.error("Error al cargar los datos: ", error);
                            },
                            complete: function(response) {
                                establecimientos = response.responseJSON.data;
                                Swal.close();
                            },
                        },
                        pageLength: 10, // Establece el número de registros por página
                        columns: [{
                                data: 'consecutivo',
                                width: '5%'
                            },{
                                data: 'identificacion',
                                width: '15%'
                            },
                            {
                                data: 'razon_social',
                                width: '45%'
                            },
                            {
                                data: 'tipo_personeria',
                                width: '15%'
                            },
                            {
                                data: 'btn',
                                width: '20%'
                            }
                        ],
                        order: [
                            [0, "asc"]
                        ],
                        createdRow: function(row, data, dataIndex) {
                            var td = $(row).find(".truncate");
                            td.attr("title", td.text());

                            var td2 = $(row).find(".truncate2");
                            td2.attr("title", td2.text());
                        }
                    });

                    $('#ModalSocio').modal('show');
                }
            });

            // Cerrar el modal manualmente
            $('.cerrar-modal').click(function() {
                $('#ModalSocio').modal('hide'); // Cerrar el modal
            });

            $('.cerrar-modal-mod').click(function() {
                $('#ModalModificarSocio').modal('hide'); // Cerrar el modal
            });

            //Manejo de Uppercase
            $('#nombre_comercial').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            // Establecer el idioma de forma global para todos los datepickers
            $.datepicker.regional['es'] = {
                closeText: 'Cerrar',
                prevText: '<Ant',
                nextText: 'Sig>',
                currentText: 'Hoy',
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',
                    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                ],
                monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov',
                    'Dic'
                ],
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
                weekHeader: 'Sm',
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''
            };
            $.datepicker.setDefaults($.datepicker.regional['es']);

            $('#fecha_presentacion').datepicker('destroy').datepicker({
                format: 'dd/mm/yyyy', // Define el formato de fecha
                autoclose: true, // Cierra automáticamente al seleccionar
                todayHighlight: true, // Resalta la fecha actual
                language: 'es' // Asegúrate de establecer el idioma correcto
            });

            $('#fecha_inicio').datepicker('destroy').datepicker({
                format: 'dd/mm/yyyy', // Define el formato de fecha
                autoclose: true, // Cierra automáticamente al seleccionar
                todayHighlight: true, // Resalta la fecha actual
                language: 'es' // Asegúrate de establecer el idioma correcto
            });

            $('#fecha_presentacion_mod').datepicker('destroy').datepicker({
                format: 'dd/mm/yyyy', // Define el formato de fecha
                autoclose: true, // Cierra automáticamente al seleccionar
                todayHighlight: true, // Resalta la fecha actual
                language: 'es' // Asegúrate de establecer el idioma correcto
            });

            $('#fecha_inicio_mod').datepicker('destroy').datepicker({
                format: 'dd/mm/yyyy', // Define el formato de fecha
                autoclose: true, // Cierra automáticamente al seleccionar
                todayHighlight: true, // Resalta la fecha actual
                language: 'es' // Asegúrate de establecer el idioma correcto
            });


            $('#fecha_afiliacion').datepicker('destroy').datepicker({
                format: 'dd/mm/yyyy', // Define el formato de fecha
                autoclose: true, // Cierra automáticamente al seleccionar
                todayHighlight: true, // Resalta la fecha actual
                language: 'es' // Asegúrate de establecer el idioma correcto
            });

            $('#fecha_afiliacion_mod').datepicker('destroy').datepicker({
                format: 'dd/mm/yyyy', // Define el formato de fecha
                autoclose: true, // Cierra automáticamente al seleccionar
                todayHighlight: true, // Resalta la fecha actual
                language: 'es' // Asegúrate de establecer el idioma correcto
            });

            $(document).on('click', '.seleccionar-socio', function() {
                var button = $(this);
                var socioId = button.data('id');
                ///alert(socioId); return;

                Swal.fire({
                    target: document.getElementById('ModalSocio'),
                    title: 'Cargando',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });

                $.ajax({
                    url: '/administrador/socio/detalle/' + socioId,
                    method: 'GET',
                    success: function(response) {
                        console.log('Datos recibidos:', response);

                        var socioId = $('#socio_id');
                        var razonSocial = $('#razon_social');
                        var identificacion = $('#identificacion');

                        socioId.val(response.id);
                        razonSocial.val(response.razon_social);
                        identificacion.val(response.identificacion);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    },
                    complete: function(response) {
                        //establecimientos = response.responseJSON.data;
                        Swal.close();
                    },
                });
            });

            $("#agregarSocio").click(async function() {

                if ($('#socio_id').val() == "") {
                    //alert('Debe debe seleccionar una Obligación'); 
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe debe seleccionar un Socio',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    return;
                }

                if ($('#fecha_afiliacion').val() == "") {
                    //alert('Debe ingresar la Fecha de Inicio'); 
                    await Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar la Fecha de Afiliación',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#fecha_afiliacion').focus();
                    return;
                }


                var formData = new FormData(document.getElementById("ModalSocio"));
                Swal.fire({
                    target: document.getElementById('ModalSocio'),
                    title: 'Enviando información',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });

                $.ajax({
                    url: "{{ route('admin.registrar_socio_camara') }}",
                    type: "POST",
                    data: formData,
                    dataType: "json",
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function(res) {
                    //$('#carga').hide(); 
                    Swal.close();
                    //alert(res.success); // Mostrar el mensaje de éxito en un alert
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'success', // Cambiado a 'success' para mostrar un mensaje positivo
                        title: 'Éxito',
                        text: res.success,
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    location.reload(); // Recargar la página
                }).fail(function(res) {
                    //$('#carga').hide(); 

                    if (res.status === 422) {
                        // Mostrar mensaje de error de validación
                        let errors = res.responseJSON;
                        if (errors.error) {
                            //alert(errors.error);
                            Swal.fire({
                                target: document.getElementById('ModalSocio'),
                                icon: 'error',
                                title: 'Error',
                                text: errors.error,
                                confirmButtonText: 'Aceptar',
                                allowOutsideClick: false
                            });
                        }
                    } else {
                        // Mostrar mensaje genérico si no se recibió un error específico
                        //alert("Ocurrió un error al registrar la Obligación.");
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            text: 'Ocurrió un error al registrar la Obligación.',
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false
                        });

                    }

                    console.log(res
                        .responseText
                    ); // Muestra el error completo en la consola para depuración
                });
            });

            // Delegar el evento de clic al documento para asegurar que funcione con elementos dinámicos
            $(document).on('click', '.open-modal', function() {
                console.log('Botón clicado...');
                var button = $(this);
                var socioId = button.data('id');

                console.log('Cargo ID:', socioId);

                var camaraSeleccionadaMod = $('#camara').val();
                var nombrecamaraSeleccionadaMod = $('#camara option:selected').text();


                $('#nombrecamaraSeleccionadaMod').text(nombrecamaraSeleccionadaMod);
                // Cargar el valor de la cámara en el campo oculto 

                //$('#carga').show();
                Swal.fire({
                    title: 'Cargando datos de la Obligación',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });


                $.ajax({
                    url: '/administrador/socio_camara/detalle/' + socioId,
                    method: 'GET',
                    success: function(response) {
                        console.log('Datos recibidos:', response);
                        camara_socio_selected = response;

                        var socioCamaraId = $('#socio_camara_id_mod');
                        var socioId = $('#socio_id_mod');
                        var camaraId = $('#camara_id_mod');
                        var razonSocial = $('#razon_social_mod');
                        var identificacion = $('#identificacion_mod');
                        var fechaAfiliacion = $('#fecha_afiliacion_mod');


                        socioCamaraId.val(response.id);
                        socioId.val(response.id_socio);
                        camaraId.val(response.id_camara);
                        fechaAfiliacion.val(response.fecha_afiliacion);
                        razonSocial.val(response.socio.razon_social);
                        identificacion.val(response.socio.identificacion);

                        //$('#carga').hide();
                        Swal.close();
                        $('#ModalModificarSocio').modal('show');
                    },
                    error: function(xhr, status, error) {
                        Swal.close();
                        console.error(xhr.responseText);
                    }
                });
            });

            $(document).on('click', '.delete-socio', async function() {
                var button = $(this);
                var socioId = button.data('id');

                const {
                    value: motivo
                } = await Swal.fire({
                    title: '¿Está seguro de desafiliar al Socio?',
                    text: "Indiquenos el motivo de la desafiliación",
                    input: 'textarea',
                    inputAttributes: {
                        maxlength: "140",
                        inputAutoTrim: true,
                        inputAutoFocus: true,
                        style: 'text-transform: uppercase;',
                    },
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Aceptar',
                    cancelButtonText: 'Cancelar',
                    allowOutsideClick: false,
                });

                if (motivo) {
                    Swal.fire({
                        title: 'Cargando',
                        text: 'Por favor espere',
                        icon: 'info',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    });
                    $.ajax({
                        url: "{{ route('admin.eliminar_socio_camara') }}",
                        type: "POST",
                        data: {
                            socio_id: socioId,
                            motivo: motivo.toUpperCase(),
                            _token: '{{ csrf_token() }}'
                        },
                    }).done(async function(response) {
                        Swal.close();
                        await Swal.fire({
                            icon: 'success',
                            title: 'Éxito',
                            text: response.message,
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                        });
                        table.ajax.reload(null, false);
                    }).fail(function(error) {
                        Swal.close();
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: error.responseJSON?.message ||
                                "Error al eliminar el socio.",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                console.error("Error al cargar los datos: ", error);
                            }
                        });
                        return;
                    });
                } else {
                    // El usuario canceló la eliminación
                    console.log('Eliminación cancelada por el usuario.');
                }
            });

            $(document).on('click', '.reafiliar-socio', async function() {
                var button = $(this);
                var socioId = button.data('id');

                var result = await Swal.fire({
                    title: '¿Está seguro de reafiliar al Socio?', 
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Aceptar',
                    cancelButtonText: 'Cancelar',
                    allowOutsideClick: false,
                });

                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Cargando',
                        text: 'Por favor espere',
                        icon: 'info',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    });
                    $.ajax({
                        url: "{{ route('admin.reafiliar_socio_camara') }}",
                        type: "POST",
                        data: {
                            socio_id: socioId, 
                            _token: '{{ csrf_token() }}'
                        },
                    }).done(async function(response) {
                        Swal.close();
                        await Swal.fire({
                            icon: 'success',
                            title: 'Éxito',
                            text: response.message,
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                        });
                        table.ajax.reload(null, false);
                    }).fail(function(error) {
                        Swal.close();
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: error.responseJSON?.message ||
                                "Error al eliminar el socio.",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                console.error("Error al cargar los datos: ", error);
                            }
                        });
                        return;
                    });
                } else {
                    // El usuario canceló la eliminación
                    console.log('Eliminación cancelada por el usuario.');
                }
            });

            $("#modificarSocio").click(async function() {


                if ($('#fecha_afiliacion_mod').val() == "") {
                    //alert('Debe seleccionar la Clase de Entidad');
                    await Swal.fire({
                        target: document.getElementById('ModalModificarSocio'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar la Fecha de Afiliación',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#fecha_presentacion_mod').focus();
                    return;
                }

                Swal.fire({
                    target: document.getElementById('ModalModificarSocio'),
                    title: 'Enviando datos para modificación de Socio po Cámara',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });

                // Aquí puedes añadir la lógica para enviar el formulario modificado
                var formData = new FormData(document.getElementById("ModalModificarSocio"));
                $.ajax({
                    url: "{{ route('admin.modificar_socio_camara') }}",
                    type: "post",
                    dataType: "html",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function(res) {
                    msg = JSON.parse(res).response.msg
                    Swal.fire({
                        icon: 'success', // Cambiado a 'success' para mostrar un mensaje positivo
                        title: 'Éxito',
                        text: res.success,
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    //alert(msg);
                    location.reload();
                }).fail(function(res) {
                    let errorMessage = 'Ocurrió un error inesperado.';
                    // Si la respuesta contiene datos JSON
                    if (res.responseJSON && res.responseJSON.message) {
                        errorMessage = res.responseJSON.message; // Obtener mensaje del servidor
                    } else if (res.responseText) {
                        errorMessage = res.responseText; // Fallback al texto de la respuesta
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Error al modificar la Cámara',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                });
                //$('#carga').hide();
                Swal.close();
                $('#ModalModificarSocio').modal('hide'); // Cerrar el modal después de guardar
            });

            $('#btn-more-info').on('click', function() {
                let camaraSocioLogInsert = camara_socio_selected.insert;
                let camaraSocioLogUpdate = camara_socio_selected.update;

                // Manejo del caso cuando camaraSocioLogUpdate es vacío
                let lastItem = null;
                if (Array.isArray(camaraSocioLogUpdate) && camaraSocioLogUpdate.length > 0) {
                    lastItem = camaraSocioLogUpdate[camaraSocioLogUpdate.length - 1];
                } else {
                    lastItem = {
                        created_at: 'No hay modificaciones',
                        user: {
                            name: 'N/A'
                        }
                    };
                }

                // Función para formatear fechas
                const formatDate = (dateString) => {
                    if (dateString === 'No hay modificaciones') {
                        return dateString;
                    }
                    const options = {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric',
                        hour: '2-digit',
                        minute: '2-digit',
                        second: '2-digit',
                        hour12: false, // Para formato 24 horas
                    };
                    return new Date(dateString).toLocaleDateString('es-ES', options);
                };

                // Formatear las fechas
                const formattedCreatedAt = formatDate(camaraSocioLogInsert.created_at);
                const formattedUpdatedAt = formatDate(lastItem?.created_at);

                // Mostrar el modal con SweetAlert2
                const swalInfo = Swal.fire({
                    target: document.getElementById('ModalModificarSocio'),
                    title: 'Información adicional',
                    html: `
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h5><strong>Creación</strong></h5>
                                <p><strong>Usuario:</strong> ${camaraSocioLogInsert.user.name}</p>
                                <p><strong>Fecha de creación:</strong> ${formattedCreatedAt}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h5><strong>Última modificación</strong></h5>
                                <p><strong>Usuario:</strong> ${lastItem?.user?.name}</p>
                                <p><strong>Fecha de modificación:</strong> ${formattedUpdatedAt}</p>
                            </div>
                        </div>
                    </div>
                    `,
                    showCloseButton: true,
                    showConfirmButton: true,
                    allowOutsideClick: false,
                });
            });

        });
    </script>
@endsection
