@extends('dashboard')

@section('pagename')
    Maestro de Socios
@endsection
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .rowborder {
            margin: 20px;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
        }

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
                                        <button id="btn_new_socio" class="btn btn-primary mb-3">Agregar Nuevo
                                            Registro</button>
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
                                                    <th>Identificación</th>
                                                    <th>Razón Social</th>
                                                    <th>Tipo de Personería</th>
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
                                            <li id="tab_item_tributario" class="nav-item">
                                                <a class="nav-link" data-bs-target="#datos_tributarios"
                                                    href="#datos_tributarios" data-bs-toggle="tab">Datos Tributarios</a>
                                            </li>
                                            {{-- <li id="tab_item_establecimiento" class="nav-item">
                                                <a class="nav-link" data-bs-target="#establecimientos"
                                                    href="#establecimientos" data-bs-toggle="tab">Establecimientos</a>
                                            </li> --}}
                                        </ul>
                                        <div class="tab-content">
                                            <div id="datos_generales" class="tab-pane active">
                                                <div class="row mb-2">
                                                    <div class="col-md-6 gap-1 flex flex-col">
                                                        <label>
                                                            Adjuntar Foto
                                                        </label>
                                                        <input type="file" class="form-control-file" id="fotoFile"
                                                            name="file" />
                                                        <input type="hidden" name="tipoDoc" value="1" />
                                                    </div>
                                                    <div class="col-md-6 gap-1">
                                                        <label>
                                                            Fecha de Ingreso
                                                        </label>
                                                        <input type="text" data-plugin-datepicker class="form-control"
                                                            name="fecha_ingreso" id="fecha_ingreso"
                                                            placeholder="Fecha de Ingreso" />
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-6 gap-1">
                                                        <label>
                                                            Tipo de Personería
                                                        </label>
                                                        <select id="tipo_personeria" name="tipo_personeria"
                                                            class="form-control populate">
                                                            <option value=-1>Seleccionar</option>
                                                            @foreach ($tiposPersoneria as $id => $descripcion)
                                                                <option value={{ $id }}>{{ $descripcion }}
                                                                </option>
                                                            @endForEach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 gap-1">
                                                        <label>
                                                            Identificación
                                                        </label>
                                                        <input type="text" class="form-control" name="identificacion"
                                                            id="identificacion" placeholder="Identificación" />
                                                        <div id="error_identificacion" style="color: red; display: none;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <h4>Datos Personales</h4>
                                                        <hr class="my-1">
                                                    </div>
                                                </div>
                                                <div id="datos_personales">
                                                    <div class="row mb-2">
                                                        <div class="col-md-12 gap-1">
                                                            <label>
                                                                Razón Social
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                name="razon_social" id="razon_social"
                                                                placeholder="Razón Social" />
                                                        </div>
                                                    </div>
                                                    <div id="natural" class="row mb-2" style="display:none">
                                                        <div class="col-md-6 gap-1">
                                                            <label>Correo</label>
                                                            <input type="email" class="form-control" name="correo"
                                                                id="correo" placeholder="Correo" />
                                                            <div id="error_correo" style="color: red; display: none;">
                                                                Ingrese un correo
                                                                electrónico valido</div>
                                                        </div>
                                                        <div class="col-md-6 gap-1">
                                                            <label>Teléfono</label>
                                                            <input type="text" class="form-control" name="telefono"
                                                                id="telefono" placeholder="Teléfono" />
                                                            <div id="error_telefono" style="color: red; display: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="juridico" style="display: none">
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
                                                                <div id="error_cedula_representante"
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
                                                                <div id="error_telefono_representante"
                                                                    style="color: red; display: none;"></div>
                                                            </div>
                                                            <div class="col-md-6 gap-1">
                                                                <label>Correo Representante Legal</label>
                                                                <input type="email" class="form-control"
                                                                    name="correo_representante" id="correo_representante"
                                                                    placeholder="Correo Representante Legal">
                                                                <div id="error_correo_representante"
                                                                    style="color: red; display: none;">Ingrese un correo
                                                                    electrónico valido</div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-md-6 gap-1">
                                                                <label>Fecha de Registro Mercantil</label>
                                                                <input type="text" data-plugin-datepicker
                                                                    class="form-control" name="fecha_registro_mercantil"
                                                                    id="fecha_registro_mercantil"
                                                                    placeholder="Fecha Registro Mercantil">
                                                            </div>
                                                            <div class="col-md-6 gap-1">
                                                                <label>Vencimiento de Nombramiento</label>
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
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12 flex flex-col gap-1">
                                                        <label>
                                                            Datos adjuntos (máximo 5)
                                                        </label>
                                                        <input type="file" class="form-control-file" id="adjuntos"
                                                            name="adjuntos[]" multiple />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="datos_tributarios" class="tab-pane">
                                                <div class="row mb-2">
                                                    <div class="col-md-6 gap-1">
                                                        <label>Estado SRI</label>
                                                        <input type="text" class="form-control" name="estado_sri"
                                                            id="estado_sri" readonly />
                                                    </div>
                                                    <div class="col-md-6 gap-1">
                                                        <label>Tipo Régimen</label>
                                                        <select id="tipo_regimen" name="tipo_regimen"
                                                            class="form-control populate">
                                                            <option value=-1>Seleccionar</option>
                                                            @foreach ($regimenes as $id => $descripcion)
                                                                <option value={{ $id }}>{{ $descripcion }}
                                                                </option>
                                                            @endForEach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-6 gap-1">
                                                        <label>Fecha Registro SRI</label>
                                                        <input type="text" data-plugin-datepicker class="form-control"
                                                            name="fecha_registro_sri" id="fecha_registro_sri"
                                                            placeholder="Fecha Registro SRI">
                                                    </div>
                                                    <div class="col-md-6 gap-1">
                                                        <label>Fecha Actualización RUC</label>
                                                        <input type="text" data-plugin-datepicker class="form-control"
                                                            name="fecha_actualizacion_ruc" id="fecha_actualizacion_ruc"
                                                            placeholder="Fecha Actualización RUC">
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-6 gap-1">
                                                        <label>Fecha de Constitución</label>
                                                        <input type="text" data-plugin-datepicker class="form-control"
                                                            name="fecha_constitucion" id="fecha_constitucion"
                                                            placeholder="Fecha de Constitución">
                                                    </div>
                                                    <div class="col-md-6 gap-1">
                                                        <label>Años de Creación</label>
                                                        <input type="text" class="form-control" name="anios_creacion"
                                                            id="anios_creacion" readonly />
                                                    </div>
                                                </div>
                                                <div id="tributario_natural" style="display:none">
                                                    <div class="row mb-2">
                                                        <div class="col-md-6 gap-1">
                                                            <label>Fecha de Nacimiento</label>
                                                            <input type="text" data-plugin-datepicker
                                                                class="form-control" name="fecha_nacimiento"
                                                                id="fecha_nacimiento" placeholder="Fecha de Nacimiento">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-6 gap-1">
                                                        <label>Agente de Retención</label>
                                                        <select id="agente_retencion" name="agente_retencion"
                                                            class="form-control populate">
                                                            <option value=-1>Seleccionar</option>
                                                            <option value=1>SI</option>
                                                            <option value=0>NO</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 gap-1">
                                                        <label>Contribuyente Especial</label>
                                                        <select id="contribuyente_especial" name="contribuyente_especial"
                                                            class="form-control populate">
                                                            <option value=-1>Seleccionar</option>
                                                            <option value=1>SI</option>
                                                            <option value=0>NO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12 gap-1">
                                                        <label>Obligaciones Tributarias y Demás</label>
                                                        <select id="obligaciones_tributarias"
                                                            name="obligaciones_tributarias[]"
                                                            class="form-control populate" multiple>
                                                            <option value=-1>Seleccionar</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <div class="col-md-6 gap-1">
                                                        <label>Pais</label>
                                                        <select id="pais" name="pais"
                                                            class="form-control populate">
                                                            <option value=-1>Seleccionar</option>
                                                            @foreach ($paises as $id => $nombre)
                                                                <option value={{ $id }}
                                                                    {{ $id == 57 ? 'selected' : '' }}>
                                                                    {{ $nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 gap-1">
                                                        <label>Provincia</label>
                                                        <select id="provincia" name="provincia"
                                                            class="form-control populate">
                                                            <option value=-1>Seleccionar</option>
                                                            @foreach ($provincias as $id => $nombre)
                                                                <option value={{ $id }}
                                                                    {{ $id == 2 ? 'selected' : '' }}>
                                                                    {{ $nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-6 gap-1">
                                                        <label>Cantón</label>
                                                        <select id="canton" name="canton"
                                                            class="form-control populate">
                                                            <option value=-1 selected>Seleccionar</option>
                                                            @foreach ($cantones as $id => $nombre)
                                                                <option value={{ $id }}
                                                                    {{ $id == 2 ? 'selected' : '' }}>
                                                                    {{ $nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 gap-1">
                                                        <label>Parroquia</label>
                                                        <select id="parroquia" name="parroquia"
                                                            class="form-control populate">
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
                                                        <input type="text" class="form-control" name="calle"
                                                            id="calle" placeholder="Calle" />
                                                    </div>
                                                    <div class="col-md-6 gap-1">
                                                        <label>Manzana</label>
                                                        <input type="text" class="form-control" name="manzana"
                                                            id="manzana" placeholder="Manzana" />
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-6 gap-1">
                                                        <label>Número</label>
                                                        <input type="text" class="form-control" name="numero"
                                                            id="numero" placeholder="Número" />
                                                    </div>
                                                    <div class="col-md-6 gap-1">
                                                        <label>Intersección</label>
                                                        <input type="text" class="form-control" name="interseccion"
                                                            id="interseccion" placeholder="Intersección" />
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-6 gap-1">
                                                        <label>Referencia</label>
                                                        <input type="text" class="form-control" name="referencia"
                                                            id="referencia" placeholder="Referencia" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary cerrar-modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" id="btn_register_socio">Guardar</button>
                            <button type="button" class="btn btn-primary" style="display: none;"
                                id="btn_update_socio">Actualizar</button>
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
            let socios = [];
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
                            text: error.responseJSON?.error || "Error al cargar los datos.",
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
                        data: 'identificacion',
                        width: '20%'
                    },
                    {
                        data: 'razon_social',
                        width: '20%'
                    },
                    {
                        data: 'tipo_personeria',
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
             * Event listeners
             */
            // Event listener for onClick of button cerrar-modal
            $(document).on('click', '.cerrar-modal', function() {
                $('#ModalSocio').modal('hide');
                limpiarFormulario();
            });
            // Event listener for onClick of button#btn_new_socio
            $(document).on('click', '#btn_new_socio', function() {
                limpiarFormulario();
                $('#ModalSocio').find('#btn_register_socio').show();
                $('#ModalSocio').find('#btn_update_socio').hide();
                $('#ModalSocio').modal('show');
            });

            // Functions for Form Selects and Elements
            function toggleJuridico(active) {
                if (active) {
                    $('#juridico').show();
                    $('#tributario_natural').hide()
                    $('#natural').hide();
                } else {
                    $('#juridico').hide();
                }
            }

            function toggleNatural(active) {
                if (active) {
                    $('#juridico').hide();
                    $('#natural').show();
                    $('#tributario_natural').show();
                } else {
                    $('#natural').hide();
                }
            }

            // Event listener for onChange of select tipo_personeria
            $('#tipo_personeria').change(function() {
                var tipoPersoneria = $(this).val();
                if (tipoPersoneria == 1) {
                    toggleJuridico(false);
                    toggleNatural(true);
                    $('#identificacion').focus();
                } else if (tipoPersoneria == 2) {
                    toggleJuridico(true);
                    toggleNatural(false);
                    $('#identificacion').focus();
                } else {
                    toggleJuridico(false);
                    toggleNatural(false);
                }
            });

            // Event listener for onInput of input identificacion
            $('#identificacion').on('input', function() {
                var identificacion = $(this).val();
                var validRuc = /^\d{13}$/.test(identificacion);
                if (!validRuc) {
                    $('#error_identificacion').text('La identificación debe tener 13 dígitos.');
                    $('#error_identificacion').show();
                } else {
                    $('#error_identificacion').hide();
                }
            });

            // Función para cargar provincias
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

            $("#btn_register_socio").click(function() {
                if (!validarRegistro()) {
                    return;
                }

                let formData = new FormData();
                const data = {};

                const commonFields = [
                    'fecha_ingreso', 'tipo_personeria', 'identificacion',
                    'fotoFile', 'adjuntos', 'razon_social', 'estado_sri', 'tipo_regimen',
                    'fecha_registro_sri',
                    'fecha_actualizacion_ruc', 'fecha_constitucion', 'agente_retencion',
                    'contribuyente_especial',
                    'obligaciones_tributarias', 'pais', 'provincia', 'canton', 'parroquia', 'calle',
                    'manzana',
                    'numero',
                    'interseccion', 'referencia'
                ];

                const requiredFieldsJuridico = commonFields.concat([
                    'cedula_representante', 'nombre_representante', 'apellido_representante',
                    'telefono_representante', 'correo_representante', 'fecha_registro_mercantil',
                    'vencimiento_nombramiento'
                ]);
                const requiredFieldsNaturalRuc = commonFields.concat([
                    'correo', 'telefono', , 'fecha_nacimiento'
                ]);

                let requiredFields = $('#tipo_personeria').val() == 2 ? requiredFieldsJuridico :
                    requiredFieldsNaturalRuc;


                requiredFields.forEach(field => {
                    const value = $(`#${field}`).val();
                    if (value) {
                        data[field] = value;
                    }
                    formData.append(field, value);
                });
                if ($('#fotoFile')[0].files.length > 0) {
                    formData.append('file', $('#fotoFile')[0].files[0]);
                }
                if ($('#adjuntos')[0].files.length > 0) {
                    $.each($('#adjuntos')[0].files, function(i, file) {
                        formData.append('adjuntos[]', file);
                    });
                }
                formData.append('_token', '{{ csrf_token() }}');
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
                        text: error.responseJSON?.error ||
                            "Error al registrar el socio.",
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                    });
                    console.error("Error al registrar el socio: ", error);
                });
            });

            $("#btn_update_socio").click(function() {
                if (!validarRegistro()) {
                    return;
                }
                let formData = new FormData();
                const data = {};

                const commonFields = [
                    'fecha_ingreso', 'tipo_personeria', 'identificacion',
                    'fotoFile', 'adjuntos', 'razon_social', 'estado_sri', 'tipo_regimen',
                    'fecha_registro_sri',
                    'fecha_actualizacion_ruc', 'fecha_constitucion', 'agente_retencion',
                    'contribuyente_especial',
                    'obligaciones_tributarias', 'pais', 'provincia', 'canton', 'parroquia', 'calle',
                    'manzana',
                    'numero',
                    'interseccion', 'referencia'
                ];

                const requiredFieldsJuridico = commonFields.concat([
                    'cedula_representante', 'nombre_representante', 'apellido_representante',
                    'telefono_representante', 'correo_representante', 'fecha_registro_mercantil',
                    'vencimiento_nombramiento'
                ]);
                const requiredFieldsNaturalRuc = commonFields.concat([
                    'correo', 'telefono', , 'fecha_nacimiento'
                ]);

                let requiredFields = $('#tipo_personeria').val() == 2 ? requiredFieldsJuridico :
                    requiredFieldsNaturalRuc;


                requiredFields.forEach(field => {
                    const value = $(`#${field}`).val();
                    if (value) {
                        data[field] = value;
                    }
                    formData.append(field, value);
                });
                if ($('#fotoFile')[0].files.length > 0) {
                    formData.append('file', $('#fotoFile')[0].files[0]);
                }
                if ($('#adjuntos')[0].files.length > 0) {
                    $.each($('#adjuntos')[0].files, function(i, file) {
                        formData.append('adjuntos[]', file);
                    });
                }
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('socio_id', socioSelected);
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
                        text: error.responseJSON?.error ||
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
                            text: error.responseJSON?.error ||
                                "Error al eliminar el socio.",
                        });
                        console.error("Error al eliminar el socio: ", error);
                    });
                }
            });
            $(document).on('click', '.edit-modal', async function() {
                let button = $(this);
                socioSelected = button.data('id');

                $('.nav-tabs a[href="#datos_generales"]').tab('show');

                let data = socios.find(socio => socio.id == socioSelected);
                console.log(data);
                // Populate modal fields with the row data
                $('#ModalSocio').find('#fecha_ingreso').val(data.fecha_ingreso);
                $('#ModalSocio').find('#tipo_personeria').val(data.id_tipo_personeria).trigger(
                    'change');
                $('#ModalSocio').find('#identificacion').val(data.identificacion);
                $('#ModalSocio').find('#razon_social').val(data.razon_social);
                if (data.id_tipo_personeria == 1) {
                    $('#ModalSocio').find('#telefono').val(data.telefono);
                    $('#ModalSocio').find('#correo').val(data.correo);
                    $('#ModalSocio').find('#fecha_nacimiento').val(data.fecha_nacimiento).trigger(
                        'change');
                } else if (data.id_tipo_personeria == 2) {
                    $('#ModalSocio').find('#cedula_representante').val(data
                        .cedula_representante_legal);
                    $('#ModalSocio').find('#nombre_representante').val(data
                        .nombres_representante_legal);
                    $('#ModalSocio').find('#apellido_representante').val(data
                        .apellidos_representante_legal);
                    $('#ModalSocio').find('#telefono_representante').val(data
                        .telefono_representante_legal);
                    $('#ModalSocio').find('#correo_representante').val(data
                        .correo_representante_legal);
                    $('#ModalSocio').find('#fecha_registro_mercantil').val(data
                        .fecha_registro_mercantil);
                    $('#ModalSocio').find('#vencimiento_nombramiento').val(data
                        .fecha_vencimiento_nombramiento).trigger('change');
                }
                $('#ModalSocio').find('#estado_sri').val(data.estado_sri);
                $('#ModalSocio').find('#fecha_registro_sri').val(data.fecha_registro_sri).trigger(
                    'change');
                $('#ModalSocio').find('#fecha_actualizacion_ruc').val(data.fecha_actualizacion_ruc);
                $('#ModalSocio').find('#fecha_constitucion').val(data.fecha_constitucion).trigger(
                    'change');
                $('#ModalSocio').find('#tipo_regimen').val(data.tipo_regimen);
                $('#ModalSocio').find('#agente_retencion').val(data.agente_retencion);
                $('#ModalSocio').find('#contribuyente_especial').val(data.contribuyente_especial);
                $('#ModalSocio').find('#obligaciones_tributarias').val(data.obligaciones_tributarias);
                $('#ModalSocio').find('#pais').val(data.id_pais).trigger('change');

                // Cargar provincias y asignar provincia
                cargarProvincias(data.id_pais).then(() => {
                    $('#provincia').val(data.id_provincia).trigger('change');

                    // Cargar cantones y asignar cantón
                    cargarCantones(data.id_pais, data
                        .id_provincia).then(() => {
                        $('#canton').val(data.id_canton).trigger('change');

                        // Cargar parroquias y asignar parroquia
                        cargarParroquias(
                            data.id_pais,
                            data.id_provincia,
                            data.id_canton
                        ).then(() => {
                            $('#parroquia').val(data
                                .dato_tributario
                                .id_parroquia);
                        });
                    });
                });
                $('#ModalSocio').find('#provincia').val(data.id_provincia);
                $('#ModalSocio').find('#canton').val(data.id_canton);
                $('#ModalSocio').find('#parroquia').val(data.id_parroquia);


                $('#ModalSocio').find('#calle').val(data.calle);
                $('#ModalSocio').find('#manzana').val(data.manzana);
                $('#ModalSocio').find('#numero').val(data.numero);
                $('#ModalSocio').find('#interseccion').val(data.interseccion);
                $('#ModalSocio').find('#referencia').val(data.referencia);
                $('#ModalSocio').find('#btn_register_socio').hide();
                $('#ModalSocio').find('#btn_update_socio').show();
                $('#ModalSocio').modal('show');
            });

            /**
             * Functions
             */
            function limpiarFormulario() {
                $('#ModalSocio').find('input, select, textarea').val('');
                $('#ModalSocio').find(
                        '#tipo_personeria, #tipo_regimen, #agente_retencion, #contribuyente_especial, #pais, #provincia, #canton, #parroquia'
                    )
                    .val(-1);
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
                if ($('#tipo_personeria').val() == 2) {
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
                } else if ($('#tipo_personeria').val() == 1) {
                    if (!/^\+?\d{1,14}$/.test($('#telefono').val())) {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'El teléfono no tiene el formato adecuado o se encuentra vacio.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#telefono').focus();
                        return false;
                    }
                    if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test($('#correo')
                            .val())) {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'El correo no tiene el formato adecuado o se encuentra vacio.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#correo').focus();
                        return false;
                    }
                    if ($('#fecha_nacimiento').val() == "") {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'Por favor, ingrese la fecha de nacimiento.',
                        });
                        $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                        return false;
                    }
                    if (!esFechaValida($('#fecha_nacimiento').val())) {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'Por favor, ingrese una fecha válida en el formato dd/mm/yyyy.',
                        });
                        $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                        $('#fecha_nacimiento').focus();
                        return false;
                    }
                }
                if ($('#estado_sri').val() == -1) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, seleccione el estado del SRI.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#estado_sri').focus();
                    return false;
                }
                if ($('#tipo_regimen').val() == -1) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, seleccione el tipo de régimen.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#tipo_regimen').focus();
                    return false;
                }
                if ($('#fecha_registro_sri').val() == "") {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingrese la fecha de registro en el SRI.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#fecha_registro_sri').focus();
                    return false;
                }
                if (!esFechaValida($('#fecha_registro_sri').val())) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingrese una fecha válida en el formato dd/mm/yyyy.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#fecha_registro_sri').focus();
                    return false;
                }
                if ($('#fecha_actualizacion_ruc').val() == "") {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingrese la fecha de actualización del RUC.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#fecha_actualizacion_ruc').focus();
                    return false;
                }
                if (!esFechaValida($('#fecha_actualizacion_ruc').val())) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingrese una fecha válida en el formato dd/mm/yyyy.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#fecha_actualizacion_ruc').focus();
                    return false;
                }
                if ($('#fecha_constitucion').val() == "") {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingrese la fecha de constitución.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#fecha_constitucion').focus();
                    return false;
                }
                if (!esFechaValida($('#fecha_constitucion').val())) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingrese una fecha válida en el formato dd/mm/yyyy.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#fecha_constitucion').focus();
                    return false;
                }
                if ($('#agente_retencion').val() == -1) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, seleccione si es agente de retención.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#agente_retencion').focus();
                    return false;
                }
                if ($('#contribuyente_especial').val() == -1) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, seleccione si es contribuyente especial.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#contribuyente_especial').focus();
                    return false;
                }
                /* if ($('#obligaciones_tributarias').val() == -1 || $('#obligaciones_tributarias').val() == []) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, seleccione las obligaciones tributarias.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#obligaciones_tributarias').focus();
                    return false;
                } */
                if ($('#pais').val() == -1) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, seleccione el país.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#pais').focus();
                    return false;
                }
                if ($('#provincia').val() == -1) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, seleccione la provincia.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#provincia').focus();
                    return false;
                }
                if ($('#canton').val() == -1) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, seleccione el cantón.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#canton').focus();
                    return false;
                }
                if ($('#parroquia').val() == -1) {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, seleccione la parroquia.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#parroquia').focus();
                    return false;
                }
                if ($('#calle').val() == "") {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingrese la calle.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#calle').focus();
                    return false;
                }
                if ($('#numero').val() == "") {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingrese el número.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#numero').focus();
                    return false;
                }
                if ($('#interseccion').val() == "") {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingrese la intersección.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#interseccion').focus();
                    return false;
                }
                if ($('#referencia').val() == "") {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'Por favor, ingrese la referencia.',
                    });
                    $('.nav-tabs a[href="#datos_tributarios"]').tab('show');
                    $('#referencia').focus();
                    return false;
                }
                //validacion para datos adjuntos y foto.
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
                $('#fecha_registro_sri').datepicker('destroy').datepicker({
                    format: 'dd/mm/yyyy',
                    autoclose: true,
                });
                $('#fecha_actualizacion_ruc').datepicker('destroy').datepicker({
                    format: 'dd/mm/yyyy',
                    autoclose: true,
                });
                $('#fecha_constitucion').datepicker('destroy').datepicker({
                    format: 'dd/mm/yyyy',
                    autoclose: true,
                });
                $('#fecha_nacimiento').datepicker('destroy').datepicker({
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

            $('#fecha_nacimiento').on('change', function() {
                let fechaNacimiento = $(this).val();
                let fechaRegistro = $('#fecha_registro_sri').val();

                function parseDate(str) {
                    let mdy = str.split('/');
                    return new Date(mdy[2], mdy[1] - 1, mdy[0]);
                }
                if (fechaRegistro && fechaNacimiento) {
                    let fechaInicio = parseDate(fechaRegistro);
                    let fechaFin = parseDate(fechaNacimiento);

                    if (fechaFin >= fechaInicio) {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            text: 'La fecha de nacimiento no puede ser mayor o igual a la fecha de registro en el SRI.',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                        });
                        $(this).val('');
                        return;
                    }
                }
            });

            function calcularDuracion(id_inicio, id_fin, alertText, id_resultado) {
                $('#' + id_inicio + ', #' + id_fin).on('change', function() {
                    let fechaIngreso = $('#' + id_inicio).val()
                    let vencimiento = $('#' + id_fin).val();

                    function parseDate(str) {
                        let mdy = str.split('/');
                        return new Date(mdy[2], mdy[1] - 1, mdy[0]);
                    }
                    if (fechaIngreso && vencimiento) {
                        let fechaInicio = parseDate(fechaIngreso);
                        let fechaFin = parseDate(vencimiento);

                        if (fechaFin >= fechaInicio) {
                            Swal.fire({
                                target: document.getElementById('ModalSocio'),
                                icon: 'error',
                                title: 'Error',
                                text: alertText,
                                showConfirmButton: true,
                                allowOutsideClick: false,
                                confirmButtonText: 'Aceptar',
                            });
                            $('#' + id_fin).val('');
                            return;
                        }
                    }

                    if (vencimiento) {
                        let today = new Date();
                        let fechaFin = parseDate(vencimiento);
                        let years = today.getFullYear() - fechaFin.getFullYear();
                        let months = today.getMonth() - fechaFin.getMonth();

                        if (months < 0) {
                            years--;
                            months += 12;
                        }

                        $('#' + id_resultado).val(years + ' años ' + months + ' meses');
                    }
                });
            }

            /**
             * Call to functions
             */
            setupDatePicker();
            validarFechaOnBlur('fecha_ingreso');
            validarFechaOnBlur(
                'fecha_registro_mercantil');
            validarFechaOnBlur('vencimiento_nombramiento');
            validarFechaOnBlur(
                'fecha_registro_sri');
            validarFechaOnBlur('fecha_actualizacion_ruc');
            validarFechaOnBlur(
                'fecha_constitucion');
            validarFechaOnBlur('fecha_nacimiento');

            onInputUppercase('razon_social');
            onInputUppercase('identificacion');
            onInputUppercase('correo');
            onInputUppercase('correo');
            onInputUppercase(
                'nombre_representante');
            onInputUppercase('apellido_representante');
            onInputUppercase(
                'correo_representante');
            onInputUppercase('calle');
            onInputUppercase('manzana');
            onInputUppercase(
                'numero');
            onInputUppercase('interseccion');
            onInputUppercase('referencia');


            validarCorreo('correo', 'error_correo');
            validarCorreo('correo_representante',
                'error_correo_representante');
            validarCorreo('correo', 'error_correo');

            validarCedula('cedula_representante', 'error_cedula_representante');
            validarTelefono('telefono',
                'error_telefono');
            validarTelefono('telefono', 'error_telefono');
            validarTelefono(
                'telefono_representante', 'error_telefono_representante');

            calcularDuracion('fecha_ingreso', 'vencimiento_nombramiento',
                'La fecha de vencimiento del nombramiento no puede ser menor a la fecha de ingreso.',
                'anios_nombramiento');
            calcularDuracion('fecha_registro_sri', 'fecha_constitucion',
                'La fecha de constitucion debe ser menor que la fecha de registro al SRI.', 'anios_creacion'
            );
        });
    </script>
@endsection
