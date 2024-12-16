@extends('dashboard')

@section('pagename')
    Adherentes por Socio
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
                        <h2 class="card-title">Gestión de Adherentes por Socio</h2>
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
                                        <div class="card-actions">
                                            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                                        </div>

                                        <h2 class="card-title">Listado de Adherentes Registradas del Socio</h2>
                                    </header>
                                    <div class="card-body">
                                        <table class="table table-bordered table-striped mb-0" id="dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Identificación</th>
                                                    <th>Nombres</th>
                                                    <th>Apellidos</th>
                                                    <th>Estado</th>
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
    <form enctype="multipart/form-data" class="modal fade" id="ModalAdherente" tabindex="-1"
        aria-labelledby="ModalAdherenteLabel" aria-hidden="true">
        @csrf
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalAdherenteLabel"><b>Agregar un nuevo Adherente</b></h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-12">
                                <p><strong>Socio Seleccionado:</strong> <span id="nombreSocioSeleccionado"></span></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-2">
                            <div class="col-md-6 gap-1 flex flex-col">
                                <label>
                                    Adjuntar Foto
                                </label>
                                <input type="file" class="form-control-file" id="fotoFile" name="file" />
                                <input type="hidden" name="tipoDoc" value="1" />
                            </div>
                            <div class="col-md-6 gap-1">
                                <label>
                                    Fecha de Ingreso
                                </label>
                                <input type="text" data-plugin-datepicker class="form-control" name="fecha_ingreso"
                                    id="fecha_ingreso" placeholder="Fecha de Ingreso" />
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6 gap-1">
                                <label>
                                    Tipo de Identificacion
                                </label>
                                <select id="tipo_identificacion" name="tipo_identificacion" class="form-control populate">
                                    <option value=-1>Seleccionar</option>
                                    @foreach ($tipos_identificacion as $id => $descripcion)
                                        <option value={{ $id }}>{{ $descripcion }}
                                        </option>
                                    @endForEach
                                </select>
                            </div>
                            <div class="col-md-6 gap-1">
                                <label>
                                    Identificación
                                </label>
                                <input type="text" class="form-control" name="identificacion" id="identificacion"
                                    placeholder="Identificación" />
                                <div id="error_identificacion" style="color: red; display: none;">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6 gap-1">
                                <label>Nombres</label>
                                <input type="text" class="form-control" name="nombres" id="nombres"
                                    placeholder="Nombres">
                            </div>
                            <div class="col-md-6 gap-1">
                                <label>Apellidos</label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos"
                                    placeholder="Apellidos">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6 gap-1">
                                <label>Correo</label>
                                <input type="email" class="form-control" name="correo" id="correo"
                                    placeholder="Correo" />
                                <div id="error_correo" style="color: red; display: none;">
                                    Ingrese un correo
                                    electrónico valido</div>
                            </div>
                            <div class="col-md-6 gap-1">
                                <label>Teléfono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono"
                                    placeholder="Teléfono" />
                                <div id="error_telefono" style="color: red; display: none;">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6 gap-1">
                                <label>Pais</label>
                                <select id="pais" name="pais" class="form-control populate">
                                    <option value=-1>Seleccionar</option>
                                    @foreach ($paises as $id => $nombre)
                                        <option value={{ $id }} {{ $id == 57 ? 'selected' : '' }}>
                                            {{ $nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 gap-1">
                                <label>Provincia</label>
                                <select id="provincia" name="provincia" class="form-control populate">
                                    <option value=-1>Seleccionar</option>
                                    @foreach ($provincias as $id => $nombre)
                                        <option value={{ $id }} {{ $id == 2 ? 'selected' : '' }}>
                                            {{ $nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6 gap-1">
                                <label>Cantón</label>
                                <select id="canton" name="canton" class="form-control populate">
                                    <option value=-1 selected>Seleccionar</option>
                                    @foreach ($cantones as $id => $nombre)
                                        <option value={{ $id }} {{ $id == 2 ? 'selected' : '' }}>
                                            {{ $nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 gap-1">
                                <label>Parroquia</label>
                                <select id="parroquia" name="parroquia" class="form-control populate">
                                    <option value=-1>Seleccionar</option>
                                    @foreach ($parroquias as $id => $nombre)
                                        <option value={{ $id }}>
                                            {{ $nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6 gap-1">
                                <label>Calle</label>
                                <input type="text" class="form-control" name="calle" id="calle"
                                    placeholder="Calle" />
                            </div>
                            <div class="col-md-6 gap-1">
                                <label>Manzana</label>
                                <input type="text" class="form-control" name="manzana" id="manzana"
                                    placeholder="Manzana" />
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6 gap-1">
                                <label>Número</label>
                                <input type="text" class="form-control" name="numero" id="numero"
                                    placeholder="Número" />
                            </div>
                            <div class="col-md-6 gap-1">
                                <label>Intersección</label>
                                <input type="text" class="form-control" name="interseccion" id="interseccion"
                                    placeholder="Intersección" />
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6 gap-1">
                                <label>Referencia</label>
                                <input type="text" class="form-control" name="referencia" id="referencia"
                                    placeholder="Referencia" />
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12 flex flex-col gap-1">
                                <label>
                                    Observaciones
                                </label>
                                <input type="text" class="form-control" name="observaciones" id="observaciones"
                                    placeholder="Observaciones" />
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12 flex flex-col gap-1">
                                <label>
                                    Datos adjuntos (máximo 5)
                                </label>
                                <input type="file" class="form-control-file" id="adjuntos" name="adjuntos[]"
                                    multiple />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary cerrar-modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" id="agregar_adherente">Agregar
                                Adherente</button>
                            <button type="button" class="btn btn-primary" style="display: none;"
                                id="actualizar_adherente">Actualizar</button>
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

            $('#identificacion').attr('maxlength', 13);

            var socioSelected = null;
            let socioAdherenteSelected = null;
            let socioAdherentes = [];

            $('#fecha_ingreso').datepicker('destroy').datepicker({
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
                    url: "{{ route('admin.obtener_listado_adherentes_socio') }}",
                    type: "GET",
                    data: function(d) {
                        d.start = d.start || 0;
                        d.length = d.length || 10;
                        d.id_socio = $('#socio').val();
                        d.with_adherente = 1;
                        d.with_socio = 1;
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
                        socioAdherentes = response.responseJSON.data;
                        Swal.close();
                    }
                },
                pageLength: 10, // Establece el número de registros por página
                columns: [{
                        data: 'identificacion',
                        title: 'Identificación',
                        width: '20%'
                    },
                    {
                        data: 'nombres',
                        title: 'Nombres',
                        width: '20%'
                    },
                    {
                        data: 'apellidos',
                        title: 'Apellidos',
                        width: '20%'
                    },
                    {
                        data: 'estado',
                        title: 'Estado',
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
                            limpiarFormulario();
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
                var socioSeleccionado = $('#socio').val();
                var nombreSocioSeleccionado = $('#socio option:selected').text();

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
                    // Abrir el modal
                    $('#ModalAdherente').modal('show');
                }
            });

            $('.cerrar-modal').click(function() {
                limpiarFormulario();
                $('#ModalAdherente').modal('hide'); // Cerrar el modal
            });

            $('.cerrar-modal-mod').click(function() {
                limpiarObligacion();
                $('#ModalAdherente').modal('hide'); // Cerrar el modal
            });

            $('#tipo_identificacion').change(function() {
                let tipo_identificacion = $(this).val();
                $('#identificacion').val('');
                $('error_identificacion').hide();
                if (tipo_identificacion == -1) {
                    Swal.fire({
                        target: document.getElementById('ModalAdherente'),
                        title: 'Error',
                        text: 'Ingrese un tipo de identificación valida',
                        icon: 'error',
                        showConfirmButton: true,
                        confirmButtonText: 'Aceptar',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            console.log('Tipo de identificacion invalida')
                        }
                    });
                    return;
                }
                if (tipo_identificacion == 1) $('#identificacion').attr('maxlength', 13);
                if (tipo_identificacion == 2) $('#identificacion').attr('maxlength', 10);
                if (tipo_identificacion == 3 || tipo_identificacion == 4) $('#identificacion').attr(
                    'maxlength', 20);
            });

            $('#identificacion').on('input', function() {
                let identificacion = $(this).val();
                let tipo_identificacion = $('#tipo_identificacion').val();
                let validRuc = /^\d{13}$/.test(identificacion);
                let validCedula = /^\d{10}$/.test(identificacion);
                let validOtros = /^\d{5,20}$/.test(identificacion);
                if (tipo_identificacion == 1) {
                    !validRuc ? $('#error_identificacion').text('La identificación debe tener 13 dígitos.')
                        .show() : $('#error_identificacion').hide();

                } else if (tipo_identificacion == 2) {
                    !validCedula ? $('#error_identificacion').text(
                            'La identificación debe tener 10 dígitos.')
                        .show() : $('#error_identificacion').hide();
                } else if (tipo_identificacion == 3 || tipo_identificacion == 4) {
                    !validOtros ? $('#error_identificacion').text(
                        'La identificación debe tener entre 5 y 20 dígitos.').show() : $(
                        '#error_identificacion').hide()
                } else {
                    $('#error_identificacion').hide();
                }
            });

            function cargarProvincias(paisId) {
                return $.ajax({
                    url: '/get-provincias',
                    method: 'GET',
                    data: {
                        id_pais: paisId
                    },
                    success: function(response) {
                        let provincias = response.provincias;
                        let $provinciaSelect = $('#provincia_mod');
                        $provinciaSelect.empty().append('<option value="-1">Seleccionar</option>');

                        provincias.forEach(function(provincia) {
                            $provinciaSelect.append(
                                `<option value="${provincia.id}">${provincia.nombre}</option>`
                            );
                        });
                    },
                    error: function() {
                        alert('Hubo un error al cargar las provincias.');
                    }
                });
            }

            // Función para cargar cantones
            function cargarCantones(paisId, provinciaId) {
                return $.ajax({
                    url: '/get-cantones',
                    method: 'GET',
                    data: {
                        id_pais: paisId,
                        id_provincia: provinciaId
                    },
                    success: function(response) {
                        let cantones = response.cantones;
                        let $cantonSelect = $('#canton_mod');
                        $cantonSelect.empty().append('<option value="-1">Seleccionar</option>');

                        cantones.forEach(function(canton) {
                            $cantonSelect.append(
                                `<option value="${canton.id}">${canton.nombre}</option>`);
                        });
                    },
                    error: function() {
                        alert('Hubo un error al cargar los cantones.');
                    }
                });
            }

            // Función para cargar parroquias
            function cargarParroquias(paisId, provinciaId, cantonId) {
                return $.ajax({
                    url: '/get-parroquias',
                    method: 'GET',
                    data: {
                        id_pais: paisId,
                        id_provincia: provinciaId,
                        id_canton: cantonId
                    },
                    success: function(response) {
                        let parroquias = response.parroquias;
                        let $parroquiaSelect = $('#parroquia_mod');
                        $parroquiaSelect.empty().append('<option value="-1">Seleccionar</option>');

                        parroquias.forEach(function(parroquia) {
                            $parroquiaSelect.append(
                                `<option value="${parroquia.id}">${parroquia.nombre}</option>`
                            );
                        });
                    },
                    error: function() {
                        alert('Hubo un error al cargar las parroquias.');
                    }
                });
            }

            $('#pais').change(function() {
                let paisId = $(this).val();

                if (paisId != -1) {
                    $.ajax({
                        url: '/get-provincias', // Ruta para obtener las provincias
                        method: 'GET',
                        data: {
                            id_pais: paisId
                        },
                        success: function(response) {
                            let provincias = response.provincias;
                            let $provinciaSelect = $('#provincia');
                            let $cantonSelect = $('#canton');
                            let $parroquiaSelect = $('#parroquia');

                            $provinciaSelect.empty(); // Limpiamos el select de provincias
                            $provinciaSelect.append(
                                '<option value=-1>Seleccionar</option>'
                            ); // Opción por defecto

                            $cantonSelect.empty(); // Limpiamos el select de provincias
                            $cantonSelect.append(
                                '<option value=-1>Seleccionar</option>'
                            ); // Opción por defecto

                            $parroquiaSelect.empty(); // Limpiamos el select de provincias
                            $parroquiaSelect.append(
                                '<option value=-1>Seleccionar</option>'
                            ); // Opción por defecto

                            // Agregamos las provincias al select
                            provincias.forEach(function(provincia) {
                                $provinciaSelect.append(
                                    `<option value=${provincia.id}>${provincia.nombre}</option>`
                                );
                            });
                        },
                        error: function() {
                            alert('Hubo un error al cargar las provincias.');
                        }
                    });
                }
            });

            $('#provincia').change(function() {
                let paisId = $('#pais').val(); // ID del país seleccionado
                let provinciaId = $(this).val(); // ID de la provincia seleccionada

                if (paisId != -1 && provinciaId != -1) {
                    $.ajax({
                        url: '/get-cantones', // Ruta para obtener los cantones
                        method: 'GET',
                        data: {
                            id_pais: paisId, // Enviamos el ID del país
                            id_provincia: provinciaId // Enviamos el ID de la provincia
                        },
                        success: function(response) {
                            let cantones = response.cantones;
                            let $cantonSelect = $('#canton'); // Select de cantones
                            let $parroquiaSelect = $('#parroquia'); // Select de parroquias

                            $cantonSelect.empty(); // Limpiamos el select de cantones
                            $parroquiaSelect.empty().append(
                                '<option value=-1>Seleccionar</option>'
                            ); // Limpiamos parroquias

                            $cantonSelect.append(
                                '<option value=-1>Seleccionar</option>'
                            ); // Opción por defecto

                            // Agregamos los cantones al select
                            cantones.forEach(function(canton) {
                                $cantonSelect.append(
                                    `<option value=${canton.id}>${canton.nombre}</option>`
                                );
                            });
                        },
                        error: function() {
                            alert('Hubo un error al cargar los cantones.');
                        }
                    });
                } else {
                    $('#canton').empty().append(
                        '<option value="-1">Seleccionar</option>'); // Limpiar select de cantones
                    $('#parroquia').empty().append(
                        '<option value="-1">Seleccionar</option>'); // Limpiar select de parroquias
                }
            });

            $('#canton').change(function() {
                let paisId = $('#pais').val(); // ID del país seleccionado
                let provinciaId = $('#provincia').val(); // ID de la provincia seleccionada
                let cantonId = $(this).val(); // ID del cantón seleccionado

                if (paisId != -1 && provinciaId != -1 && cantonId != -1) {
                    $.ajax({
                        url: '/get-parroquias', // Ruta para obtener las parroquias
                        method: 'GET',
                        data: {
                            id_pais: paisId, // Enviamos el ID del país
                            id_provincia: provinciaId, // Enviamos el ID de la provincia
                            id_canton: cantonId // Enviamos el ID del cantón
                        },
                        success: function(response) {
                            let parroquias = response
                                .parroquias; // Asegúrate de usar el nombre correcto en el JSON de respuesta
                            let $parroquiaSelect = $('#parroquia'); // Select de parroquias

                            $parroquiaSelect.empty(); // Limpiamos el select de parroquias
                            $parroquiaSelect.append(
                                '<option value=-1>Seleccionar</option>'
                            ); // Opción por defecto

                            // Agregamos las parroquias al select
                            parroquias.forEach(function(parroquia) {
                                $parroquiaSelect.append(
                                    `<option value=${parroquia.id}>${parroquia.nombre}</option>`
                                );
                            });
                        },
                        error: function() {
                            alert('Hubo un error al cargar las parroquias.');
                        }
                    });
                } else {
                    $('#parroquia').empty().append(
                        '<option value="-1">Seleccionar</option>'); // Limpiar select de parroquias
                }
            });

            $('#agregar_adherente').click(function() {
                if (!validarRegistro('ModalAdherente')) return false;
                let adjuntosData = [];
                let adjuntos = $('#adjuntos')[0].files;
                for (let i = 0; i < adjuntos.length; i++) {
                    adjuntosData[i] = adjuntos[i];
                }

                let fotoFile = $('#fotoFile')[0].files[0];
                let data = {
                    foto: fotoFile,
                    adjuntos: adjuntosData,
                    id_socio: $('#socio').val(),
                    fecha_ingreso: $('#fecha_ingreso').val(),
                    id_tipo_identificacion: $('#tipo_identificacion').val(),
                    identificacion: $('#identificacion').val(),
                    nombres: $('#nombres').val(),
                    apellidos: $('#apellidos').val(),
                    correo: $('#correo').val(),
                    telefono: $('#telefono').val(),
                    id_pais: $('#pais').val(),
                    id_provincia: $('#provincia').val(),
                    id_canton: $('#canton').val(),
                    id_parroquia: $('#parroquia').val(),
                    calle: $('#calle').val(),
                    manzana: $('#manzana').val(),
                    numero: $('#numero').val(),
                    interseccion: $('#interseccion').val(),
                    referencia: $('#referencia').val(),
                    observaciones: $('#observaciones').val()
                }


                Swal.fire({
                    target: document.getElementById('ModalAdherente'),
                    title: '¿Estás seguro?',
                    text: "¿Deseas agregar este socio adherente al socio seleccionado?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí',
                    cancelButtonText: 'No',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('admin.registrar_adherente_socio') }}",
                            type: 'POST',
                            data: data,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            },
                        }).done(function(response) {
                            Swal.fire({
                                target: document.getElementById('ModalAdherente'),
                                icon: 'success',
                                title: 'Éxito',
                                text: 'Adherente agregado correctamente.',
                                showConfirmButton: true,
                                allowOutsideClick: false,
                                confirmButtonText: 'Aceptar',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $('#ModalAdherente').modal('hide');
                                    table.ajax.reload(null, false);
                                }
                            });
                        }).fail(function(error) {
                            Swal.fire({
                                target: document.getElementById('ModalAdherente'),
                                icon: 'error',
                                title: 'Error',
                                showConfirmButton: true,
                                allowOutsideClick: false,
                                confirmButtonText: 'Aceptar',
                                text: error.responseJSON?.message ||
                                    "Error al agregar al adherente.",
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    console.error(
                                        "Error al agregar al adherente: ",
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
                                text: 'Adherente eliminada correctamente.',
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
                                    "Error al eliminar al adherente.",
                            });
                            console.error("Error al eliminar al adherente: ",
                                error);
                        });
                    }
                });
            });

            $(document).on('click', '.edit-modal', function() {
                let button = $(this);
                let id = button.data('id');

                let data = socioAdherentes.find(obligacion => obligacion.id == id);

                let nombreSocioSeleccionado = $('#socio option:selected').text();
                $('#socioModSeleccionado').text(nombreSocioSeleccionado);

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

                $('#ModalAdherente').find('#entidad_mod').val(data.nombre_entidad);
                $('#ModalAdherente').find('#obligacion_mod').val(data.nombre_obligacion);
                $('#ModalAdherente').find('#tiempo_presentacion_mod').val(tiempo_presentacion);
                $('#ModalAdherente').find('#tipo_presentacion_mod').val(tipo_presentacion);
                $('#ModalAdherente').find('#fecha_presentacion_mod').val(fecha_presentacion);
                $('#ModalAdherente').find('#fecha_inicio_mod').val(fecha_inicio);
                socioAdherenteSelected = id;
                obligacionSelected = data.id_obligacion;
                entidadSelected = data.id_entidad;

                if (tiempo_presentacion == 'CONSECUTIVA') {
                    $('#ModalAdherente').find('#fecha_presentacion_mod').prop('disabled', true);
                    $('#ModalAdherente').find('#fecha_inicio_mod').prop('disabled', false);
                } else if (tiempo_presentacion == 'ÚNICA VEZ') {
                    $('#ModalAdherente').find('#fecha_presentacion_mod').prop('disabled', false);
                    $('#ModalAdherente').find('#fecha_inicio_mod').prop('disabled', true);
                }

                $('#ModalAdherente').modal('show');
            });
            $('#modificar_obligacion').click(function() {
                if (!validarRegistro('ModalAdherente')) return;
                let fecha_inicio = $('#ModalAdherente').find('#fecha_inicio_mod').val();
                let fecha_presentacion = $('#ModalAdherente').find('#fecha_presentacion_mod')
                    .val();
                let data = {
                    id: socioAdherenteSelected,
                    id_obligacion: obligacionSelected,
                    id_entidad: entidadSelected,
                    id_socio: $('#socio').val(),
                    tiempo_presentacion: $('#ModalAdherente').find('#tiempo_presentacion_mod')
                        .val(),
                    tipo_presentacion: $('#ModalAdherente').find('#tipo_presentacion_mod')
                        .val(),
                    fecha_presentacion: fecha_presentacion == 'N/A' ? null : fecha_presentacion,
                    fecha_inicio: fecha_inicio ==
                        'N/A' ? null : fecha_inicio,
                };
                Swal.fire({
                    target: document.getElementById('ModalAdherente'),
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
                                    'ModalAdherente'),
                                icon: 'success',
                                title: 'Éxito',
                                text: 'Adherente modificada correctamente.',
                                showConfirmButton: true,
                                allowOutsideClick: false,
                                confirmButtonText: 'Aceptar',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $('#ModalAdherente').modal('hide');
                                    table.ajax.reload(null, false);
                                }
                            });
                        }).fail(function(error) {
                            Swal.fire({
                                target: document.getElementById(
                                    'ModalAdherente'),
                                icon: 'error',
                                title: 'Error',
                                showConfirmButton: true,
                                allowOutsideClick: false,
                                confirmButtonText: 'Aceptar',
                                text: error.responseJSON?.message ||
                                    "Error al modificar al adherente.",
                            });
                            console.error("Error al modificar al adherente: ",
                                error);
                        });
                    }
                });
            });
            /** 
             * Functions
             */
            function limpiarFormulario() {
                $('#fotoFile').val('');
                $('#fecha_ingreso').val('');
                $('#tipo_identificacion').val(-1);
                $('#identificacion').val('');
                $('#nombres').val('');
                $('#apellidos').val('');
                $('#correo').val('');
                $('#telefono').val('');
                $('#pais').val(-1);
                $('#provincia').val(-1);
                $('#canton').val(-1);
                $('#parroquia').val(-1);
                $('#calle').val('');
                $('#manzana').val('');
                $('#numero').val('');
                $('#interseccion').val('');
                $('#referencia').val('');
                $('#observaciones').val('');
                $('#adjuntos').val('');
            }

            function validarRegistro(idModal) {
                let fecha_ingreso = $('#fecha_ingreso').val();
                let tipo_identificacion = $('#tipo_identificacion').val();
                let identificacion = $('#identificacion').val();
                let nombres = $('#nombres').val();
                let apellidos = $('#apellidos').val();
                let correo = $('#correo').val();
                let telefono = $('#telefono').val();
                let pais = $('#pais').val();
                let provincia = $('#provincia').val();
                let canton = $('#canton').val();
                let parroquia = $('#parroquia').val();
                let calle = $('#calle').val();
                let manzana = $('#manzana').val();
                let numero = $('#numero').val();
                let interseccion = $('#interseccion').val();
                let referencia = $('#referencia').val();
                let observaciones = $('#observaciones').val();

                let validRuc = /^\d{13}$/.test(identificacion);
                let validCedula = /^\d{10}$/.test(identificacion);
                let validOtros = /^\d{5,20}$/.test(identificacion);

                if (fecha_ingreso == '') {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona una fecha de ingreso.',
                    });
                    return false;
                }
                if (!esFechaValida(fecha_ingreso)) {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingresa una fecha de ingreso válida en formato dd/mm/yyyy.',
                    });
                    return false;
                }
                if (tipo_identificacion == -1) {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona un tipo de identificación.',
                    });
                    return false;
                }
                if (identificacion == '') {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingresa una identificación.',
                    });
                    $('#identificacion').focus();
                    return false;
                }
                if (tipo_identificacion == 1 && !validRuc) {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'La identificación debe tener 13 dígitos.',
                    });
                    $('#identificacion').focus();
                    return false;
                }
                if (tipo_identificacion == 2 && !validCedula) {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'La identificación debe tener 10 dígitos.',
                    });
                    $('#identificacion').focus();
                    return false;
                }
                if ((tipo_identificacion == 3 || tipo_identificacion == 4) && !validOtros) {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'La identificación debe tener entre 5 y 20 dígitos.',
                    });
                    $('#identificacion').focus();
                    return false;
                }

                if (nombres == '') {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingresa los nombres.',
                    });
                    $('#nombres').focus();
                    return false;
                }

                if (apellidos == '') {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingresa los apellidos.',
                    });
                    $('#apellidos').focus();
                    return false;
                }

                if (correo == '') {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingresa un correo electrónico.',
                    });
                    $('#correo').focus();
                    return false;
                }

                if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test($('#correo').val())) {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingresa un correo electrónico válido.',
                    });
                    $('#correo').focus();
                    return false;
                }

                if (telefono == '') {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingresa un número de teléfono.',
                    });
                    $('#telefono').focus();
                    return false;
                }

                if (!/^\+?\d{1,14}$/.test($('#telefono').val())) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'El teléfono no tiene el formato adecuado.',
                    });
                    $('#telefono').focus();
                    return false;
                }

                if (pais == -1) {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona un país.',
                    });
                    return false;
                }

                if (provincia == -1) {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona una provincia.',
                    });
                    return false;
                }

                if (canton == -1) {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona un cantón.',
                    });
                    return false;
                }

                if (parroquia == -1) {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, selecciona una parroquia.',
                    });
                    return false;
                }

                if (calle == '') {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingresa una calle.',
                    });
                    $('#calle').focus();
                    return false;
                }

                if (manzana == '') {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingresa una manzana.',
                    });
                    $('#manzana').focus();
                    return false;
                }

                if (numero == '') {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingresa un número.',
                    });
                    $('#numero').focus();
                    return false;
                }

                if (interseccion == '') {
                    Swal.fire({
                        target: document.getElementById(idModal),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingresa una intersección.',
                    });
                    $('#interseccion').focus();
                    return false;
                }
                return true;
            }

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
            //Manejo de Fechas
            // Función para validar el formato dd/mm/yyyy
            function validarFechaOnBlur(idCampoFecha) {
                let fecha = $('#' + idCampoFecha);
                fecha.on('blur', function() {
                    let value = $(this).val();

                    if (value && !esFechaValida(value)) {
                        alert('Por favor, ingrese una fecha válida en el formato dd/mm/yyyy.');
                        fecha.val('');

                        setTimeout(() => {
                            fecha.focus();
                        }, 0);
                    }
                });
            }

            function validarCorreo(idCorreo, idError) {
                let correo = $("#" + idCorreo)
                let error = $("#" + idError)
                let regexCorreo = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                correo.on('input', function() {
                    if (regexCorreo.test(correo.val())) {
                        error.hide();
                    } else {
                        error.show();
                    }
                });
            }

            function validarCedula(idCedula, idError) {
                let cedula = $('#' + idCedula);
                let error = $('#' + idError);
                let validCedula = /^\d{10}$/;
                cedula.on('input', function() {
                    if (!validCedula.test(cedula.val())) {
                        error.text('La cédula debe tener 10 dígitos.');
                        error.show();
                    } else {
                        error.hide();
                    }
                });
            }

            function validarTelefono(idTelefono, idError) {
                let telefono = $('#' + idTelefono);
                let error = $('#' + idError);
                let validTelefono = /^\+?\d{1,14}$/;
                telefono.on('input', function() {
                    if (!validTelefono.test(telefono.val())) {
                        error.text('El teléfono no tiene el formato adecuado.');
                        error.show();
                    } else {
                        error.hide();
                    }
                });
            }

            function onInputUppercase(idCampo) {
                let campo = $('#' + idCampo);
                campo.on('input', function() {
                    campo.val(campo.val().toUpperCase());
                });
            }

            validarFechaOnBlur('fecha_ingreso');
            validarCorreo('correo', 'error-correo');

            onInputUppercase('Identificacion');
            onInputUppercase('nombres');
            onInputUppercase(
                'apellidos');
            onInputUppercase('correo');
            onInputUppercase('calle');
            onInputUppercase(
                'manzana');
            onInputUppercase('numero');
            onInputUppercase('interseccion');
            onInputUppercase(
                'referencia');
            onInputUppercase('observaciones');

            validarTelefono('telefono', 'error_telefono')

        });
    </script>
@endsection
