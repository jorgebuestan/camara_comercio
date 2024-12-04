@extends('dashboard')

@section('pagename')
Maestro de Establecimientos
@endsection

@section('content') 
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    .rowborder {
      margin: 20px; /* Establece el margen deseado */
      padding: 10px; /* Añade un relleno interno para separar el contenido del margen */
      border: 2px solid #ccc; /* Añade un borde para crear el efecto rectangular */
      border-radius: 10px; /* Agrega bordes circulares en las esquinas */
      box-sizing: border-box; /* Incluye el borde y el relleno en el tamaño total del elemento */
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
                    <h2 class="card-title">Gestión de Establecimientos</h2>
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
                                        <select id="camara" name="camara" class="form-control populate">
                                            <option value="-1">Seleccionar</option>
                                            @foreach($camaras as $id => $descripcion)
                                                <option value="{{ $id }}">{{ $descripcion }}</option>
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

                                        <h2 class="card-title">Listado de Establecimientos Registrados por Cámara</h2>
                                    </header>
                                    <div class="card-body"> 
                                        <table class="table table-bordered table-striped mb-0" id="dataTable"> 
                                            <thead>
                                                <tr>
                                                    <th>Fecha de Inicio de Actividades</th>   
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
        <form enctype="multipart/form-data" class="modal fade" id="ModalEstablecimiento" tabindex="-1" aria-labelledby="ModalEstablecimientoLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog modal-xl"> 
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalEstablecimientoLabel"><b>Agregar un nuevo Establecimiento</b></h5>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
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
                                    País
                                </div> 
                                <div class="col-md-4">  
                                    <select id="pais" name="pais" class="form-control populate">
                                        <option value="-1">Seleccionar</option>
                                        @foreach($paises as $id => $nombre)
                                            <option value="{{ $id }}" {{ $id == 57 ? 'selected' : '' }}>
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
                                        <option value="-1">Seleccionar</option>
                                        @foreach($provincias as $id => $nombre)
                                            <option value="{{ $id }}" {{ $id == 2 ? 'selected' : '' }}>
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
                                        <option value="-1" selected>Seleccionar</option>
                                        @foreach($cantones as $id => $nombre)
                                            <option value="{{ $id }}" {{ $id == 2 ? 'selected' : '' }}>
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
                                        <option value="-1">Seleccionar</option> 
                                        @foreach($parroquias as $id => $nombre)
                                            <option value="{{ $id }}">
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
                                    <input type="text" class="form-control" name="nombre_comercial"  id="nombre_comercial" placeholder="Calle">
                                </div> 
                                <div class="col-md-2">  
                                    Fecha de inicio de actividades
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" data-plugin-datepicker class="form-control" name="fecha_inicio_actividades" id="fecha_inicio_actividades" placeholder="Fecha de Inicio de Actividades">
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
                                    <input type="text" class="form-control" name="calle"  id="calle" placeholder="Calle">
                                </div> 
                                <div class="col-md-2">  
                                    Manzana
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="manzana"  id="manzana" placeholder="Manzana">
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
                                    <input type="text" class="form-control" name="numero"  id="numero" placeholder="Número">
                                </div> 
                                <div class="col-md-2">  
                                    Intersección
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="interseccion"  id="interseccion" placeholder="Intersección">
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
                                    <input type="text" class="form-control" name="referencia"  id="referencia" placeholder="Referencia Ubicación">
                                </div> 
                                <div class="col-md-2">  
                                    Correo
                                </div> 
                                <div class="col-md-4">   
                                    <input type="text" class="form-control" name="correo"  id="correo" placeholder="Correo Representante Legal">
                                    <div id="error-correo" style="color: red; display: none;">Ingrese un correo electrónico válido.</div>
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
                                    <input type="text" class="form-control" name="telefono1"  id="telefono1" placeholder="Teléfono">
                                </div> 
                                <div class="col-md-2">  
                                    Teléfono 2
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="telefono2"  id="telefono2" placeholder="Teléfono">
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
                                    <input type="text" class="form-control" name="telefono3"  id="telefono3" placeholder="Teléfono">
                                </div> 
                                <div class="col-md-2">  
                                    Actividad Económica
                                </div> 
                                <div class="col-md-4">   
                                    <select name="actividad_economica[]" id="actividad_economica" multiple data-plugin-selectTwo class="form-control populate"> 
                                        @foreach($actividadesEconomicas as $id => $descripcion)
                                            <option value="{{ $id }}">{{ $descripcion }}</option>
                                        @endforeach
                                    </select> 
                                    <input type="hidden" id="hiddenSelectedItems" name="actividad_economica_seleccionados">
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
                                <div class="col-md-4">   
                                    <div id="selectedItemsContainer" class="selected-items">
                                        <strong>Seleccionados:</strong>
                                        <div id="selectedList"></div>
                                    </div>
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


        <form enctype="multipart/form-data" class="modal fade" id="ModalModificarCamara" tabindex="-1" aria-labelledby="ModalModificarCamaraLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalModificarCamaraLabel"><b>Modificar Cámara</b></h5>
                        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> --> 
                    </div>
                    <div class="modal-body">
                        <div class="form-group">  
                            <div class="row">
                                <div class="col-lg-12">
                                    <p><strong>Cámara Seleccionada:</strong> <span id="nombreCamaraSeleccionadaMod"></span></p>

                                    <!-- Campo oculto para enviar el valor de la cámara -->
                                    <input type="hidden" id="camaraHiddenMod" name="camaraHiddenMod" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">  
                                    País
                                </div> 
                                <div class="col-md-4">  
                                    <select id="pais_mod" name="pais_mod" class="form-control populate">
                                        <option value="-1">Seleccionar</option>
                                        @foreach($paises as $id => $nombre)
                                            <option value="{{ $id }}" {{ $id == 57 ? 'selected' : '' }}>
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
                                        <option value="-1">Seleccionar</option>
                                        @foreach($provincias as $id => $nombre)
                                            <option value="{{ $id }}" {{ $id == 2 ? 'selected' : '' }}>
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
                                        <option value="-1" selected>Seleccionar</option>
                                        @foreach($cantones as $id => $nombre)
                                            <option value="{{ $id }}" {{ $id == 2 ? 'selected' : '' }}>
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
                                        <option value="-1">Seleccionar</option> 
                                        @foreach($parroquias as $id => $nombre)
                                            <option value="{{ $id }}">
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
                                    <input type="text" class="form-control" name="nombre_comercial_mod"  id="nombre_comercial_mod" placeholder="Calle">
                                </div> 
                                <div class="col-md-2">  
                                    Fecha de inicio de actividades
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" data-plugin-datepicker class="form-control" name="fecha_inicio_actividades_mod" id="fecha_inicio_actividades_mod" placeholder="Fecha de Inicio de Actividades">
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
                                    <input type="text" class="form-control" name="calle_mod"  id="calle_mod" placeholder="Calle">
                                </div> 
                                <div class="col-md-2">  
                                    Manzana
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="manzana_mod"  id="manzana_mod" placeholder="Manzana">
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
                                    <input type="text" class="form-control" name="numero_mod"  id="numero_mod" placeholder="Número">
                                </div> 
                                <div class="col-md-2">  
                                    Intersección
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="interseccion_mod"  id="interseccion_mod" placeholder="Intersección">
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
                                    <input type="text" class="form-control" name="referencia_mod"  id="referencia_mod" placeholder="Referencia Ubicación">
                                </div> 
                                <div class="col-md-2">  
                                    Correo
                                </div> 
                                <div class="col-md-4">   
                                    <input type="text" class="form-control" name="correo_mod"  id="correo_mod" placeholder="Correo Representante Legal">
                                    <div id="error-correo-mod" style="color: red; display: none;">Ingrese un correo electrónico válido.</div>
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
                                    <input type="text" class="form-control" name="telefono1_mod"  id="telefono1_mod" placeholder="Teléfono">
                                </div> 
                                <div class="col-md-2">  
                                    Teléfono 2
                                </div> 
                                <div class="col-md-4">  
                                    <input type="text" class="form-control" name="telefono2_mod"  id="telefono2_mod" placeholder="Teléfono">
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
                                    <input type="text" class="form-control" name="telefono3_mod"  id="telefono3_mod" placeholder="Teléfono">
                                </div> 
                                <div class="col-md-2">  
                                    Actividad Económica
                                </div> 
                                <div class="col-md-4">   
                                    <select name="actividad_economica_mod" id="actividad_economica_mod" multiple data-plugin-selectTwo class="form-control populate"> 
                                        @foreach($actividadesEconomicas as $id => $descripcion)
                                            <option value="{{ $id }}">{{ $descripcion }}</option>
                                        @endforeach
                                    </select> 
                                    <input type="hidden" id="hiddenSelectedItemsMod" name="actividad_economica_seleccionados_mod">
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
                                <div class="col-md-4">   
                                    <div id="selectedItemsContainer_mod" class="selected-items">
                                        <strong>Seleccionados:</strong>
                                        <div id="selectedList_mod"></div>
                                    </div>
                                </div> 
                            </div>   
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="btn-close" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-modificar-camara">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </form>
 
    </div>

    <div id="carga" style="display: none; text-align: center; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9999;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <img src="{{ asset('storage/loading/loading_256.gif') }}" alt="Cargando..." style="width: 50px; height: 50px;">
            <p style="color: white;">Procesando petición, por favor espera...</p>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
 
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
     

    <script>

    $(document).ready(function(){ 

    var table = $('#dataTable').DataTable({
        destroy: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('admin.obtener_listado_establecimientos') }}",
            type: "GET",
            data: function (d) {
                d.start = d.start || 0;
                d.length = d.length || 10;
                d.id_camara = $('#camara').val(); // Enviar el valor de localidad seleccionada
            },
            error: function (error) {
                console.error("Error al cargar los datos: ", error);
            }
        },
        pageLength: 10, // Establece el número de registros por página
        columns: [
            { data: 'fecha_inicio_actividades', width: '15%' }, 
            { data: 'nombre_comercial', width: '20%' }, 
            { data: 'direccion', width: '30%' },  
            { data: 'correo', width: '15%' } , 
            { data: 'btn', width: '20%' } 
        ],
        order: [[0, "asc"]],
        createdRow: function(row, data, dataIndex) {
            var td = $(row).find(".truncate");
            td.attr("title", td.text());

            var td2 = $(row).find(".truncate2");
            td2.attr("title", td2.text());
        }
    });


    $('#abrirModal').click(function (e) {
        e.preventDefault(); // Evita el comportamiento predeterminado del botón

        // Verificar si se seleccionó una opción válida en el select
        var camaraSeleccionada = $('#camara').val();
        var nombreCamaraSeleccionada = $('#camara option:selected').text();

        if (camaraSeleccionada === '-1') {
            alert('Por favor, selecciona una Cámara para poder registrar un Establecimiento');
        } else {
            // Mostrar el nombre de la cámara seleccionada en el modal
            $('#nombreCamaraSeleccionada').text(nombreCamaraSeleccionada);

            // Cargar el valor de la cámara en el campo oculto
            $('#camaraHidden').val(camaraSeleccionada);

            // Abrir el modal
            $('#ModalEstablecimiento').modal('show');
        }
    });

     // Cerrar el modal manualmente
    $('.cerrar-modal').click(function () {
        $('#ModalEstablecimiento').modal('hide'); // Cerrar el modal
    });

    // Escuchar el evento change del select de cámaras
    $('#camara').change(function () {
        var selectedCamera = $(this).val();

        if (selectedCamera === '-1') {
            alert('Por favor selecciona una cámara válida.');
        } else {
            table.ajax.reload(); // Recargar la tabla con la cámara seleccionada
        }
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
        console.log('Contenido actualizado de selectedItems:', selectedItems);
    }

    let selectedItems = [];

    // Manejar selección de elementos
    $('#actividad_economica').on('select2:select', function (e) {
        const selectedId = String(e.params.data.id); // Convertir a cadena
        const selectedText = e.params.data.text;

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
    $('#selectedList').on('click', '.remove-item', function () {
        const badge = $(this).closest('.selected-item');
        const id = String(badge.data('id')); // Convertir a cadena

        // Eliminar el ID del array
        selectedItems = selectedItems.filter(item => item !== id);
        console.log(`Eliminado del array: ${id}, Nuevo contenido: ${selectedItems}`); // Depuración

        // Eliminar visualmente el badge
        badge.remove();

        // Restaurar la opción en el dropdown
        const optionElement = $(`#actividad_economica option[value="${id}"]`);
        optionElement.prop('disabled', false).prop('selected', false);

        syncHiddenInput(); // Sincronizar el campo oculto
    });

    // Sincronizar al quitar desde el dropdown
    $('#actividad_economica').on('select2:unselect', function (e) {
        const unselectedId = String(e.params.data.id); // Convertir a cadena

        // Eliminar visualmente el badge
        $(`#selectedList .selected-item[data-id="${unselectedId}"]`).remove();

        // Eliminar el ID del array
        selectedItems = selectedItems.filter(item => item !== unselectedId);
        console.log(`Eliminado desde dropdown: ${unselectedId}, Nuevo contenido: ${selectedItems}`); // Depuración

        syncHiddenInput(); // Sincronizar el campo oculto
    });

    $('#actividad_economica_mod').select2({
        placeholder: "Selecciona una o más opciones",
        width: '100%',
        allowClear: true
    });

    function syncHiddenInputMod() {
        $('#hiddenSelectedItemsMod').val(selectedItemsMod.join(',')); // Actualizar el campo oculto
        console.log('Contenido actualizado de selectedItemsMod:', selectedItemsMod);
    }

    let selectedItemsMod = [];

    // Manejar selección de elementos
    $('#actividad_economica_mod').on('select2:select', function (e) {
        const selectedId = String(e.params.data.id); // Convertir a cadena
        const selectedText = e.params.data.text;

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
    $('#selectedList_mod').on('click', '.remove-item', function () {
        const badge = $(this).closest('.selected-item');
        const id = String(badge.data('id')); // Convertir a cadena

        // Eliminar el ID del array
        selectedItemsMod = selectedItemsMod.filter(item => item !== id);
        console.log(`Eliminado del array Mod: ${id}, Nuevo contenido Mod: ${selectedItemsMod}`); // Depuración

        // Eliminar visualmente el badge
        badge.remove();

        // Restaurar la opción en el dropdown
        const optionElement = $(`#actividad_economica_mod option[value="${id}"]`);
        optionElement.prop('disabled', false).prop('selected', false);

        syncHiddenInputMod(); // Sincronizar el campo oculto
    });

    // Sincronizar al quitar desde el dropdown
    $('#actividad_economica_mod').on('select2:unselect', function (e) {
        const unselectedId = String(e.params.data.id); // Convertir a cadena

        // Eliminar visualmente el badge
        $(`#selectedList_mod .selected-item[data-id="${unselectedId}"]`).remove();

        // Eliminar el ID del array
        selectedItemsMod = selectedItemsMod.filter(item => item !== unselectedId);
        console.log(`Eliminado desde dropdown Mod: ${unselectedId}, Nuevo contenido Mod: ${selectedItemsMod}`); // Depuración

        syncHiddenInputMod(); // Sincronizar el campo oculto
    });
 
 
    $('#ModalEstablecimiento').on('show.bs.modal', function() { 
        // Reiniciar el array de ítems seleccionados
        selectedItems = [];

        // Limpiar lista de badges y el campo oculto
        $('#selectedList').empty();
        $('#hiddenSelectedItems').val('');

        // Limpiar completamente el select, establecer en blanco
        $('#actividad_economica').val([]).trigger('change');  // Para select2 u otros plugins
        $('#actividad_economica option:selected').prop('selected', false); // Fuerza la deselección
        console.log('Modal abierto, campos limpios');
    }); 

    $('#ModalEstablecimiento').on('hidden.bs.modal', function () {
        selectedItems = [];

        // Limpiar lista de badges y el campo oculto
        $('#selectedList').empty();
        $('#hiddenSelectedItems').val('');

        // Limpiar completamente el select, establecer en blanco
        $('#actividad_economica').val([]).trigger('change');  // Para select2 u otros plugins
        $('#actividad_economica option:selected').prop('selected', false); // Fuerza la deselección
        console.log('Modal abierto, campos limpios');
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
    $('#fecha_inicio_actividades').on('blur', function () {
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
        $(this).val($(this).val().toUpperCase());
        var correo = $(this).val();
        var regexCorreo = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; // Regex para correo válido
        if (regexCorreo.test(correo)) { // Si es un correo válido
            $("#error-correo").hide(); // Ocultar error
        } else {
            $("#error-correo").show(); // Mostrar error
        }
    });

    // Evento para validar la fecha al salir del campo
    $('#fecha_inicio_actividades_mod').on('blur', function () {
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
        $(this).val($(this).val().toUpperCase());
        var correo = $(this).val();
        var regexCorreo = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; // Regex para correo válido
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

    $('#telefono1').on('input', function() {
        // Convierte el valor del campo a mayúsculas
        $(this).val($(this).val().toUpperCase());
    }); 

    $('#telefono2').on('input', function() {
        // Convierte el valor del campo a mayúsculas
        $(this).val($(this).val().toUpperCase());
    }); 

    $('#telefono3').on('input', function() {
        // Convierte el valor del campo a mayúsculas
        $(this).val($(this).val().toUpperCase());
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

    $('#telefono1_mod').on('input', function() {
        // Convierte el valor del campo a mayúsculas
        $(this).val($(this).val().toUpperCase());
    }); 

    $('#telefono2_mod').on('input', function() {
        // Convierte el valor del campo a mayúsculas
        $(this).val($(this).val().toUpperCase());
    }); 

    $('#telefono3_mod').on('input', function() {
        // Convierte el valor del campo a mayúsculas
        $(this).val($(this).val().toUpperCase());
    });
 

    $("#btn-register-establecimiento").click(function() {

        //alert($('#hiddenSelectedItems').val());
        //return; 

        if ($('#nombre_comercial').val() == "") {
            alert('Debe ingresar el Nombre Comercial'); 
            $('#nombre_comercial').focus();
            return;
        }

        if ($('#fecha_inicio_actividades').val() == "") {
            alert('Debe ingresar la Fecha de inicio de actividades del Establecimiento'); 
            $('#fecha_inicio_actividades').focus();
            return;
        }  

        if ($('#pais').val() == "-1") {
            alert('Debe seleccionar el País'); 
            $('#pais').focus();
            return;
        }

        if ($('#provincia').val() == "-1") {
            alert('Debe seleccionar la Provincia'); 
            $('#provincia').focus();
            return;
        }

        if ($('#canton').val() == "-1") {
            alert('Debe seleccionar el Cantón'); 
            $('#canton').focus();
            return;
        }

        if ($('#parroquia').val() == "-1") {
            alert('Debe seleccionar la Parroquia'); 
            $('#parroquia').focus();
            return;
        }

        if ($('#calle').val() == "") {
            alert('Debe ingresar la Calle'); 
            $('#calle').focus();
            return;
        }

        if ($('#manzana').val() == "") {
            alert('Debe ingresar la Manzana'); 
            $('#manzana').focus();
            return;
        }

        if ($('#numero').val() == "") {
            alert('Debe ingresar el Número'); 
            $('#numero').focus();
            return;
        }

        if ($('#interseccion').val() == "") {
            alert('Debe ingresar la Intersección'); 
            $('#interseccion').focus();
            return;
        }

        if ($('#referencia').val() == "") {
            alert('Debe ingresar la Referencia'); 
            $('#referencia').focus();
            return;
        }  

        if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test($('#correo').val())) {
            /*$("#error-correo").show();
            isValid = false;*/
            $("#error-correo").show();
            alert('Debe registrar un correo con formato válido'); 
            $('#correo').focus();
            return;
        } 

        if ($('#telefono1').val() == "") {
            alert('Debe ingresar al menos 1 número de Teléfono'); 
            $('#telefono1').focus();
            return;
        }  

        if ($('#hiddenSelectedItems').val() == "") {
            alert('Debe seleccionar al menos una Actividad Económica');    
            return;
        } 

        var formData = new FormData(document.getElementById("ModalEstablecimiento"));
        $('#carga').show();

        $.ajax({
            url: "{{ route('admin.registrar_establecimiento') }}",
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
                alert("Ocurrió un error al registrar el establecimiento.");
            }

            console.log(res.responseText); // Muestra el error completo en la consola para depuración
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
    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
    dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
    dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
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
        autoclose: true,      // Cierra automáticamente al seleccionar
        todayHighlight: true, // Resalta la fecha actual
        language: 'es'        // Asegúrate de establecer el idioma correcto
    });

 

    // Delegar el evento de clic al documento para asegurar que funcione con elementos dinámicos
    $(document).on('click', '.open-modal', function() {
        console.log('Botón clicado...');
        var button = $(this); 
        var establecimientoId = button.data('id'); 

        console.log('Cargo ID:', establecimientoId);  

        $('#carga').show();

        // **LIMPIAR EL SELECT Y EL INPUT HIDDEN ANTES DE CARGAR DATOS**
        selectedItemsMod = []; // Vaciar el array de actividades económicas seleccionadas
        $('#selectedList_mod').empty(); // Vaciar la lista de badges visuales
        $('#actividad_economica_mod').val(null).trigger('change'); // Limpiar y deseleccionar el select2
        $('#hiddenSelectedItemsMod').val(''); // Limpiar el input hidden


        $.ajax({
            url: '/administrador/camara/detalle/' + establecimientoId,
            method: 'GET',
            success: function(response) {
                console.log('Datos recibidos:', response);

                var establecimientoId = $('#camara_id');
                var FechaIngreso = $('#fecha_inicio_actividades_mod'); 
                var Ruc = $('#ruc_mod'); 
                var RazonSocial = $('#razon_social_mod'); 
                var Cedula = $('#cedula_representante_legal_mod'); 
                var Nombres = $('#nombres_representante_legal_mod'); 
                var Apellidos = $('#apellidos_representante_legal_mod'); 
                var Telefono = $('#telefono_representante_legal_mod'); 
                var Correo = $('#correo_representante_legal_mod'); 
                var Cargo = $('#cargo_representante_legal_mod'); 
                var Direccion = $('#direccion_representante_legal_mod');  
                
                var TipoRegimen = $('#tipo_regimen_mod'); 
                var FechaRegistro = $('#fecha_registro_mod'); 
                var FechaConstitucion = $('#fecha_constitucion_mod'); 
                var AgenteRetencion = $('#agente_retencion_mod'); 
                var ContribuyenteEspecial = $('#contribuyente_especial_mod'); 
                var Pais = $('#pais_mod'); 
                var Provincia = $('#provincia_mod'); 
                var Canton = $('#canton_mod'); 
                var Parroquia = $('#parroquia_mod'); 
                var Calle = $('#calle_mod'); 
                var Manzana = $('#manzana_mod'); 
                var Numero = $('#numero_mod'); 
                var Interseccion = $('#interseccion_mod'); 
                var Referencia = $('#referencia_mod'); 
                var ActividadEconomica = $('#actividad_economica_mod');
                var HiddenSelectedItemsMod = $('#hiddenSelectedItemsMod');

                //console.log('Elemento Cargo encontrado:', CargoInput.length); // Verificar que el elemento se encuentra
                //console.log('Elemento cargo_id encontrado:', establecimientoIdInput.length); // Verificar que el elemento se encuentra
                    
                establecimientoId.val(response.id);
                //FechaIngreso.val(response.fecha_inicio_actividades); 
                FechaIngreso.val(convertirFecha(response.fecha_inicio_actividades));
                Ruc.val(response.ruc); 
                RazonSocial.val(response.razon_social); 
                Cedula.val(response.cedula_representante_legal); 
                Nombres.val(response.nombres_representante_legal); 
                Apellidos.val(response.apellidos_representante_legal); 
                Telefono.val(response.telefono_representante_legal); 
                Correo.val(response.correo_representante_legal); 
                Cargo.val(response.cargo_representante_legal); 
                Direccion.val(response.direccion_representante_legal); 
                
                TipoRegimen.val(response.dato_tributario.tipo_regimen); 
                //FechaRegistro.val(response.dato_tributario.fecha_registro_sri); 
                //FechaRegistro.val(convertirFecha(response.dato_tributario.fecha_registro_sri));

                //alert (response.dato_tributario.fecha_registro_sri);
                // Manejo de la fecha de registro
                const fechaISO = response.dato_tributario.fecha_registro_sri; // Por ejemplo, '2008-01-22'
                const fechaConvertida = convertirFecha(fechaISO); 

                // Convertir la fecha al formato necesario para `Date`
                const fechaObj = convertirFechaAObjetoDate(fechaConvertida); // Convertir de DD/MM/YYYY a Date

                if (!isNaN(fechaObj.getTime())) {
                    $('#fecha_registro_mod').datepicker('setDate', fechaObj); // Asigna la fecha
                } else {
                    console.error("Fecha no válida:", fechaConvertida);
                }

                // Manejo de la fecha de constitución
                const fechaISO2 = response.dato_tributario.fecha_constitucion; // Por ejemplo, '2008-01-22'
                const fechaConvertida2 = convertirFecha(fechaISO2);

                const fechaObj2 = convertirFechaAObjetoDate(fechaConvertida2);

                if (!isNaN(fechaObj2.getTime())) {
                    $('#fecha_constitucion_mod').datepicker('setDate', fechaObj2); // Asigna la fecha
                } else {
                    console.error("Fecha no válida:", fechaConvertida2);
                }

                // Calcular años y meses
                var hoy = new Date();
                var FechaConstitucion = $('#fecha_constitucion_mod').val();
                var FechaConstitucionDate = convertirFechaAObjetoDate(FechaConstitucion);

                if (!isNaN(FechaConstitucionDate.getTime())) {
                    var years = hoy.getFullYear() - FechaConstitucionDate.getFullYear();
                    var months = hoy.getMonth() - FechaConstitucionDate.getMonth();

                    if (months < 0) {
                        years--;
                        months += 12;
                    }

                    console.log(`${years} años, ${months} meses`);
                } else {
                    console.error("Fecha de constitución no válida.");
                }

                // Función auxiliar para convertir DD/MM/YYYY a Date
                function convertirFechaAObjetoDate(fecha) {
                    if (!fecha) return new Date('Invalid Date'); // Retorna fecha inválida si la entrada es nula
                    const partes = fecha.split('/'); // Divide por barra
                    return new Date(partes[2], partes[1] - 1, partes[0]); // Formato DD/MM/YYYY
                }
                
                $('#anios_creacion_mod').val(years + ' años, ' + months + ' meses');
                
                AgenteRetencion.val(response.dato_tributario.agente_retencion); 
                ContribuyenteEspecial.val(response.dato_tributario.contribuyente_especial); 
                Pais.val(response.dato_tributario.id_pais); 
                Provincia.val(response.dato_tributario.id_provincia); 
                Canton.val(response.dato_tributario.id_canton); 
                Parroquia.val(response.dato_tributario.id_parroquia); 

                // Asignar país y disparar cambio para cargar provincias
                $('#pais_mod').val(response.dato_tributario.id_pais).trigger('change');

                // Cargar provincias y asignar provincia
                cargarProvincias(response.dato_tributario.id_pais).then(() => {
                    $('#provincia_mod').val(response.dato_tributario.id_provincia).trigger('change');

                    // Cargar cantones y asignar cantón
                    cargarCantones(response.dato_tributario.id_pais, response.dato_tributario.id_provincia).then(() => {
                        $('#canton_mod').val(response.dato_tributario.id_canton).trigger('change');

                        // Cargar parroquias y asignar parroquia
                        cargarParroquias(
                            response.dato_tributario.id_pais, 
                            response.dato_tributario.id_provincia, 
                            response.dato_tributario.id_canton
                        ).then(() => {
                            $('#parroquia_mod').val(response.dato_tributario.id_parroquia);
                        });
                    });
                }); 
                
                Calle.val(response.dato_tributario.calle); 
                Manzana.val(response.dato_tributario.manzana); 
                Numero.val(response.dato_tributario.numero); 
                Interseccion.val(response.dato_tributario.interseccion); 
                Referencia.val(response.dato_tributario.referencia); 

                // Limpia la lista visual y el array
                selectedItemsMod = [];
                $('#selectedList_mod').empty();

                console.log(response.dato_tributario.actividades_economicas);

                // Verifica si response.dato_tributario y response.dato_tributario.actividades_economicas tienen valores
                if (response.dato_tributario && response.dato_tributario.actividades_economicas) {
                    // Decodifica el JSON si es necesario
                    let actividadesEconomicas = response.dato_tributario.actividades_economicas;

                    // Verifica si es un string y necesita ser decodificado
                    if (typeof actividadesEconomicas === 'string') {
                        try {
                            actividadesEconomicas = JSON.parse(actividadesEconomicas);
                        } catch (error) {
                            console.error("Error al decodificar actividades_economicas:", error);
                            actividadesEconomicas = [];
                        }
                    }

                    // Asegúrate de que ahora sea un array
                    if (Array.isArray(actividadesEconomicas) && actividadesEconomicas.length > 0) {
                        console.log("Actividades económicas recibidas:", actividadesEconomicas);

                        actividadesEconomicas.forEach(function (id) {
                            id = String(id); // Asegúrate de que el ID es una cadena

                            // Obtener el texto de la opción seleccionada
                            var optionText = $(`#actividad_economica_mod option[value="${id}"]`).text();

                            // Añadir ID al array de elementos seleccionados
                            selectedItemsMod.push(id);

                            // Añadir el badge visualmente en la lista
                            $('#selectedList_mod').append(`
                                <span class="badge bg-primary me-2 selected-item" data-id="${id}">
                                    ${optionText} <span class="remove-item" style="cursor: pointer;">&times;</span>
                                </span>
                            `);

                            // Marcar la opción como seleccionada
                            $(`#actividad_economica_mod option[value="${id}"]`).prop('selected', true);
                        });

                        // Actualiza el input oculto para sincronizar
                        syncHiddenInputMod();

                        // Activa Select2 y muestra los valores seleccionados
                        $('#actividad_economica_mod').trigger('change');
                    } else {
                        console.warn("No se recibieron actividades económicas o el array está vacío.");
                    }
                } else {
                    console.warn("No se encontraron actividades económicas en dato_tributario.");
                } 

                $('#carga').hide();
                $('#ModalModificarCamara').modal('show');
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });

        $('#btn-close').on('click', function () {
            // Aquí puedes añadir la lógica para enviar el formulario modificado
            $('#ModalModificarCamara').modal('hide'); // Cerrar el modal después de guardar
        });

        // Función para cargar provincias
        function cargarProvincias(paisId) {
            return $.ajax({
                url: '/get-provincias',
                method: 'GET',
                data: { id_pais: paisId },
                success: function (response) {
                    let provincias = response.provincias;
                    let $provinciaSelect = $('#provincia_mod');
                    $provinciaSelect.empty().append('<option value="-1">Seleccionar</option>');

                    provincias.forEach(function (provincia) {
                        $provinciaSelect.append(`<option value="${provincia.id}">${provincia.nombre}</option>`);
                    });
                },
                error: function () {
                    alert('Hubo un error al cargar las provincias.');
                }
            });
        }

        // Función para cargar cantones
        function cargarCantones(paisId, provinciaId) {
            return $.ajax({
                url: '/get-cantones',
                method: 'GET',
                data: { id_pais: paisId, id_provincia: provinciaId },
                success: function (response) {
                    let cantones = response.cantones;
                    let $cantonSelect = $('#canton_mod');
                    $cantonSelect.empty().append('<option value="-1">Seleccionar</option>');

                    cantones.forEach(function (canton) {
                        $cantonSelect.append(`<option value="${canton.id}">${canton.nombre}</option>`);
                    });
                },
                error: function () {
                    alert('Hubo un error al cargar los cantones.');
                }
            });
        }

        // Función para cargar parroquias
        function cargarParroquias(paisId, provinciaId, cantonId) {
            return $.ajax({
                url: '/get-parroquias',
                method: 'GET',
                data: { id_pais: paisId, id_provincia: provinciaId, id_canton: cantonId },
                success: function (response) {
                    let parroquias = response.parroquias;
                    let $parroquiaSelect = $('#parroquia_mod');
                    $parroquiaSelect.empty().append('<option value="-1">Seleccionar</option>');

                    parroquias.forEach(function (parroquia) {
                        $parroquiaSelect.append(`<option value="${parroquia.id}">${parroquia.nombre}</option>`);
                    });
                },
                error: function () {
                    alert('Hubo un error al cargar las parroquias.');
                }
            });
        }


        $('#btn-modificar-camara').on('click', function () {

        //alert($('#hiddenSelectedItemsMod').val());
        //return;

            if ($('#fecha_inicio_actividades_mod').val() == "") {
                alert('Debe ingresar la Fecha de Ingreso de la Cámara');
                $('.nav-tabs a[href="#datos_generales_mod"]').tab('show');
                $('#fecha_inicio_actividades_mod').focus();
                return;
            }

            if (!/^\d{13}$/.test($('#ruc_mod').val())) {
                /*$("#error-ruc").show();
                isValid = false;*/
                $("#error-ruc-mod").show();
                alert('El RUC debe tener 13 dígitos');
                $('.nav-tabs a[href="#datos_generales_mod"]').tab('show');
                $('#ruc_mod').focus();
                return;
            }

            if ($('#razon_social_mod').val() == "") {
                alert('Debe ingresar la Razón Social');
                $('.nav-tabs a[href="#datos_generales_mod"]').tab('show');
                $('#razon_social_mod').focus();
                return;
            }

            if (!/^\d{10}$/.test($('#cedula_representante_legal_mod').val())) {
                /*$("#error-ruc").show();
                isValid = false;*/
                $("#error-cedula-mod").show();
                alert('La Cédula del Representante Legal debe tener 10 dígitos');
                $('.nav-tabs a[href="#datos_generales_mod"]').tab('show');
                $('#cedula_representante_legal_mod').focus();
                return;
            }

            if ($('#nombres_representante_legal_mod').val() == "") {
                alert('Debe ingresar los Nombres del Representante Legal');
                $('.nav-tabs a[href="#datos_generales_mod"]').tab('show');
                $('#nombres_representante_legal_mod').focus();
                return;
            }

            if ($('#apellidos_representante_legal_mod').val() == "") {
                alert('Debe ingresar los Apellidos del Representante Legal');
                $('.nav-tabs a[href="#datos_generales_mod"]').tab('show');
                $('#apellidos_representante_legal_mod').focus();
                return;
            }

            if ($('#telefono_representante_legal_mod').val() == "") {
                alert('Debe ingresar el Teléfono del Representante Legal');
                $('.nav-tabs a[href="#datos_generales_mod"]').tab('show');
                $('#telefono_representante_legal_mod').focus();
                return;
            }


            if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test($('#correo_representante_legal_mod').val())) {
                /*$("#error-correo").show();
                isValid = false;*/
                $("#error-correo-mod").show();
                alert('Debe registrar un correo con formato válido');
                $('.nav-tabs a[href="#datos_generales_mod"]').tab('show');
                $('#correo_representante_legal_mod').focus();
                return;
            }

            if ($('#cargo_representante_legal_mod').val() == "") {
                alert('Debe ingresar el Cargo del Representante Legal');
                $('.nav-tabs a[href="#datos_generales_mod"]').tab('show');
                $('#cargo_representante_legal_mod').focus();
                return;
            }

            if ($('#direccion_representante_legal_mod').val() == "") {
                alert('Debe ingresar la Dirección del Representante Legal');
                $('.nav-tabs a[href="#datos_generales_mod"]').tab('show');
                $('#direccion_representante_legal_mod').focus();
                return;
            }  

            if ($('#tipo_regimen_mod').val() == "-1") {
                alert('Debe seleccionar un Tipo de Régimen');
                $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show');
                $('#tipo_regimen_mod').focus();
                return;
            }
            
            if ($('#fecha_registro_mod').val() == "") {
                alert('Debe ingresar la Fecha de Registro de la Cámara');
                $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show');
                $('#fecha_registro_mod').focus();
                return;
            }

            if ($('#fecha_constitucion_mod').val() == "") {
                alert('Debe ingresar la Fecha de Constitución de la Cámara');
                $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show');
                $('#fecha_constitucion_mod').focus();
                return;
            }

            // Función para convertir una fecha en formato dd/mm/yyyy a objeto Date
            function convertirFechaAObjetoDate(fecha) {
                if (!fecha) return new Date('Invalid Date'); // Retorna una fecha inválida si la entrada es nula
                var partes = fecha.split('/'); // Divide la fecha por '/'
                return new Date(partes[2], partes[1] - 1, partes[0]); // Formato DD/MM/YYYY
            }

            // Validación de que la Fecha de Constitución sea menor a la Fecha de Registro
            var fechaConstitucion = $('#fecha_constitucion_mod').val();
            var fechaRegistro = $('#fecha_registro_mod').val();

            if (fechaConstitucion && fechaRegistro) {
                // Convertir las fechas al formato correcto
                var fechaConstitucionDate = convertirFechaAObjetoDate(fechaConstitucion);
                var fechaRegistroDate = convertirFechaAObjetoDate(fechaRegistro);

                // Validar si las fechas son válidas
                if (!isNaN(fechaConstitucionDate.getTime()) && !isNaN(fechaRegistroDate.getTime())) {
                    if (fechaConstitucionDate >= fechaRegistroDate) {
                        alert('La Fecha de Constitución debe ser menor a la Fecha de Registro');
                        $('#error-fecha-constitucion-mod').show();
                        $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show');
                        $('#fecha_constitucion_mod').focus();
                        return;
                    }
                } else {
                    alert('Una o ambas fechas no son válidas. Por favor, verifica los campos.');
                    return;
                }
            }

            if ($('#agente_retencion_mod').val() == "-1") {
                alert('Debe indicar si la Cámara es o no un Agente de Retención');
                $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show');
                $('#agente_retencion_mod').focus();
                return;
            }

            if ($('#contribuyente_especial_mod').val() == "-1") {
                alert('Debe indicar si la Cámara es o no un Contribuyente Especial');
                $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show');
                $('#contribuyente_especial_mod').focus();
                return;
            }

            if ($('#pais_mod').val() == "-1") {
                alert('Debe seleccionar el País');
                $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show');
                $('#pais_mod').focus();
                return;
            }

            if ($('#provincia_mod').val() == "-1") {
                alert('Debe seleccionar la Provincia');
                $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show');
                $('#provincia_mod').focus();
                return;
            }

            if ($('#canton_mod').val() == "-1") {
                alert('Debe seleccionar el Cantón');
                $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show');
                $('#canton_mod').focus();
                return;
            }

            if ($('#parroquia_mod').val() == "-1") {
                alert('Debe seleccionar la Parroquia');
                $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show');
                $('#parroquia_mod').focus();
                return;
            }

            if ($('#calle_mod').val() == "") {
                alert('Debe ingresar la Calle en la Dirección Tributaria');
                $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show');
                $('#calle_mod').focus();
                return;
            }

            if ($('#manzana_mod').val() == "") {
                alert('Debe ingresar la Manzana en la Dirección Tributaria');
                $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show');
                $('#manzana_mod').focus();
                return;
            }

            if ($('#numero_mod').val() == "") {
                alert('Debe ingresar el Número en la Dirección Tributaria');
                $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show');
                $('#numero_mod').focus();
                return;
            }

            if ($('#interseccion_mod').val() == "") {
                alert('Debe ingresar la Intersección en la Dirección Tributaria');
                $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show');
                $('#interseccion_mod').focus();
                return;
            }

            if ($('#referencia_mod').val() == "") {
                alert('Debe ingresar la Referencia en la Dirección Tributaria');
                $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show');
                $('#referencia_mod').focus();
                return;
            }

            if ($('#hiddenSelectedItemsMod').val() == "") {
                alert('Debe seleccionar al menos una Actividad Económica');
                $('.nav-tabs a[href="#datos_tributarios_mod"]').tab('show'); 
                $('#hiddenSelectedItemsMod').focus();
                return;
            }
            
            $('#carga').show();

            // Aquí puedes añadir la lógica para enviar el formulario modificado
            var formData = new FormData(document.getElementById("ModalModificarCamara"));
            $.ajax({
                url: "{{ route('admin.modificar_camara') }}",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(res){
                msg = JSON.parse(res).response.msg
                alert(msg);
                location.reload();
                $('#carga').hide();
            }).fail(function(res){
                console.log(res)
            });
            $('#carga').hide();
            $('#ModalModificarCamara').modal('hide'); // Cerrar el modal después de guardar
        });

        $(document).on('click', '.delete-establecimiento', function() {
            var button = $(this); 
            var establecimientoId = button.data('id'); 

            // Mostrar la confirmación antes de proceder con la eliminación
            var confirmDelete = confirm('¿Está seguro de que desea eliminar este registro?');

            if (confirmDelete) {
                $.ajax({
                    url: '/administrador/establecimiento/eliminar/' + establecimientoId,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}' // Asegúrate de incluir el token CSRF
                    },
                    success: function(response) {
                        alert('Registro eliminado correctamente.'); 
                        // Actualizar la interfaz, por ejemplo, recargando la página o eliminando el Cargo de la lista
                        location.reload(); // O cualquier otra lógica para actualizar la interfaz
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Hubo un problema al eliminar el Registro.');
                    }
                });
            } else {
                // El usuario canceló la eliminación
                console.log('Eliminación cancelada por el usuario.');
            }
        });

        $('#pais').change(function () {
            let paisId = $(this).val();

            if (paisId != -1) {
                $.ajax({
                    url: '/get-provincias', // Ruta para obtener las provincias
                    method: 'GET',
                    data: { id_pais: paisId },
                    success: function (response) {
                        let provincias = response.provincias;
                        let $provinciaSelect = $('#provincia');
                        let $cantonSelect = $('#canton');
                        let $parroquiaSelect = $('#parroquia');
                        
                        $provinciaSelect.empty(); // Limpiamos el select de provincias
                        $provinciaSelect.append('<option value="-1">Seleccionar</option>'); // Opción por defecto

                        $cantonSelect.empty(); // Limpiamos el select de provincias
                        $cantonSelect.append('<option value="-1">Seleccionar</option>'); // Opción por defecto
                        
                        $parroquiaSelect.empty(); // Limpiamos el select de provincias
                        $parroquiaSelect.append('<option value="-1">Seleccionar</option>'); // Opción por defecto

                        // Agregamos las provincias al select
                        provincias.forEach(function (provincia) {
                            $provinciaSelect.append(`<option value="${provincia.id}">${provincia.nombre}</option>`);
                        });
                    },
                    error: function () {
                        alert('Hubo un error al cargar las provincias.');
                    }
                });
            }
        });

        $('#provincia').change(function () {
            let paisId = $('#pais').val(); // ID del país seleccionado
            let provinciaId = $(this).val(); // ID de la provincia seleccionada

            if (paisId != -1 && provinciaId != -1) {
                $.ajax({
                    url: '/get-cantones', // Ruta para obtener los cantones
                    method: 'GET',
                    data: {
                        id_pais: paisId,      // Enviamos el ID del país
                        id_provincia: provinciaId // Enviamos el ID de la provincia
                    },
                    success: function (response) {
                        let cantones = response.cantones;
                        let $cantonSelect = $('#canton'); // Select de cantones
                        let $parroquiaSelect = $('#parroquia'); // Select de parroquias
                        
                        $cantonSelect.empty(); // Limpiamos el select de cantones
                        $parroquiaSelect.empty().append('<option value="-1">Seleccionar</option>'); // Limpiamos parroquias

                        $cantonSelect.append('<option value="-1">Seleccionar</option>'); // Opción por defecto

                        // Agregamos los cantones al select
                        cantones.forEach(function (canton) {
                            $cantonSelect.append(`<option value="${canton.id}">${canton.nombre}</option>`);
                        });
                    },
                    error: function () {
                        alert('Hubo un error al cargar los cantones.');
                    }
                });
            } else {
                $('#canton').empty().append('<option value="-1">Seleccionar</option>'); // Limpiar select de cantones
                $('#parroquia').empty().append('<option value="-1">Seleccionar</option>'); // Limpiar select de parroquias
            }
        });

        $('#canton').change(function () {
            let paisId = $('#pais').val(); // ID del país seleccionado
            let provinciaId = $('#provincia').val(); // ID de la provincia seleccionada
            let cantonId = $(this).val(); // ID del cantón seleccionado

            if (paisId != -1 && provinciaId != -1 && cantonId != -1) {
                $.ajax({
                    url: '/get-parroquias', // Ruta para obtener las parroquias
                    method: 'GET',
                    data: {
                        id_pais: paisId,      // Enviamos el ID del país
                        id_provincia: provinciaId, // Enviamos el ID de la provincia
                        id_canton: cantonId  // Enviamos el ID del cantón
                    },
                    success: function (response) {
                        let parroquias = response.parroquias; // Asegúrate de usar el nombre correcto en el JSON de respuesta
                        let $parroquiaSelect = $('#parroquia'); // Select de parroquias
                        
                        $parroquiaSelect.empty(); // Limpiamos el select de parroquias
                        $parroquiaSelect.append('<option value="-1">Seleccionar</option>'); // Opción por defecto

                        // Agregamos las parroquias al select
                        parroquias.forEach(function (parroquia) {
                            $parroquiaSelect.append(`<option value="${parroquia.id}">${parroquia.nombre}</option>`);
                        });
                    },
                    error: function () {
                        alert('Hubo un error al cargar las parroquias.');
                    }
                });
            } else {
                $('#parroquia').empty().append('<option value="-1">Seleccionar</option>'); // Limpiar select de parroquias
            }
        });
 
    });

</script>
@endsection  