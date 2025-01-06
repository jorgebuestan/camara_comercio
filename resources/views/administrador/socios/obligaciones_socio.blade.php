@extends('dashboard')

@section('pagename')
    Obligaciones por Socio
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
                        <h2 class="card-title">Gestión de Obligaciones por Socio</h2>
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
                                        <select id="socio" name="socio" class="form-control populate">
                                            <option value=-1>Seleccionar</option>
                                            @foreach ($sociosSelect as $id => $razon_social)
                                                <option value={{ $id }}>{{ $razon_social }}</option>
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
                                        <h2 class="card-title">Listado de Obligaciones Registradas del Socio</h2>
                                    </header>
                                    <div class="card-body overflow-x-auto max-w-full">
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
                                <p><strong>Socio Seleccionado:</strong> <span id="nombreSocioSeleccionado"></span></p>
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
                        <div class="row mb-4">
                            <div class="col-md-12 overflow-x-auto">
                                <table class="table table-bordered mb-0" id="dataTableObligaciones">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Obligación</th>
                                            <th>Tiempo de Presentación</th>
                                            <th>Tipo de Presentación</th>
                                            <th id="labelFecha">Fecha</th>
                                            <th>Acciones</th>
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
                    <button type="button" class="btn btn-warning" id="btn-more-info">
                        <i class="fas fa-info"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-12">
                                <p><strong>Socio Seleccionado:</strong> <span id="socioModSeleccionado"></span></p>
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

            let entidades = [];
            let socioSelected = null;
            let obligacionSelected = null;
            let entidadSelected = null;
            let socioObligacionSelected = null;
            let socioObligaciones = [];
            let filteredObligaciones = [];
            let selectedAddObligaciones = [];

            $('.fecha').datepicker('destroy').datepicker({
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
            let table = $('#dataTable').DataTable({
                destroy: true,
                processing: false,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.obtener_listado_obligaciones_socio') }}",
                    type: "GET",
                    data: function(d) {
                        d.start = d.start || 0;
                        d.length = d.length || 10;
                        d.id_socio = $('#socio').val();
                        d.with_entidad = 1;
                        d.with_socio = 1;
                        d.with_obligacion = 1;
                        d.estado = 1;
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
                        socioObligaciones = response.responseJSON.data;
                        Swal.close();
                    }
                },
                pageLength: 10, // Establece el número de registros por página
                columns: [{
                        data: 'nombre_entidad',
                        title: 'Entidad',
                        width: '40%'
                    },
                    {
                        data: 'nombre_obligacion',
                        title: 'Obligación',
                        width: '40%'
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
                    let td = $(row).find(".truncate");
                    td.attr("title", td.text());

                    let td2 = $(row).find(".truncate2");
                    td2.attr("title", td2.text());
                }
            });

            let tableObligaciones = $('#dataTableObligaciones').DataTable({
                data: filteredObligaciones,
                pageLength: 10, // Establece el número de registros por página
                columns: [{
                        data: 'obligacion',
                        width: '20%'
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
                        data: 'fecha',
                        width: '20%'
                    },
                    {
                        data: 'btn',
                        width: '20%'
                    }
                ],
                order: [
                    [4, "desc"]
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
                },
                columnDefs: [
                    {
                        targets: 4,
                        orderable: true,
                        render: function(data, type, row) {
                            if (type === 'display') {
                                return data;
                            }
                            return row.selected ? 1 : 0;
                        }
                    }
                ]
            });

            /**
             * Event Listeners
             */

            // Escuchar el evento change del select de socios
            $('#socio').change(function() {
                let selectedSocio = $(this).val();
                if (selectedSocio == -1) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor selecciona un socio válido.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            console.error("Por favor selecciona un socio válido.");
                            table.ajax.reload();
                            socioSelected = selectedSocio
                        }
                    });
                    return;
                }
                socioSelected = selectedSocio;
                table.ajax.reload(); // Recargar la tabla con el socio seleccionado
            });

            $('#abrirModal').click(function(e) {
                e.preventDefault(); // Evita el comportamiento predeterminado del botón

                // Verificar si se seleccionó una opción válida en el select
                let socioSeleccionado = $('#socio').val();
                let nombreSocioSeleccionado = $('#socio option:selected').text();

                if (socioSeleccionado == -1) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor selecciona un socio válido.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            console.error("Por favor selecciona un socio válido.");
                        }
                    });
                    return;
                } else {
                    $('#nombreSocioSeleccionado').text(nombreSocioSeleccionado);
                    limpiarFormulario();
                    tableObligaciones.clear().draw();
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
                selectedAddObligaciones = [];
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
                $.ajax({
                    url: "{{ route('admin.obtener_entidades') }}",
                    type: 'GET',
                    data: {
                        id_entidad: selected
                    },
                    error: function(error) {
                        Swal.close();
                        Swal.fire({
                            target: document.getElementById('ModalObligacion'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: error.responseJSON?.message ||
                                "Error al cargar las obligaciones de la entidad.",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                console.error(
                                    "Error al cargar las obligaciones de la entidad: ",
                                    error);
                                $('#ModalObligacion').modal('hide');
                            }
                        });
                        return;
                    },
                    complete: function(response) {
                        Swal.close();
                        entidades = response.responseJSON.entidades;
                        filteredObligaciones = entidades.find(entidad => entidad.id == selected).obligaciones;
                        filteredObligaciones = filteredObligaciones.map(obligacion => {
                            let checkbox = socioObligaciones.some(socioObligacion => socioObligacion.id_obligacion === obligacion.obligacion.id);
                            let data = [];
                            let fecha = '';
                            if (checkbox) {
                                data = socioObligaciones.find(socioObligacion => socioObligacion.id_obligacion === obligacion.obligacion.id);
                                console.log(data);
                                fecha = data.obligacion?.tiempo_presentacion?.descripcion == 'CONSECUTIVA' ? data?.fecha_inicio : data.fecha_presentacion;
                                console.log(fecha);
                            } else {
                                fecha = `<input type="text" data-plugin-datepicker class="form-control fecha" name="fecha" id="fecha_${obligacion.obligacion.id}" placeholder="Fecha">`;
                            }
                            return {
                                id_obligacion: obligacion.obligacion.id,
                                obligacion: obligacion.obligacion.obligacion,
                                tiempo_presentacion: obligacion.obligacion.tiempo_presentacion
                                    ?.descripcion == undefined ? 'N/A' : obligacion.obligacion
                                    .tiempo_presentacion
                                    ?.descripcion,
                                tipo_presentacion: obligacion.obligacion.tipo_presentacion?.descripcion ==
                                    undefined ?
                                    'N/A' : obligacion.obligacion.tipo_presentacion.descripcion,
                                fecha,
                                btn: `<div class="flex justify-center w-full items-center"><input type="checkbox" style="width:1rem;height:1rem;" class="form-check-input seleccionar-obligacion" data-id="${obligacion.obligacion.id}" value="${checkbox ? 'true' : 'false'}"${checkbox ? ' checked' : ''} ${checkbox ? ' disabled' : ''}></div>`,
                                selected: checkbox
                            }
                        });
                        tableObligaciones.clear().rows.add(filteredObligaciones).draw();
                        let debounceTimeout;
                        clearTimeout(debounceTimeout);
                        debounceTimeout = setTimeout(() => {
                            $('.fecha').each(function() {
                                $(this).datepicker({
                                    format: 'dd/mm/yyyy',
                                    autoclose: true,
                                    todayHighlight: true,
                                    language: 'es'
                                });
                            });
                        }, 300);
                    }
                });
            });

            $(document).on('click', '.seleccionar-obligacion', function() {
                let checkbox = $(this);
                let id = checkbox.data('id');
                let isChecked = checkbox.is(':checked');
                let fecha = $(`#fecha_${id}`).val();
                if ((fecha == '' || !esFechaValida(fecha)) && isChecked) {
                    Swal.fire({
                        target: document.getElementById('ModalObligacion'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona una fecha para la obligación.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            console.error("Por favor, selecciona una fecha para la obligación.");
                        }
                    });
                    checkbox.prop('checked', false);
                    return;
                }
                let obligacion = filteredObligaciones.find(obligacion => obligacion.id_obligacion == id);
                if (isChecked) {
                    if (!selectedAddObligaciones.some(obligacion => obligacion.id_obligacion == id)){
                        selectedAddObligaciones.push({
                            id_obligacion: obligacion.id_obligacion,
                            fecha: $(`#fecha_${obligacion.id_obligacion}`).val(),
                        })
                    }
                } else {
                    selectedAddObligaciones = selectedAddObligaciones.filter(obligacion => obligacion.id_obligacion != id);
                }
            });

            $('#agregar_obligacion').click(function() {
                if (!validarRegistro('ModalObligacion')) return false;
                let entidad = $('#entidad').val();
                let socio = $('#socio').val();
                let formData = new FormData();
                formData.append('id_socio', socio);
                formData.append('id_entidad', entidad);
                selectedAddObligaciones.forEach((obligacion, index) => {
                    formData.append(`obligaciones[${index}][id_obligacion]`, obligacion.id_obligacion);
                    formData.append(`obligaciones[${index}][fecha]`, obligacion.fecha);
                });
                Swal.fire({
                    target: document.getElementById('ModalObligacion'),
                    title: '¿Estás seguro?',
                    text: "¿Deseas agregar esta obligación a el socio seleccionado?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí',
                    cancelButtonText: 'No',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('admin.registrar_obligacion_socio') }}",
                            type: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
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
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    console.error(
                                        "Error al agregar la obligación: ",
                                        error);
                                }
                            });
                            return;
                        });
                    }
                });
            });

            $(document).on('click', '.delete-socio-obligacion', function() {
                let button = $(this);
                let id = button.data('id');

                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¿Deseas eliminar esta obligación del socio seleccionado?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí',
                    cancelButtonText: 'No',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "/administrador/obligacion_socio/eliminar/" + id,
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
                                showConfirmButton: true,
                                allowOutsideClick: false,
                                confirmButtonText: 'Aceptar',
                                text: error.responseJSON?.message ||
                                    "Error al eliminar la obligación.",
                            });
                            console.error("Error al eliminar la obligación: ",
                                error);
                        });
                    }
                });
            });

            $(document).on('click', '.edit-modal', function() {
                let button = $(this);
                let id = button.data('id');

                let data = socioObligaciones.find(obligacion => obligacion.id == id);

                let nombreSocioSeleccionado = $('#socio option:selected').text();
                $('#socioModSeleccionado').text(nombreSocioSeleccionado);

                let tiempo_presentacion = data.obligacion.tiempo_presentacion?.descripcion ?? 'N/A';
                let tipo_presentacion = data.obligacion.tipo_presentacion?.descripcion ?? 'N/A';
                let fecha_presentacion = data.fecha_presentacion ?? 'N/A';
                let fecha_inicio = data.fecha_inicio ?? 'N/A';

                $('#ModalModificarObligacion').find('#entidad_mod').val(data.nombre_entidad);
                $('#ModalModificarObligacion').find('#obligacion_mod').val(data.nombre_obligacion);
                $('#ModalModificarObligacion').find('#tiempo_presentacion_mod').val(tiempo_presentacion);
                $('#ModalModificarObligacion').find('#tipo_presentacion_mod').val(tipo_presentacion);
                $('#ModalModificarObligacion').find('#fecha_presentacion_mod').val(fecha_presentacion);
                $('#ModalModificarObligacion').find('#fecha_inicio_mod').val(fecha_inicio);
                socioObligacionSelected = id;
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
                if (!validarRegistroMod('ModalModificarObligacion')) return;
                let fecha_inicio = $('#ModalModificarObligacion').find('#fecha_inicio_mod').val();
                let fecha_presentacion = $('#ModalModificarObligacion').find('#fecha_presentacion_mod')
                    .val();
                let data = {
                    id: socioObligacionSelected,
                    id_obligacion: obligacionSelected,
                    id_entidad: entidadSelected,
                    id_socio: $('#socio').val(),
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
                    text: '¿Deseas modificar esta obligación del socio seleccionado?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sí',
                    cancelButtonText: 'No',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('admin.modificar_obligacion_socio') }}",
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
                            });
                            console.error("Error al modificar la obligación: ",
                                error);
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
                let regex = /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/;
                if (!regex.test(fecha)) {
                    return false;
                }
                let partes = fecha.split('/');
                let dia = parseInt(partes[0], 10);
                let mes = parseInt(partes[1], 10) - 1;
                let anio = parseInt(partes[2], 10);
                let fechaObj = new Date(anio, mes, dia);
                return (
                    fechaObj.getDate() == dia &&
                    fechaObj.getMonth() == mes &&
                    fechaObj.getFullYear() == anio
                );
            }

            function validarRegistro(idModal) {
                let entidad = $('#entidad').val();
                let socio = $('#socio').val();
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
                if (socio == -1) {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona un socio.',
                    });
                    return false;
                }
                if (selectedAddObligaciones.length == 0) {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona al menos una obligación.',
                    });
                    return false;
                }
                let nuevasObligaciones = selectedAddObligaciones.filter(
                    id => !filteredObligaciones.some(obligacion => obligacion.id === id)
                );
                if (nuevasObligaciones.length == 0) {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona al menos una obligación nueva.',
                    });
                    return false;
                }
                nuevasObligaciones.forEach(obligacion => {
                    if (!obligacion.fecha || obligacion.fecha.trim() === '') {
                        Swal.fire({
                            target: document.getElementById(idModal),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'Por favor, selecciona una fecha para todas las obligaciones seleccionadas.',
                        });
                        return false;
                    }
                });
                return true;
            }

            function validarRegistroMod(idModal) {
                let obligacion = $('#obligacion_mod').val();
                let tiempo_presentacion = $('#tiempo_presentacion_mod').val();
                let tipo_presentacion = $('#tipo_presentacion_mod').val();
                let fecha_presentacion = $('#fecha_presentacion_mod').val();
                let fecha_inicio = $('#fecha_inicio_mod').val();
                let entidad = $('#entidad_mod').val();

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
            $('#btn-more-info').on('click', function() {
                let socioObligacion = socioObligaciones.find(socioObligacion => socioObligacion.id ==
                    socioObligacionSelected);
                let socioObligacionLogInsert = socioObligacion.logs.insert ?? [];
                let socioObligacionLogUpdate = socioObligacion.logs.update ?? [];

                if (Array.isArray(socioObligacionLogInsert) && socioObligacionLogInsert.length > 0) {
                    socioObligacionLogInsert = socioObligacionLogInsert[0];
                } else {
                    Swal.fire({
                        target: document.getElementById('ModalModificarObligacion'),
                        icon: 'info',
                        title: 'Información adicional',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'No hay información adicional para mostrar.',
                    });
                }
                let lastItem = null;
                if (Array.isArray(socioObligacionLogUpdate) && socioObligacionLogUpdate.length > 0) {
                    lastItem = socioObligacionLogUpdate[socioObligacionLogUpdate.length - 1];
                } else {
                    lastItem = {
                        created_at: 'No hay modificaciones',
                        user: {
                            name: 'N/A'
                        }
                    };
                }

                const formatDate = (dateString) => {
                    if (dateString === 'No hay modificaciones') {
                        return dateString;
                    }
                    const options = {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    };
                    return new Date(dateString).toLocaleDateString('es-ES', options);
                };

                // Formatear las fechas
                const formattedCreatedAt = formatDate(socioObligacionLogInsert.created_at);
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
                                <p><strong>Usuario:</strong> ${socioObligacionLogInsert.user.name}</p>
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
