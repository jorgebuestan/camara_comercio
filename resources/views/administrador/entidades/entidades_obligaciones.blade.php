@extends('dashboard')

@section('pagename')
    Obligaciones por Entidad
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
                        <h2 class="card-title">Gestión de Obligaciones por Entidad</h2>
                    </header>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <select id="entidad" name="entidad" class="form-control populate">
                                            <option value=-1>Seleccionar Entidad</option>
                                            @foreach ($entidades as $id => $descripcion)
                                                <option value={{ $id }}>{{ $descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button id="abrirModal" class="btn btn-primary mb-3">Agregar Nueva
                                            Obligación</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <section class="card">
                                    <header class="card-header">
                                        <h2 class="card-title">Listado de Obligaciones registradas por Entidad</h2>
                                    </header>
                                    <div class="card-body overflow-x-auto max-w-full">
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
    <!-- Jbuestan Modales -->
    <form enctype="multipart/form-data" class="modal fade" id="ModalObligacion" tabindex="-1"
        aria-labelledby="ModalObligacionLabel" aria-hidden="true">
        @csrf
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalObligacionLabel"><b>Agregar una nueva Obligación a la Entidad</b></h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <p><strong>Entidad Seleccionada:</strong> <span id="nombreEntidadSeleccionada"></span></p>
                                <!-- Campo oculto para enviar el valor de la entidad -->
                                <input type="hidden" id="entidad_id" name="entidad_id" value="">
                                <input type="hidden" id="obligacion_id" name="obligacion_id" value="">
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped mb-0" id="dataTableObligaciones">
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
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="agregarObligacion" class="btn btn-primary">Agregar
                        Obligaciones</button>&nbsp;
                    <button type="button" class="btn btn-secondary cerrar-modal">Cerrar</button>
                </div>
            </div>
        </div>
    </form>

    <form enctype="multipart/form-data" class="modal fade" id="ModalModificarObligacion" tabindex="-1"
        aria-labelledby="ModalModificarObligacionLabel" aria-hidden="true">
        @csrf
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalModificarObligacionLabel"><b>Agregar una nueva Obligación a la
                            Entidad</b></h5>
                    <button type="button" class="btn btn-warning" id="btn-more-info">
                        <i class="fas fa-info"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <p><strong>Entidad Seleccionada:</strong> <span id="nombreEntidadSeleccionadaMod"></span>
                                </p>
                                <!-- Campo oculto para enviar el valor de la entidad -->
                                <input type="hidden" id="entidad_id_mod" name="entidad_id_mod" value="">
                                <input type="hidden" id="obligacion_id_mod" name="obligacion_id_mod" value="">
                                <input type="hidden" id="entidad_obligacion_id_mod" name="entidad_obligacion_id_mod"
                                    value="">
                            </div>
                            <div class="col-lg-6 text-end">
                                <button type="button" id="modificarObligacion" name="modificarObligacion"
                                    class="btn btn-primary mb-3">Modificar Obligación</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Nombre
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="obligacion_mod" disabled
                                    id="obligacion_mod" placeholder="Obligación">
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
                                <select id="tiempo_presentacion_mod" name="tiempo_presentacion_mod" disabled
                                    class="form-control populate">
                                    <option value=-1>Seleccionar</option>
                                    @foreach ($tiempo_presentacion as $id => $nombre)
                                        <option value={{ $id }}>
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
                                Tipo de Presentación
                            </div>
                            <div class="col-md-4">
                                <select id="tipo_presentacion_mod" name="tipo_presentacion_mod" disabled
                                    class="form-control populate">
                                    <option value=-1>Seleccionar</option>
                                    @foreach ($tipo_presentacion as $id => $nombre)
                                        <option value={{ $id }}>
                                            {{ $nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary cerrar-modal-mod">Cerrar</button>
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
            let obligacionesSeleccionadas = [];
            let entidad_obligacion_selected = null;
            let obligaciones = [];
            let obligacionesEntidad = [];
            Swal.fire({
                title: 'Cargando',
                text: 'Por favor espere',
                icon: 'info',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading()
                }
            });

            let table = $('#dataTable').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.obtener_listado_obligaciones_por_entidad') }}",
                    type: "GET",
                    data: function(d) {
                        d.start = d.start || 0;
                        d.length = d.length || 10;
                        d.id_entidad = $('#entidad').val(); // Enviar el valor de localidad seleccionada
                        d.modulo  = 1;
                    },
                    error: function(error) {
                        console.error("Error al cargar los datos: ", error);
                    },
                    complete: function(response) {
                        obligacionesEntidad = response.responseJSON.data;
                        Swal.close();
                    },
                },
                pageLength: 10, // Establece el número de registros por página
                columns: [{
                        data: 'obligacion',
                        width: '50%'
                    },
                    {
                        data: 'tiempo_presentacion',
                        width: '15%'
                    },
                    {
                        data: 'tipo_presentacion',
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
                    let td = $(row).find(".truncate");
                    td.attr("title", td.text());

                    let td2 = $(row).find(".truncate2");
                    td2.attr("title", td2.text());
                }
            });

            // Escuchar el evento change del select de cámaras
            $('#entidad').change(function() {
                let selectedEntidad = $(this).val();

                if (selectedEntidad === '-1') {
                    //alert('Por favor selecciona una cámara válida.');
                    Swal.fire({
                        target: document.getElementById('ModalObligacion'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Por favor selecciona una cámara válida.',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                } else {
                    Swal.fire({
                        title: 'Cargando',
                        text: 'Por favor espere',
                        icon: 'info',
                        allowOutsideClick: false,
                        showConfirmButton: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    });
                    table.ajax.reload();
                }
            });

            $('#abrirModal').click(function(e) {
                e.preventDefault(); // Evita el comportamiento predeterminado del botón

                // Verificar si se seleccionó una opción válida en el select
                let entidadSeleccionada = $('#entidad').val();
                let nombreEntidadSeleccionada = $('#entidad option:selected').text();

                if (entidadSeleccionada === '-1') {
                    //alert('Por favor, selecciona una Entidad para poder registrar una Obligación');
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Por favor, selecciona una Entidad para poder registrar una Obligación',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    // return;
                } else {
                    // Mostrar el nombre de la cámara seleccionada en el modal
                    $('#nombreEntidadSeleccionada').text(nombreEntidadSeleccionada);
                    // Cargar el valor de la cámara en el campo oculto
                    $('#entidad_id').val(entidadSeleccionada);
                    // Abrir el modal

                    Swal.fire({
                        target: document.getElementById('ModalObligacion'),
                        title: 'Cargando',
                        text: 'Por favor espere',
                        icon: 'info',
                        allowOutsideClick: false,
                        showConfirmButton: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    });
                    let tableObligaciones = $('#dataTableObligaciones').DataTable({
                        destroy: true,
                        processing: true,
                        serverSide: true,
                        ajax: {
                            url: "{{ route('admin.obtener_listado_obligaciones') }}",
                            type: "GET",
                            data: function(d) {
                                d.start = d.start || 0;
                                d.length = d.length || 10;
                                d.tipo_boton = 2; // Enviar el valor de localidad seleccionada
                                d.id_entidad = entidadSeleccionada;
                            },
                            error: function(error) {
                                Swal.close();
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Ocurrió un error al cargar las obligaciones.',
                                    confirmButtonText: 'Aceptar',
                                    allowOutsideClick: false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        $('#ModalObligacion').modal('hide');
                                    }
                                });
                                console.error("Error al cargar los datos: ", error);
                            },
                            complete: function(response) {
                                obligaciones = response.responseJSON.data;
                                obligacionesSeleccionadas = obligaciones.filter(obligacion =>
                                    obligacion.selected === true).map(obligacion =>
                                    obligacion.id);
                                Swal.close();
                            },
                        },
                        pageLength: 10, // Establece el número de registros por página
                        columns: [{
                                data: 'obligacion',
                                width: '50%'
                            },
                            {
                                data: 'tiempo_presentacion',
                                width: '20%'
                            },
                            {
                                data: 'tipo_presentacion',
                                width: '20%'
                            },
                            {
                                data: 'btn',
                                width: '10%'
                            }
                        ],
                        order: [
                            [3, "desc"]
                        ],
                        createdRow: function(row, data, dataIndex) {
                            let td = $(row).find(".truncate");
                            td.attr("title", td.text());

                            let td2 = $(row).find(".truncate2");
                            td2.attr("title", td2.text());
                        },
                        columnDefs: [
                            {
                                targets: 3,
                                orderable: true,
                                render: function(data, type, row) {
                                    if (type == 'display') {
                                        return data; 
                                    }
                                    return row.selected ? 1 : 0;
                                }
                            }
                        ]
                    });

                    $('#ModalObligacion').modal('show');
                }
            });

            // Cerrar el modal manualmente
            $('.cerrar-modal').click(function() {
                $('#ModalObligacion').modal('hide'); // Cerrar el modal
            });

            /* $('.cerrar-modal-mod').click(function() {
                $('#ModalModificarObligacion').modal('hide'); // Cerrar el modal
            }); */

            /* // Establecer el idioma de forma global para todos los datepickers
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
            $.datepicker.setDefaults($.datepicker.regional['es']); */

            /* $('#fecha_presentacion').datepicker('destroy').datepicker({
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
            }); */
            $(document).on('click', '.seleccionar-obligacion', function() {
                let button = $(this);
                let obligacionId = button.data('id');
                let isChecked = button.is(':checked');
                if (isChecked) {
                    if (!obligacionesSeleccionadas.includes(obligacionId)) {
                        obligacionesSeleccionadas.push(obligacionId);
                    }
                } else {
                    obligacionesSeleccionadas = obligacionesSeleccionadas.filter(id => id !== obligacionId);
                }
            });

            $("#agregarObligacion").click(async function() {
                if (!validarRegistro()) {
                    return;
                }
                let formData = new FormData();
                formData.append('entidad_id', $('#entidad_id').val());
                obligacionesSeleccionadas.forEach(function(obligacion) {
                    formData.append('obligaciones[]', obligacion);
                });
                const registro = await Swal.fire({
                    target: document.getElementById('ModalObligacion'),
                    title: 'Agregar Obligaciones',
                    text: "¿Está seguro de que desea agregar las obligaciones seleccionadas a la entidad?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Aceptar',
                    cancelButtonText: 'Cancelar',
                    allowOutsideClick: false,
                    showConfirmButton: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('admin.registrar_obligacion_entidad') }}",
                            type: "POST",
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            },
                        }).done(function(res) {
                            Swal.fire({
                                target: document.getElementById('ModalObligacion'),
                                icon: 'success',
                                title: 'Éxito',
                                text: res.success,
                                confirmButtonText: 'Aceptar',
                                allowOutsideClick: false,
                                showConfirmButton: true,
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $('#ModalObligacion').modal('hide');
                                    table.ajax.reload(null, false);
                                }
                            });
                        }).fail(function(res) {
                            if (res.status === 422) {
                                let errors = res.responseJSON;
                                if (errors.error) {
                                    Swal.fire({
                                        target: document.getElementById('ModalObligacion'),
                                        icon: 'error',
                                        title: 'Error',
                                        text: errors.error,
                                        confirmButtonText: 'Aceptar',
                                        allowOutsideClick: false
                                    });
                                }
                            } else {
                                Swal.fire({
                                    target: document.getElementById('ModalObligacion'),
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Ocurrió un error al registrar la Obligación.',
                                    confirmButtonText: 'Aceptar',
                                    allowOutsideClick: false
                                });
                            }
                            console.log(res.responseText);
                        });
                    } else {
                        console.log('Eliminación cancelada por el usuario.');
                    }
                });
            });

            function validarRegistro() {
                const entidad = $('#entidad').val();
                if (entidad === '-1') {
                    Swal.fire({
                        target: document.getElementById('ModalObligacion'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Por favor, selecciona una Entidad para poder registrar una Obligación',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    return false;
                }
                if (obligacionesSeleccionadas.length === 0) {
                    Swal.fire({
                        target: document.getElementById('ModalObligacion'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Por favor, selecciona al menos una obligación para agregar a la entidad',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    return false;
                }

                let nuevasObligaciones = obligacionesSeleccionadas.filter(
                    id => !obligacionesEntidad.some(entidad => entidad.id === id)
                );
                if (nuevasObligaciones.length === 0) {
                    Swal.fire({
                        target: document.getElementById('ModalObligacion'),
                        icon: 'info',
                        title: 'Error',
                        text: 'Todas las obligaciones seleccionadas ya están registradas para esta entidad.',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    /* if (obligaciones.length === obligacionesSeleccionadas.length) {
                        $('#ModalObligacion').modal('hide');
                    } */
                    return false;
                }
                return true;
            }

            // Delegar el evento de clic al documento para asegurar que funcione con elementos dinámicos
            /* $(document).on('click', '.open-modal', function() {
                console.log('Botón clicado...');
                let button = $(this);
                let obligacionId = button.data('id');

                console.log('Cargo ID:', obligacionId);
                Swal.fire({
                    title: 'Cargando datos de la Obligación',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });
                $.ajax({
                    url: '/administrador/entidad_obligacion/detalle/' + obligacionId,
                    method: 'GET',
                    success: function(response) {
                        entidad_obligacion_selected = response;

                        let obligacionId = $('#obligacion_id_mod');
                        let entidadId = $('#entidad_id_mod');
                        let entidadobligacionId = $('#entidad_obligacion_id_mod');
                        let Obligacion = $('#obligacion_mod');
                        let tiempoPresentacion = $('#tiempo_presentacion_mod');
                        let fechaPresentacion = $('#fecha_presentacion_mod');
                        let tipoPresentacion = $('#tipo_presentacion_mod');
                        let fechaInicio = $('#fecha_inicio_mod');


                        entidadobligacionId.val(response.id);
                        Obligacion.val(response.obligacion.obligacion);
                        tiempoPresentacion.val(response.obligacion.id_tiempo_presentacion);
                        fechaPresentacion.val(response.fecha_presentacion);
                        tipoPresentacion.val(response.obligacion.id_tipo_presentacion);
                        fechaInicio.val(response.fecha_inicio);

                        // Deshabilitar o habilitar los selects según el valor
                        //alert(response.id_tiempo_presentacion);
                        if (response.obligacion.id_tiempo_presentacion === 1) { // General

                            $('#fecha_presentacion_mod').prop('disabled', false);
                            $('#fecha_inicio_mod').prop('disabled', true);
                            tipoPresentacion.val(-1);

                        } else if (response.obligacion.id_tiempo_presentacion === 2) { // Local

                            $('#fecha_presentacion_mod').prop('disabled', true);
                            $('#fecha_inicio_mod').prop('disabled', false);

                        }

                        //$('#carga').hide();
                        Swal.close();
                        $('#ModalModificarObligacion').modal('show');
                    },
                    error: function(xhr, status, error) {
                        Swal.close();
                        console.error(xhr.responseText);
                    }
                });
            }); */

            $(document).on('click', '.delete-obligacion', async function() {
                let button = $(this);
                let obligacionId = button.data('id');

                const result = await Swal.fire({
                    title: '¿Está seguro de que desea eliminar este registro?',
                    text: "Esta acción no se puede deshacer.",
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
                        url: '/administrador/entidades_obligaciones/eliminar/' + obligacionId,
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}' // Asegúrate de incluir el token CSRF
                        },
                        success: function(response) {
                            Swal.close();
                            Swal.fire({
                                icon: 'success',
                                title: 'Éxito',
                                text: 'Registro eliminado correctamente.',
                                confirmButtonText: 'Aceptar',
                                allowOutsideClick: false,
                                showConfirmButton: true,
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    table.ajax.reload(null, false);
                                }
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Hubo un problema al eliminar el Registro.',
                                confirmButtonText: 'Aceptar',
                                allowOutsideClick: false,
                                showConfirmButton: true,
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    table.ajax.reload(null, false);
                                }
                            });
                        }
                    });
                } else {
                    // El usuario canceló la eliminación
                    console.log('Eliminación cancelada por el usuario.');
                }
            });

            $("#modificarObligacion").click(async function() {

                /* if ($('#tiempo_presentacion_mod').val() == "1") {

                    if ($('#fecha_presentacion_mod').val() == "") {
                        //alert('Debe seleccionar la Clase de Entidad');
                        await Swal.fire({
                            target: document.getElementById('ModalModificarObligacion'),
                            icon: 'error',
                            title: 'Error',
                            text: 'Debe ingresar la Fecha de Presetnación',
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false
                        });
                        $('#fecha_presentacion_mod').focus();
                        return;
                    }
                } */

                /* if ($('#tiempo_presentacion_mod').val() == "2") {

                    if ($('#fecha_inicio_mod').val() == "") {
                        //alert('Debe seleccionar la Clase de Entidad');
                        await Swal.fire({
                            target: document.getElementById('ModalModificarObligacion'),
                            icon: 'error',
                            title: 'Error',
                            text: 'Debe ingresar la Fecha de Inicio',
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false
                        });
                        $('#fecha_inicio_mod').focus();
                        return;
                    }
                } */

                Swal.fire({
                    target: document.getElementById('ModalModificarObligacion'),
                    title: 'Enviando datos para modificación de Obligación',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });

                // Aquí puedes añadir la lógica para enviar el formulario modificado
                let formData = new FormData(document.getElementById("ModalModificarObligacion"));
                $.ajax({
                    url: "{{ route('admin.modificar_entidad_obligacion') }}",
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
                $('#ModalModificarObligacion').modal('hide'); // Cerrar el modal después de guardar
            });

            $('#btn-more-info').on('click', function() {
                let entidadObligacionLogInsert = entidad_obligacion_selected.insert;
                let entidadObligacionLogUpdate = entidad_obligacion_selected.update;

                // Manejo del caso cuando entidadObligacionLogUpdate es vacío
                let lastItem = null;
                if (Array.isArray(entidadObligacionLogUpdate) && entidadObligacionLogUpdate.length > 0) {
                    lastItem = entidadObligacionLogUpdate[entidadObligacionLogUpdate.length - 1];
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
                const formattedCreatedAt = formatDate(entidadObligacionLogInsert.created_at);
                const formattedUpdatedAt = formatDate(lastItem?.created_at);

                // Mostrar el modal con SweetAlert2
                const swalInfo = Swal.fire({
                    target: document.getElementById('ModalModificarObligacion'),
                    title: 'Información adicional',
                    html: `
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h5><strong>Creación</strong></h5>
                                <p><strong>Usuario:</strong> ${entidadObligacionLogInsert.user.name}</p>
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
