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
                                        <h2 class="card-title">Listado de Socios Registrados</h2>
                                    </header>
                                    <div class="card-body overflow-x-auto max-w-full">
                                        <table class="table table-bordered table-striped mb-0" id="dataTable">
                                            <thead>
                                                <tr>
                                                    <th>FECHA DE INGRESO</th>
                                                    <th>CONSECUTIVO</th>
                                                    <th>IDEMNTIFICACIÓN</th>
                                                    <th>RAZÓN SOCIAL</th>
                                                    <th>TIPO DE PERSONERÍA</th>
                                                    <!--<th>ESTADO</th>-->
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
    <div class="container">
        <form enctype="multipart/form-data" class="modal fade" id="ModalSocio" tabindex="-1"
            aria-labelledby="ModalSocioLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalSocioLabel"></h5>
                        <button type="button" class="btn btn-warning" id="btn-more-info">
                            <i class="fas fa-info"></i>
                        </button>
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
                                        </ul>
                                        <div class="tab-content">
                                            <div id="datos_generales" class="tab-pane active">
                                                <div class="row mb-2">
                                                    <div class="col-md-6">  
                                                        <div id="image-container">
                                                            <a id="image-link" href="#" data-lightbox="example" target="_blank" style="display: none;">
                                                                <img id="image-preview" src="#" alt="Imagen reducida" style="max-width: 200px; height: auto; display: none;">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                         &nbsp;
                                                    </div>
                                                </div>
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
                                                    <div id="id_con_ruc" class="col-md-6 gap-1">
                                                        <label>
                                                            Identificación
                                                        </label>
                                                        <input type="text" class="form-control" name="identificacion"
                                                            id="identificacion" placeholder="Identificación" />
                                                        <div id="error_identificacion" style="color: red; display: none;">
                                                        </div>
                                                    </div>
                                                    <div id="id_sin_ruc" class="col-md-6 gap-1">
                                                        <label>
                                                            Tipo de Identificación
                                                        </label>
                                                        <select id="tipo_identificacion" name="tipo_identificacion"
                                                            class="form-control populate">
                                                            <option value=-1 selected>Seleccionar</option>
                                                            @foreach ($tipo_identificacion as $id => $descripcion)
                                                                <option value={{ $id }}>{{ $descripcion }}
                                                                </option>
                                                            @endForEach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-2" id="div_tipo_identificacion">
                                                    <div class="col-md-6 gap-1">
                                                        &nbsp;
                                                    </div>
                                                    <div class="col-md-6 gap-1">
                                                        <label>
                                                            Identificación
                                                        </label>
                                                        <input type="text" class="form-control" name="identificacion_sin_ruc"
                                                            id="identificacion_sin_ruc" placeholder="Identificación sin Ruc" />
                                                        <div id="error_identificacion_sin_ruc" style="color: red; display: none;">
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
                                                    <div id="sin_razon_social" class="row mb-2">
                                                        <div class="col-md-12 gap-1">
                                                            <label>
                                                                Nombre
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                name="razon_social_nombre" id="razon_social_nombre"
                                                                placeholder="Nombres y Apellidos" />
                                                        </div>
                                                    </div>
                                                    <div id="con_razon_social" class="row mb-2">
                                                        <div class="col-md-12 gap-1">
                                                            <label>
                                                                Razón Social
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                name="razon_social" id="razon_social"
                                                                placeholder="Razón Social (Nombres y Apellidos)" />
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
                                            </div>
                                            <div id="datos_tributarios" class="tab-pane">
                                                <div class="row mb-2">
                                                    <div class="col-md-6 gap-1">
                                                        <label>Estado SRI</label>
                                                        <select class="form-control populate" name="estado_sri"
                                                            id="estado_sri">
                                                            <option value=-1>Seleccionar</option>
                                                            <option value=1>ACTIVO</option>
                                                            <option value=0>INACTIVO</option>
                                                        </select>
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
                                                <div id="fechaconstitucion" style="display: none">
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
                                                </div>
                                                <div id="tributario_natural" style="display:none">
                                                    <div class="row mb-2">
                                                        <div class="col-md-6 gap-1">
                                                            <label>Fecha de Nacimiento</label>
                                                            <input type="text" data-plugin-datepicker
                                                                class="form-control" name="fecha_nacimiento"
                                                                id="fecha_nacimiento" placeholder="Fecha de Nacimiento">
                                                        </div>
                                                        <div class="col-md-6 gap-1">
                                                            <label>Años de Edad</label>
                                                            <input type="text" class="form-control" name="anios_edad"
                                                                id="anios_edad" placeholder="Años de Edad" disabled>
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
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        &nbsp;
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-md-12">
                                                        <h2
                                                            class="card-title
                                                            ">
                                                            Actividades Económicas</h2>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        &nbsp;
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12 gap-1">
                                                        <select name="actividad_economica[]" id="actividad_economica"
                                                            multiple data-plugin-selectTwo>
                                                            @foreach ($actividadesEconomicas as $id => $descripcion)
                                                                <option value={{ $id }}>
                                                                    {{ $descripcion }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <input type="hidden" id="hiddenSelectedItems"
                                                            name="hiddenSelectedItems">
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12 gap-1">
                                                        <div class="container-selected-items">
                                                            <div id="selectedItemsContainer" class="selected-items">
                                                                <strong>Seleccionados:</strong>
                                                                <div id="selectedList"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary cerrar-modal">Cerrar</button>&nbsp;
                            <button type="button" class="btn btn-primary" id="btn_register_socio">Guardar</button>&nbsp;
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
            $('#identificacion_sin_ruc').attr('maxlength', 15);

            var socioSelected = null;
            let socios = [];
            /**
             * DataTable - Initial Load of Socios
             */
            let loadingSwal = Swal.fire({
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
                        loadingSwal.close();
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: error.responseJSON?.message || "Error al cargar los datos.",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                console.error("Error al cargar los datos: ", error);
                            }
                        });
                        return;
                    },
                    complete: function(response) {
                        socios = response.responseJSON.data;
                        loadingSwal.close();
                    },
                },
                pageLength: 10,
                columns: [{
                        data: 'fecha_ingreso',
                        width: '10%'
                    },
                    {
                        data: 'consecutivo',
                        width: '3%'
                    },
                    {
                        data: 'identificacion',
                        width: '10%'
                    },
                    {
                        data: 'razon_social',
                        width: '25%'
                    },
                    {
                        data: 'tipo_personeria',
                        width: '12%'
                    },
                    /*{
                        data: 'estado',
                        width: '3%'
                    },*/
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

            $('#sin_razon_social').hide();
            $('#con_razon_social').hide();
            $('#id_con_ruc').hide();
            $('#id_sin_ruc').hide();
            $('#div_tipo_identificacion').hide();
            //$('#datos_tributarios').hide();  
            //$('a[href="#datos_tributarios"]').hide();
            $('#tab_item_tributario').hide();
            $('#datos_tributarios').removeClass('show active');


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
                $('#ModalSocioLabel').html('<b>Registro de Socio</b>');
                $('#btn-more-info').hide();
                $('#ModalSocio').find('#btn_update_socio').hide();
                $('#estado_sri').val(1);
                $('#estado_sri').prop('readonly', true);
                $('#ModalSocio').modal('show');
            });

            function toggleJuridico(active) {
    if (active) {
        // Mostrar solo los elementos relacionados con "jurídico"
        $('a[href="#datos_tributarios"]').show();
        //$('#datos_tributarios').show();

        $('#sin_razon_social').hide();
        $('#id_con_ruc').show();
        $('#id_sin_ruc').hide();
        $('#con_razon_social').show();
        $('#juridico').show();

        // Ocultar los elementos relacionados con "natural"
        $('#natural').hide();
        $('#tributario_natural').hide();
    } else {
        $('#juridico').hide();
    }
}

