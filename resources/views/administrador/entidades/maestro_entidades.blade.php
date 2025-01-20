@extends('dashboard')

@section('pagename')
    Maestro de Entidades
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
                        <h2 class="card-title">Gestión de Entidades</h2>
                    </header>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary mb-3" data-toggle="modal"
                                            data-target="#ModalEntidad">Agregar Nuevo Registro</button>
                                        <!-- <button id="abrirModal" class="btn btn-primary mb-3">Agregar Nuevo Registro</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <section class="card">
                                    <header class="card-header">
                                        <h2 class="card-title">Listado de Entidades creadas</h2>
                                    </header>
                                    <div class="card-body overflow-x-auto max-w-full">
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
        <form enctype="multipart/form-data" class="modal fade" id="ModalEntidad" tabindex="-1"
            aria-labelledby="ModalEntidadLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalEntidadLabel"><b>Agregar una nueva Entidad</b></h5>
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
                                    <input type="text" class="form-control" name="entidad" id="entidad"
                                        placeholder="Entidad">
                                </div>
                                <div class="col-md-2">
                                    Ruc
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="ruc" id="ruc"
                                        placeholder="Ruc">
                                    <div id="error-ruc" style="color: red; display: none;">El RUC debe tener 13 dígitos.
                                    </div>
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
                                        <option value=-1>Seleccionar</option>
                                        @foreach ($tipo_entidad as $id => $nombre)
                                            <option value={{ $id }}>
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
                                        <option value=-1>Seleccionar</option>
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
                                    <input type="text" class="form-control" name="direccion" id="direccion"
                                        placeholder="Dirección">
                                </div>
                                <div class="col-md-2">
                                    Teléfono
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="telefono" id="telefono"
                                        placeholder="Teléfono">
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
                                    <input type="text" class="form-control" name="representante" id="representante"
                                        placeholder="Representante">
                                </div>
                                <div class="col-md-2">
                                    Teléfono Representante
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="telefono_representante"
                                        id="telefono_representante" placeholder="Teléfono Representante">
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
                                        <option value=-1>Seleccionar</option>
                                        @foreach ($paises as $id => $nombre)
                                            <option value={{ $id }} {{ $id == 57 ? 'selected' : '' }}>
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
                                        <option value=-1>Seleccionar</option>
                                        @foreach ($provincias as $id => $nombre)
                                            <option value={{ $id }} {{ $id == 2 ? 'selected' : '' }}>
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
                                        <option value=-1 selected>Seleccionar</option>
                                        @foreach ($cantones as $id => $nombre)
                                            <option value={{ $id }} {{ $id == 2 ? 'selected' : '' }}>
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>&nbsp;
                        <!-- <button type="button" class="btn btn-secondary cerrar-modal">Cerrar</button> -->
                        <button type="button" class="btn btn-primary" id="btn-register-entidad">Guardar</button>
                    </div>
                </div>
            </div>
        </form>


        <form enctype="multipart/form-data" class="modal fade" id="ModalModificarEntidad" tabindex="-1"
            aria-labelledby="ModalModificarEntidadLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="ModalModificarEntidadLabel"><b>Modificar Entidad</b></h5>
                        <button type="button" class="btn btn-warning" id="btn-more-info">
                            <i class="fas fa-info"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    Nombre
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="entidad_mod" id="entidad_mod"
                                        placeholder="Entidad">
                                    <input type="hidden" id="entidad_id" name="entidad_id">
                                </div>
                                <div class="col-md-2">
                                    Ruc
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="ruc_mod" id="ruc_mod"
                                        placeholder="Ruc">
                                    <div id="error-ruc-mod" style="color: red; display: none;">El RUC debe tener 13
                                        dígitos.</div>
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
                                    <select id="tipo_entidad_mod" name="tipo_entidad_mod" class="form-control populate">
                                        <option value=-1>Seleccionar</option>
                                        @foreach ($tipo_entidad as $id => $nombre)
                                            <option value={{ $id }}>
                                                {{ $nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    Alcance
                                </div>
                                <div class="col-md-4">
                                    <select id="alcance_mod" name="alcance_mod" class="form-control populate">
                                        <option value=-1>Seleccionar</option>
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
                                    <input type="text" class="form-control" name="direccion_mod" id="direccion_mod"
                                        placeholder="Dirección">
                                </div>
                                <div class="col-md-2">
                                    Teléfono
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="telefono_mod" id="telefono_mod"
                                        placeholder="Teléfono">
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
                                    <input type="text" class="form-control" name="representante_mod"
                                        id="representante_mod" placeholder="Representante">
                                </div>
                                <div class="col-md-2">
                                    Teléfono Representante
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="telefono_representante_mod"
                                        id="telefono_representante_mod" placeholder="Teléfono Representante">
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
                                    <select id="pais_mod" name="pais_mod" class="form-control populate">
                                        <option value=-1>Seleccionar</option>
                                        @foreach ($paises as $id => $nombre)
                                            <option value={{ $id }} {{ $id == 57 ? 'selected' : '' }}>
                                                {{ $nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    Provincia
                                </div>
                                <div class="col-md-4">
                                    <select id="provincia_mod" name="provincia_mod" class="form-control populate">
                                        <option value=-1>Seleccionar</option>
                                        @foreach ($provincias as $id => $nombre)
                                            <option value={{ $id }} {{ $id == 2 ? 'selected' : '' }}>
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
                                    <select id="canton_mod" name="canton_mod" class="form-control populate">
                                        <option value=-1 selected>Seleccionar</option>
                                        @foreach ($cantones as $id => $nombre)
                                            <option value={{ $id }} {{ $id == 2 ? 'selected' : '' }}>
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
                        <button type="button" class="btn btn-secondary" id="btn-close"
                            data-dismiss="modal">Cerrar</button>&nbsp;
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> -->
                        <button type="button" class="btn btn-primary" id="btn-modificar-entidad">Guardar
                            Cambios</button>
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
            let entidad_selected = null;
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
                    url: "{{ route('admin.obtener_listado_entidades') }}",
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
                        data: 'fecha_ingreso',
                        width: '15%'
                    },
                    {
                        data: 'entidad',
                        width: '15%'
                    },
                    {
                        data: 'tipo_entidad',
                        width: '10%'
                    },
                    {
                        data: 'direccion',
                        width: '20%'
                    },
                    {
                        data: 'representante',
                        width: '20%'
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

            //Manejo de Upercase 
            $('#entidad').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            $('#direccion').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            /*$('#telefono').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });*/

            $('#telefono').on('input', function() {
                let value = $(this).val();
                // Eliminar todos los caracteres no numéricos excepto el guion
                value = value.replace(/[^0-9]/g, '');
                
                // Limitar el campo a un máximo de 11 caracteres (10 dígitos + 1 guion)
                if (value.length > 11) {
                    value = value.slice(0, 11);
                }
                $(this).val(value);
            });

            $('#representante').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            /*$('#telefono_representante').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });*/

            $('#telefono_representante').on('input', function() {
                let value = $(this).val();
                // Eliminar todos los caracteres no numéricos excepto el guion
                value = value.replace(/[^0-9]/g, '');
                
                // Limitar el campo a un máximo de 11 caracteres (10 dígitos + 1 guion)
                if (value.length > 11) {
                    value = value.slice(0, 11);
                }
                $(this).val(value);
            });

            $('#entidad_mod').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            $('#direccion_mod').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            /*$('#telefono_mod').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });*/

            $('#telefono_mod').on('input', function() {
                let value = $(this).val();
                // Eliminar todos los caracteres no numéricos excepto el guion
                value = value.replace(/[^0-9]/g, '');
                
                // Limitar el campo a un máximo de 11 caracteres (10 dígitos + 1 guion)
                if (value.length > 11) {
                    value = value.slice(0, 11);
                }
                $(this).val(value);
            });

            $('#representante_mod').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            /*$('#telefono_representante_mod').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });*/

            $('#telefono_representante_mod').on('input', function() {
                let value = $(this).val();
                // Eliminar todos los caracteres no numéricos excepto el guion
                value = value.replace(/[^0-9]/g, '');
                
                // Limitar el campo a un máximo de 11 caracteres (10 dígitos + 1 guion)
                if (value.length > 11) {
                    value = value.slice(0, 11);
                }
                $(this).val(value);
            });


            // Escucha el cambio en el select tipo_entidad
            $('#alcance').change(function() {
                // Obtén el valor seleccionado
                const tipoEntidad = $(this).val();

                // Deshabilitar o habilitar los selects según el valor
                if (tipoEntidad === '1') { // General
                    $('#pais, #provincia, #canton').prop('disabled', true);
                    $('#pais').val('-1')
                        .change(); // Llamamos a .change() para disparar eventos asociados si los hay
                    $('#provincia').val('-1').change();
                    $('#canton').val('-1').change();
                } else if (tipoEntidad === '2') { // Local
                    $('#pais, #provincia, #canton').prop('disabled', false);
                    // Seleccionar automáticamente el valor '1' en el combo de país
                    $('#pais').val('-1')
                        .change(); // Llamamos a .change() para disparar eventos asociados si los hay
                    $('#provincia').val('-1').change();
                    $('#canton').val('-1').change();
                } else {
                    // Si no se selecciona una opción válida, deshabilitamos los campos por defecto
                    $('#pais, #provincia, #canton').prop('disabled', true);
                    $('#pais').val('-1')
                        .change(); // Llamamos a .change() para disparar eventos asociados si los hay
                    $('#provincia').val('-1').change();
                    $('#canton').val('-1').change();
                }
            });

            $('#alcance_mod').change(function() {
                // Obtén el valor seleccionado
                const tipoEntidad = $(this).val();

                // Deshabilitar o habilitar los selects según el valor
                if (tipoEntidad === '1') { // General
                    $('#pais_mod, #provincia_mod, #canton_mod').prop('disabled', true);
                    $('#pais_mod').val('-1')
                        .change(); // Llamamos a .change() para disparar eventos asociados si los hay
                    $('#provincia_mod').val('-1').change();
                    $('#canton_mod').val('-1').change();
                } else if (tipoEntidad === '2') { // Local
                    $('#pais_mod, #provincia_mod, #canton_mod').prop('disabled', false);
                    // Seleccionar automáticamente el valor '1' en el combo de país
                    $('#pais_mod').val('-1')
                        .change(); // Llamamos a .change() para disparar eventos asociados si los hay
                    $('#provincia_mod').val('-1').change();
                    $('#canton_mod').val('-1').change();
                } else {
                    // Si no se selecciona una opción válida, deshabilitamos los campos por defecto
                    $('#pais_mod, #provincia_mod, #canton_mod').prop('disabled', true);
                    $('#pais_mod').val('-1')
                        .change(); // Llamamos a .change() para disparar eventos asociados si los hay
                    $('#provincia_mod').val('-1').change();
                    $('#canton_mod').val('-1').change();
                }
            });

            // Inicializar los selects deshabilitados por defecto
            $('#pais, #provincia, #canton').prop('disabled', true);

            // Validar campo RUC
            $("#ruc").on("input", function() {
                var ruc = $(this).val();
                if (/^\d{13}$/.test(ruc)) { // Si tiene exactamente 13 dígitos
                    $("#error-ruc").hide(); // Ocultar error
                } else {
                    $("#error-ruc").show(); // Mostrar error
                }
            });

            $("#ruc_mod").on("input", function() {
                var ruc = $(this).val();
                if (/^\d{13}$/.test(ruc)) { // Si tiene exactamente 13 dígitos
                    $("#error-ruc-mod").hide(); // Ocultar error
                } else {
                    $("#error-ruc-mod").show(); // Mostrar error
                }
            });

            /*$("#btn-register-entidad").click(function() { 

                    if ($('#entidad').val() == "") {
                        alert('Debe ingresar el nombre de la Entidad'); 
                        $('#entidad').focus();
                        return;
                    }

                    if (!/^\d{13}$/.test($('#ruc').val())) { 
                        $("#error-ruc").show();
                        alert('El RUC debe tener 13 dígitos'); 
                        $('#ruc').focus();
                        return;
                    }

                    if ($('#tipo_entidad').val() == "-1") {
                        alert('Debe seleccionar la Clase de Entidad'); 
                        $('#entidad').focus();
                        return;
                    }

                    if ($('#alcance').val() == "-1") {
                        alert('Debe seleccionar un alcance para la Entidad'); 
                        $('#entidad').focus();
                        return;
                    }

                    if ($('#direccion').val() == "") {
                        alert('Debe ingresar la Dirección de la Entidad'); 
                        $('#direccion').focus();
                        return;
                    }

                    if ($('#telefono').val() == "") {
                        alert('Debe ingresar el Teléfono de la Entidad'); 
                        $('#telefono').focus();
                        return;
                    }

                    if ($('#alcance').val() == "2") {

                        if ($('#pais').val() == "-1" || $('#provincia').val() == "-1" || $('#canton').val() == "-1"){
                            alert('Si seleccinó que alcance de la Entidad es local, debe seleccionar Pais, Provincia y Cantón');  
                            return;
                        } 
                    }   
             
                    //alert('Fin de validaciones');return;

                    var formData = new FormData(document.getElementById("ModalEntidad"));
                    $('#carga').show();

                    $.ajax({
                        url: "{{ route('admin.registrar_entidad') }}",
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
                });*/

            $('#btn-close').on('click', function() {
                // Aquí puedes añadir la lógica para enviar el formulario modificado
                $('#ModalModificarEntidad').modal('hide'); // Cerrar el modal después de guardar
            });

            $("#btn-register-entidad").click(function() {

                if ($('#entidad').val() == "") {
                    //alert('Debe ingresar el nombre de la Entidad'); ModalEntidad
                    Swal.fire({
                        target: document.getElementById('ModalEntidad'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar el nombre de la Entidad',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#entidad').focus();
                    return;
                }

                if (!/^\d{13}$/.test($('#ruc').val())) {
                    $("#error-ruc").show();
                    //alert('El RUC debe tener 13 dígitos');
                    Swal.fire({
                        target: document.getElementById('ModalEntidad'),
                        icon: 'error',
                        title: 'Error',
                        text: 'El RUC debe tener 13 dígitos',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#ruc').focus();
                    return;
                }

                if ($('#tipo_entidad').val() == "-1") {
                    //alert('Debe seleccionar la Clase de Entidad');
                    Swal.fire({
                        target: document.getElementById('ModalEntidad'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe seleccionar la Clase de Entidad',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#entidad').focus();
                    return;
                }

                if ($('#alcance').val() == "-1") {
                    //alert('Debe seleccionar un alcance para la Entidad');
                    Swal.fire({
                        target: document.getElementById('ModalEntidad'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe seleccionar un alcance para la Entidad',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#entidad').focus();
                    return;
                }

                if ($('#direccion').val() == "") {
                    //alert('Debe ingresar la Dirección de la Entidad');
                    Swal.fire({
                        target: document.getElementById('ModalEntidad'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar la Dirección de la Entidad',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#direccion').focus();
                    return;
                }

                if ($('#telefono').val() == "") {
                    //alert('Debe ingresar el Teléfono de la Entidad');
                    Swal.fire({
                        target: document.getElementById('ModalEntidad'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar el Teléfono de la Entidad',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#telefono').focus();
                    return;
                }

                if ($('#alcance').val() == "2") {

                    if ($('#pais').val() == "-1" || $('#provincia').val() == "-1" || $('#canton').val() ==
                        "-1") {
                        //alert('Si seleccionó que alcance de la Entidad es local, debe seleccionar País, Provincia y Cantón');
                        Swal.fire({
                            target: document.getElementById('ModalEntidad'),
                            icon: 'error',
                            title: 'Error',
                            text: 'Si seleccionó que alcance de la Entidad es local, debe seleccionar País, Provincia y Cantón',
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false
                        });
                        return;
                    }
                }

                // Verificar si hay registros similares antes de proceder
                const entidad = $('#entidad').val();
                const ruc = $('#ruc').val();

                $.ajax({
                    url: "{{ route('admin.check_entidad') }}", // Ruta para verificar similitudes
                    type: "POST",
                    data: {
                        entidad: entidad,
                        ruc: ruc,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: async function(response) {
                        if (response.similar.length > 0) {
                            // Mostrar mensaje de confirmación al usuario
                            const similarMessage =
                                `Se encontraron registros similares:\n- ${response.similar.join('\n- ')}\n\n¿Está seguro de registrar esta entidad de todas formas?`;

                            const {
                                isConfirmed: confirmSimilar
                            } = await Swal.fire({
                                target: document.getElementById('ModalEntidad'),
                                title: 'Registros similares encontrados',
                                text: similarMessage,
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Registrar de todas formas',
                                cancelButtonText: 'Cancelar',
                                allowOutsideClick: false,
                            });

                            if (!confirmSimilar) {
                                return; // Detener la ejecución si el usuario cancela
                            }
                        }

                        // Si no hay similitudes o el usuario confirma, proceder con el registro
                        registrarEntidad();
                    },
                    error: function() {
                        //alert('Error al verificar registros similares. Intente nuevamente.');
                        Swal.fire({
                            target: document.getElementById('ModalEntidad'),
                            icon: 'error',
                            title: 'Error',
                            text: 'Error al verificar registros similares. Intente nuevamente.',
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false
                        });
                    }
                });
            });

            $("#btn-modificar-entidad").click(function() {

                if ($('#entidad_mod').val() == "") {
                    //alert('Debe ingresar el nombre de la Entidad');
                    Swal.fire({
                        target: document.getElementById('ModalModificarEntidad'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar el nombre de la Entidad',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#entidad_mod').focus();
                    return;
                }

                if (!/^\d{13}$/.test($('#ruc_mod').val())) {
                    $("#error-ruc-mod").show();
                    //alert('El RUC debe tener 13 dígitos');
                    Swal.fire({
                        target: document.getElementById('ModalModificarEntidad'),
                        icon: 'error',
                        title: 'Error',
                        text: 'El RUC debe tener 13 dígitos',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#ruc_mod').focus();
                    return;
                }

                if ($('#tipo_entidad_mod').val() == "-1") {
                    //alert('Debe seleccionar la Clase de Entidad');
                    Swal.fire({
                        target: document.getElementById('ModalModificarEntidad'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe seleccionar la Clase de Entidad',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#entidad_mod').focus();
                    return;
                }

                if ($('#alcance_mod').val() == "-1") {
                    //alert('Debe seleccionar un alcance para la Entidad');
                    Swal.fire({
                        target: document.getElementById('ModalModificarEntidad'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe seleccionar un alcance para la Entidad',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#entidad_mod').focus();
                    return;
                }

                if ($('#direccion_mod').val() == "") {
                    //alert('Debe ingresar la Dirección de la Entidad');
                    Swal.fire({
                        target: document.getElementById('ModalModificarEntidad'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar la Dirección de la Entidad',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#direccion_mod').focus();
                    return;
                }

                if ($('#telefono_mod').val() == "") {
                    //alert('Debe ingresar el Teléfono de la Entidad');
                    Swal.fire({
                        target: document.getElementById('ModalModificarEntidad'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar el Teléfono de la Entidad',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#telefono_mod').focus();
                    return;
                }

                if ($('#alcance_mod').val() == "2") {

                    if ($('#pais_mod').val() == "-1" || $('#provincia_mod').val() == "-1" || $(
                            '#canton_mod').val() == "-1") {
                        //alert('Si seleccionó que alcance de la Entidad es local, debe seleccionar País, Provincia y Cantón');
                        Swal.fire({
                            target: document.getElementById('ModalModificarEntidad'),
                            icon: 'error',
                            title: 'Error',
                            text: 'Si seleccionó que alcance de la Entidad es local, debe seleccionar País, Provincia y Cantón',
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false
                        });
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
                    success: async function(response) {
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
                            const similarMessage =
                                `Se encontraron registros similares:\n- ${response.similar.join('\n- ')}\n\n¿Está seguro de modificar esta entidad de todas formas?`;

                            const {
                                isConfirmed: confirmSimilar
                            } = await Swal.fire({
                                target: document.getElementById(
                                    'ModalModificarEntidad'),
                                title: 'Registros similares encontrados',
                                text: similarMessage,
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Modificar de todas formas',
                                cancelButtonText: 'Cancelar',
                                allowOutsideClick: false,
                            });

                            if (!confirmSimilar) {
                                return; // Detener la ejecución si el usuario cancela
                            }
                        }

                        // Proceder con la modificación
                        modificarEntidad();
                    },
                    error: function() {
                        alert('Error al verificar registros similares. Intente nuevamente.');
                    }
                });
            });

            function registrarEntidad() {
                var formData = new FormData(document.getElementById("ModalEntidad"));
                //$('#carga').show();
                Swal.fire({
                    target: document.getElementById('ModalEntidad'),
                    title: 'Enviando datos para registro de Entidad',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });

                $.ajax({
                    url: "{{ route('admin.registrar_entidad') }}",
                    type: "POST",
                    data: formData,
                    dataType: "json",
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function(res) {
                    Swal.close();
                    //alert(res.success); // Mostrar el mensaje de éxito en un alert
                    Swal.fire({
                        target: document.getElementById('ModalEntidad'),
                        icon: 'success', // Cambiado a 'success' para mostrar un mensaje positivo
                        title: 'Éxito',
                        text: res.success,
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    location.reload(); // Recargar la página
                }).fail(function(res) {
                    //$('#carga').hide();
                    Swal.close();

                    if (res.status === 422) {
                        let errors = res.responseJSON;
                        if (errors.error) {
                            //alert(errors.error);
                            Swal.fire({
                                target: document.getElementById('ModalEntidad'),
                                icon: 'error',
                                title: 'Error',
                                text: errors.error,
                                confirmButtonText: 'Aceptar',
                                allowOutsideClick: false
                            });
                        }
                    } else {
                        //alert("Ocurrió un error al registrar la entidad.");
                        Swal.fire({
                            target: document.getElementById('ModalEntidad'),
                            icon: 'error',
                            title: 'Error',
                            text: 'Ocurrió un error al registrar la entidad',
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false
                        });
                    }

                    console.log(res
                        .responseText); // Muestra el error completo en la consola para depuración
                });
            }

            function modificarEntidad() {
                var formData = new FormData(document.getElementById("ModalModificarEntidad"));
                //$('#carga').show();
                Swal.fire({
                    target: document.getElementById('ModalModificarEntidad'),
                    title: 'Enviando datos para la moificación de la Entidad',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });

                $.ajax({
                    url: "{{ route('admin.modificar_entidad') }}",
                    type: "POST",
                    data: formData,
                    dataType: "json",
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function(res) {
                    Swal.close();
                    //alert(res.success); // Mostrar el mensaje de éxito en un alert
                    Swal.fire({
                        target: document.getElementById('ModalModificarEntidad'),
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
                        let errors = res.responseJSON;
                        if (errors.error) {
                            //alert(errors.error);
                            Swal.fire({
                                target: document.getElementById('ModalModificarEntidad'),
                                icon: 'error',
                                title: 'Error',
                                text: errors.error,
                                confirmButtonText: 'Aceptar',
                                allowOutsideClick: false
                            });
                        }
                    } else {
                        //alert("Ocurrió un error al modificar la entidad.");
                        Swal.fire({
                            target: document.getElementById('ModalEntidad'),
                            icon: 'error',
                            title: 'Error',
                            text: 'Ocurrió un error al modificar la entidad',
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false
                        });
                    }

                    console.log(res
                        .responseText); // Muestra el error completo en la consola para depuración
                });
            }

            // Delegar el evento de clic al documento para asegurar que funcione con elementos dinámicos
            $(document).on('click', '.open-modal', function() {
                console.log('Botón clicado...');
                var button = $(this);
                var entidadId = button.data('id');

                console.log('Cargo ID:', entidadId);

                //$('#carga').show();
                Swal.fire({
                    title: 'Cargando datos de la Entidad',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });


                $.ajax({
                    url: '/administrador/entidad/detalle/' + entidadId,
                    method: 'GET',
                    success: function(response) {
                        entidad_selected = response;
                        console.log('Datos recibidos:', response);

                        var entidadId = $('#entidad_id');
                        var Entidad = $('#entidad_mod');
                        var Ruc = $('#ruc_mod');
                        var TipoEntidad = $('#tipo_entidad_mod');
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
                        TipoEntidad.val(response.id_tipo_entidad);
                        Alcance.val(response.alcance);
                        Direccion.val(response.direccion);
                        Telefono.val(response.telefono);
                        Representante.val(response.representante);
                        TelefonoRepresentante.val(response.telefono_representante);

                        if (response.id_pais != 0) {
                            // Asignar país y disparar cambio para cargar provincias
                            $('#pais_mod').val(response.id_pais).trigger('change');

                            // Cargar provincias y asignar provincia
                            cargarProvincias(response.id_pais).then(() => {
                                $('#provincia_mod').val(response.id_provincia).trigger(
                                    'change');

                                // Cargar cantones y asignar cantón
                                cargarCantones(response.id_pais, response.id_provincia)
                                    .then(() => {
                                        $('#canton_mod').val(response.id_canton)
                                            .trigger('change');
                                    });
                            });
                        } else {
                            $('#pais_mod, #provincia_mod, #canton_mod').prop('disabled', true);
                            $('#pais_mod').val('-1')
                                .change(); // Llamamos a .change() para disparar eventos asociados si los hay
                            $('#provincia_mod').val('-1').change();
                            $('#canton_mod').val('-1').change();
                        }

                        //$('#carga').hide();
                        Swal.close();
                        $('#ModalModificarEntidad').modal('show');
                    },
                    error: function(xhr, status, error) {
                        Swal.close();
                        console.error(xhr.responseText);
                    }
                });
            });

            $(document).on('click', '.delete-entidad', async function() {
                var button = $(this);
                var entidadId = button.data('id');

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
                        url: '/administrador/entidad/eliminar/' + entidadId,
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}' // Asegúrate de incluir el token CSRF
                        },
                        success: function(response) {
                            Swal.close();
                            //alert(res.success); // Mostrar el mensaje de éxito en un alert
                            Swal.fire({
                                icon: 'success', // Cambiado a 'success' para mostrar un mensaje positivo
                                title: 'Éxito',
                                text: 'Registro eliminado correctamente.',
                                confirmButtonText: 'Aceptar',
                                allowOutsideClick: false
                            });
                            location
                                .reload(); // O cualquier otra lógica para actualizar la interfaz
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            //alert('Hubo un problema al eliminar el Registro.');
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Hubo un problema al eliminar el Registro.',
                                confirmButtonText: 'Aceptar',
                                allowOutsideClick: false
                            });
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
                    data: {
                        id_pais: paisId
                    },
                    success: function(response) {
                        let provincias = response.provincias;
                        let $provinciaSelect = $('#provincia_mod');
                        $provinciaSelect.empty().append('<option value=-1>Seleccionar</option>');

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
                        $cantonSelect.empty().append('<option value=-1>Seleccionar</option>');

                        cantones.forEach(function(canton) {
                            $cantonSelect.append(
                                `<option value=${canton.id}>${canton.nombre}</option>`);
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
                        $parroquiaSelect.empty().append('<option value=-1>Seleccionar</option>');

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
                        '<option value=-1>Seleccionar</option>'); // Limpiar select de cantones
                    $('#parroquia').empty().append(
                        '<option value=-1>Seleccionar</option>'); // Limpiar select de parroquias
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
                        '<option value=-1>Seleccionar</option>'); // Limpiar select de parroquias
                }
            });

            $('#pais_mod').change(function() {
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
                            let $provinciaSelect = $('#provincia_mod');
                            let $cantonSelect = $('#canton_mod');
                            let $parroquiaSelect = $('#parroquia_mod');

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

            $('#provincia_mod').change(function() {
                let paisId = $('#pais_mod').val(); // ID del país seleccionado
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
                            let $cantonSelect = $('#canton_mod'); // Select de cantones
                            let $parroquiaSelect = $('#parroquia_mod'); // Select de parroquias

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
                    $('#canton_mod').empty().append(
                        '<option value=-1>Seleccionar</option>'); // Limpiar select de cantones
                    $('#parroquia_mod').empty().append(
                        '<option value=-1>Seleccionar</option>'); // Limpiar select de parroquias
                }
            });

            $('#canton_mod').change(function() {
                let paisId = $('#pais_mod').val(); // ID del país seleccionado
                let provinciaId = $('#provincia_mod').val(); // ID de la provincia seleccionada
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
                            let $parroquiaSelect = $('#parroquia_mod'); // Select de parroquias

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
                    $('#parroquia_mod').empty().append(
                        '<option value=-1>Seleccionar</option>'); // Limpiar select de parroquias
                }
            });

            $('#btn-more-info').on('click', function() {
                let entidadLogInsert = entidad_selected.insert;
                let entidadLogUpdate = entidad_selected.update;

                // Manejo del caso cuando entidadLogUpdate es vacío
                let lastItem = null;
                if (Array.isArray(entidadLogUpdate) && entidadLogUpdate.length > 0) {
                    lastItem = entidadLogUpdate[entidadLogUpdate.length - 1];
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
                const formattedCreatedAt = formatDate(entidadLogInsert.created_at);
                const formattedUpdatedAt = formatDate(lastItem?.created_at);

                // Mostrar el modal con SweetAlert2
                const swalInfo = Swal.fire({
                    target: document.getElementById('ModalModificarEntidad'),
                    title: 'Información adicional',
                    html: `
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h5><strong>Creación</strong></h5>
                                <p><strong>Usuario:</strong> ${entidadLogInsert.user.name}</p>
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
