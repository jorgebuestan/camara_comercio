@extends('dashboard')

@section('pagename')
Reporte de Socios por Cámara
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
                    <h2 class="card-title">Reporte de Socios por Cámara</h2>
                </header>
                <div class="card-body">
                        <div class="row">
                            <div class="col-8">  
                                <div class="row">
                                    <div class="col-md-9">   
                                    <select id="camara" name="camara" class="form-control populate"
                                            @if (!$isAdmin) disabled @endif>
                                            @if ($isAdmin)
                                                <option value="-1">Seleccionar Cámara</option>
                                            @endif
                                            @foreach ($camarasSelect as $id => $descripcion)
                                                <option value={{ $id }}>{{ $descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div> 
                                </div> 
                            </div>
                            <div class="col-2 text-end">  
                                <button id="btnExportExcel" class="btn btn-success">Exportar a Excel</button>
                            </div>   
                            <div class="col-2 text-end">  
                                <button id="btnExportPDF" class="btn btn-success"><i class='bx bxs-file-pdf'></i>Exportar a PDF</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">  &nbsp;
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

                                        <h2 class="card-title">Listado de Socios Registrados por Cámara</h2>
                                    </header>
                                    <div class="card-body"> 
                                        <table class="table table-bordered table-striped mb-0" id="dataTable"> 
                                            <thead>
                                                <tr>
                                                    <th>Cámara</th>
                                                    <th>Fecha Afiliación</th>
                                                    <th>Identificación</th>
                                                    <th>Socio</th>
                                                    <th>Tipo de Personería</th> 
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
            url: "{{ route('admin.obtener_listado_socios_camaras') }}",
            type: "GET",
            data: function (d) {
                d.start = d.start || 0;
                d.length = d.length || 10;
                d.id_camara = $('#camara').val(); // Enviar el valor de localidad seleccionada
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
            { data: 'camara', width: '15%' }, 
            { data: 'fecha_afiliacion', width: '15%' },   
            { data: 'identificacion', width: '15%' }, 
            { data: 'socio', width: '40%' } ,  
            { data: 'tipo_personeria', width: '15%' }  
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
    $('#camara').change(function () {
        var selectedEntidad = $(this).val();
        //alert(selectedEntidad);

        if (selectedEntidad === "-1") {
            //alert('Por favor selecciona una cámara válida.');
            /*Swal.fire({ 
                icon: 'error',
                title: 'Error',
                text: 'Por favor selecciona una cámara válida.',
                confirmButtonText: 'Aceptar',
                allowOutsideClick: false
            });*/
            Swal.fire({
                title: 'Cargando',
                text: 'Por favor espere',
                icon: 'info',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading()
                }
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

    $('#fecha_presentacion_mod').datepicker('destroy').datepicker({
        format: 'dd/mm/yyyy', // Define el formato de fecha
        autoclose: true,      // Cierra automáticamente al seleccionar
        todayHighlight: true, // Resalta la fecha actual
        language: 'es'        // Asegúrate de establecer el idioma correcto
    });

    $('#fecha_inicio_mod').datepicker('destroy').datepicker({
        format: 'dd/mm/yyyy', // Define el formato de fecha
        autoclose: true,      // Cierra automáticamente al seleccionar
        todayHighlight: true, // Resalta la fecha actual
        language: 'es'        // Asegúrate de establecer el idioma correcto
    });

    
    $('#fecha_afiliacion').datepicker('destroy').datepicker({
        format: 'dd/mm/yyyy', // Define el formato de fecha
        autoclose: true,      // Cierra automáticamente al seleccionar
        todayHighlight: true, // Resalta la fecha actual
        language: 'es'        // Asegúrate de establecer el idioma correcto
    });

    $('#fecha_afiliacion_mod').datepicker('destroy').datepicker({
        format: 'dd/mm/yyyy', // Define el formato de fecha
        autoclose: true,      // Cierra automáticamente al seleccionar
        todayHighlight: true, // Resalta la fecha actual
        language: 'es'        // Asegúrate de establecer el idioma correcto
    });

    $('#btnExportExcel').on('click', function() {
        var camara = $('#camara').val(); 

        var url = "{{ route('admin.exportar_excel_socios_por_camara') }}" + 
                "?camara=" + encodeURIComponent(camara);

        window.location.href = url;
    });

    $('#btnExportPDF').on('click', function() {
        var camara = $('#camara').val(); // Obtener el valor del filtro

        // Construir la URL con el parámetro
        var url = "{{ route('admin.exportar_pdf_socios_por_camara') }}" + 
                "?camara=" + encodeURIComponent(camara);

        // Redireccionar a la URL
        window.location.href = url;
    }); 
 
}); 

</script>
@endsection