@extends('dashboard')

@section('pagename')
    Obligaciones por Cámara
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
        .container-selected-items {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5em;
            max-width: 100%;
            max-height: 90px;
            overflow-x: hidden;
            align-items: flex-start;
        }

        .selected {
            background-color: rgb(187 247 208) !important;
        }

        .selected-item {
            display: inline-block;
            word-wrap: break-word;
            word-break: break-word;
            white-space: normal;
            max-width: 100%;
            /* Adjust if container size is fixed */
            overflow-wrap: break-word;
            padding: 0.5em;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            color: white;
            border-radius: 0.25em;
            box-sizing: border-box;
        }

        .selected-items .badge {
            font-size: 12px;
            padding: 8px 15px;
            margin: 5px 5px 0 0;
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            border-radius: 3px;
        }

        .selected-items .badge .remove-item {
            margin-left: 5px;
            display: inline;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }

        .selected-items .badge .remove-item:hover {
            color: #ff0000;
        }

        input:where(:not([type])):focus,
        [multiple]:focus,
        [type='search']:focus,
        select:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
            --tw-ring-inset: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            /* --tw-ring-color: #2563eb; */
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) transparent !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) transparent !important;
            /* box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow); */
            border-color: transparent !important;
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
                        <h2 class="card-title">Gestión de Obligaciones por Cámara</h2>
                    </header>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button id="abrirModal" class="btn btn-primary mb-3">Agregar Nuevo Registro</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <select id="camara" name="camara" class="form-control populate"
                                            @if (!$isAdmin) disabled @endif>
                                            @if ($isAdmin)
                                                <option value=-1>Seleccionar Cámara</option>
                                            @endif
                                            @foreach ($camarasSelect as $id => $descripcion)
                                                <option value={{ $id }}>{{ $descripcion }}</option>
                                            @endforeach
                                        </select>
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

                                        <h2 class="card-title">Listado de Obligaciones Registradas de la Cámara</h2>
                                    </header>
                                    <div class="card-body">
                                        <table class="table table-bordered table-striped mb-0" id="dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Entidad</th>
                                                    <th>Obligacion</th>
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
    <!-- Modal -->
    <form enctype="multipart/form-data" class="modal fade" id="ModalObligacion" tabindex="-1"
        aria-labelledby="ModalObligacionLabel" aria-hidden="true">
        @csrf
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalObligacionLabel"><b>Agregar una nueva Obligación</b></h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-12">
                                <p><strong>Cámara Seleccionada:</strong> <span id="nombreCamaraSeleccionada"></span></p>
                            </div>
                            <div class="col-lg-12">
                                <label for="entidad">Entidad</label>
                                <select id="entidad" name="entidad" class="form-control populate">
                                    <option value=-1>Seleccionar</option>
                                    @foreach ($entidadesSelect as $id => $entidad)
                                        <option value={{ $id }}>{{ $entidad }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="obligacion">Obligación</label>
                                <input type="text" class="form-control" id="obligacion" name="obligacion" readonly />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="tiempo_presentacion">Tiempo de Presentación</label>
                                <input type="text" class="form-control" id="tiempo_presentacion"
                                    name="tiempo_presentacion" readonly />
                            </div>
                            <div class="col-md-6">
                                <label for="fecha_presentacion">Fecha de Presentación</label>
                                <input type="text" data-plugin-datepicker class="form-control" disabled
                                    name="fecha_presentacion" id="fecha_presentacion" placeholder="Fecha de Presentación" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="tipo_presentacion">Tipo de Presentación</label>
                                <input type="text" class="form-control" id="tipo_presentacion" name="tipo_presentacion"
                                    readonly />
                            </div>
                            <div class="col-md-6">
                                <label for="fecha_inicio">Fecha de Inicio</label>
                                <input type="text" data-plugin-datepicker class="form-control" disabled
                                    name="fecha_inicio" id="fecha_inicio" placeholder="Fecha de Inicio" />
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <table class="table table-bordered mb-0" id="dataTableObligaciones">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Obligación</th>
                                            <th>Tiempo de Presentación</th>
                                            <th>Tipo de Presentación</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary cerrar-modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" id="agregar_obligacion">Agregar
                                Obligación</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form enctype="multipart/form-data" class="modal fade" id="ModalModificarObligacion" tabindex="-1"
        aria-labelledby="ModalModificarObligacion" aria-hidden="true">
        @csrf
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalModificarObligacion"><b>Modificar Obligación</b></h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-12">
                                <p><strong>Cámara Seleccionada:</strong> <span id="camaraModSeleccionada"></span></p>
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="entidad_mod">Entidad</label>
                                <input type="text" class="form-control" id="entidad_mod" name="entidad_mod"
                                    readonly />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="obligacion_mod">Obligación</label>
                                <input type="text" class="form-control" id="obligacion_mod" name="obligacion_mod"
                                    readonly />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="tiempo_presentacion_mod">Tiempo de Presentación</label>
                                <input type="text" class="form-control" id="tiempo_presentacion_mod"
                                    name="tiempo_presentacion_mod" readonly />
                            </div>
                            <div class="col-md-6">
                                <label for="fecha_presentacion_mod">Fecha de Presentación</label>
                                <input type="text" data-plugin-datepicker class="form-control" disabled
                                    name="fecha_presentacion_mod" id="fecha_presentacion_mod"
                                    placeholder="Fecha de Presentación" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="tipo_presentacion_mod">Tipo de Presentación</label>
                                <input type="text" class="form-control" id="tipo_presentacion_mod"
                                    name="tipo_presentacion_mod" readonly />
                            </div>
                            <div class="col-md-6">
                                <label for="fecha_inicio_mod">Fecha de Inicio</label>
                                <input type="text" data-plugin-datepicker class="form-control" disabled
                                    name="fecha_inicio_mod" id="fecha_inicio_mod" placeholder="Fecha de Inicio" />
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary cerrar-modal-mod">Cerrar</button>
                            <button type="button" class="btn btn-primary" id="modificar_obligacion">Modificar
                                Obligación</button>
                        </div>
                    </div>
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
            /** 
             * Default values and States
             */

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

            var entidades = @json($entidades);
            var camaraSelected = null;
            let obligacionSelected = null;
            let entidadSelected = null;
            let camaraObligacionSelected = null;
            let camaraObligaciones = [];
            var filteredObligaciones = [];

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

            $('#fecha_inicio_mod').datepicker('destroy').datepicker({
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

            /**
             * DataTable - Initial Load of Socios
             */
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
                processing: false,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.obtener_listado_obligaciones_camara') }}",
                    type: "GET",
                    data: function(d) {
                        d.start = d.start || 0;
                        d.length = d.length || 10;
                        d.id_camara = $('#camara').val();
                        d.with_entidad = 1;
                        d.with_camara = 1;
                        d.with_obligacion = 1;
                    },
                    error: function(error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: error.responseJSON?.error || "Error al cargar los datos.",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                console.error("Error al cargar los datos: ", error);
                            }
                        });
                        return;
                    },
                    complete: function(response) {
                        camaraObligaciones = response.responseJSON.data;
                        Swal.close();
                    }
                },
                pageLength: 10, // Establece el número de registros por página
                columns: [{
                        data: 'nombre_entidad',
                        title: 'Entidad',
                        width: '15%'
                    },
                    {
                        data: 'nombre_obligacion',
                        title: 'Obligación',
                        width: '20%'
                    },
                    {
                        data: 'btn',
                        title: 'Acciones',
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

            var tableObligaciones = $('#dataTableObligaciones').DataTable({
                data: filteredObligaciones,
                pageLength: 10, // Establece el número de registros por página
                columns: [{
                        data: 'obligacion',
                        width: '60%'
                    },
                    {
                        data: 'tiempo_presentacion',
                        width: '20%'
                    },
                    {
                        data: 'tipo_presentacion',
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
                    $(row).addClass(
                        'selectable-row !bg-white hover:!bg-green-200 hover:cursor-pointer');
                    $(row).attr('data-id-obligacion', data.id_obligacion);
                    $(row).attr('data-obligacion', data.obligacion);
                    $(row).attr('data-tiempo', data.tiempo_presentacion);
                    $(row).attr('data-tipo', data.tipo_presentacion);
                }
            });

            /**
             * Event Listeners
             */

            $(document).on('click', '.selectable-row', function() {
                if ($(this).hasClass('selected')) {
                    limpiarObligacion();
                    $(this).removeClass('selected');
                    $('#fecha_presentacion').prop('disabled', true);
                    $('#fecha_inicio').prop('disabled', true);
                } else {
                    $('#dataTableObligaciones tr').removeClass('selected');
                    limpiarObligacion();
                    $(this).addClass('selected');
                    obligacionSelected = $(this).data('id-obligacion');
                    let obligacion = $(this).data('obligacion');
                    let tiempo = $(this).data('tiempo');
                    let tipo = $(this).data('tipo');

                    $('#obligacion').val(obligacion);
                    $('#tiempo_presentacion').val(tiempo);
                    $('#tipo_presentacion').val(tipo);

                    if (tiempo == 'CONSECUTIVA') {
                        $('#fecha_presentacion').prop('disabled', true);
                        $('#fecha_inicio').prop('disabled', false);
                    } else if (tiempo == 'ÚNICA VEZ') {
                        $('#fecha_presentacion').prop('disabled', false);
                        $('#fecha_inicio').prop('disabled', true);
                    }
                }
            });

            // Escuchar el evento change del select de cámaras
            $('#camara').change(function() {
                let selectedCamara = $(this).val();
                if (selectedCamara == -1) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor selecciona una cámara válida.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            console.error("Por favor selecciona una cámara válida.");
                            table.ajax.reload(); // Recargar la tabla con la cámara seleccionada
                            camaraSelected = selectedCamara;
                        }
                    });
                    return;
                }
                camaraSelected = selectedCamara;
                table.ajax.reload(); // Recargar la tabla con la cámara seleccionada
            });

            $('#abrirModal').click(function(e) {
                e.preventDefault(); // Evita el comportamiento predeterminado del botón

                // Verificar si se seleccionó una opción válida en el select
                var camaraSeleccionada = $('#camara').val();
                var nombreCamaraSeleccionada = $('#camara option:selected').text();

                if (camaraSeleccionada == -1) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor selecciona una cámara válida.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            console.error("Por favor selecciona una cámara válida.");
                        }
                    });
                    return;
                } else {

                    $('#nombreCamaraSeleccionada').text(nombreCamaraSeleccionada);
                    limpiarFormulario();
                    tableObligaciones.clear().draw();
                    // Abrir el modal
                    $('#ModalObligacion').modal('show');
                }
            });
            $('.cerrar-modal').click(function() {
                limpiarFormulario();
                $('#ModalObligacion').modal('hide'); // Cerrar el modal
            });

            $('.cerrar-modal-mod').click(function() {
                limpiarObligacion();
                $('#ModalModificarObligacion').modal('hide'); // Cerrar el modal
            });

            $('#entidad').on('change', function() {
                let selected = $(this).val();
                limpiarObligacion();
                if (selected == -1) {
                    filteredObligaciones = [];
                    tableObligaciones.clear().rows.add(filteredObligaciones).draw();
                    Swal.fire({
                        target: document.getElementById('ModalObligacion'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona una entidad.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            console.error("Por favor, selecciona una entidad.");
                        }
                    });
                    return;
                }
                filteredObligaciones = entidades.find(entidad => entidad.id == selected)
                    .obligaciones;
                filteredObligaciones = filteredObligaciones.map(obligacion => {
                    return {
                        id_obligacion: obligacion.obligacion.id,
                        obligacion: obligacion.obligacion.obligacion,
                        tiempo_presentacion: obligacion.obligacion.tiempo_presentacion
                            ?.descripcion == undefined ? 'N/A' : obligacion.obligacion
                            .tiempo_presentacion
                            ?.descripcion,
                        tipo_presentacion: obligacion.obligacion.tipo_presentacion?.descripcion ==
                            undefined ?
                            'N/A' : obligacion.obligacion.tipo_presentacion.descripcion
                    }
                });
                tableObligaciones.clear().rows.add(filteredObligaciones).draw();
            });

            $('#agregar_obligacion').click(function() {
                if (!validarRegistro('ModalObligacion', 0)) return false;

                let obligacion = $('#obligacion').val();
                let tiempo_presentacion = $('#tiempo_presentacion').val();
                let tipo_presentacion = $('#tipo_presentacion').val();
                let fecha_presentacion = $('#fecha_presentacion').val();
                let fecha_inicio = $('#fecha_inicio').val();
                let entidad = $('#entidad').val();

                let data = {
                    id_obligacion: obligacionSelected,
                    id_entidad: entidad,
                    id_camara: $('#camara').val(),
                    tiempo_presentacion: tiempo_presentacion,
                    tipo_presentacion: tipo_presentacion,
                    fecha_presentacion: fecha_presentacion,
                    fecha_inicio: fecha_inicio,
                };

                Swal.fire({
                    target: document.getElementById('ModalObligacion'),
                    title: '¿Estás seguro?',
                    text: "¿Deseas agregar esta obligación a la cámara seleccionada?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí',
                    cancelButtonText: 'No',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('admin.registrar_obligacion_camara') }}",
                            type: 'POST',
                            data: data,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            },
                        }).done(function(response) {
                            Swal.fire({
                                target: document.getElementById('ModalObligacion'),
                                icon: 'success',
                                title: 'Éxito',
                                text: 'Obligación agregada correctamente.',
                                showConfirmButton: true,
                                allowOutsideClick: false,
                                confirmButtonText: 'Aceptar',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $('#ModalObligacion').modal('hide');
                                    table.ajax.reload(null, false);
                                }
                            });
                        }).fail(function(error) {
                            Swal.fire({
                                target: document.getElementById('ModalObligacion'),
                                icon: 'error',
                                title: 'Error',
                                showConfirmButton: true,
                                allowOutsideClick: false,
                                confirmButtonText: 'Aceptar',
                                text: error.responseJSON?.message ||
                                    "Error al agregar la obligación.",
                            });
                            console.error("Error al agregar la obligación: ",
                                error);
                        });
                    }
                });
            });

            $(document).on('click', '.delete-camara-obligacion', function() {
                let button = $(this);
                let id = button.data('id');

                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¿Deseas eliminar esta obligación de la cámara seleccionada?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí',
                    cancelButtonText: 'No',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "/administrador/obligacion_camara/eliminar/" + id,
                            type: 'POST',
                            data: {
                                id: id
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            },
                        }).done(function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Éxito',
                                text: 'Obligación eliminada correctamente.',
                                showConfirmButton: true,
                                allowOutsideClick: false,
                                confirmButtonText: 'Aceptar',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    table.ajax.reload(null, false);
                                }
                            });
                        }).fail(function(error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: error.responseJSON?.message ||
                                    "Error al eliminar la obligación.",
                                showConfirmButton: true,
                                allowOutsideClick: false,
                                confirmButtonText: 'Aceptar',
                                text: error.responseJSON?.message ||
                                    "Error al eliminar la obligación.",
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    console.error(
                                        "Error al eliminar la obligación: ",
                                        error);
                                }
                            });
                            return;
                        });
                    }
                });
            });

            $(document).on('click', '.edit-modal', function() {
                let button = $(this);
                let id = button.data('id');

                let data = camaraObligaciones.find(obligacion => obligacion.id == id);

                let nombreCamaraSeleccionada = $('#camara option:selected').text();
                $('#camaraModSeleccionada').text(nombreCamaraSeleccionada);

                let tiempo_presentacion = data.obligacion.tiempo_presentacion?.descripcion ?? 'N/A';
                let tipo_presentacion = data.obligacion.tipo_presentacion?.descripcion ?? 'N/A';
                let fecha_presentacion = data.fecha_presentacion ?? 'N/A';
                let fecha_inicio = data.fecha_inicio ?? 'N/A';

                function convertirFecha(fecha) {
                    if (fecha == 'N/A') {
                        return fecha;
                    }
                    let fechaArray = fecha.split('-');
                    return `${fechaArray[2]}/${fechaArray[1]}/${fechaArray[0]}`;
                }

                fecha_inicio = convertirFecha(fecha_inicio);
                fecha_presentacion = convertirFecha(fecha_presentacion);

                $('#ModalModificarObligacion').find('#entidad_mod').val(data.nombre_entidad);
                $('#ModalModificarObligacion').find('#obligacion_mod').val(data.nombre_obligacion);
                $('#ModalModificarObligacion').find('#tiempo_presentacion_mod').val(tiempo_presentacion);
                $('#ModalModificarObligacion').find('#tipo_presentacion_mod').val(tipo_presentacion);
                $('#ModalModificarObligacion').find('#fecha_presentacion_mod').val(fecha_presentacion);
                $('#ModalModificarObligacion').find('#fecha_inicio_mod').val(fecha_inicio);
                camaraObligacionSelected = id;
                obligacionSelected = data.id_obligacion;
                entidadSelected = data.id_entidad;

                if (tiempo_presentacion == 'CONSECUTIVA') {
                    $('#ModalModificarObligacion').find('#fecha_presentacion_mod').prop('disabled', true);
                    $('#ModalModificarObligacion').find('#fecha_inicio_mod').prop('disabled', false);
                } else if (tiempo_presentacion == 'ÚNICA VEZ') {
                    $('#ModalModificarObligacion').find('#fecha_presentacion_mod').prop('disabled', false);
                    $('#ModalModificarObligacion').find('#fecha_inicio_mod').prop('disabled', true);
                }

                $('#ModalModificarObligacion').modal('show');
            });
            $('#modificar_obligacion').click(function() {
                if (!validarRegistro('ModalModificarObligacion', 1)) return;
                let fecha_inicio = $('#ModalModificarObligacion').find('#fecha_inicio_mod').val();
                let fecha_presentacion = $('#ModalModificarObligacion').find('#fecha_presentacion_mod')
                    .val();
                let data = {
                    id: camaraObligacionSelected,
                    id_obligacion: obligacionSelected,
                    id_entidad: entidadSelected,
                    id_camara: $('#camara').val(),
                    tiempo_presentacion: $('#ModalModificarObligacion').find('#tiempo_presentacion_mod')
                        .val(),
                    tipo_presentacion: $('#ModalModificarObligacion').find('#tipo_presentacion_mod')
                        .val(),
                    fecha_presentacion: fecha_presentacion == 'N/A' ? null : fecha_presentacion,
                    fecha_inicio: fecha_inicio ==
                        'N/A' ? null : fecha_inicio,
                };
                Swal.fire({
                    target: document.getElementById('ModalModificarObligacion'),
                    title: '¿Estás seguro?',
                    text: '¿Deseas modificar esta obligación de la cámara seleccionada?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sí',
                    cancelButtonText: 'No',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('admin.modificar_obligacion_camara') }}",
                            type: 'POST',
                            data: data,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            },
                        }).done(function(response) {
                            Swal.fire({
                                target: document.getElementById(
                                    'ModalModificarObligacion'),
                                icon: 'success',
                                title: 'Éxito',
                                text: 'Obligación modificada correctamente.',
                                showConfirmButton: true,
                                allowOutsideClick: false,
                                confirmButtonText: 'Aceptar',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $('#ModalModificarObligacion').modal('hide');
                                    table.ajax.reload(null, false);
                                }
                            });
                        }).fail(function(error) {
                            Swal.fire({
                                target: document.getElementById(
                                    'ModalModificarObligacion'),
                                icon: 'error',
                                title: 'Error',
                                showConfirmButton: true,
                                allowOutsideClick: false,
                                confirmButtonText: 'Aceptar',
                                text: error.responseJSON?.message ||
                                    "Error al modificar la obligación.",
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    console.error(
                                        "Error al modificar la obligación: ",
                                        error);
                                }
                            });
                            return;
                        });
                    }
                });
            });
            /** 
             * Functions
             */
            function limpiarFormulario() {
                filteredObligaciones = [];
                $('#entidad').val(-1);
                $('#dataTableObligaciones tr').removeClass('selected');
                limpiarObligacion();
            }

            function limpiarObligacion() {
                $('#obligacion').val('');
                obligacionSelected = null;
                $('#tiempo_presentacion').val('');
                $('#tipo_presentacion').val('');
                $('#fecha_presentacion').val('');
                $('#fecha_inicio').val('');
            }
            //Manejo de Fechas
            // Función para validar el formato dd/mm/yyyy
            function esFechaValida(fecha) {
                var regex = /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/;
                if (!regex.test(fecha)) {
                    return false;
                }
                var partes = fecha.split('/');
                var dia = parseInt(partes[0], 10);
                var mes = parseInt(partes[1], 10) - 1;
                var anio = parseInt(partes[2], 10);
                var fechaObj = new Date(anio, mes, dia);
                return (
                    fechaObj.getDate() == dia &&
                    fechaObj.getMonth() == mes &&
                    fechaObj.getFullYear() == anio
                );
            }

            function validarRegistro(idModal, isMod) {
                let mod = "";
                if (isMod) mod = "_mod";
                let obligacion = $('#obligacion' + mod).val();
                let tiempo_presentacion = $('#tiempo_presentacion' + mod).val();
                let tipo_presentacion = $('#tipo_presentacion' + mod).val();
                let fecha_presentacion = $('#fecha_presentacion' + mod).val();
                let fecha_inicio = $('#fecha_inicio' + mod).val();
                let entidad = $('#entidad' + mod).val();

                if (entidad == -1) {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona una entidad.',
                    });
                    return false;
                }
                if (obligacion == '') {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona una obligación.',
                    });
                    return false;
                }

                if (tiempo_presentacion == '') {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona un tiempo de presentación.',
                    });
                    return false;
                }

                if (tipo_presentacion == '') {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona un tipo de presentación.',
                    });
                    return false;
                }

                if (tiempo_presentacion == 'CONSECUTIVA' && fecha_inicio == '') {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona una fecha de inicio.',
                    });
                    return false;
                }

                if (tiempo_presentacion == 'ÚNICA VEZ' && fecha_presentacion == '') {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona una fecha de presentación.',
                    });
                    return false;
                }

                if (tiempo_presentacion == 'CONSECUTIVA' && !esFechaValida(fecha_inicio)) {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona una fecha de inicio válida.',
                    });
                    return false;
                }

                if (tiempo_presentacion == 'ÚNICA VEZ' && !esFechaValida(fecha_presentacion)) {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona una fecha de presentación válida.',
                    });
                    return false;
                }
                return true;
            }
        });
    </script>
@endsection