function toggleNaturalConRuc(active) {
    if (active) {
        // Mostrar solo los elementos relacionados con "natural con RUC"
        $('a[href="#datos_tributarios"]').show();
        //$('#datos_tributarios').show();

        $('#sin_razon_social').hide();
        $('#id_con_ruc').show();
        $('#id_sin_ruc').hide();
        $('#con_razon_social').show();
        $('#natural').show();
        $('#tributario_natural').show();

        // Ocultar los elementos relacionados con "jurídico"
        $('#juridico').hide();
    } else {
        $('#natural').hide();
    }
}

            function toggleNaturalSinRuc(active) {
                if (active) {  
                    // Ocultar el contenido del tab
                    //$('#datos_tributarios').hide(); 
                    // Ocultar el botón o enlace que activa el tab
                    $('a[href="#datos_tributarios"]').hide();
                    $('#datos_tributarios').hide();  

                    $('#sin_razon_social').show();
                    $('#id_con_ruc').hide();
                    $('#id_sin_ruc').show();
                    $('#con_razon_social').hide();
                    $('#juridico').hide();
                    $('#natural').hide();
                    $('#tributario_natural').hide();
                } else {
                    $('#natural').hide();
                }
            }

            // Event listener for onChange of select tipo_personeria
            /*$('#tipo_personeria').change(function() {
                $('a[href="#datos_tributarios"]').hide();
                $('#datos_tributarios').hide();  
                var tipoPersoneria = $(this).val();
                if (tipoPersoneria == 1) {
                    toggleNaturalSinRuc(true);
                    toggleJuridico(false);
                    toggleNaturalConRuc(false);
                    $('#identificacion').focus();
                }else if (tipoPersoneria == 2) {
                    $('a[href="#datos_tributarios"]').hide();
                    $('#datos_tributarios').hide();  
                    toggleNaturalSinRuc(false);
                    toggleJuridico(false);
                    toggleNaturalConRuc(true);
                    $('#identificacion').focus();
                }else if (tipoPersoneria == 3) {
                    $('a[href="#datos_tributarios"]').hide();
                    $('#datos_tributarios').hide();  
                    toggleNaturalSinRuc(false);
                    toggleJuridico(true);
                    toggleNaturalConRuc(false);
                    $('#identificacion').focus();
                }else{
                    toggleJuridico(false);
                    toggleNaturalConRuc(false);
                    toggleNaturalSinRuc(false);
                    $('#sin_razon_social').hide();
                    $('#con_razon_social').hide();
                    $('a[href="#datos_tributarios"]').hide();
                    $('#datos_tributarios').hide();  
                } 
            });*/

            $('#tipo_personeria333').change(function () {
                var tipoPersoneria = $(this).val();

                // Ocultar siempre los tabs y resets generales
                $('a[href="#datos_tributarios"], #datos_tributarios, #sin_razon_social, #con_razon_social').hide();

                // Manejando cada tipo de personería
                switch (tipoPersoneria) {
                    case "1": // Natural sin RUC
                        toggleNaturalSinRuc(true);
                        toggleJuridico(false);
                        toggleNaturalConRuc(false);
                        break;
                    case "2": // Natural con RUC
                        toggleNaturalSinRuc(false);
                        toggleJuridico(false);
                        toggleNaturalConRuc(true);
                        break;
                    case "3": // Jurídico
                        toggleNaturalSinRuc(false);
                        toggleNaturalConRuc(false);
                        toggleJuridico(true);
                        break;
                    default:
                        toggleJuridico(false);
                        toggleNaturalConRuc(false);
                        toggleNaturalSinRuc(false);
                        break;
                }

                // Siempre enfocar en identificación
                $('#identificacion').focus();
            });

            $('#tipo_personeria').on('change', function () {
                const value = $(this).val(); 

                if( value === '1' ){

                    $('#sin_razon_social').show();
                    $('#id_con_ruc').hide();
                    $('#id_sin_ruc').show();
                    $('#con_razon_social').hide();
                    $('#juridico').hide();
                    $('#natural').hide(); 
                    $('#fechaconstitucion').hide();
                    $('#tributario_natural').hide();
                    $('#div_tipo_identificacion').show();
                    $('#tipo_identificacion').val('-1');  

                    // Ocultar el botón del tab y el contenido si está activo
                    $('#tab_item_tributario').hide();
                    $('#datos_tributarios').removeClass('show active');

                    // Volver a activar el tab "Datos Generales" si estaba en "Datos Tributarios"
                    if ($('.nav-link[href="#datos_tributarios"]').hasClass('active')) {
                        $('.nav-link[href="#datos_generales"]').addClass('active');
                        $('#datos_generales').addClass('show active');
                    }

                }else if(value === '2'){

                    $('#sin_razon_social').hide();
                    $('#id_con_ruc').show();
                    $('#id_sin_ruc').hide();
                    $('#con_razon_social').show();
                    $('#natural').show();
                    $('#tributario_natural').show();
                    $('#fechaconstitucion').hide();
                    $('#juridico').hide();
                    $('#div_tipo_identificacion').hide();

                    $('#tab_item_tributario').show();

                }else if(value === '3'){

                    $('#sin_razon_social').hide();
                    $('#id_con_ruc').show();
                    $('#id_sin_ruc').hide();
                    $('#con_razon_social').show();
                    $('#juridico').show();
                    $('#fechaconstitucion').show();
                    $('#div_tipo_identificacion').hide();

                    // Ocultar los elementos relacionados con "natural"
                    $('#natural').hide();
                    $('#tributario_natural').hide();

                    $('#tab_item_tributario').show();

                }else{
                    // Ocultar el botón del tab y el contenido si está activo
                    $('#tab_item_tributario').hide();
                    $('#datos_tributarios').removeClass('show active');

                    // Volver a activar el tab "Datos Generales" si estaba en "Datos Tributarios"
                    if ($('.nav-link[href="#datos_tributarios"]').hasClass('active')) {
                        $('.nav-link[href="#datos_generales"]').addClass('active');
                        $('#datos_generales').addClass('show active');
                    }
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

            /*$('#identificacion_sin_ruc').on('input', function() {
                var identificacion = $(this).val();
                var validRuc = /^\d{10}$/.test(identificacion);
                if (!validRuc) {
                    $('#error_identificacion_sin_ruc').text('La identificación debe tener 10 dígitos.');
                    $('#error_identificacion_sin_ruc').show();
                } else {
                    $('#error_identificacion_sin_ruc').hide();
                }
            });*/

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

            $('#actividad_economica').select2({
                placeholder: "Selecciona una o más opciones",
                width: '100%',
                allowClear: true
            });

            function syncHiddenInput() {
                $('#hiddenSelectedItems').val(selectedItems.join(',')); // Actualizar el campo oculto
                console.log('Contenido actualizado de selectedItems:', selectedItems);
            }

            let selectedItems = [];

            // Manejar selección de elementos
            $('#actividad_economica').on('select2:select', function(e) {
                const selectedId = parseInt(e.params.data.id); // Convertir a cadena
                const selectedText = e.params.data.text;

                if (!selectedItems.includes(selectedId)) {
                    selectedItems.push(selectedId); // Agregar al array como cadena
                    $('#selectedList').append(`
                <span class="badge bg-primary me-2 selected-item" data-id=${selectedId}>
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
                const id = badge.data('id'); // Convertir a cadena

                // Eliminar el ID del array
                selectedItems = selectedItems.filter(item => item !== id);
                console.log(`Eliminado del array: ${id}, Nuevo contenido: ${selectedItems}`); // Depuración

                // Eliminar visualmente el badge
                badge.remove();

                // Restaurar la opción en el dropdown
                const optionElement = $(`#actividad_economica option[value=${id}]`);
                optionElement.prop('disabled', false).prop('selected', false);

                syncHiddenInput(); // Sincronizar el campo oculto
            });

            // Sincronizar al quitar desde el dropdown
            $('#actividad_economica').on('select2:unselect', function(e) {
                const unselectedId = (e.params.data.id); // Convertir a cadena

                // Eliminar visualmente el badge
                $(`#selectedList .selected-item[data-id=${unselectedId}]`).remove();

                // Eliminar el ID del array
                selectedItems = selectedItems.filter(item => item !== unselectedId);
                console.log(
                    `Eliminado desde dropdown: ${unselectedId}, Nuevo contenido: ${selectedItems}`
                ); // Depuración

                syncHiddenInput(); // Sincronizar el campo oculto
            });

            $("#btn_register_socio").click(function() {
                if (!validarRegistro()) {
                    return;
                }
               // alert($('#hiddenSelectedItems').val()); return;

                let formData = new FormData();
                const data = {};

                const commonFields = [
                    'fecha_ingreso', 'tipo_identificacion', 'tipo_personeria', 'identificacion', 'identificacion_sin_ruc', 
                    'fotoFile', 'razon_social', 'estado_sri', 'tipo_regimen', 'razon_social_nombre', 
                    'fecha_registro_sri',
                    'fecha_actualizacion_ruc', 'fecha_constitucion', 'agente_retencion',
                    'contribuyente_especial', 'pais', 'provincia', 'canton', 'parroquia', 'calle',
                    'manzana',
                    'numero',
                    'interseccion', 'referencia', 'hiddenSelectedItems'
                ];

                const requiredFieldsJuridico = commonFields.concat([
                    'cedula_representante', 'nombre_representante', 'apellido_representante',
                    'telefono_representante', 'correo_representante', 'fecha_registro_mercantil',
                    'vencimiento_nombramiento'
                ]);
                const requiredFieldsNaturalRuc = commonFields.concat([
                    'correo', 'telefono', , 'fecha_nacimiento'
                ]);

                let requiredFields = $('#tipo_personeria').val() == 3 ? requiredFieldsJuridico :
                    requiredFieldsNaturalRuc;


                requiredFields.forEach(field => {
                    const value = $(`#${field}`).val();
                    if (value) {
                        data[field] = value;
                    }
                    formData.append(field, value);
                });
                if ($('#fotoFile')[0].files.length > 0) {
                    formData.append('foto', $('#fotoFile')[0].files[0]);
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
                        text: error.responseJSON?.message ||
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
                    'fecha_ingreso', 'tipo_identificacion', 'tipo_personeria', 'identificacion', 'identificacion_sin_ruc', 
                    'fotoFile', 'razon_social', 'estado_sri', 'tipo_regimen', 'razon_social_nombre', 
                    'fecha_registro_sri',
                    'fecha_actualizacion_ruc', 'fecha_constitucion', 'agente_retencion',
                    'contribuyente_especial',
                    'pais', 'provincia', 'canton', 'parroquia', 'calle',
                    'manzana',
                    'numero',
                    'interseccion', 'referencia', 'hiddenSelectedItems'
                ];

                const requiredFieldsJuridico = commonFields.concat([
                    'cedula_representante', 'nombre_representante', 'apellido_representante',
                    'telefono_representante', 'correo_representante', 'fecha_registro_mercantil',
                    'vencimiento_nombramiento'
                ]);
                const requiredFieldsNaturalRuc = commonFields.concat([
                    'correo', 'telefono', , 'fecha_nacimiento'
                ]);

                let requiredFields = $('#tipo_personeria').val() == 3 ? requiredFieldsJuridico :
                    requiredFieldsNaturalRuc;


                requiredFields.forEach(field => {
                    const value = $(`#${field}`).val();
                    if (value) {
                        data[field] = value;
                    }
                    formData.append(field, value);
                });
                if ($('#fotoFile')[0].files.length > 0) {
                    formData.append('foto', $('#fotoFile')[0].files[0]);
                }
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('socio_id', socioSelected);
                let loadingSwal = Swal.fire({
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
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content') // Ensure CSRF token is passed if needed
                    },
                }).done(async function(response) {
                    loadingSwal.close();
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
                    console.log("Antes de redirigir");

    // Forzar la recarga de la imagen
    const imageElement = document.getElementById('image-preview'); // Cambia al ID correcto de tu imagen
    const currentSrc = imageElement.src;
    imageElement.src = currentSrc.split('?')[0] + '?noCache=' + new Date().getTime();

    // Si necesitas recargar la página completa también
    setTimeout(function() {
        location.reload(true); // Si sigue siendo necesario
    }, 100);
    
    console.log("Después de redirigir");

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
                    }).then((result) => {
                        if (result.isConfirmed) {
                            console.error("Error al actualizar los datos: ", error);
                        }
                    });
                    return;
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
                    let loadingSwal = Swal.fire({
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
                        loadingSwal.close();
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
                        loadingSwal.close();
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
                }
            });
            $(document).on('click', '.edit-modal', async function() {
                let button = $(this);
                socioSelected = button.data('id');
                limpiarFormulario();
                $('#ModalSocioLabel').html('<b>Actualizar Socio</b>');
                $('#estado_sri').prop('readonly', false);
                $('#btn-more-info').show();


                $('.nav-tabs a[href="#datos_generales"]').tab('show');

                let data = socios.find(socio => socio.id == socioSelected);
                if (data.logo) {
                    let logoPath = data.logo;
                    //Logic to show the image in the modal
                }
                // Populate modal fields with the row data
                $('#ModalSocio').find('#fecha_ingreso').val(data.fecha_ingreso);
                $('#ModalSocio').find('#tipo_personeria').val(data.id_tipo_personeria).trigger(
                    'change');
                $('#ModalSocio').find('#identificacion').val(data.identificacion);
                $('#ModalSocio').find('#identificacion_sin_ruc').val(data.identificacion);
                $('#ModalSocio').find('#tipo_identificacion').val(data.id_tipo_identificacion);
                $('#ModalSocio').find('#razon_social').val(data.razon_social);
                $('#ModalSocio').find('#razon_social_nombre').val(data.razon_social);
                if (data.id_tipo_personeria == 2) {
                    $('#ModalSocio').find('#telefono').val(data.telefono);
                    $('#ModalSocio').find('#correo').val(data.correo);
                    $('#ModalSocio').find('#fecha_nacimiento').val(data.fecha_nacimiento).trigger(
                        'change');
                } else if (data.id_tipo_personeria == 3) {
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
                //alert('mod');
                //alert(data.fecha_registro_sri);
                $('#ModalSocio').find('#estado_sri').val(data.estado_sri);
                $('#ModalSocio').find('#fecha_registro_sri').val(data.fecha_registro_sri).trigger(
                    'change');
                $('#ModalSocio').find('#fecha_actualizacion_ruc').val(data.fecha_actualizacion_ruc);
                
                $('#ModalSocio').find('#tipo_regimen').val(data.tipo_regimen);
                $('#ModalSocio').find('#agente_retencion').val(data.agente_retencion);
                $('#ModalSocio').find('#contribuyente_especial').val(data.contribuyente_especial);
                $('#ModalSocio').find('#pais').val(data.id_pais ?? -1).trigger('change');
                
                if(data.id_tipo_personeria == 3){
                    $('#ModalSocio').find('#fecha_constitucion').val(data.fecha_constitucion).trigger(
                        'change');
                }

                
                // Construye la ruta completa
                if (data.logo) {
                    var logoFullPath = "{{ asset('storage') }}/" + data.logo;

                    // Actualiza el enlace y la imagen
                    $('#image-link').attr('href', logoFullPath).show(); // Muestra el enlace
                    $('#image-preview').attr('src', logoFullPath).show(); // Muestra la imagen

                    const imageElement = document.getElementById('image-preview'); // Cambia al ID correcto de tu imagen
                    const currentSrc = imageElement.src;
                    imageElement.src = currentSrc.split('?')[0] + '?noCache=' + new Date().getTime();

                } else {
                    // Si no hay logo, asegúrate de ocultar la imagen y el enlace
                    $('#image-link').hide();
                    $('#image-preview').hide();
                }

                // Cargar provincias y asignar provincia
                cargarProvincias(data.id_pais ?? -1).then(() => {
                    $('#provincia').val(data.id_provincia ?? -1).trigger('change');

                    // Cargar cantones y asignar cantón
                    cargarCantones(data.id_pais, data
                        .id_provincia).then(() => {
                        $('#canton').val(data.id_canton ?? -1).trigger('change');

                        // Cargar parroquias y asignar parroquia
                        cargarParroquias(
                            data.id_pais,
                            data.id_provincia,
                            data.id_canton
                        ).then(() => {
                            $('#parroquia').val(data
                                .id_parroquia ?? -1);
                        });
                    });
                });
                $('#ModalSocio').find('#calle').val(data.calle);
                $('#ModalSocio').find('#manzana').val(data.manzana);
                $('#ModalSocio').find('#numero').val(data.numero);
                $('#ModalSocio').find('#interseccion').val(data.interseccion);
                $('#ModalSocio').find('#referencia').val(data.referencia);


                // Limpia la lista visual y el array
                selectedItems = [];
                $('#selectedList').empty();

                console.log('jbuestan: pruebas de actividades economicas');
                //console.log(data.datos_tributarios);
                //console.log(data.datos_tributarios.actividades_economicas);

                // Verifica si response.dato_tributario y response.dato_tributario.actividades_economicas tienen valores
                //if (data.datos_tributarios.actividades_economicas) {
                if (data.datos_tributarios?.actividades_economicas) {
                    // Decodifica el JSON si es necesario
                    let actividadesEconomicas = data.datos_tributarios.actividades_economicas;

                    // Verifica si es un string y necesita ser decodificado
                    if (typeof actividadesEconomicas === 'string') {
                        try {
                            actividadesEconomicas = JSON.parse(actividadesEconomicas);
                            console.log(actividadesEconomicas);
                        } catch (error) {
                            console.error(
                                "Error al decodificar actividades_economicas:",
                                error);
                            actividadesEconomicas = [];
                        }
                    }

                    // Asegúrate de que ahora sea un array
                    if (Array.isArray(actividadesEconomicas) && actividadesEconomicas
                        .length > 0) {
                        console.log("Actividades económicas recibidas:",
                            actividadesEconomicas);

                        actividadesEconomicas.forEach(function(id) {
                            id = parseInt(
                                id); // Asegúrate de que el ID es un entero

                            // Obtener el texto de la opción seleccionada
                            var optionText = $(
                                `#actividad_economica option[value=${id}]`
                            ).text();

                            // Añadir ID al array de elementos seleccionados
                            console.log('ID:', id);
                            console.log(typeof id);
                            selectedItems.push(id);

                            // Añadir el badge visualmente en la lista
                            $('#selectedList').append(`
                            <span class="badge bg-primary me-2 selected-item" data-id=${id}>
                                ${optionText} <span class="remove-item" style="cursor: pointer;">&times;</span>
                            </span>
                        `);

                            // Marcar la opción como seleccionada
                            $(`#actividad_economica option[value=${id}]`)
                                .prop('selected', true);
                        });

                        // Actualiza el input oculto para sincronizar
                        syncHiddenInput();

                        // Activa Select2 y muestra los valores seleccionados
                        $('#actividad_economica').val(null).trigger('change');
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



                $('#ModalSocio').find('#btn_register_socio').hide();
                $('#ModalSocio').find('#btn_update_socio').show();
                $('#ModalSocio').modal('show');
            });
            $('#btn-more-info').on('click', function() {
                let socio = socios.find(socio => socio.id == socioSelected);
                let socioLogInsert = socio.logs.insert ?? [];
                let socioLogUpdate = socio.logs.update ?? [];

                if (Array.isArray(socioLogInsert) && socioLogInsert.length > 0) {
                    socioLogInsert = socioLogInsert[0];
                } else {
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'info',
                        title: 'Información adicional',
                        showConfirmButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: 'Aceptar',
                        text: 'No hay información adicional para mostrar.',
                    });
                }
                let lastItem = null;
                if (Array.isArray(socioLogUpdate) && socioLogUpdate.length > 0) {
                    lastItem = socioLogUpdate[socioLogUpdate.length - 1];
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
                        day: 'numeric',
                        hour: '2-digit',
                        minute: '2-digit',
                        second: '2-digit',
                        hour12: false, // Para formato 24 horas
                    };
                    return new Date(dateString).toLocaleDateString('es-ES', options);
                };

                // Formatear las fechas
                const formattedCreatedAt = formatDate(socioLogInsert.created_at);
                const formattedUpdatedAt = formatDate(lastItem?.created_at);

                // Mostrar el modal con SweetAlert2
                const swalInfo = Swal.fire({
                    target: document.getElementById('ModalSocio'),
                    title: 'Información adicional',
                    html: `
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h5><strong>Creación</strong></h5>
                                <p><strong>Usuario:</strong> ${socioLogInsert.user.name}</p>
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
            /**
             * Functions
             */
            function limpiarFormulario() {
                selectedItems = [];
                $('#selectedList').empty();
                $('#ModalSocio').find('input, select, textarea').val('');
                $('#ModalSocio').find(
                        '#tipo_personeria, #tipo_regimen, #agente_retencion, #contribuyente_especial, #pais, #provincia, #canton, #parroquia'
                    )
                    .val(-1);
            }

            function validarRegistro() {  //jbuestan  Para validacion de Registro
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

                if ($('#tipo_personeria').val() == 1) {
                    if ($('#identificacion_sin_ruc').val() == "") {
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
                        $('#identificacion_sin_ruc').focus();
                        return false;
                    }

                    if ($('#razon_social_nombre').val() == "") {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'Por favor, ingrese el nombre del Socio.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#razon_social').focus();
                        return false;
                    } 

                    //alert('aqui'); 
                    //alert($('#tipo_identificacion').val());
                    //return;

                    if ($('#tipo_identificacion').val() == "-1") {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'Debe Seleccionar el tipo de identificación.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#tipo_identificacion').focus();
                        return false;
                    }

                    /*if (!/^\d{10}$/.test($('#identificacion_sin_ruc').val())) {
                        Swal.fire({
                            target: document.getElementById('ModalSocio'),
                            icon: 'error',
                            title: 'Error',
                            showConfirmButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Aceptar',
                            text: 'La Identificación debe tener 10 dígitos.',
                        });
                        $('.nav-tabs a[href="#datos_generales"]').tab('show');
                        $('#identificacion_sin_ruc').focus();
                        return false;
                    }*/
                }

                if ($('#tipo_personeria').val() == 2 || $('#tipo_personeria').val() == 3){

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

                }
                
                
                
                
                if ($('#tipo_personeria').val() == 3) {
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
                } else if ($('#tipo_personeria').val() == 2) {
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

                if ($('#tipo_personeria').val() == 2 || $('#tipo_personeria').val() == 3){

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
                    if($('#tipo_personeria').val() == 3){
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

                    if ($('#hiddenSelectedItems').val() == "") {
                    //alert('Debe seleccionar al menos una Actividad Económica');
                    Swal.fire({
                        target: document.getElementById('ModalSocio'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe seleccionar al menos una Actividad Económica',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show');
                    $('#hiddenSelectedItems').focus();
                    return;
                }

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

            function aniosVencimiento(id_fecha_ingreso, id_fecha_vencimiento, id_resultado) {
                $('#' + id_fecha_ingreso + ', #' + id_fecha_vencimiento).on('change', function() {
                    let fechaIngreso = $('#' + id_fecha_ingreso).val()
                    let vencimiento = $('#' + id_fecha_vencimiento).val();

                    function parseDate(str) {
                        let mdy = str.split('/');
                        return new Date(parseInt(mdy[2], 10), parseInt(mdy[1], 10) - 1, parseInt(mdy[0],
                            10));
                    }
                    if (fechaIngreso && vencimiento) {
                        let fechaInicio = parseDate(fechaIngreso);
                        let fechaFin = parseDate(vencimiento);

                        if (fechaFin <= fechaInicio) {
                            Swal.fire({
                                target: document.getElementById('ModalSocio'),
                                icon: 'error',
                                title: 'Error',
                                text: 'La fecha de vencimiento del nombramiento no puede ser menor o igual a la fecha de ingreso.',
                                showConfirmButton: true,
                                allowOutsideClick: false,
                                confirmButtonText: 'Aceptar',
                            });
                            $('#' + id_fecha_vencimiento).val('');
                            return;
                        }
                    }
                    if (vencimiento) {
                        let today = new Date();
                        let fechaFin = parseDate(vencimiento);
                        let years = fechaFin.getFullYear() - today.getFullYear();
                        let months = fechaFin.getMonth() - today.getMonth();
                        let days = fechaFin.getDate() - today.getDate();

                        if (days < 0) {
                            months--;
                            const monthDays = new Date(fechaFin.getFullYear(), fechaFin.getMonth(), 0)
                                .getDate();
                            days += monthDays;
                        }
                        if (months < 0) {
                            years--;
                            months += 12;
                        }

                        if (fechaFin <= today) {
                            $('#' + id_resultado).val('0 años 0 meses. Vencido');
                            return;
                        }
                        $('#' + id_resultado).val(years + ' años ' + months + ' meses');
                    }
                });
            }

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
            onInputUppercase('razon_social_nombre');
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

            aniosVencimiento('fecha_ingreso', 'vencimiento_nombramiento',
                'anios_nombramiento');

            calcularDuracion('fecha_registro_sri', 'fecha_constitucion',
                'La fecha de constitucion debe ser menor que la fecha de registro al SRI.', 'anios_creacion'
            );

            calcularDuracion('fecha_registro_sri', 'fecha_nacimiento',
                'La fecha de nacimiento debe ser menor que la fecha de registro al SRI.', 'anios_edad'
            );
        });
    </script>
@endsection
