@extends('dashboard')

@section('pagename')
Obligaciones por Entidad
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
                    <h2 class="card-title">Gestión de Obligaciones por Entidad</h2>
                </header>
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">  
                                <div class="row">
                                    <div class="col-md-12">   
                                        <select id="entidad" name="entidad" data-plugin-selectTwo class="form-control populate">
                                            <option value="-1">Seleccionar Entidad</option>
                                            @foreach($entidades as $id => $descripcion)
                                                <option value="{{ $id }}">{{ $descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div> 
                                </div> 
                            </div>  
                            <div class="col-md-6"> 
                                <div class="row">
                                    <div class="col-md-12">   
                                        <!-- <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalEstablecimiento">Agregar Nuevo Registro</button> -->
                                        <button id="abrirModal" class="btn btn-primary mb-3">Agregar Nueva Obligación</button>
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
                    </div>    
                </div> 
            </section> 
        </div> 
    </div>
</div>
<!-- Jbuestan Modales -->
<form enctype="multipart/form-data" class="modal fade" id="ModalObligacion" tabindex="-1" aria-labelledby="ModalObligacionLabel" aria-hidden="true">
    @csrf
    <div class="modal-dialog modal-xl"> 
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalObligacionLabel"><b>Agregar una nueva Obligación a la Entidad</b></h5> 
            </div>
            <div class="modal-body">
                <div class="form-group">  
                    <div class="row">
                        <div class="col-lg-6">
                            <p><strong>Entidad Seleccionada:</strong> <span id="nombreEntidadSeleccionada"></span></p> 
                            <!-- Campo oculto para enviar el valor de la entidad --> 
                            <input type="hidden" id="entidad_id" name="entidad_id" value="">
                            <input type="hidden" id="obligacion_id" name="obligacion_id" value="">
                        </div>
                        <div class="col-lg-3">  
                            &nbsp;
                        </div> 
                        <div class="col-lg-3 text-end">  
                            <button type="button" id="agregarObligacion" class="btn btn-primary mb-3">Agregar Obligación</button>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-2">  
                            Nombre
                        </div> 
                        <div class="col-md-10">  
                            <input type="text" class="form-control" name="obligacion" disabled id="obligacion" placeholder="Obligación"> 
                        </div>  
                    </div>  
                    <div class="row">
                        &nbsp;
                    </div> 
                    <div class="row">
                        <div class="col-md-2">  
                            Tiempo de Presentación
                        </div> 
                        <div class="col-md-4">  
                            <select id="tiempo_presentacion" name="tiempo_presentacion" disabled class="form-control populate">
                                <option value="-1">Seleccionar</option>
                                @foreach($tiempo_presentacion as $id => $nombre)
                                    <option value="{{ $id }}">
                                        {{ $nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div> 
                        <div class="col-md-2">  
                            Fecha de Presentación
                        </div> 
                        <div class="col-md-4">  
                            <input type="text" data-plugin-datepicker class="form-control" disabled name="fecha_presentacion" id="fecha_presentacion" placeholder="Fecha de Presentación">
                        </div> 
                    </div> 
                    <div class="row">
                        &nbsp;
                    </div>   
                    <div class="row">
                        <div class="col-md-2">  
                            Tipo de Presentación
                        </div> 
                        <div class="col-md-4">  
                            <select id="tipo_presentacion" name="tipo_presentacion" disabled class="form-control populate">
                                <option value="-1">Seleccionar</option>
                                @foreach($tipo_presentacion as $id => $nombre)
                                    <option value="{{ $id }}">
                                        {{ $nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div> 
                        <div class="col-md-2">  
                            Fecha de Inicio
                        </div> 
                        <div class="col-md-4">  
                        <input type="text" data-plugin-datepicker class="form-control" disabled name="fecha_inicio" id="fecha_inicio" placeholder="Fecha de Inicio">
                        </div> 
                    </div> 
                    <div class="row">
                        <div class="col-md-12">
                            &nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped mb-0" id="dataTableObligaciones"> 
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
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> -->
                <button type="button" class="btn btn-secondary cerrar-modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="btn-register-obligacion">Guardar</button>
            </div>
        </div>
    </div>
</form>  

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
 
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>     

<script>

$(document).ready(function(){ 

    //alert($('#camara').val());
    let establecimientos = [];
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
            url: "{{ route('admin.obtener_listado_obligaciones_por_entidad') }}",
            type: "GET",
            data: function (d) {
                d.start = d.start || 0;
                d.length = d.length || 10;
                d.id_entidad = $('#entidad').val(); // Enviar el valor de localidad seleccionada
            },
            error: function (error) {
                console.error("Error al cargar los datos: ", error);
            },
            complete: function(response) {
                establecimientos = response.responseJSON.data;
                Swal.close();
            },
        },
        pageLength: 10, // Establece el número de registros por página
        columns: [
            { data: 'obligacion', width: '50%' },   
            { data: 'tiempo_presentacion', width: '15%' } ,  
            { data: 'tipo_presentacion', width: '15%' } , 
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

    // Escuchar el evento change del select de cámaras
    $('#entidad').change(function () {
        var selectedEntidad = $(this).val();

        if (selectedEntidad === '-1') {
            alert('Por favor selecciona una cámara válida.');
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


    $('#abrirModal').click(function (e) {
        e.preventDefault(); // Evita el comportamiento predeterminado del botón

        // Verificar si se seleccionó una opción válida en el select
        var entidadSeleccionada = $('#entidad').val();
        var nombreEntidadSeleccionada = $('#entidad option:selected').text();

        if (entidadSeleccionada === '-1') {
            alert('Por favor, selecciona una Entidad para poder registrar una Obligación');
        } else {
            // Mostrar el nombre de la cámara seleccionada en el modal
            $('#nombreEntidadSeleccionada').text(nombreEntidadSeleccionada); 
            // Cargar el valor de la cámara en el campo oculto
            $('#entidad_id').val(entidadSeleccionada); 
            // Abrir el modal

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
            var table = $('#dataTableObligaciones').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.obtener_listado_obligaciones') }}",
                    type: "GET",
                    data: function (d) {
                        d.start = d.start || 0;
                        d.length = d.length || 10;
                        d.tipo_boton = 2; // Enviar el valor de localidad seleccionada
                    },
                    error: function (error) {
                        console.error("Error al cargar los datos: ", error);
                    },
                    complete: function(response) {
                        establecimientos = response.responseJSON.data;
                        Swal.close();
                    },
                },
                pageLength: 10, // Establece el número de registros por página
                columns: [
                    { data: 'obligacion', width: '50%' },   
                    { data: 'tiempo_presentacion', width: '15%' } ,  
                    { data: 'tipo_presentacion', width: '15%' } , 
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
            
            $('#ModalObligacion').modal('show');
        }
    });

     // Cerrar el modal manualmente
    $('.cerrar-modal').click(function () {
        $('#ModalObligacion').modal('hide'); // Cerrar el modal
    }); 

    //Manejo de Uppercase
    $('#nombre_comercial').on('input', function() {
        // Convierte el valor del campo a mayúsculas
        $(this).val($(this).val().toUpperCase());
    });  
        
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

    $('#fecha_presentacion').datepicker('destroy').datepicker({
        format: 'dd/mm/yyyy', // Define el formato de fecha
        autoclose: true,      // Cierra automáticamente al seleccionar
        todayHighlight: true, // Resalta la fecha actual
        language: 'es'        // Asegúrate de establecer el idioma correcto
    });

    $('#fecha_inicio').datepicker('destroy').datepicker({
        format: 'dd/mm/yyyy', // Define el formato de fecha
        autoclose: true,      // Cierra automáticamente al seleccionar
        todayHighlight: true, // Resalta la fecha actual
        language: 'es'        // Asegúrate de establecer el idioma correcto
    });

    $(document).on('click', '.seleccionar-obligacion', function() {
        var button = $(this); 
        var obligacionId = button.data('id'); 
    
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

        $.ajax({
            url: '/administrador/obligacion/detalle/' + obligacionId,
            method: 'GET',
            success: function(response) {
                console.log('Datos recibidos:', response);

                var obligacionId = $('#obligacion_id');
                var Obligacion = $('#obligacion');   
                var tiempoPresentacion = $('#tiempo_presentacion'); 
                var fechaPresentacion = $('#fecha_presentacion'); 
                var tipoPresentacion = $('#tipo_presentacion');  
                var fechaInicio = $('#fecha_inicio');   

                obligacionId.val(response.id); 
                Obligacion.val(response.obligacion); 
                tiempoPresentacion.val(response.id_tiempo_presentacion); 
                //fechaPresentacion.val(response.fecha_presentacion); 
                tipoPresentacion.val(response.id_tipo_presentacion); 
                //fechaInicio.val(response.fecha_inicio);   

                // Deshabilitar o habilitar los selects según el valor
                //alert(response.id_tiempo_presentacion);
                if (response.id_tiempo_presentacion === 1) { // General

                    $('#fecha_presentacion').prop('disabled', false);  
                    $('#fecha_inicio').prop('disabled', true); 

                } else if (response.id_tiempo_presentacion === 2) { // Local

                    $('#fecha_presentacion').prop('disabled', true);    
                    $('#fecha_inicio').prop('disabled', false); 

                }
                
                //$('#carga').hide();
                //$('#ModalModificarObligacion').modal('show');
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            },
            complete: function(response) {
                establecimientos = response.responseJSON.data;
                Swal.close();
            },
        }); 
    });

    $("#agregarObligacion").click(function() {

        if ($('#obligacion_id').val() == "") {
            alert('Debe debe seleccionar una Obligación'); 
            return;
        }
        
        if ($('#tiempo_presentacion').val() == "1") {
            if ($('#fecha_presentacion').val() == "") {
                alert('Debe ingresar la Fecha de Presentación'); 
                $('#fecha_presentacion').focus();
                return;
            }
        }

        if ($('#tiempo_presentacion').val() == "2") {
            if ($('#fecha_inicio').val() == "") {
                alert('Debe ingresar la Fecha de Inicio'); 
                $('#fecha_inicio').focus();
                return;
            }
        }

         
        var formData = new FormData(document.getElementById("ModalObligacion"));
        $('#carga').show();

        $.ajax({
            url: "{{ route('admin.registrar_obligacion_entidad') }}",
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
                alert("Ocurrió un error al registrar la Obligación.");
            }

            console.log(res.responseText); // Muestra el error completo en la consola para depuración
        });
    });
 
 
});

</script>
@endsection