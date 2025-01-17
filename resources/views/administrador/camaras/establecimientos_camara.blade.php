@extends('dashboard')

@section('pagename')
    Establecimientos por Cámara
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
            <div class="col-lg-12 text-end">
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
                        <h2 class="card-title">Gestión de Establecimientos por Cámara</h2>
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
                                        <select id="camara" name="camara" data-plugin-selectTwo class="form-control populate"
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
                                        <h2 class="card-title">Listado de Establecimientos Registrados por Cámara</h2>
                                    </header>
                                    <div class="card-body overflow-x-auto max-w-full">
                                        <table class="table table-bordered table-striped mb-0 " id="dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Fecha de Inicio de Actividades</th>
                                                    <th>Secuencial</th>
                                                    <th>Nombre Comercial</th>
                                                    <th>Dirección</th>
                                                    <th>Correo</th>
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
        <form enctype="multipart/form-data" class="modal fade" id="ModalEstablecimiento" tabindex="-1"
            aria-labelledby="ModalEstablecimientoLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalEstablecimientoLabel"><b>Agregar un nuevo Establecimiento</b></h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p><strong>Cámara Seleccionada:</strong> <span id="nombreCamaraSeleccionada"></span></p>

                                    <!-- Campo oculto para enviar el valor de la cámara -->
                                    <input type="hidden" id="camaraHidden" name="camaraHidden" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    Secuencial
                                </div>
                                <div class="col-md-4">
                                    <select id="num_establecimiento" name="num_establecimiento" class="form-control populate">
                                        <option value=-1>Seleccionar</option>
                                        @foreach ($num_establecimiento as $id => $nombre)
                                            <option value={{ $id }}>
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
                                    Parroquia
                                </div>
                                <div class="col-md-4">
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
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    Nombre Comercial
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="nombre_comercial" id="nombre_comercial"
                                        placeholder="Nombre Comercial">
                                </div>
                                <div class="col-md-2">
                                    Fecha de inicio de actividades
                                </div>
                                <div class="col-md-4">
                                    <input type="text" data-plugin-datepicker class="form-control"
                                        name="fecha_inicio_actividades" id="fecha_inicio_actividades"
                                        placeholder="Fecha de Inicio de Actividades">
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    Calle
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="calle" id="calle"
                                        placeholder="Calle">
                                </div>
                                <div class="col-md-2">
                                    Manzana
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="manzana" id="manzana"
                                        placeholder="Manzana">
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    Número
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="numero" id="numero"
                                        placeholder="Número">
                                </div>
                                <div class="col-md-2">
                                    Intersección
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="interseccion" id="interseccion"
                                        placeholder="Intersección">
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    Referencia Ubicación
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="referencia" id="referencia"
                                        placeholder="Referencia Ubicación">
                                </div>
                                <div class="col-md-2">
                                    Correo
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="correo" id="correo"
                                        placeholder="Correo Representante Legal">
                                    <div id="error-correo" style="color: red; display: none;">Ingrese un correo
                                        electrónico válido.</div>
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    Teléfono 1
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="telefono1" id="telefono1"
                                        placeholder="Teléfono">
                                </div>
                                <div class="col-md-2">
                                    Teléfono 2
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="telefono2" id="telefono2"
                                        placeholder="Teléfono">
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    Teléfono 3
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="telefono3" id="telefono3"
                                        placeholder="Teléfono">
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="card-title">Actividades Economicas</h2>
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <select name="actividad_economica[]" id="actividad_economica" multiple
                                        data-plugin-selectTwo>
                                    </select>
                                    <input type="hidden" id="hiddenSelectedItems"
                                        name="actividad_economica_seleccionados">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    &nbsp;
                                </div>
                                <div class="col-md-4">
                                    &nbsp;
                                </div>
                                <div class="col-md-2">
                                    &nbsp;
                                </div>
                                <div class="container-selected-items">
                                    <div id="selectedItemsContainer" class="selected-items">
                                        <strong>Seleccionados:</strong>
                                        <div id="selectedList"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> -->
                        <button type="button" class="btn btn-secondary cerrar-modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-establecimiento">Guardar</button>
                    </div>
                </div>
            </div>
        </form>


        <form enctype="multipart/form-data" class="modal fade" id="ModalModificarEstablecimiento" tabindex="-1"
            aria-labelledby="ModalModificarEstablecimientoLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalModificarEstablecimientoLabel"><b>Modificar Establecimiento</b>
                        </h5>
                        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close"> </button> -->
                        <button type="button" class="btn btn-warning" id="btn-more-info">
                            <i class="fas fa-info"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p><strong>Cámara Seleccionada:</strong> <span id="nombreCamaraSeleccionadaMod"></span>
                                    </p>
                                    <!-- Campo oculto para enviar el valor de la cámara -->
                                    <input type="hidden" id="camaraHiddenMod" name="camaraHiddenMod" value="">
                                    <input type="hidden" id="establecimiento_id" name="establecimiento_id"
                                        value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    Secuencial
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="secuencial_mod"
                                    id="secuencial_mod" placeholder="Secuencial" disabled>
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
                                    Parroquia
                                </div>
                                <div class="col-md-4">
                                    <select id="parroquia_mod" name="parroquia_mod" class="form-control populate">
                                        <option value=-1>Seleccionar</option>
                                        @foreach ($parroquias as $id => $nombre)
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
                                    Nombre Comercial
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="nombre_comercial_mod"
                                        id="nombre_comercial_mod" placeholder="Nombre Comercial">
                                </div>
                                <div class="col-md-2">
                                    Fecha de inicio de actividades
                                </div>
                                <div class="col-md-4">
                                    <input type="text" data-plugin-datepicker class="form-control"
                                        name="fecha_inicio_actividades_mod" id="fecha_inicio_actividades_mod"
                                        placeholder="Fecha de Inicio de Actividades">
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    Calle
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="calle_mod" id="calle_mod"
                                        placeholder="Calle">
                                </div>
                                <div class="col-md-2">
                                    Manzana
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="manzana_mod" id="manzana_mod"
                                        placeholder="Manzana">
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    Número
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="numero_mod" id="numero_mod"
                                        placeholder="Número">
                                </div>
                                <div class="col-md-2">
                                    Intersección
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="interseccion_mod"
                                        id="interseccion_mod" placeholder="Intersección">
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    Referencia Ubicación
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="referencia_mod" id="referencia_mod"
                                        placeholder="Referencia Ubicación">
                                </div>
                                <div class="col-md-2">
                                    Correo
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="correo_mod" id="correo_mod"
                                        placeholder="Correo Representante Legal">
                                    <div id="error-correo-mod" style="color: red; display: none;">Ingrese un correo
                                        electrónico válido.</div>
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    Teléfono 1
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="telefono1_mod" id="telefono1_mod"
                                        placeholder="Teléfono">
                                </div>
                                <div class="col-md-2">
                                    Teléfono 2
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="telefono2_mod" id="telefono2_mod"
                                        placeholder="Teléfono">
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    Teléfono 3
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="telefono3_mod" id="telefono3_mod"
                                        placeholder="Teléfono">
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="card-title">Actividades Economicas</h2>
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <select name="actividad_economica_mod" id="actividad_economica_mod" multiple
                                        data-plugin-selectTwo>
                                    </select>
                                    <input type="hidden" id="hiddenSelectedItemsMod"
                                        name="actividad_economica_seleccionados_mod">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    &nbsp;
                                </div>
                                <div class="col-md-4">
                                    &nbsp;
                                </div>
                                <div class="col-md-2">
                                    &nbsp;
                                </div>
                                <div class="container-selected-items">
                                    <div id="selectedItemsContainer_mod" class="selected-items">
                                        <strong>Seleccionados:</strong>
                                        <div id="selectedList_mod"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="btn-close"
                            data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-modificar-camara">Guardar Cambios</button>
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
            let actividadesEconomicas = @json($actividadesEconomicas);
            let camaras = @json($camaras);
            let actividadesDisponibles = null;
            if (!@json($isAdmin)) {
                let selectedCamera = $('#camara').val();
                let filtered = camaras.find(function(camara) {
                    return camara.id == selectedCamera;
                });
                let filteredActividades = filtered.datos_tributarios.actividades_economicas;
                filteredActividades = JSON.parse(filteredActividades);
                let actividades = Object.keys(actividadesEconomicas)
                    .filter(function(key) {
                        return filteredActividades.some(function(activity) {
                            return activity == parseInt(key);
                        });
                    })
                    .map(function(key) {
                        return {
                            id: key,
                            descripcion: actividadesEconomicas[key]
                        };
                    });
                actividadesDisponibles = actividades;

                $('#actividad_economica').empty();
                $('#actividad_economica_mod').empty();
                actividadesDisponibles.forEach(function(actividad) {
                    $('#actividad_economica').append(
                        `<option value=${actividad.id}>${actividad.descripcion}</option>`
                    );
                    $('#actividad_economica_mod').append(
                        `<option value=${actividad.id}>${actividad.descripcion}</option>`
                    );
                });
            }

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
                    url: "{{ route('admin.obtener_listado_establecimientos_camara') }}",
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
                        data: 'fecha_inicio_actividades',
                        width: '15%'
                    },
                    {
                        data: 'secuencial',
                        width: '10%'
                    },
                    {
                        data: 'nombre_comercial',
                        width: '20%'
                    },
                    {
                        data: 'direccion',
                        width: '20%'
                    },
                    {
                        data: 'correo',
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

            $('#abrirModal').click(function(e) {
                e.preventDefault(); // Evita el comportamiento predeterminado del botón

                // Verificar si se seleccionó una opción válida en el select
                var camaraSeleccionada = $('#camara').val();
                var nombreCamaraSeleccionada = $('#camara option:selected').text();

                if (camaraSeleccionada === '-1') {
                    //alert('Por favor, selecciona una Cámara para poder registrar un Establecimiento');
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Por favor, selecciona una Cámara para poder registrar un Establecimiento',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                } else {
                    // Mostrar el nombre de la cámara seleccionada en el modal
                    $('#nombreCamaraSeleccionada').text(nombreCamaraSeleccionada);

                    // Cargar el valor de la cámara en el campo oculto
                    $('#camaraHidden').val(camaraSeleccionada);

                    $('#ModalEstablecimiento').modal('show');
                }
            });

            // Cerrar el modal manualmente
            $('.cerrar-modal').click(function() {
                $('#ModalEstablecimiento').modal('hide'); // Cerrar el modal
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

                let filtered = camaras.find(function(camara) {
                    return camara.id == selectedCamera;
                });
                let filteredActividades = filtered.datos_tributarios.actividades_economicas;
                filteredActividades = JSON.parse(filteredActividades);
                let actividades = Object.keys(actividadesEconomicas)
                    .filter(function(key) {
                        return filteredActividades.some(function(activity) {
                            return activity == parseInt(key);
                        });
                    })
                    .map(function(key) {
                        return {
                            id: key,
                            descripcion: actividadesEconomicas[key]
                        };
                    });
                actividadesDisponibles = actividades;

                $('#actividad_economica').empty();
                $('#actividad_economica_mod').empty();
                actividades.forEach(function(actividad) {
                    $('#actividad_economica').append(
                        `<option value=${actividad.id}>${actividad.descripcion}</option>`
                    );
                    $('#actividad_economica_mod').append(
                        `<option value=${actividad.id}>${actividad.descripcion}</option>`
                    );
                });
            });

            // Inicializar Select2 con búsqueda habilitada
            // Inicializar Select2
            // Inicializar Select2
            $('#actividad_economica').select2({
                placeholder: "Selecciona una o más opciones",
                width: '100%',
                allowClear: true
            });

            function syncHiddenInput() {
                $('#hiddenSelectedItems').val(selectedItems.join(',')); // Actualizar el campo oculto
            }

            let selectedItems = [];

            // Manejar selección de elementos
            $('#actividad_economica').on('select2:select', function(e) {
                const selectedId = parseInt(e.params.data.id); // Convertir a cadena
                const selectedText = e.params.data.text;
                if (selectedItems.length >= 6) {
                    Swal.fire({
                        target: document.getElementById('ModalEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'No puedes seleccionar más de 6 actividades económicas.'
                    });
                    $(this).val(null).trigger('change'); // Resetear el dropdown
                    return;
                }
                if (!selectedItems.includes(selectedId)) {
                    selectedItems.push(selectedId); // Agregar al array como cadena
                    $('#selectedList').append(`
                <span class="badge bg-primary me-2 selected-item" data-id="${selectedId}">
                    ${selectedText} <span class="remove-item" style="cursor: pointer;">&times;</span>
                </span>
            `);
                    syncHiddenInput(); // Sincronizar el campo oculto
                }

                $(this).val(null).trigger('change'); // Resetear el dropdown
            });

            // Manejar eliminación de elementos seleccionados (badge)
            $('#selectedList').on('click', '.remove-item', function() {
                const badge = $(this).closest('.selected-item');
                const id = parseInt(badge.data('id')); // Convertir a cadena

                // Eliminar el ID del array
                selectedItems = selectedItems.filter(item => item !== id);

                // Eliminar visualmente el badge
                badge.remove();

                // Restaurar la opción en el dropdown
                const optionElement = $(`#actividad_economica option[value=${id}]`);
                optionElement.prop('disabled', false).prop('selected', false);

                syncHiddenInput(); // Sincronizar el campo oculto
            });

            // Sincronizar al quitar desde el dropdown
            $('#actividad_economica').on('select2:unselect', function(e) {
                const unselectedId = parseInt(e.params.data.id); // Convertir a cadena

                // Eliminar visualmente el badge
                $(`#selectedList .selected-item[data-id="${unselectedId}"]`).remove();

                // Eliminar el ID del array
                selectedItems = selectedItems.filter(item => item !== unselectedId);

                syncHiddenInput(); // Sincronizar el campo oculto
            });

            $('#actividad_economica_mod').select2({
                placeholder: "Selecciona una o más opciones",
                width: '100%',
                allowClear: true
            });

            function syncHiddenInputMod() {
                $('#hiddenSelectedItemsMod').val(selectedItemsMod.join(',')); // Actualizar el campo oculto
            }

            let selectedItemsMod = [];

            // Manejar selección de elementos
            $('#actividad_economica_mod').on('select2:select', function(e) {
                const selectedId = parseInt(e.params.data.id); // Convertir a cadena
                const selectedText = e.params.data.text;
                if (selectedItemsMod.length >= 6) {
                    Swal.fire({
                        target: document.getElementById('ModalModificarEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'No puedes seleccionar más de 6 actividades económicas.'
                    });
                    $(this).val(null).trigger('change'); // Resetear el dropdown
                    return;
                }
                if (!selectedItemsMod.includes(selectedId)) {
                    selectedItemsMod.push(selectedId); // Agregar el ID al array
                    $('#selectedList_mod').append(`
                <span class="badge bg-primary me-2 selected-item" data-id="${selectedId}">
                    ${selectedText} <span class="remove-item" style="cursor: pointer;">&times;</span>
                </span>
            `);

                    syncHiddenInputMod(); // Sincronizar el campo oculto
                }

                $(this).val(null).trigger('change'); // Resetear el dropdown
            });

            // Manejar eliminación de elementos seleccionados (badge)
            $('#selectedList_mod').on('click', '.remove-item', function() {
                const badge = $(this).closest('.selected-item');
                const id = parseInt(badge.data('id')); // Convertir a cadena

                // Eliminar el ID del array
                selectedItemsMod = selectedItemsMod.filter(item => item !== id);
                // Eliminar visualmente el badge
                badge.remove();

                // Restaurar la opción en el dropdown
                const optionElement = $(`#actividad_economica_mod option[value=${id}]`);
                optionElement.prop('disabled', false).prop('selected', false);

                syncHiddenInputMod(); // Sincronizar el campo oculto
            });

            // Sincronizar al quitar desde el dropdown
            $('#actividad_economica_mod').on('select2:unselect', function(e) {
                const unselectedId = parseInt(e.params.data.id); // Convertir a cadena

                // Eliminar visualmente el badge
                $(`#selectedList_mod .selected-item[data-id="${unselectedId}"]`).remove();

                // Eliminar el ID del array
                selectedItemsMod = selectedItemsMod.filter(item => item !== unselectedId);

                syncHiddenInputMod(); // Sincronizar el campo oculto
            });


            $('#ModalEstablecimiento').on('show.bs.modal', function() {
                // Reiniciar el array de ítems seleccionados
                selectedItems = [];

                // Limpiar lista de badges y el campo oculto
                $('#selectedList').empty();
                $('#hiddenSelectedItems').val('');

                // Limpiar completamente el select, establecer en blanco
                $('#actividad_economica').val([]).trigger('change'); // Para select2 u otros plugins
                $('#actividad_economica option:selected').prop('selected', false); // Fuerza la deselección
            });

            $('#ModalEstablecimiento').on('hidden.bs.modal', function() {
                selectedItems = [];

                // Limpiar lista de badges y el campo oculto
                $('#selectedList').empty();
                $('#hiddenSelectedItems').val('');

                // Limpiar completamente el select, establecer en blanco
                $('#actividad_economica').val([]).trigger('change'); // Para select2 u otros plugins
                $('#actividad_economica option:selected').prop('selected', false); // Fuerza la deselección
            });


            //Manejo de Fechas
            // Función para validar el formato dd/mm/yyyy
            function esFechaValida(fecha) {
                // Expresión regular para validar el formato dd/mm/yyyy
                var regex = /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/;

                if (!regex.test(fecha)) {
                    return false; // No cumple con el formato
                }

                // Validación adicional para asegurar que la fecha sea válida en el calendario
                var partes = fecha.split('/'); // Divide la fecha por '/'
                var dia = parseInt(partes[0], 10);
                var mes = parseInt(partes[1], 10) - 1; // Mes en JavaScript es 0-indexado
                var anio = parseInt(partes[2], 10);

                var fechaObj = new Date(anio, mes, dia);

                return (
                    fechaObj.getDate() === dia &&
                    fechaObj.getMonth() === mes &&
                    fechaObj.getFullYear() === anio
                );
            }

            // Evento para validar la fecha al salir del campo
            $('#fecha_inicio_actividades').on('blur', function() {
                var fecha = $(this).val();

                if (fecha && !esFechaValida(fecha)) {
                    alert('Por favor, ingrese una fecha válida en el formato dd/mm/yyyy.');
                    $(this).val(''); // Limpia el campo de entrada

                    // Retrasa el enfoque al campo para evitar el bucle infinito
                    setTimeout(() => {
                        $(this).focus();
                    }, 0);
                }
            });

            $("#correo").on("input", function() {
                $(this).val($(this).val().toLowerCase());
                var correo = $(this).val();
                var regexCorreo =
                    /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; // Regex para correo válido
                if (regexCorreo.test(correo)) { // Si es un correo válido
                    $("#error-correo").hide(); // Ocultar error
                } else {
                    $("#error-correo").show(); // Mostrar error
                }
            });

            // Evento para validar la fecha al salir del campo
            $('#fecha_inicio_actividades_mod').on('blur', function() {
                var fecha = $(this).val();

                if (fecha && !esFechaValida(fecha)) {
                    alert('Por favor, ingrese una fecha válida en el formato dd/mm/yyyy.');
                    $(this).val(''); // Limpia el campo de entrada

                    // Retrasa el enfoque al campo para evitar el bucle infinito
                    setTimeout(() => {
                        $(this).focus();
                    }, 0);
                }
            });

            $("#correo_mod").on("input", function() {
                $(this).val($(this).val().toLowerCase());
                var correo = $(this).val();
                var regexCorreo =
                    /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; // Regex para correo válido
                if (regexCorreo.test(correo)) { // Si es un correo válido
                    $("#error-correo-mod").hide(); // Ocultar error
                } else {
                    $("#error-correo-mod").show(); // Mostrar error
                }
            });

            //Manejo de Uppercase
            $('#nombre_comercial').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            $('#calle').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            $('#manzana').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            $('#numero').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            $('#interseccion').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            $('#referencia').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            /*$('#telefono1').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });*/

            $('#telefono1').on('input', function() {
                let value = $(this).val();
                // Eliminar todos los caracteres no numéricos excepto el guion
                value = value.replace(/[^0-9]/g, '');
                
                // Limitar el campo a un máximo de 11 caracteres (10 dígitos + 1 guion)
                if (value.length > 11) {
                    value = value.slice(0, 11);
                }
                $(this).val(value);
            });

            /*$('#telefono2').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });*/

            $('#telefono2').on('input', function() {
                let value = $(this).val();
                // Eliminar todos los caracteres no numéricos excepto el guion
                value = value.replace(/[^0-9]/g, '');
                
                // Limitar el campo a un máximo de 11 caracteres (10 dígitos + 1 guion)
                if (value.length > 11) {
                    value = value.slice(0, 11);
                }
                $(this).val(value);
            });

            /*$('#telefono3').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });*/

            $('#telefono3').on('input', function() {
                let value = $(this).val();
                // Eliminar todos los caracteres no numéricos excepto el guion
                value = value.replace(/[^0-9]/g, '');
                
                // Limitar el campo a un máximo de 11 caracteres (10 dígitos + 1 guion)
                if (value.length > 11) {
                    value = value.slice(0, 11);
                }
                $(this).val(value);
            });

            //Manejo de Uppercase
            $('#nombre_comercial_mod').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            $('#calle_mod').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            $('#manzana_mod').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            $('#numero_mod').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            $('#interseccion_mod').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            $('#referencia_mod').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });

            /*$('#telefono1_mod').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });*/

            $('#telefono1_mod').on('input', function() {
                let value = $(this).val();
                // Eliminar todos los caracteres no numéricos excepto el guion
                value = value.replace(/[^0-9]/g, '');
                
                // Limitar el campo a un máximo de 11 caracteres (10 dígitos + 1 guion)
                if (value.length > 11) {
                    value = value.slice(0, 11);
                }
                $(this).val(value);
            });

            /*$('#telefono2_mod').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });*/

            $('#telefono2_mod').on('input', function() {
                let value = $(this).val();
                // Eliminar todos los caracteres no numéricos excepto el guion
                value = value.replace(/[^0-9]/g, '');
                
                // Limitar el campo a un máximo de 11 caracteres (10 dígitos + 1 guion)
                if (value.length > 11) {
                    value = value.slice(0, 11);
                }
                $(this).val(value);
            });

            /*$('#telefono3_mod').on('input', function() {
                // Convierte el valor del campo a mayúsculas
                $(this).val($(this).val().toUpperCase());
            });*/

            $('#telefono3_mod').on('input', function() {
                let value = $(this).val();
                // Eliminar todos los caracteres no numéricos excepto el guion
                value = value.replace(/[^0-9]/g, '');
                
                // Limitar el campo a un máximo de 11 caracteres (10 dígitos + 1 guion)
                if (value.length > 11) {
                    value = value.slice(0, 11);
                }
                $(this).val(value);
            }); 

            $("#btn-register-establecimiento").click(async function() {

                //alert($('#hiddenSelectedItems').val());
                //return; 

                if ($('#nombre_comercial').val() == "") {
                    //alert('Debe ingresar el Nombre Comercial');
                    await Swal.fire({
                        target: document.getElementById('ModalEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar el Nombre Comercial',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#nombre_comercial').focus();
                    return;
                }

                if ($('#fecha_inicio_actividades').val() == "") {
                    //alert('Debe ingresar la Fecha de inicio de actividades del Establecimiento');
                    await Swal.fire({
                        target: document.getElementById('ModalEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar la Fecha de inicio de actividades del Establecimiento',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#fecha_inicio_actividades').focus();
                    return;
                }

                if ($('#pais').val() == "-1") {
                    //alert('Debe seleccionar el País');
                    await Swal.fire({
                        target: document.getElementById('ModalEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe seleccionar el País',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#pais').focus();
                    return;
                }

                if ($('#provincia').val() == "-1") {
                    //alert('Debe seleccionar la Provincia');
                    await Swal.fire({
                        target: document.getElementById('ModalEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe seleccionar la Provincia',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#provincia').focus();
                    return;
                }

                if ($('#canton').val() == "-1") {
                    //alert('Debe seleccionar el Cantón');
                    await Swal.fire({
                        target: document.getElementById('ModalEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe seleccionar el Cantón',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#canton').focus();
                    return;
                }

                if ($('#parroquia').val() == "-1") {
                    //alert('Debe seleccionar la Parroquia');
                    await Swal.fire({
                        target: document.getElementById('ModalEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe seleccionar la Parroquia',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#parroquia').focus();
                    return;
                }

                if ($('#calle').val() == "") {
                    //alert('Debe ingresar la Calle');
                    await Swal.fire({
                        target: document.getElementById('ModalEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar la Calle',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#calle').focus();
                    return;
                }

                if ($('#manzana').val() == "") {
                    //alert('Debe ingresar la Manzana');
                    await Swal.fire({
                        target: document.getElementById('ModalEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar la Manzana',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#manzana').focus();
                    return;
                }

                if ($('#numero').val() == "") {
                    //alert('Debe ingresar el Número');
                    await Swal.fire({
                        target: document.getElementById('ModalEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar el Número',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#numero').focus();
                    return;
                }

                if ($('#interseccion').val() == "") {
                    //alert('Debe ingresar la Intersección');
                    await Swal.fire({
                        target: document.getElementById('ModalEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar la Intersección',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#interseccion').focus();
                    return;
                }

                if ($('#referencia').val() == "") {
                    //alert('Debe ingresar la Referencia');
                    await Swal.fire({
                        target: document.getElementById('ModalEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar la Referencia',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#referencia').focus();
                    return;
                }

                if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test($('#correo').val())) {
                    /*$("#error-correo").show();
                    isValid = false;*/
                    $("#error-correo").show();
                    //alert('Debe registrar un correo con formato válido');
                    await Swal.fire({
                        target: document.getElementById('ModalEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe registrar un correo con formato válido',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#correo').focus();
                    return;
                }

                if (($('#telefono1').val() == "") && ($('#telefono2').val() == "") && ($('#telefono3')
                        .val() == "")) {
                    //alert('Debe ingresar al menos 1 número de Teléfono');
                    await Swal.fire({
                        target: document.getElementById('ModalEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar al menos 1 número de Teléfono',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#telefono1').focus();
                    return;
                }

                if ($('#hiddenSelectedItems').val() == "") {
                    //alert('Debe seleccionar al menos una Actividad Económica');
                    await Swal.fire({
                        target: document.getElementById('ModalEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe seleccionar al menos una Actividad Económica',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    return;
                }

                var formData = new FormData(document.getElementById("ModalEstablecimiento"));
                //$('#carga').show();
                Swal.fire({
                    target: document.getElementById('ModalEstablecimiento'),
                    title: 'Enviando datos para registro del Establecimiento',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });

                $.ajax({
                    url: "{{ route('admin.registrar_establecimiento') }}",
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
                        target: document.getElementById('ModalEstablecimiento'),
                        icon: 'success', // Cambiado a 'success' para mostrar un mensaje positivo
                        title: 'Éxito',
                        text: res.success,
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    location.reload(); // Recargar la página
                }).fail(function(res) {
                    if (res.status === 400) { // Manejo del error 400 (clave duplicada)
                        let errors = res.responseJSON;
                        if (errors.error) {
                            Swal.fire({
                                target: document.getElementById('ModalEstablecimiento'),
                                icon: 'error',
                                title: 'Error',
                                text: errors.error, // Mostrar el mensaje enviado desde el servidor
                                confirmButtonText: 'Aceptar',
                                allowOutsideClick: false,
                                showConfirmButton: true
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    console.error('Error:', errors.error);
                                }
                            });
                            return;
                        }
                    } else if (res.status === 422) {
                        // Manejar errores de validación (si existen)
                        let errors = res.responseJSON;
                        if (errors.error) {
                            Swal.fire({
                                target: document.getElementById('ModalEstablecimiento'),
                                icon: 'error',
                                title: 'Error',
                                text: errors.error,
                                confirmButtonText: 'Aceptar',
                                allowOutsideClick: false,
                                showConfirmButton: true
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    console.error('Error:', errors);
                                }
                            });
                            return;
                        }
                    } else {
                        // Mostrar mensaje genérico si no se recibió un error específico
                        Swal.fire({
                            target: document.getElementById('ModalEstablecimiento'),
                            icon: 'error',
                            title: 'Error',
                            text: 'Ocurrió un error al registrar el Establecimiento.',
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false,
                            showConfirmButton: true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                console.error('Error:', res.responseText);
                            }
                        }); 
                    }
                });
            });

            function convertirFecha(fechaISO) {
                if (!fechaISO) return ''; // Maneja casos nulos o indefinidos
                const partes = fechaISO.split('-'); // Divide por guión
                return `${partes[2]}/${partes[1]}/${partes[0]}`; // Formato DD/MM/YYYY
            }

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

            $('#fecha_inicio_actividades').datepicker('destroy').datepicker({
                format: 'dd/mm/yyyy', // Define el formato de fecha
                autoclose: true, // Cierra automáticamente al seleccionar
                todayHighlight: true, // Resalta la fecha actual
                language: 'es' // Asegúrate de establecer el idioma correcto
            });

            $('#fecha_inicio_actividades_mod').datepicker('destroy').datepicker({
                format: 'dd/mm/yyyy', // Define el formato de fecha
                autoclose: true, // Cierra automáticamente al seleccionar
                todayHighlight: true, // Resalta la fecha actual
                language: 'es' // Asegúrate de establecer el idioma correcto
            });



            // Delegar el evento de clic al documento para asegurar que funcione con elementos dinámicos
            $(document).on('click', '.open-modal', function() {
                var button = $(this);
                var establecimientoId = button.data('id');
                //let establecimiento_camara_selected = $('#camaraHiddenMod').val(); 

                //$('#carga').show();
                Swal.fire({
                    title: 'Cargando',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });

                // **LIMPIAR EL SELECT Y EL INPUT HIDDEN ANTES DE CARGAR DATOS**
                selectedItemsMod = []; // Vaciar el array de actividades económicas seleccionadas
                $('#selectedList_mod').empty(); // Vaciar la lista de badges visuales
                $('#actividad_economica_mod').val(null).trigger(
                    'change'); // Limpiar y deseleccionar el select2
                $('#hiddenSelectedItemsMod').val(''); // Limpiar el input hidden


                $.ajax({
                    url: '/administrador/establecimiento/detalle/' + establecimientoId,
                    method: 'GET',
                    success: function(response) {
                        establecimiento_camara_selected = response;

                        var establecimientoId = $('#establecimiento_id');
                        var camaraId = $('#camaraHiddenMod');
                        var FechaInicioACtividades = $('#fecha_inicio_actividades_mod');

                        var Secuencial = $('#secuencial_mod');
                        var Pais = $('#pais_mod');
                        var Provincia = $('#provincia_mod');
                        var Canton = $('#canton_mod');
                        var Parroquia = $('#parroquia_mod');
                        var NombreComercial = $('#nombre_comercial_mod');
                        var Calle = $('#calle_mod');
                        var Manzana = $('#manzana_mod');
                        var Numero = $('#numero_mod');
                        var Interseccion = $('#interseccion_mod');
                        var Referencia = $('#referencia_mod');
                        var Correo = $('#correo_mod');
                        var Telefono1 = $('#telefono1_mod');
                        var Telefono2 = $('#telefono2_mod');
                        var Telefono3 = $('#telefono3_mod');
                        var ActividadEconomica = $('#actividad_economica_mod');
                        var HiddenSelectedItemsMod = $('#hiddenSelectedItemsMod');

                        establecimientoId.val(response.id);
                        Secuencial.val(response.secuencial);
                        camaraId.val(response.id_camara);
                        FechaInicioACtividades.val(convertirFecha(response.fecha_inicio_actividades));
                        Pais.val(response.id_pais);
                        Provincia.val(response.id_provincia);
                        Canton.val(response.id_canton);
                        Parroquia.val(response.id_parroquia);

                        $('#nombreCamaraSeleccionadaMod').text(response.camara.razon_social);

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

                                    // Cargar parroquias y asignar parroquia
                                    cargarParroquias(
                                        response.id_pais,
                                        response.id_provincia,
                                        response.id_canton
                                    ).then(() => {
                                        $('#parroquia_mod').val(response
                                            .id_parroquia);
                                    });
                                });
                        });

                        NombreComercial.val(response.nombre_comercial);
                        Calle.val(response.calle);
                        Manzana.val(response.manzana);
                        Numero.val(response.numero);
                        Interseccion.val(response.interseccion);
                        Referencia.val(response.referencia);
                        Correo.val(response.correo.toLowerCase());
                        Telefono1.val(response.telefono1);
                        Telefono2.val(response.telefono2);
                        Telefono3.val(response.telefono3);

                        // Limpia la lista visual y el array
                        selectedItemsMod = [];
                        $('#selectedList_mod').empty();


                        // Verifica si response.dato_tributario y response.dato_tributario.actividades_economicas tienen valores
                        if (response.actividades_economicas) {
                            // Decodifica el JSON si es necesario
                            let actividadesEstablecimiento = response.actividades_economicas;

                            // Verifica si es un string y necesita ser decodificado
                            if (typeof actividadesEstablecimiento === 'string') {
                                try {
                                    actividadesEstablecimiento = JSON.parse(
                                        actividadesEstablecimiento);
                                } catch (error) {
                                    console.error(
                                        "Error al decodificar actividades_economicas:",
                                        error);
                                    actividadesEstablecimiento = [];
                                }
                            }

                            // Asegúrate de que ahora sea un array
                            if (Array.isArray(actividadesEstablecimiento) &&
                                actividadesEstablecimiento
                                .length > 0) {

                                actividadesEstablecimiento = actividadesEstablecimiento
                                    .filter(id => actividadesDisponibles.some(actividad =>
                                        parseInt(actividad.id) === parseInt(id)));
                                actividadesEstablecimiento.forEach(function(id) {
                                    id = parseInt(id);
                                    // Obtener el texto de la opción seleccionada
                                    var optionText = $(
                                        `#actividad_economica_mod option[value=${id}]`
                                    ).text();

                                    // Añadir ID al array de elementos seleccionados
                                    selectedItemsMod.push(id);

                                    // Añadir el badge visualmente en la lista
                                    $('#selectedList_mod').append(`
                                            <span class="badge bg-primary me-2 selected-item" data-id=${id}>
                                                ${optionText} <span class="remove-item" style="cursor: pointer;">&times;</span>
                                            </span>
                                        `);

                                    // Marcar la opción como seleccionada
                                    $(`#actividad_economica_mod option[value=${id}]`)
                                        .prop('selected', true);
                                });
                                // Actualiza el input oculto para sincronizar
                                syncHiddenInputMod();

                                // Activa Select2 y muestra los valores seleccionados
                                $('#actividad_economica_mod').val(null).trigger('change');
                            } else {
                                console.warn(
                                    "No se recibieron actividades económicas o el array está vacío."
                                );
                            }
                        } else {
                            console.warn(
                                "No se encontraron actividades económicas en dato_tributario."
                            );
                        }

                        //$('#carga').hide();
                        Swal.close();
                        $('#ModalModificarEstablecimiento').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Hubo un problema al cargar el Establecimiento.',
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false
                        });
                    }
                });
            });

            $('#btn-close').on('click', function() {
                // Aquí puedes añadir la lógica para enviar el formulario modificado
                $('#ModalModificarEstablecimiento').modal('hide'); // Cerrar el modal después de guardar
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


            $('#btn-modificar-camara').on('click', async function() {

                //alert($('#hiddenSelectedItemsMod').val());
                //return;

                if ($('#nombre_comercial_mod').val() == "") {
                    //alert('Debe ingresar el Nombre Comercial'); 
                    await Swal.fire({
                        target: document.getElementById('ModalModificarEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar el Nombre Comercial',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#nombre_comercial_mod').focus();
                    return;
                }

                if ($('#fecha_inicio_actividades_mod').val() == "") {
                    //alert('Debe ingresar la Fecha de inicio de actividades del Establecimiento');
                    await Swal.fire({
                        target: document.getElementById('ModalModificarEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar la Fecha de inicio de actividades del Establecimiento',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#fecha_inicio_actividades_mod').focus();
                    return;
                }

                if ($('#pais_mod').val() == "-1") {
                    //alert('Debe seleccionar el País');
                    await Swal.fire({
                        target: document.getElementById('ModalModificarEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe seleccionar el País',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#pais_mod').focus();
                    return;
                }

                if ($('#provincia_mod').val() == "-1") {
                    //alert('Debe seleccionar la Provincia');
                    //$('#provincia_mod').focus();
                    await Swal.fire({
                        target: document.getElementById('ModalModificarEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe seleccionar la Provincia',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    return;
                }

                if ($('#canton_mod').val() == "-1") {
                    //alert('Debe seleccionar el Cantón');
                    await Swal.fire({
                        target: document.getElementById('ModalModificarEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe seleccionar el Cantón',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#canton_mod').focus();
                    return;
                }

                if ($('#parroquia_mod').val() == "-1") {
                    //alert('Debe seleccionar la Parroquia');
                    await Swal.fire({
                        target: document.getElementById('ModalModificarEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe seleccionar la Parroquia',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#parroquia_mod').focus();
                    return;
                }

                if ($('#calle_mod').val() == "") {
                    //alert('Debe ingresar la Calle');
                    await Swal.fire({
                        target: document.getElementById('ModalModificarEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar la Calle',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#calle_mod').focus();
                    return;
                }

                if ($('#manzana_mod').val() == "") {
                    //alert('Debe ingresar la Manzana');
                    await Swal.fire({
                        target: document.getElementById('ModalModificarEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar la Manzana',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#manzana_mod').focus();
                    return;
                }

                if ($('#numero_mod').val() == "") {
                    //alert('Debe ingresar el Número');
                    await Swal.fire({
                        target: document.getElementById('ModalModificarEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar el Número',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#numero_mod').focus();
                    return;
                }

                if ($('#interseccion_mod').val() == "") {
                    //alert('Debe ingresar la Intersección');
                    await Swal.fire({
                        target: document.getElementById('ModalModificarEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar la Intersección',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#interseccion_mod').focus();
                    return;
                }

                if ($('#referencia_mod').val() == "") {
                    //alert('Debe ingresar la Referencia');
                    await Swal.fire({
                        target: document.getElementById('ModalModificarEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe ingresar la Referencia',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#referencia_mod').focus();
                    return;
                }

                if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test($('#correo_mod').val())) {
                    /*$("#error-correo").show();
                    isValid = false;*/
                    $("#error-correo-mod").show();
                    //alert('Debe registrar un correo con formato válido');
                    await Swal.fire({
                        target: document.getElementById('ModalModificarEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe registrar un correo con formato válido',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#correo_mod').focus();
                    return;
                }

                if (($('#telefono1_mod').val() == "") && ($('#telefono2_mod').val() == "") && ($(
                        '#telefono3_mod').val() == "")) {
                    //alert('Debe ingresar al menos 1 número de Teléfono');
                    await Swal.fire({
                        target: document.getElementById('ModalModificarEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe registrar un correo con formato válido',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#telefono1_mod').focus();
                    return;
                }

                if ($('#hiddenSelectedItemsMod').val() == "") {
                    //alert('Debe seleccionar al menos una Actividad Económica');
                    await Swal.fire({
                        target: document.getElementById('ModalModificarEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe seleccionar al menos una Actividad Económica',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    return;
                }

                //$('#carga').show();
                Swal.fire({
                    target: document.getElementById('ModalModificarEstablecimiento'),
                    title: 'Enviando datos para modificación de Establecimiento',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });

                // Aquí puedes añadir la lógica para enviar el formulario modificado
                var formData = new FormData(document.getElementById("ModalModificarEstablecimiento"));
                $.ajax({
                    url: "{{ route('admin.modificar_establecimiento') }}",
                    type: "post",
                    dataType: "html",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function(res) {
                    msg = JSON.parse(res).response.msg
                    //alert(msg);
                    //location.reload();

                    //alert(res.success); // Mostrar el mensaje de éxito en un alert
                    Swal.fire({
                        icon: 'success', // Cambiado a 'success' para mostrar un mensaje positivo
                        title: 'Éxito',
                        text: msg,
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    location.reload();
                    $('#ModalModificarEstablecimiento').modal(
                        'hide'); // Cerrar el modal después de guardar
                    //$('#carga').hide();
                }).fail(function(res) {
                    Swal.fire({
                        target: document.getElementById(
                            'ModalModificarEstablecimiento'),
                        icon: 'error',
                        title: 'Error',
                        text: res.responseText.error ||
                            'Hubo un problema al modificar el Establecimiento',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false,
                        showConfirmButton: true,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            console.error(res.responseText.error ||
                                'Hubo un problema al modificar el Establecimiento');
                        }
                    });
                    return;
                });
                //$('#carga').hide();
            });

            $(document).on('click', '.delete-establecimiento', async function() {
                var button = $(this);
                var establecimientoId = button.data('id');

                // Mostrar la confirmación antes de proceder con la eliminación
                //var confirmDelete = confirm('¿Está seguro de que desea eliminar este registro?');
                const {
                    confirmDelete
                } = await Swal.fire({
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

                if (confirmDelete) {
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
                        url: '/administrador/establecimiento/eliminar/' + establecimientoId,
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}' // Asegúrate de incluir el token CSRF
                        },
                        success: function(response) {
                            //alert('Registro eliminado correctamente.');
                            Swal.close();
                            //alert(res.success); // Mostrar el mensaje de éxito en un alert
                            Swal.fire({
                                icon: 'success', // Cambiado a 'success' para mostrar un mensaje positivo
                                title: 'Éxito',
                                text: 'Registro eliminado correctamente.',
                                confirmButtonText: 'Aceptar',
                                allowOutsideClick: false
                            });
                            location.reload();
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
                } else {
                    $('#provincia').empty().append(
                        '<option value=-1>Seleccionar</option>'); // Limpiar select de cantones
                    $('#canton').empty().append(
                        '<option value=-1>Seleccionar</option>'); // Limpiar select de cantones
                    $('#parroquia').empty().append(
                        '<option value=-1>Seleccionar</option>'); // Limpiar select de parroquias
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
                } else {
                    $('#provincia_mod').empty().append(
                        '<option value=-1>Seleccionar</option>'); // Limpiar select de cantones
                    $('#canton_mod').empty().append(
                        '<option value=-1>Seleccionar</option>'); // Limpiar select de cantones
                    $('#parroquia_mod').empty().append(
                        '<option value=-1>Seleccionar</option>'); // Limpiar select de parroquias
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
                let establecimientoCamaraLogInsert = establecimiento_camara_selected.insert;
                let establecimientoCamaraLogUpdate = establecimiento_camara_selected.update;

                // Manejo del caso cuando establecimientoCamaraLogUpdate es vacío
                let lastItem = null;
                if (Array.isArray(establecimientoCamaraLogUpdate) && establecimientoCamaraLogUpdate.length >
                    0) {
                    lastItem = establecimientoCamaraLogUpdate[establecimientoCamaraLogUpdate.length - 1];
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
                const formattedCreatedAt = formatDate(establecimientoCamaraLogInsert.created_at);
                const formattedUpdatedAt = formatDate(lastItem?.created_at);

                // Mostrar el modal con SweetAlert2
                const swalInfo = Swal.fire({
                    target: document.getElementById('ModalModificarEstablecimiento'),
                    title: 'Información adicional',
                    html: `
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h5><strong>Creación</strong></h5>
                                <p><strong>Usuario:</strong> ${establecimientoCamaraLogInsert.user.name}</p>
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
