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
            <div class="col-lg-1 text-end">
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
                        <h2 class="card-title">Gestión de Obligaciones por Establecimientos de Cámara</h2>
                    </header>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalEstablecimiento">Agregar Nuevo Registro</button> -->
                                        <button id="abrirModal" class="btn btn-primary mb-3">Agregar Nuevo Registro</button>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <select id="camara" name="camara" data-plugin-selectTwo class="form-control  populate"
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
                                        <h2 class="card-title">Listado de Obligaciones de Establecimientos registrados por Cámara</h2>
                                    </header>
                                    <div class="card-body overflow-x-auto max-w-full">
                                        <table class="table table-bordered table-striped mb-0 " id="dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Establecimiento</th>
                                                    <th>Entidad</th>
                                                    <th>Obligación</th> 
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div> 
    <div class="container">
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
                                <div class="col-lg-6">
                                    <p><strong>Cámara Seleccionada:</strong>&nbsp;<span id="nombreCamaraSeleccionada"></span></p>
                                    <input type="hidden" id="id_camara" name="id_camara" value="">
                                </div>
                                <div class="col-lg-2">
                                    <p><strong>Establecimiento:</strong></p>
                                </div>
                                <div class="col-lg-4">
                                    <select id="establecimiento" name="establecimiento" class="form-control populate"> 
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="entidad"><b>Entidad</b></label>
                                    <select id="entidad" name="entidad" class="form-control populate"> 
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
                                    <input type="hidden" id="id_obligacion" name="id_obligacion" value="">
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
                                <div class="row">
                                    <div class="col">
                                        <section class="card">
                                            <header class="card-header">
                                                <h2 class="card-title">Listado de Obligaciones por Entidad</h2>
                                            </header>
                                            <div class="card-body overflow-x-auto max-w-full">
                                                <table class="table table-bordered table-striped mb-0 " id="dataTableObligaciones">
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
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary cerrar-modal">Cerrar</button>&nbsp;
                                <button type="button" class="btn btn-primary" id="agregarObligacion">Agregar Obligación</button>
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
                                <div class="col-lg-6">
                                    <p><strong>Cámara:</strong> <span id="camaraModSeleccionada"></span></p>
                                    <input type="hidden" id="id_establecimiento_obligacion" name="id_establecimiento_obligacion" value="">
                                </div>
                                <div class="col-lg-2">
                                    <p><strong>Establecimiento:</strong></p>
                                </div>
                                <div class="col-lg-4">
                                    <p><span id="establecimientoMod"></span></p>
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
                                <button type="button" class="btn btn-secondary cerrar-modal-mod">Cerrar</button>&nbsp;
                                <button type="button" class="btn btn-primary" id="modificar_obligacion">Modificar
                                    Obligación</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div> 
    <div id="carga"
        style="display: none; text-align: center; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9999;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <img src="{{ asset('storage/loading/loading_256.gif') }}" alt="Cargando..."
                style="width: 50px; height: 50px;">
            <p style="color: white;">Procesando petición, por favor espera...</p>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            let establecimiento_camara_selected = null; 
            if (!@json($isAdmin)) {
                let selectedCamera = $('#camara').val();
                let filtered = camaras.find(function(camara) {
                    return camara.id == selectedCamera;
                }); 
            }

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
            });


            $('#fecha_inicio').datepicker('destroy').datepicker({
                format: 'dd/mm/yyyy', // Define el formato de fecha
                autoclose: true, // Cierra automáticamente al seleccionar
            });

            $('#fecha_presentacion_mod').datepicker('destroy').datepicker({
                format: 'dd/mm/yyyy', // Define el formato de fecha
                autoclose: true, // Cierra automáticamente al seleccionar
            });


            $('#fecha_inicio_mod').datepicker('destroy').datepicker({
                format: 'dd/mm/yyyy', // Define el formato de fecha
                autoclose: true, // Cierra automáticamente al seleccionar
            });



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
                    url: "{{ route('admin.obtener_listado_obligaciones_establecimientos') }}",
                    type: "GET",
                    data: function(d) {
                        d.start = d.start || 0;
                        d.length = d.length || 10;
                        d.id_camara = $('#camara').val(); // Enviar el valor de localidad seleccionada
                    },
                    error: function(error) {
                        console.error("Error al cargar los datos: ", error);
                    },
                    complete: function(response) {
                        Swal.close();
                    },
                },
                pageLength: 10, // Establece el número de registros por página
                columns: [{
                        data: 'establecimiento',
                        width: '10%'
                    },
                    {
                        data: 'entidad',
                        width: '35%'
                    },
                    {
                        data: 'obligacion',
                        width: '35%'
                    }, 
                    {
                        data: 'btn',
                        width: '5%'
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
                        d.modulo  = 2;
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
            $('#camara').change(function() {
                let selectedCamera = $(this).val();
                if (selectedCamera === '-1') {
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

            $('#abrirModal').click(function(e) {
                e.preventDefault(); // Evita el comportamiento predeterminado del botón

                // Verificar si se seleccionó una opción válida en el select
                var camaraSeleccionada = $('#camara').val();
                var nombreCamaraSeleccionada = $('#camara option:selected').text();
 
                let $entidadSelect = $('#entidad');  
                $entidadSelect.empty();

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

                   // alert(camaraSeleccionada);
                    $('#nombreCamaraSeleccionada').text(nombreCamaraSeleccionada);
                    $('#id_camara').val(camaraSeleccionada);
                    //limpiarFormulario();
                   // tableObligaciones.clear().draw();
                    // Abrir el modal
                    //Carga de Select con los Establecimientos de la Camara
                    $.ajax({
                        url: '/get-establecimientos-camara', // Ruta para obtener las parroquias
                        method: 'GET',
                        data: {
                            id_camara: camaraSeleccionada, // Enviamos el ID de la cámara
                        },
                        success: function(response) {
                            let establecimientos = response.establecimientos;  
                            let $establecimientoSelect = $('#establecimiento'); // Select de parroquias

                            $establecimientoSelect.empty(); // Limpiamos el select de parroquias
                            $establecimientoSelect.append(
                                '<option value=-1>Seleccionar</option>'
                            ); // Opción por defecto

                            // Agregamos las parroquias al select
                            establecimientos.forEach(function(establecimiento) {
                                $establecimientoSelect.append(
                                    `<option value=${establecimiento.id}>${establecimiento.nombre}</option>`
                                );
                            });
                        },
                        error: function() {
                            alert('Hubo un error al cargar los establecimientos.');
                        }
                    });

                    $('#ModalObligacion').modal('show');
                }
            });
  
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

            $('.cerrar-modal').click(function() {
                limpiarFormulario();
                $('#ModalObligacion').modal('hide'); // Cerrar el modal
            });

            $('.cerrar-modal-mod').click(function() {
                limpiarFormulario();
                $('#ModalModificarObligacion').modal('hide'); // Cerrar el modal
            });

            $('#entidad').change(function() {
                let selectedEntidad = $(this).val();

                $('#obligacion').val('');
                $('#id_obligacion').val(''); 
                $('#tiempo_presentacion').val(''); 
                $('#tipo_presentacion').val(''); 

                $('#fecha_presentacion').val('');
                $('#fecha_presentacion').prop('disabled', true);

                $('#fecha_inicio').val('');
                $('#fecha_inicio').prop('disabled', true);

                

                if (selectedEntidad === '-1') {
                    
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
                    Swal.fire({
                        target: document.getElementById('ModalObligacion'),
                        title: 'Cargando',
                        text: 'Por favor espere',
                        icon: 'info',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    });
                    tableObligaciones.ajax.reload();
                }
            });

            $('#establecimiento').change(function() {
                let establecimientoId = $('#establecimiento').val();  

                if (establecimientoId != -1 ) {
                    $.ajax({
                        url: '/get-entidades-establecimiento', // Ruta para obtener las parroquias
                        method: 'GET',
                        data: {
                            id_establecimiento: establecimientoId 
                        },
                        success: function(response) {
                            let entidades = response.entidades; // Asegúrate de usar el nombre correcto en el JSON de respuesta
                            let $entidadSelect = $('#entidad'); // Select de parroquias

                            $entidadSelect.empty(); // Limpiamos el select de parroquias
                            $entidadSelect.append(
                                '<option value=-1>Seleccionar</option>'
                            ); // Opción por defecto

                            // Agregamos las parroquias al select
                            entidades.forEach(function(entidad) {
                                $entidadSelect.append(
                                    `<option value=${entidad.id}>${entidad.nombre}</option>`
                                );
                            });
                        },
                        error: function() {
                            alert('Hubo un error al cargar las Entidades.');
                        }
                    });
                } else {
                    $('#entidad').empty().append(
                        '<option value=-1>Seleccionar</option>'); // Limpiar select de parroquias
                }
            });

            $(document).on('click', '.seleccionar-obligacion', function () {
                var button = $(this);
                var obligacionId = button.data('id');

                Swal.fire({
                    target: document.getElementById('ModalObligacion'),
                    title: 'Cargando',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                $.ajax({
                    url: '/administrador/obligacion/detalle/' + obligacionId,
                    method: 'GET',
                    success: function (response) {
                        console.log('Datos recibidos:', response);

                        // Llenar los campos del formulario
                        $('#id_obligacion').val(response.id);
                        $('#obligacion').val(response.obligacion);

                        // Tiempo de presentación (1 -> Única vez, 2 -> Consecutiva)
                        if (response.id_tiempo_presentacion == 1) {
                            $('#tiempo_presentacion').val('Única vez');
                            $('#fecha_presentacion').prop('disabled', false);
                            $('#fecha_inicio').prop('disabled', true);
                        } else if (response.id_tiempo_presentacion == 2) {
                            $('#tiempo_presentacion').val('Consecutiva');
                            $('#fecha_presentacion').prop('disabled', true);
                            $('#fecha_inicio').prop('disabled', false);
                        } 

                        // Tipo de presentación
                        switch (response.id_tipo_presentacion) {
                            case 1:
                                $('#tipo_presentacion').val('Mensual');
                                break;
                            case 2:
                                $('#tipo_presentacion').val('Bimensual');
                                break;
                            case 3:
                                $('#tipo_presentacion').val('Trimestral');
                                break;
                            case 4:
                                $('#tipo_presentacion').val('Semestral');
                                break;
                            case 5:
                                $('#tipo_presentacion').val('Anual');
                                break;
                            default:
                                $('#tipo_presentacion').val('');
                        }

                        // Activar o desactivar el campo de fecha de inicio si hay un valor en id_tipo_presentacion
                        if (response.id_tipo_presentacion) {
                            $('#fecha_inicio').prop('disabled', false);
                        } else {
                            $('#fecha_inicio').prop('disabled', true);
                        }

                        // Llenar otros campos si es necesario
                        $('#fecha_presentacion').val(response.fecha_presentacion);
                        $('#fecha_inicio').val(response.fecha_inicio);
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                    },
                    complete: function () {
                        Swal.close();
                    },
                });
            });

            function validarRegistro() {
                const entidad = $('#entidad').val();
                //alert(entidad);
                if (entidad === '-1' || entidad === null) {
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

                const obligacion = $('#id_obligacion').val();
                //alert(obligacion);
                if (obligacion  === '') {
                    Swal.fire({
                        target: document.getElementById('ModalObligacion'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Por favor, selecciona al menos una obligación para agregar al Establecimiento',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    return false;
                } 
                const tiempo = $('#tiempo_presentacion').val();
                //alert(tiempo);

                if (tiempo  === 'Única vez') {
                    if($('#fecha_presentacion').val() === ''){
                        Swal.fire({
                            target: document.getElementById('ModalObligacion'),
                            icon: 'error',
                            title: 'Error',
                            text: 'Por favor, debe registrar una Fecha de Presentación para el registro',
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false
                        });
                        return false;
                    }
                }

                if (tiempo  === 'Consecutiva') {
                    if($('#fecha_inicio').val() === ''){
                        Swal.fire({
                            target: document.getElementById('ModalObligacion'),
                            icon: 'error',
                            title: 'Error',
                            text: 'Por favor, debe registrar una Fecha de Inicio para el registro',
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false
                        });
                        return false;
                    }
                } 
                 
                return true;
            }


            $("#agregarObligacion").click(async function () {
                if (!validarRegistro()) {
                    return;
                }

                let formData = new FormData();
                formData.append("id_entidad", $("#entidad").val());
                formData.append("id_obligacion", $("#id_obligacion").val());
                formData.append("id_camara", $("#id_camara").val());
                formData.append("id_establecimiento", $("#establecimiento").val());
                formData.append("fecha_presentacion", $("#fecha_presentacion").val());
                formData.append("fecha_inicio", $("#fecha_inicio").val());

                const registro = await Swal.fire({
                    target: document.getElementById("ModalObligacion"),
                    title: "Agregar Obligaciones",
                    text: "¿Está seguro de que desea agregar la Obligación seleccionada al Establecimiento?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Aceptar",
                    cancelButtonText: "Cancelar",
                    allowOutsideClick: false,
                });

                if (registro.isConfirmed) {
                    $.ajax({
                        url: "{{ route('admin.registrar_obligacion_establecimiento') }}",
                        type: "POST",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                        },
                    })
                        .done(function (res) {
                            Swal.fire({
                                target: document.getElementById("ModalObligacion"),
                                icon: "success",
                                title: "Éxito",
                                text: res.message,
                                confirmButtonText: "Aceptar",
                            }).then(() => {
                                $("#ModalObligacion").modal("hide");
                                table.ajax.reload(null, false);
                            });
                        })
                        .fail(function (res) {
                            if (res.status === 400 || res.status === 422) {
                                let errors = res.responseJSON.errors;
                                let errorMessages = Object.values(errors).flat().join("\n");
                                Swal.fire({
                                    target: document.getElementById("ModalObligacion"),
                                    icon: "error",
                                    title: "Error de validación",
                                    text: errorMessages,
                                    confirmButtonText: "Aceptar",
                                });
                            } else if (res.status === 409) {
                                Swal.fire({
                                    target: document.getElementById("ModalObligacion"),
                                    icon: "error",
                                    title: "Error",
                                    text: res.responseJSON.message,
                                    confirmButtonText: "Aceptar",
                                });
                            } else {
                                Swal.fire({
                                    target: document.getElementById("ModalObligacion"),
                                    icon: "error",
                                    title: "Error inesperado",
                                    text: "Ocurrió un error al registrar la obligación.",
                                    confirmButtonText: "Aceptar",
                                });
                            }
                            console.error(res.responseText);
                        });
                }
            });

            $(document).on('click', '.delete-obligacion', function() {
                let button = $(this);
                let id = button.data('id');

                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¿Deseas eliminar esta obligación del establecimiento seleccionado?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí',
                    cancelButtonText: 'No',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "/administrador/obligacion_establecimiento/eliminar/" + id,
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


                console.log('Botón clicado...');
                var button = $(this);
                var Id = button.data('id');

                console.log('Cargo ID:', Id);

                //alert(Id);

                //$('#carga').show();
                Swal.fire({
                    target: document.getElementById('ModalModificarObligacion'),
                    title: 'Cargando información de Cámara',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });

                // Función para convertir fecha en formato dd/mm/yyyy a objeto Date
                // Función para convertir fecha en formato dd/mm/yyyy o yyyy-mm-dd a objeto Date
                function convertirFecha(fecha) {
                    let partes;

                    // Detectar el formato según el separador
                    if (fecha.includes('/')) {
                        // Formato dd/mm/yyyy
                        partes = fecha.split('/');
                        return new Date(partes[2], partes[1] - 1, partes[0]); // Mes base 0
                    } else if (fecha.includes('-')) {
                        // Formato yyyy-mm-dd
                        partes = fecha.split('-');
                        return new Date(partes[0], partes[1] - 1, partes[2]); // Mes base 0
                    }

                    // Si no coincide con ninguno, devolver null o lanzar un error
                    console.error("Formato de fecha desconocido:", fecha);
                    return null;
                }

                $.ajax({
                    url: '/administrador/obligacion_establecimiento/detalle/' + Id,
                    method: 'GET',
                    success: function(response) {
                        establecimiento_camara_selected = response;
                        console.log('Datos recibidos:', response);
 
                        var IdEstablecimientoObligacion = $('#id_establecimiento_obligacion'); 
                        var Camara = $('#camaraModSeleccionada ');
                        var Establecimeinto = $('#establecimientoMod');
                        var Entidad = $('#entidad_mod');
                        var Obligacion = $('#obligacion_mod');
                        var TiempoPresentacion = $('#tiempo_presentacion_mod');
                        var FechaPresentacion = $('#fecha_presentacion_mod');
                        var TipoPresentacion = $('#tipo_presentacion_mod');
                        var FechaInicio = $('#fecha_inicio_mod');  

                        Camara.text(null);  
                        Establecimeinto.text(null); 
                        Entidad.val(null); 
                        Obligacion.val(null); 
                        TiempoPresentacion.val(null); 
                        FechaPresentacion.val(null); 
                        TipoPresentacion.val(null); 
                        FechaInicio.val(null);  
                        //alert(response.id);

                        IdEstablecimientoObligacion.val(response.id);  
                        Camara.text(response.camara.razon_social);  
                        Establecimeinto.text(response.establecimientos.secuencial); 
                        Entidad.val(response.entidad.entidad); 
                        Obligacion.val(response.obligacion.obligacion); 


                        /*TiempoPresentacion.val(response.obligacion.id_tiempo_presentacion); 
                        FechaPresentacion.val(response.fecha_presentacion); 
                        TipoPresentacion.val(response.obligacion.id_tipo_presentacacion); 
                        FechaInicio.val(response.fecha_inicio);   // var fechaConstitucionDate = convertirFecha(fechaConstitucion);
                        */
                       // Validaciones y asignaciones
                        if (response.obligacion.id_tiempo_presentacion !== undefined) {
                            // Asignar el texto correspondiente al valor de id_tiempo_presentacion
                            const tiempoPresentacion = response.obligacion.id_tiempo_presentacion === 1 ? "Único" : "Consecutivo";
                            TiempoPresentacion.val(tiempoPresentacion);

                            // Habilitar el campo correspondiente
                            if (response.obligacion.id_tiempo_presentacion === 1) {
                                FechaPresentacion.prop("disabled", false);
                                FechaInicio.prop("disabled", true);
                            } else if (response.obligacion.id_tiempo_presentacion === 2) {
                                FechaPresentacion.prop("disabled", true);
                                FechaInicio.prop("disabled", false);
                            }
                        }

                        //alert(response.obligacion.id_tipo_presentacion);
                        if (response.obligacion.id_tipo_presentacion !== undefined) {
                            // Asignar el texto correspondiente al valor de id_tipo_presentacacion
                            const tiposPresentacion = {
                                1: "Mensual",
                                2: "Bimensual",
                                3: "Trimestral",
                                4: "Semestral",
                                5: "Anual"
                            };
                            const tipoPresentacion = tiposPresentacion[response.obligacion.id_tipo_presentacion] || "N/A";
                            TipoPresentacion.val(tipoPresentacion);
                        }

                       // alert (response.fecha_presentacion);
                        // Validar y asignar FechaPresentacion
                        if (response.fecha_presentacion) {
                            // Si el campo no es null ni vacío, convertir la fecha y asignarla
                            if (response.fecha_presentacion !== null && response.fecha_presentacion.trim() !== "") {
                                const fechaConvertida = convertirFecha(response.fecha_presentacion);
                                FechaPresentacion.val(fechaConvertida.toLocaleDateString());
                            } else {
                                // Si es null o vacío, dejar el campo vacío
                                FechaPresentacion.val("");
                            }
                        }

                        // Validar y asignar FechaInicio
                        if (response.fecha_inicio) {
                            // Si el campo no es null ni vacío, convertir la fecha y asignarla
                            if (response.fecha_inicio !== null && response.fecha_inicio.trim() !== "") {
                                const fechaConvertida = convertirFecha(response.fecha_inicio);
                                FechaInicio.val(fechaConvertida.toLocaleDateString());
                            } else {
                                // Si es null o vacío, dejar el campo vacío
                                FechaInicio.val("");
                            }
                        }
                        //alert(response.camara.razon_social);

                        Swal.close();
                        $('#ModalModificarCamara').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error al momento de Cargar el Establecimiento',
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false
                        });
                    }
                }); 

                $('#ModalModificarObligacion').modal('show');
            });
            $('#modificar_obligacion').click(function() {
                 
                // Usando el contenedor como referencia
                let $modal = $('#ModalModificarObligacion'); // Modal contenedor

                let id = $modal.find('#id_establecimiento_obligacion').val(); 
                let fecha_inicio = $modal.find('#fecha_inicio_mod').val();
                let fecha_presentacion = $modal.find('#fecha_presentacion_mod').val();
                //alert($('#id_establecimiento_obligacion').val());
                //alert(id);
                let data = {
                    id: id,  
                    fecha_presentacion: fecha_presentacion == 'N/A' ? null : fecha_presentacion,
                    fecha_inicio: fecha_inicio == 'N/A' ? null : fecha_inicio,
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
                            url: "{{ route('admin.modificar_obligacion_establecimiento') }}",
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
                        }).fail(function (error) {
                            let errorMessage = 'Error al modificar la obligación.';
                            if (error.responseJSON?.errors) {
                                // Construir un mensaje de error detallado
                                errorMessage = Object.entries(error.responseJSON.errors)
                                    .map(([key, messages]) => `${messages.join(' ')}`)
                                    .join('\n');
                            }

                            Swal.fire({
                                target: document.getElementById('ModalModificarObligacion'),
                                icon: 'error',
                                title: 'Error',
                                text: errorMessage,
                                showConfirmButton: true,
                                allowOutsideClick: false,
                                confirmButtonText: 'Aceptar',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    console.error("Error al modificar la obligación: ", error);
                                }
                            });
                        });
                    }
                });
            });

            $('#btn-more-info').on('click', function() {
                let camaraLogInsert = establecimiento_camara_selected.insert;
                let camaraLogUpdate = establecimiento_camara_selected.update;

                // Manejo del caso cuando camaraLogUpdate es vacío
                let lastItem = null;
                if (Array.isArray(camaraLogUpdate) && camaraLogUpdate.length > 0) {
                    lastItem = camaraLogUpdate[camaraLogUpdate.length - 1];
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
                const formattedCreatedAt = formatDate(camaraLogInsert.created_at);
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
                                <p><strong>Usuario:</strong> ${camaraLogInsert.user.name}</p>
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
