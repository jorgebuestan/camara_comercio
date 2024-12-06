@extends('dashboard')

@section('pagename')
    Maestro de Socios
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

        .status-badge {
            padding: 5px 10px;
            border-radius: 5px;
        }

        .status-active {
            background-color: green;
            color: white;
        }

        .status-inactive {
            background-color: red;
            color: white;
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
                <section id="w3">
                    <header class="card-header">
                        <h2 class="card-title">Gestión de Socios</h2>
                    </header>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary mb-3 new-socio">Agregar Nuevo Registro</button>
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
                                        </div>

                                        <h2 class="card-title">Listado de Socios Registrados</h2>
                                    </header>
                                    <div class="card-body">
                                        <table class="table table-bordered table-striped mb-0" id="dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Fecha de Ingreso</th>
                                                    <th>Tipo de Identificación</th>
                                                    <th>Identificación</th>
                                                    <th>Razón Social</th>
                                                    <th>Tipo de Persona / Personería</th>
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
    <div class="container">
        <form enctype="multipart/form-data" class="modal fade" id="ModalSocio" tabindex="-1"
            aria-labelledby="ModalSocioLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalSocioLabel"><b>Registro de Socios</b></h5>
                        <button type="button" class="btn-close cerrar-modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item active">
                                                <a class="nav-link" data-bs-target="#datos_generales"
                                                    href="#datos_generales" data-bs-toggle="tab">Datos Generales</a>
                                            </li>
                                            <li id="tab-item-establecimiento" class="nav-item" style="display:none;">
                                                <a class="nav-link" data-bs-target="#establecimientos"
                                                    href="#establecimientos" data-bs-toggle="tab">Establecimientos</a>
                                            </li>
                                            <li id="tab-item-tributario" class="nav-item" style="display:none;">
                                                <a class="nav-link" data-bs-target="#datos_tributarios"
                                                    href="#datos_tributarios" data-bs-toggle="tab">Datos Tributarios</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="datos_generales" class="tab-pane active">
                                                <div class="row mb-2">
                                                    <div class="col-md-6 gap-1 flex flex-col">
                                                        <label>
                                                            Adjuntar Foto
                                                        </label>
                                                        <input type="file" class="form-control-file" id="fotoFile"
                                                            name="file">
                                                        <input type="hidden" name="tipoDoc" value="1">
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-6 gap-1">
                                                        <label>
                                                            Fecha de Ingreso
                                                        </label>
                                                        <input type="text" data-plugin-datepicker class="form-control"
                                                            name="fecha_ingreso" id="fecha_ingreso"
                                                            placeholder="Fecha de Ingreso" />
                                                    </div>
                                                    <div class="col-md-6 gap-1">
                                                        <label>
                                                            Tipo de Persona
                                                        </label>
                                                        <select id="tipo_persona" name="tipo_persona"
                                                            class="form-control populate">
                                                            <option value="-1">Seleccionar</option>
                                                            @foreach ($tiposPersona as $id => $descripcion)
                                                                <option value="{{ $id }}">{{ $descripcion }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-6 gap-1">
                                                        <label>
                                                            Tipo de Personería
                                                        </label>
                                                        <select id="tipo_personeria" name="tipo_personeria"
                                                            class="form-control populate">
                                                            <option value="-1">Seleccionar</option>
                                                            @foreach ($tiposPersoneria as $id => $descripcion)
                                                                <option value="{{ $id }}">{{ $descripcion }}
                                                                </option>
                                                            @endForEach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 gap-1">
                                                        <label>
                                                            Identificación
                                                        </label>
                                                        <input type="text" class="form-control" name="identificacion"
                                                            id="identificacion" placeholder="Identificación">
                                                        <div id="error-identificacion" style="color: red; display: none;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div id='tipo_identificacion_container' class="col-md-6 gap-1"
                                                        style="display: none;">
                                                        <label>
                                                            Tipo de Identificación
                                                        </label>
                                                        <select id="tipo_identificacion" name="tipo_identificacion"
                                                            class="form-control populate">
                                                            <option value="-1">Seleccionar</option>
                                                            @foreach ($tiposIdentificacion as $id => $descripcion)
                                                                <option value="{{ $id }}">{{ $descripcion }}
                                                                </option>
                                                            @endForEach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <h4>Datos Personales</h4>
                                                        <hr class="my-1">
                                                    </div>
                                                </div>
                                                <div id="datos-juridico-ruc" style="display: none;">
                                                    <div class="row mb-2">
                                                        <div class="col-md-6 gap-1">
                                                            <label>
                                                                Razón Social
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                name="razon_social" id="razon_social"
                                                                placeholder="Razón Social" />
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-md-6 gap-1">
                                                            <label>Teléfono</label>
                                                            <input type="text" class="form-control" name="telefono"
                                                                id="telefono" placeholder="Teléfono">
                                                            <div id="error-telefono" style="color: red; display: none;">
                                                            </div>
                                                            <div class="col-md-6 gap-1">
                                                                <label>Correo</label>
                                                                <input type="email" class="form-control" name="correo"
                                                                    id="correo" placeholder="Correo">
                                                                <div id="error-correo" style="color: red; display: none;">
                                                                    Ingrese un correo
                                                                    electrónico valido</div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-md-12">
                                                                <h4>Datos Representante Legal</h4>
                                                                <hr class="my-1">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-md-6 gap-1">
                                                                <label>Cédula Representante Legal</label>
                                                                <input type="text" class="form-control"
                                                                    name="cedula_representante" id="cedula_representante"
                                                                    placeholder="Cédula Representante Legal"
                                                                    maxlength="10">
                                                                <div id="error-cedula-representante"
                                                                    style="color: red; display: none;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-md-6 gap-1">
                                                                <label>Nombre de Representante Legal</label>
                                                                <input type="text" class="form-control"
                                                                    name="nombre_representante" id="nombre_representante"
                                                                    placeholder="Nombre de Representante Legal">
                                                            </div>
                                                            <div class="col-md-6 gap-1">
                                                                <label>Apellido de Representante Legal</label>
                                                                <input type="text" class="form-control"
                                                                    name="apellido_representante"
                                                                    id="apellido_representante"
                                                                    placeholder="Apellido de Representante Legal">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-md-6 gap-1">
                                                                <label>Teléfono Representante Legal</label>
                                                                <input type="text" class="form-control"
                                                                    name="telefono_representante"
                                                                    id="telefono_representante"
                                                                    placeholder="Teléfono Representante Legal">
                                                                <div id="error-telefono-representante"
                                                                    style="color: red; display: none;"></div>
                                                            </div>
                                                            <div class="col-md-6 gap-1">
                                                                <label>Correo Representante Legal</label>
                                                                <input type="email" class="form-control"
                                                                    name="correo_representante" id="correo_representante"
                                                                    placeholder="Correo Representante Legal">
                                                                <div id="error-correo-representante"
                                                                    style="color: red; display: none;">Ingrese un correo
                                                                    electrónico valido</div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-md-6 gap-1">
                                                                <label>Fecha Registro Mercantil</label>
                                                                <input type="text" data-plugin-datepicker
                                                                    class="form-control" name="fecha_registro_mercantil"
                                                                    id="fecha_registro_mercantil"
                                                                    placeholder="Fecha Registro Mercantil">
                                                            </div>
                                                            <div class="col-md-6 gap-1">
                                                                <label>Vencimiento Nombramiento</label>
                                                                <input type="text" data-plugin-datepicker
                                                                    class="form-control" name="vencimiento_nombramiento"
                                                                    id="vencimiento_nombramiento"
                                                                    placeholder="Vencimiento Nombramiento">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-md-6 gap-1">
                                                                <label>Años Nombramiento</label>
                                                                <input type="text" class="form-control"
                                                                    name="anios_nombramiento" id="anios_nombramiento"
                                                                    placeholder="Años Nombramiento" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="datos-natural" style="display:none;">
                                                        <div class="row mb-2">
                                                            <div class="col-md-6 gap-1">
                                                                <label>
                                                                    Nombre Completo Adherente
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="nombre_adherentes" id="nombre_adherente"
                                                                    placeholder="Nombre Completo del Adherente">
                                                            </div>
                                                            <!-- Considerar cambio por componente que elije al socio existente -->
                                                            <div class="col-md-6 gap-1">
                                                                <label>
                                                                    Afiliado que Pertenece
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="afiliado_pertenece" id="afiliado_pertenece"
                                                                    placeholder="Afiliado que Pertenece">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-md-6 gap-1">
                                                                <label>
                                                                    Correo
                                                                </label>
                                                                <input type="email" class="form-control"
                                                                    name="correo_adherente" id="correo_adherente"
                                                                    placeholder="Correo">
                                                                <div id="error-correo-adherente"
                                                                    style="color: red; display: none;">
                                                                    Ingrese un correo electrónico valido</div>
                                                            </div>
                                                            <div class="col-md-6 gap-1">
                                                                <label>
                                                                    Teléfono
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="telefono_adherente" id="telefono_adherente"
                                                                    placeholder="Teléfono">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-md-12">
                                                                <h5>Dirección</h5>
                                                                <hr class="my-1">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-md-6 gap-1">
                                                                <label>
                                                                    Provincia
                                                                </label>
                                                                <select id="provincia" name="provincia"
                                                                    class="form-control populate">
                                                                    <option value="-1">Seleccionar</option>
                                                                    @foreach ($provincias as $id => $descripcion)
                                                                        <option value="{{ $id }}">
                                                                            {{ $descripcion }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 gap-1">
                                                                <label>
                                                                    Cantón
                                                                </label>
                                                                <select id="canton" name="canton"
                                                                    class="form-control populate">
                                                                    <option value="-1">Seleccionar</option>
                                                                    @foreach ($cantones as $id => $descripcion)
                                                                        <option value="{{ $id }}">
                                                                            {{ $descripcion }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-md-6 gap-1">
                                                                <label>
                                                                    Parroquia
                                                                </label>
                                                                <select id="parroquia" name="parroquia"
                                                                    class="form-control populate">
                                                                    <option value="-1">Seleccionar</option>
                                                                    @foreach ($parroquias as $id => $descripcion)
                                                                        <option value="{{ $id }}">
                                                                            {{ $descripcion }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 gap-1">
                                                                <label>
                                                                    Calle
                                                                </label>
                                                                <input type="text" class="form-control" name="calle"
                                                                    id="calle" placeholder="Calle">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-md-6 gap-1">
                                                                <label>
                                                                    Manzana
                                                                </label>
                                                                <input type="text" class="form-control" name="manzana"
                                                                    id="manzana" placeholder="Manzana">
                                                            </div>
                                                            <div class="col-md-6 gap-1">
                                                                <label>
                                                                    Número
                                                                </label>
                                                                <input type="text" class="form-control" name="numero"
                                                                    id="numero" placeholder="Número">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-md-6 gap-1">
                                                                <label>
                                                                    Intersección
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="interseccion" id="interseccion"
                                                                    placeholder="Intersección">
                                                            </div>
                                                            <div class="col-md-6 gap-1">
                                                                <label>
                                                                    Referencia
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="referencia" id="referencia"
                                                                    placeholder="Referencia">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-md-12 gap-1">
                                                                <label>
                                                                    Observaciones
                                                                </label>
                                                                <textarea class="form-control" name="observaciones" id="observaciones" placeholder="Observaciones"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2" style="display: none;">
                                                        <div class="col-md-12 gap-1">
                                                            <label>
                                                                Datos adjuntos (máximo 5)
                                                            </label>
                                                            <input type="file" class="form-control-file"
                                                                id="adjuntos" name="adjuntos[]" multiple />
                                                            <small class="text-muted">Puede seleccionar hasta 5
                                                                archivos.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="establecimientos" class="tab-pane"></div>
                                                <div id="datos_tributarios" class="tab-pane"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary cerrar-modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" id="btn-register-socio">Guardar</button>
                                <button type="button" class="btn btn-primary" style="display: none;"
                                    id="btn-update-socio">Actualizar</button>
                            </div>
                        </div>
                    </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            /**
             * DataTable - Initial Load of Socios
             */
            let socios = [];
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
                    url: "{{ route('admin.obtener_listado_socios') }}",
                    type: "GET",
                    data: function(d) {
                        d.start = d.start || 0;
                        d.length = d.length || 10;
                    },
                    error: function(error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: error.responseJSON?.message || "Error al cargar los datos.",
                        });
                        console.error("Error al cargar los datos: ", error);
                    },
                    complete: function(response) {
                        socios = response.responseJSON.data;
                        Swal.close();
                    },
                },
                pageLength: 10,
                columns: [{
                        data: 'fecha_ingreso',
                        width: '10%'
                    },
                    {
                        data: 'tipo_identificacion',
                        width: '15%'
                    },
                    {
                        data: 'identificacion',
                        width: '20%'
                    },
                    {
                        data: 'razon_social',
                        width: '20%'
                    },
                    {
                        data: 'persona_data',
                        width: '15%'
                    },
                    {
                        data: 'btn',
                        width: '20%',
                        sortable: false,
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
             * Default values and States
             */
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

            /**
             * Event listeners
             */
            // Event listener for onClick of button cerrar-modal
            $(document).on('click', '.cerrar-modal', function() {
                $('#ModalSocio').modal('hide');
                limpiarFormulario();
            });
            // Event listener for onClick of button new-socio
            $(document).on('click', '.new-socio', function() {
                limpiarFormulario();
                $('#ModalSocio').find('#btn-register-socio').show();
                $('#ModalSocio').find('#btn-update-socio').hide();
                $('#ModalSocio').modal('show');
            });

            // Event listener for onChange of select tipo_personeria
            $('#tipo_personeria').change(function() {
                var tipoPersoneria = $(this).val();
                $('#tipo_identificacion').val(-1);
                $('#identificacion').val('');
                $("#error-identificacion").val('');
                $('#error-identificacion').hide();

                $('#tipo_identificacion_container').hide();

                if (tipoPersoneria == 1) {
                    $('#tipo_identificacion_container').show();
                    $('#datos-juridico-ruc').hide();
                    $('#tab-item-tributario').hide();
                    $('#tab-item-establecimiento').hide();
                } else if (tipoPersoneria == 2) {
                    $('#identificacion').attr('maxlength', 13);
                    $('#datos-juridico-ruc').show();
                    $('#datos-natural').hide();
                    $('#tab-item-tributario').show();
                    $('#tab-item-establecimiento').show();
                    $('#identificacion').focus();
                } else {
                    $('#tab-item-tributario').hide();
                    $('#tab-item-establecimiento').hide();
                    $('#datos-natural').hide();
                    $('#datos-juridico-ruc').hide();
                }
            });

            // Event listener for onChange of select tipo_identificacion
            $('#tipo_identificacion').change(function() {
                var tipoIdentificacion = $(this).val();
                $('#datos-natural').hide();

                $('#identificacion').val('');
                $("#error-identificacion").val('');
                $('#error-identificacion').hide();
                $('#tab-item-tributario').hide();
                $('#tab-item-establecimiento').hide();

                if (tipoIdentificacion == 1) {
                    $('#identificacion').attr('maxlength', 13);
                    $('#identificacion').focus();
                    $('#datos-juridico-ruc').show();
                    $('#datos-natural').hide();
                    $('#tab-item-tributario').show();
                    $('#tab-item-establecimiento').show();
                } else if (tipoIdentificacion == 2) {
                    //$('#datos-natural').show();
                    $('#datos-juridico-ruc').hide();

                    $('#identificacion').attr('maxlength', 10);
                } else if (tipoIdentificacion == 3 || tipoIdentificacion == 4) {
                    //$('#datos-natural').show();
                    $('#datos-juridico-ruc').hide();

                    $('#identificacion').attr('minlength', 5);
                    $('#identificacion').attr('maxlength', 20);
                } else {
                    $('#datos-natural').hide();
                    $('#datos-juridico-ruc').hide();
                }
            });

            // Event listener for onInput of input identificacion
            $('#identificacion').on('input', function() {
                var identificacion = $(this).val();
                var tipoPersona = $('#tipo_persona').val();
                var tipoPersoneria = $('#tipo_personeria').val();
                var tipoIdentificacion = $('#tipo_identificacion').val();

                var validCedula = /^\d{10}$/.test(identificacion);
                var validRuc = /^\d{13}$/.test(identificacion);
                var validPasaporte = /^[a-zA-Z0-9]{5,}$/.test(identificacion);

                if (tipoPersoneria == -1) {
                    $('#error-identificacion').text('Debe seleccionar el tipo de personería.');
                    $('#error-identificacion').show();
                } else if (tipoPersoneria == 2 && !validRuc) {
                    $('#error-identificacion').text('La identificación debe tener 13 dígitos.');
                    $('#error-identificacion').show();
                } else if (tipoIdentificacion == 1 && !validRuc) {
                    $('#error-identificacion').text('La identificación debe tener 13 dígitos.');
                    $('#error-identificacion').show();
                } else if (tipoIdentificacion == 2 && !validCedula) {
                    $('#error-identificacion').text('La identificación debe tener 10 dígitos.');
                    $('#error-identificacion').show();
                } else if ((tipoIdentificacion == 3 || tipo_identificacion == 4) && !validPasaporte) {
                    $('#error-identificacion').text(
                        'La identificación debe tener minimo 5 caracteres alfanumericos.');
                    $('#error-identificacion').show();
                } else {
                    $('#error-identificacion').hide();
                }
            });

            $("#btn-register-socio").click(function() {
                if (!validarRegistro()) {
                    return;
                }
                let formData = new FormData(document.getElementById('ModalSocio'));
                Swal.fire({
                    target: document.getElementById('ModalSocio'),
                    title: 'Procesando...',
                    html: 'Por favor espere',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });
                $.ajax({
                    url: "{{ route('admin.registrar_socio') }}",
                    type: "POST",
                    data: formData,
                    dataType: 'json',
                    cache: false,
                    processData: false,
                    contentType: false,
                }).done(async function(response) {
                    await Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'success',
                        title: 'Éxito',
                        text: response.message,
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                    });
                    $('#ModalSocio').modal('hide');
                    table.ajax.reload(null, false);
                }).fail(function(error) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: error.responseJSON?.message ||
                            "Error al registrar el socio.",
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                    });
                    console.error("Error al registrar el socio: ", error);
                });
            });

            $("#btn-update-socio").click(function() {
                if (!validarRegistro()) {
                    return;
                }
                let formData = new FormData(document.getElementById('ModalSocio'));
                formData.append('socio_id', socioSelected);
                formData.append('_token', '{{ csrf_token() }}');
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
                    url: "{{ route('admin.actualizar_socio') }}",
                    type: "post",
                    data: formData,
                    processData: false, // Prevent jQuery from automatically transforming the FormData object
                    contentType: false, // Prevent jQuery from setting the `Content-Type` header
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content') // Ensure CSRF token is passed if needed
                    },
                }).done(async function(response) {
                    await Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'success',
                        title: 'Éxito',
                        text: response.message,
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                    });
                    $('#ModalSocio').modal('hide');
                    table.ajax.reload(null, false);
                }).fail(function(error) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: error.responseJSON?.message ||
                            "Error al actualizar el socio.",
                    });
                    console.error("Error al actualizar el socio: ", error);
                });
            });

            $(document).on('click', '.delete-socio', async function() {
                let button = $(this);
                let socioId = button.data('id');

                const {
                    value: motivo
                } = await Swal.fire({
                    title: '¿Está seguro de eliminar el socio?',
                    text: "Indiquenos el motivo de la eliminación",
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
                        url: "{{ route('admin.eliminar_socio') }}",
                        type: "POST",
                        data: {
                            socio_id: socioId,
                            motivo: motivo.toUpperCase(),
                            _token: '{{ csrf_token() }}'
                        },
                    }).done(async function(response) {
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
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: error.responseJSON?.message ||
                                "Error al eliminar el socio.",
                        });
                        console.error("Error al eliminar el socio: ", error);
                    });
                }
            });
            $(document).on('click', '.edit-modal', async function() {
                let button = $(this);
                socioSelected = button.data('id');

                let data = socios.find(socio => socio.id == socioSelected);
                console.log(data);
                // Populate modal fields with the row data
                $('#ModalSocio').find('#fecha_ingreso').val(data.fecha_ingreso);
                $('#ModalSocio').find('#tipo_persona').val(data.id_tipo_persona).trigger('change');
                $('#ModalSocio').find('#tipo_personeria').val(data.id_tipo_personeria).trigger(
                    'change');
                $('#ModalSocio').find('#identificacion').val(data.identificacion);
                $('#ModalSocio').find('#razon_social').val(data.razon_social);
                $('#ModalSocio').find('#telefono').val(data.telefono);
                $('#ModalSocio').find('#correo').val(data.correo);
                $('#ModalSocio').find('#cedula_representante').val(data.cedula_representante_legal);
                $('#ModalSocio').find('#nombre_representante').val(data.nombres_representante_legal);
                $('#ModalSocio').find('#apellido_representante').val(data
                    .apellidos_representante_legal);
                $('#ModalSocio').find('#telefono_representante').val(data.telefono_representante_legal);
                $('#ModalSocio').find('#correo_representante').val(data.correo_representante_legal);
                $('#ModalSocio').find('#fecha_registro_mercantil').val(data.fecha_registro_mercantil);
                $('#ModalSocio').find('#vencimiento_nombramiento').val(data
                    .fecha_vencimiento_nombramiento).trigger('change');
                $('#ModalSocio').find('#btn-register-socio').hide();
                $('#ModalSocio').find('#btn-update-socio').show();
                $('#ModalSocio').modal('show');
            });

            /**
             * Functions
             */
            function limpiarFormulario() {
                $('#ModalSocio').find('#fecha_ingreso').val('');
                $('#ModalSocio').find('#tipo_persona').val(-1);
                $('#ModalSocio').find('#tipo_personeria').val(-1);
                $('#ModalSocio').find('#tipo_identificacion').val(-1);
                $('#ModalSocio').find('#identificacion').val('');
                $('#ModalSocio').find('#razon_social').val('');
                $('#ModalSocio').find('#telefono').val('');
                $('#ModalSocio').find('#correo').val('');
                $('#ModalSocio').find('#cedula_representante').val('');
                $('#ModalSocio').find('#nombre_representante').val('');
                $('#ModalSocio').find('#apellido_representante').val('');
                $('#ModalSocio').find('#telefono_representante').val('');
                $('#ModalSocio').find('#correo_representante').val('');
                $('#ModalSocio').find('#fecha_registro_mercantil').val('');
                $('#ModalSocio').find('#vencimiento_nombramiento').val('');
                $('#ModalSocio').find('#anios_nombramiento').val('');
            }

            function validarRegistro() {
                if ($('#fecha_ingreso').val() == "") {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingrese la fecha de ingreso.',
                    });
                    $('.nav-tabs a[href="#datos_generales"]').tab('show');
                    return false;
                }
                if ($('#estado_socio').val() == -1) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, seleccione el estado del socio.',
                    });
                    $('.nav-tabs a[href="#datos_generales"]').tab('show');
                    $('#estado_socio').focus();
                    return false;
                }
                if ($('#tipo_persona').val() == -1) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, seleccione el tipo de persona.',
                    });
                    $('.nav-tabs a[href="#datos_generales"]').tab('show');
                    $('#tipo_persona').focus();
                    return false;
                }
                if ($('#tipo_personeria').val() == -1) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, seleccione el tipo de personería.',
                    });
                    $('.nav-tabs a[href="#datos_generales"]').tab('show');
                    $('#tipo_personeria').focus();
                    return false;
                }
                if ($('#identificacion').val() == "") {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingrese la identificación.',
                    });
                    $('.nav-tabs a[href="#datos_generales"]').tab('show');
                    $('#identificacion').focus();
                    return false;
                }
                if ($('#tipo_personeria').val() == 2) {
                    if ($('#razon_social').val() == "") {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'Por favor, ingrese la razón social.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#razon_social').focus();
                        return false;
                    }
                    if ($('#telefono').val() == "") {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'Por favor, ingrese el teléfono.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#telefono').focus();
                        return false;
                    }
                    if ($('#correo').val() == "") {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'Por favor, ingrese el correo.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#correo').focus();
                        return false;
                    }
                    if ($('#cedula_representante').val() == "") {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'Por favor, ingrese la cédula del representante legal.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#cedula_representante').focus();
                        return false;
                    }
                    if ($('#nombre_representante').val() == "") {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'Por favor, ingrese el nombre del representante legal.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#nombre_representante').focus();
                        return false;
                    }
                    if ($('#apellido_representante').val() == "") {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'Por favor, ingrese el apellido del representante legal.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#apellido_representante').focus();
                        return false;
                    }
                    if ($('#telefono_representante').val() == "") {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'Por favor, ingrese el teléfono del representante legal.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#telefono_representante').focus();
                        return false;
                    }
                    if ($('#correo_representante').val() == "") {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'Por favor, ingrese el correo del representante legal.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#correo_representante').focus();
                        return false;
                    }
                    if ($('#fecha_registro_mercantil').val() == "") {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'Por favor, ingrese la fecha de registro mercantil.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        return false;
                    }
                    if ($('#vencimiento_nombramiento').val() == "") {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'Por favor, ingrese la fecha de vencimiento del nombramiento.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        return false;
                    }
                    if (!/^\d{13}$/.test($('#identificacion').val())) {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'El RUC debe tener 13 dígitos.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#identificacion').focus();
                        return false;
                    }
                    if (!/^\d{10}$/.test($('#cedula_representante').val())) {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'La cédula del representante legal debe tener 10 dígitos.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#cedula_representante').focus();
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
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#telefono').focus();
                        return false;
                    }
                    if (!/^\+?\d{1,14}$/.test($('#telefono_representante').val())) {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'El teléfono del representante legal no tiene el formato adecuado.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#telefono_representante').focus();
                        return false;
                    }
                    if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test($('#correo').val())) {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'El correo no tiene el formato adecuado.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#correo').focus();
                        return false;
                    }
                    if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test($('#correo_representante')
                            .val())) {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'El correo del representante legal no tiene el formato adecuado.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#correo_representante').focus();
                        return false;
                    }
                    if (!esFechaValida($('#fecha_registro_mercantil').val())) {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'Por favor, ingrese una fecha válida en el formato dd/mm/yyyy.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#fecha_registro_mercantil').focus();
                        return false;
                    }
                    if (!esFechaValida($('#vencimiento_nombramiento').val())) {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'Por favor, ingrese una fecha válida en el formato dd/mm/yyyy.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#vencimiento_nombramiento').focus();
                        return false;
                    }
                } else {
                    return false;
                }
                return true;
            }

            function setupDatePicker() {

                $('#fecha_ingreso').datepicker('destroy').datepicker({
                    format: 'dd/mm/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                    language: 'es'
                });
                $('#fecha_registro_mercantil').datepicker('destroy').datepicker({
                    format: 'dd/mm/yyyy',
                    autoclose: true,
                });
                $('#vencimiento_nombramiento').datepicker('destroy').datepicker({
                    format: 'dd/mm/yyyy',
                    autoclose: true,
                });
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
                    fechaObj.getDate() === dia &&
                    fechaObj.getMonth() === mes &&
                    fechaObj.getFullYear() === anio
                );
            }

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

            function calcularAniosNombramiento() {
                $('#fecha_ingreso, #vencimiento_nombramiento').on('change', function() {
                    let fechaIngreso = $('#fecha_ingreso').val()
                    let vencimiento = $('#vencimiento_nombramiento').val();
                    if (fechaIngreso != '' && vencimiento != '') {
                        let fechaInicio = new Date(fechaIngreso);
                        let fechaFin = new Date(vencimiento);

                        if (fechaInicio > fechaFin) {
                            alert(
                                'La fecha de vencimiento del nombramiento no puede ser menor a la fecha de ingreso.'
                            );
                            $('#vencimiento_nombramiento').val('');
                            return;
                        }
                        let years = fechaFin.getFullYear() - fechaInicio.getFullYear();
                        let months = fechaFin.getMonth() - fechaInicio.getMonth();
                        if (months < 0) {
                            years--;
                            months += 12;
                        }
                        $('#anios_nombramiento').val(`${years} años y ${months} meses`);
                    }
                });
            }

            /**
             * Call to functions
             */
            setupDatePicker();
            validarFechaOnBlur('fecha_ingreso');
            validarFechaOnBlur('fecha_registro_mercantil');
            validarFechaOnBlur('vencimiento_nombramiento');

            onInputUppercase('razon_social');
            onInputUppercase('correo');
            onInputUppercase('nombre_representante');
            onInputUppercase('apellido_representante');
            onInputUppercase('correo_representante');

            validarCorreo('correo', 'error-correo');
            validarCorreo('correo_representante', 'error-correo-representante');

            validarCedula('cedula_representante', 'error-cedula-representante');
            validarTelefono('telefono', 'error-telefono');
            validarTelefono('telefono_representante', 'error-telefono-representante');

            calcularAniosNombramiento();
        });
    </script>
@endsection
