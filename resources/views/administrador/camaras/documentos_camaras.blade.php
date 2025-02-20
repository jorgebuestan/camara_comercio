@extends('dashboard')

@section('pagename')
Documentos registrados por Cámara
@endsection

@section('content') 
<style>
    .rowborder {
      margin: 20px; /* Establece el margen deseado */
      padding: 10px; /* Añade un relleno interno para separar el contenido del margen */
      border: 2px solid #ccc; /* Añade un borde para crear el efecto rectangular */
      border-radius: 10px; /* Agrega bordes circulares en las esquinas */
      box-sizing: border-box; /* Incluye el borde y el relleno en el tamaño total del elemento */
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-11 text-end">
            &nbsp;
        </div> 
        <div class="col-lg-1">
            <a href="{{ route('dashboard') }}" id="videoLink">
                <button type="button" class="mb-1 mt-1 me-1 btn btn-primary" id="next_video" disabled>Regresar</button>
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
                    <h2 class="card-title">Adjunta los siguientes Documentos para la Cámara</h2>
                </header>
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-6"> 
                                <div class="row">
                                    <div class="col-md-3">  
                                        Escrituras
                                    </div>
                                    <div class="col-md-9">   
                                        <div class="rowborder">
                                            @if(count($escrituras) == 0)  
                                                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalEscritura">Agregar</button>
                                            @else 
                                                <div class="row">
                                                    <div class="col-md-3"> 
                                                        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalEscritura">Agregar</button>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                        {{ count($escrituras) }} Documento(s) cargado(s)
                                                    </div>
                                                </div> 
                                                @foreach ($escrituras as $key => $item) 
                                                    <div class="row">
                                                            <div class="col-md-12"> 
                                                                {{ $item->titulo }}
                                                            </div>
                                                        </div>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <button type="button" class="btn btn-info" onclick="showFile('{{ $item->id }}')">Ver</button> 
                                                        </div> 
                                                        <div class="col-md-3">    
                                                            <button type="button" class="btn btn-danger" onclick="deleteArchivo('{{ $item->id }}')">Eliminar</button>
                                                        </div>
                                                    </div> 
                                                    @if(count($escrituras) > 1) 
                                                        <div class="row">
                                                            <div class="col-md-12"> 
                                                                &nbsp;
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach   
                                            @endif
                                        </div> 		 
                                    </div>
                                </div> 
                            </div> 
                            <div class="col-md-6"> 
                                <div class="row">
                                    <div class="col-md-3">  
                                        Estatutos
                                    </div>
                                    <div class="col-md-9">   
                                        <div class="rowborder">
                                            @if(count($estatutos) == 0)  
                                                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalEstatuto">Agregar</button>
                                            @else 
                                                <div class="row">
                                                    <div class="col-md-3"> 
                                                        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalEstatuto">Agregar</button>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                        {{ count($estatutos) }} Documento(s) cargado(s)
                                                    </div>
                                                </div> 
                                                @foreach ($estatutos as $key => $item) 
                                                    <div class="row">
                                                            <div class="col-md-12"> 
                                                                {{ $item->titulo }}
                                                            </div>
                                                        </div>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <button type="button" class="btn btn-info" onclick="showFile('{{ $item->id }}')">Ver</button> 
                                                        </div> 
                                                        <div class="col-md-3">    
                                                            <button type="button" class="btn btn-danger" onclick="deleteArchivo('{{ $item->id }}')">Eliminar</button>
                                                        </div>
                                                    </div> 
                                                    @if(count($estatutos) > 1) 
                                                        <div class="row">
                                                            <div class="col-md-12"> 
                                                                &nbsp;
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach   
                                            @endif
                                        </div> 		 
                                    </div>
                                </div> 
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-6"> 
                                <div class="row">
                                    <div class="col-md-3">  
                                        Nombramiento
                                    </div>
                                    <div class="col-md-9">   
                                        <div class="rowborder">
                                            @if(count($nombramiento) == 0)  
                                                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalNombramiento">Agregar</button>
                                            @else 
                                                <div class="row">
                                                    <div class="col-md-3"> 
                                                        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalNombramiento">Agregar</button>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                        {{ count($nombramiento) }} Documento(s) cargado(s)
                                                    </div>
                                                </div> 
                                                @foreach ($nombramiento as $key => $item) 
                                                    <div class="row">
                                                            <div class="col-md-12"> 
                                                                {{ $item->titulo }}
                                                            </div>
                                                        </div>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <button type="button" class="btn btn-info" onclick="showFile('{{ $item->id }}')">Ver</button> 
                                                        </div> 
                                                        <div class="col-md-3">    
                                                            <button type="button" class="btn btn-danger" onclick="deleteArchivo('{{ $item->id }}')">Eliminar</button>
                                                        </div>
                                                    </div> 
                                                    @if(count($nombramiento) > 1) 
                                                        <div class="row">
                                                            <div class="col-md-12"> 
                                                                &nbsp;
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach   
                                            @endif
                                        </div> 		 
                                    </div>
                                </div> 
                            </div> 
                            <div class="col-md-6"> 
                                <div class="row">
                                    <div class="col-md-3">  
                                        RUC
                                    </div>
                                    <div class="col-md-9">   
                                        <div class="rowborder">
                                            @if(count($ruc) == 0)  
                                                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalRuc">Agregar</button>
                                            @else 
                                                <div class="row">
                                                    <div class="col-md-3"> 
                                                        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalRuc">Agregar</button>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                        {{ count($ruc) }} Documento(s) cargado(s)
                                                    </div>
                                                </div> 
                                                @foreach ($ruc as $key => $item) 
                                                    <div class="row">
                                                            <div class="col-md-12"> 
                                                                {{ $item->titulo }}
                                                            </div>
                                                        </div>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <button type="button" class="btn btn-info" onclick="showFile('{{ $item->id }}')">Ver</button> 
                                                        </div> 
                                                        <div class="col-md-3">    
                                                            <button type="button" class="btn btn-danger" onclick="deleteArchivo('{{ $item->id }}')">Eliminar</button>
                                                        </div>
                                                    </div> 
                                                    @if(count($ruc) > 1) 
                                                        <div class="row">
                                                            <div class="col-md-12"> 
                                                                &nbsp;
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach   
                                            @endif
                                        </div> 		 
                                    </div>
                                </div> 
                            </div> 
                        </div> 
                        <div class="row">
                            <div class="col-md-6"> 
                                <div class="row">
                                    <div class="col-md-3">  
                                        Varios
                                    </div>
                                    <div class="col-md-9">   
                                        <div class="rowborder">
                                            @if(count($varios) == 0)  
                                                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalVarios">Agregar</button>
                                            @else 
                                                <div class="row">
                                                    <div class="col-md-3"> 
                                                        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalVarios">Agregar</button>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                        {{ count($varios) }} Documento(s) cargado(s)
                                                    </div>
                                                </div> 
                                                @foreach ($varios as $key => $item) 
                                                    <div class="row">
                                                            <div class="col-md-12"> 
                                                                {{ $item->titulo }}
                                                            </div>
                                                        </div>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <button type="button" class="btn btn-info" onclick="showFile('{{ $item->id }}')">Ver</button> 
                                                        </div> 
                                                        <div class="col-md-3">    
                                                            <button type="button" class="btn btn-danger" onclick="deleteArchivo('{{ $item->id }}')">Eliminar</button>
                                                        </div>
                                                    </div> 
                                                    @if(count($varios) > 1) 
                                                        <div class="row">
                                                            <div class="col-md-12"> 
                                                                &nbsp;
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach   
                                            @endif
                                        </div> 		 
                                    </div>
                                </div> 
                            </div> 
                            <div class="col-md-6"> 
                                <div class="row">
                                    <div class="col-md-12">  
                                        &nbsp;
                                    </div> 
                                </div> 
                            </div> 
                        </div>      
                        <div class="row">
                            <div class="col-md-6"> 
                                &nbsp;
                            </div> 
                            <div class="col-md-6"> 
                                &nbsp;
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
        <form enctype="multipart/form-data" class="modal fade" id="ModalEscritura" tabindex="-1" aria-labelledby="ModalEscrituraLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalEscrituraLabel">Escritura de Cámara</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nombreArchivo">Nombre del Archivo</label>
                            <input type="text" class="form-control" id="nombreArchivo" name="nombreArchivo">

                        </div> 
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Archivo</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                            <input type="hidden" name="tipoDoc" value="2"> 
                            <input type="hidden" name="id_camara"  id="id_camara" value="{{ $camara[0]['id']}}">
                        </div>
                        <div class="form-group">
                            Escritura de Cámara
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>&nbsp;
                        <button type="button" class="btn btn-primary" id="btn-register-escritura">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalEstatuto" tabindex="-1" aria-labelledby="ModalEstatutoLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalEstatutoLabel">Estatuto de Cámara</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body"> 
                        <div class="form-group">
                            <label for="nombreArchivo">Nombre del Archivo</label>
                            <input type="text" class="form-control" id="nombreArchivo" name="nombreArchivo">

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Archivo</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                            <input type="hidden" name="tipoDoc" value="3">
                            <input type="hidden" name="id_camara"  id="id_camara" value="{{ $camara[0]['id']}}">
                        </div>
                        <div class="form-group">
                            Estatuto de Cámara
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>&nbsp;
                        <button type="button" class="btn btn-primary" id="btn-register-estatuto">Guardar</button>
                    </div>
                </div>
            </div>
        </form>      

        <form enctype="multipart/form-data" class="modal fade" id="ModalNombramiento" tabindex="-1" aria-labelledby="ModalNombramientoLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalNombramientoLabel">Nombramiento de Cámara</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body"> 
                        <div class="form-group">
                            <label for="nombreArchivo">Nombre del Archivo</label>
                            <input type="text" class="form-control" id="nombreArchivo" name="nombreArchivo">

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Archivo</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                            <input type="hidden" name="tipoDoc" value="5">
                            <input type="hidden" name="id_camara"  id="id_camara" value="{{ $camara[0]['id']}}">
                        </div>
                        <div class="form-group">
                            Nombramiento de Cámara
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>&nbsp;
                        <button type="button" class="btn btn-primary" id="btn-register-nombramiento">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalRuc" tabindex="-1" aria-labelledby="ModalRucLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalRucLabel">Ruc de Cámara</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body"> 
                        <div class="form-group">
                            <label for="nombreArchivo">Nombre del Archivo</label>
                            <input type="text" class="form-control" id="nombreArchivo" name="nombreArchivo">

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Archivo</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                            <input type="hidden" name="tipoDoc" value="6">
                            <input type="hidden" name="id_camara"  id="id_camara" value="{{ $camara[0]['id']}}">
                        </div>
                        <div class="form-group">
                            Ruc de Cámara
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>&nbsp;
                        <button type="button" class="btn btn-primary" id="btn-register-ruc">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalVarios" tabindex="-1" aria-labelledby="ModalVariosLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalVariosLabel">Documentos Varios de Cámara</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body"> 
                        <div class="form-group">
                            <label for="nombreArchivo">Nombre del Archivo</label>
                            <input type="text" class="form-control" id="nombreArchivo" name="nombreArchivo">

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Archivo</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                            <input type="hidden" name="tipoDoc" value="8">
                            <input type="hidden" name="id_camara"  id="id_camara" value="{{ $camara[0]['id']}}">
                        </div>
                        <div class="form-group">
                            Documentos Varios de Cámara
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>&nbsp;
                        <button type="button" class="btn btn-primary" id="btn-register-varios">Guardar</button>
                    </div>
                </div>
            </div>
        </form>    
   
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function modalEdit(id,tit,est,cod){
            $('#title-edit').val(tit);
            $('#state-edit').val(est);
            $('#thesis_id').val(id);
            $('#thesis_code').val(cod);
        }
    </script>

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script> 

        //jbuestan
        $("#btn-register-escritura").click(function() {
            var formData = new FormData(document.getElementById("ModalEscritura"));
            
            // Cerrar el modal antes de enviar la solicitud 
            
            // Mostrar mensaje de carga mientras la solicitud está en curso
            Swal.fire({
                target: document.getElementById('ModalEscritura'),
                title: 'Cargando...',
                text: 'Por favor espere, estamos procesando su solicitud.',
                allowOutsideClick: false, // Evitar que el usuario cierre el modal o la alerta
                didOpen: () => {
                    Swal.showLoading(); // Mostrar el icono de carga
                }
            });

            $.ajax({
                url: "{{ route('admin.registrar_documento_camara') }}",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(res) {
                // Obtener el mensaje de respuesta
                let msg = JSON.parse(res).response.msg;
                
                // Mostrar mensaje de éxito
                Swal.fire({
                    target: document.getElementById('ModalEscritura'),
                    icon: 'success',
                    title: '¡Éxito!',
                    text: msg,
                    confirmButtonText: 'Aceptar'
                }).then(() => {
                    // Recargar la página si es necesario o realizar alguna otra acción
                    location.reload();
                });
            }).fail(function(res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje de error
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";

                    // Mostrar mensaje de error
                    Swal.fire({
                        target: document.getElementById('ModalEscritura'),
                        icon: 'error',
                        title: 'Error',
                        text: errorMsg,
                        confirmButtonText: 'Aceptar'
                    }).then(() => {
                        // Si hubo un error, reabrir el modal para que el usuario corrija la acción
                        $('#ModalEscritura').modal('show');
                    });
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    Swal.fire({
                        target: document.getElementById('ModalEscritura'),
                        icon: 'error',
                        title: 'Error',
                        text: "Ocurrió un error al procesar la solicitud.",
                        confirmButtonText: 'Aceptar'
                    }).then(() => {
                        // Si hubo un error, reabrir el modal para que el usuario corrija la acción
                        $('#ModalEscritura').modal('show');
                    });
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        }); 
        
        $("#btn-register-estatuto").click(function() {
            var formData = new FormData(document.getElementById("ModalEstatuto"));
            
            // Cerrar el modal antes de enviar la solicitud 
            
            // Mostrar mensaje de carga mientras la solicitud está en curso
            Swal.fire({
                target: document.getElementById('ModalEstatuto'),
                title: 'Cargando...',
                text: 'Por favor espere, estamos procesando su solicitud.',
                allowOutsideClick: false, // Evitar que el usuario cierre el modal o la alerta
                didOpen: () => {
                    Swal.showLoading(); // Mostrar el icono de carga
                }
            });

            $.ajax({
                url: "{{ route('admin.registrar_documento_camara') }}",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(res) {
                // Obtener el mensaje de respuesta
                let msg = JSON.parse(res).response.msg;
                
                // Mostrar mensaje de éxito
                Swal.fire({
                    target: document.getElementById('ModalEstatuto'),
                    icon: 'success',
                    title: '¡Éxito!',
                    text: msg,
                    confirmButtonText: 'Aceptar'
                }).then(() => {
                    // Recargar la página si es necesario o realizar alguna otra acción
                    location.reload();
                });
            }).fail(function(res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje de error
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";

                    // Mostrar mensaje de error
                    Swal.fire({
                        target: document.getElementById('ModalEstatuto'),
                        icon: 'error',
                        title: 'Error',
                        text: errorMsg,
                        confirmButtonText: 'Aceptar'
                    }).then(() => {
                        // Si hubo un error, reabrir el modal para que el usuario corrija la acción
                        $('#ModalEstatuto').modal('show');
                    });
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    Swal.fire({
                        target: document.getElementById('ModalEstatuto'),
                        icon: 'error',
                        title: 'Error',
                        text: "Ocurrió un error al procesar la solicitud.",
                        confirmButtonText: 'Aceptar'
                    }).then(() => {
                        // Si hubo un error, reabrir el modal para que el usuario corrija la acción
                        $('#ModalEstatuto').modal('show');
                    });
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        }); 

        $("#btn-register-nombramiento").click(function() {
            var formData = new FormData(document.getElementById("ModalNombramiento"));
            
            // Cerrar el modal antes de enviar la solicitud 
            
            // Mostrar mensaje de carga mientras la solicitud está en curso
            Swal.fire({
                target: document.getElementById('ModalNombramiento'),
                title: 'Cargando...',
                text: 'Por favor espere, estamos procesando su solicitud.',
                allowOutsideClick: false, // Evitar que el usuario cierre el modal o la alerta
                didOpen: () => {
                    Swal.showLoading(); // Mostrar el icono de carga
                }
            });

            $.ajax({
                url: "{{ route('admin.registrar_documento_camara') }}",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(res) {
                // Obtener el mensaje de respuesta
                let msg = JSON.parse(res).response.msg;
                
                // Mostrar mensaje de éxito
                Swal.fire({
                    target: document.getElementById('ModalNombramiento'),
                    icon: 'success',
                    title: '¡Éxito!',
                    text: msg,
                    confirmButtonText: 'Aceptar'
                }).then(() => {
                    // Recargar la página si es necesario o realizar alguna otra acción
                    location.reload();
                });
            }).fail(function(res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje de error
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";

                    // Mostrar mensaje de error
                    Swal.fire({
                        target: document.getElementById('ModalNombramiento'),
                        icon: 'error',
                        title: 'Error',
                        text: errorMsg,
                        confirmButtonText: 'Aceptar'
                    }).then(() => {
                        // Si hubo un error, reabrir el modal para que el usuario corrija la acción
                        $('#ModalNombramiento').modal('show');
                    });
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    Swal.fire({
                        target: document.getElementById('ModalNombramiento'),
                        icon: 'error',
                        title: 'Error',
                        text: "Ocurrió un error al procesar la solicitud.",
                        confirmButtonText: 'Aceptar'
                    }).then(() => {
                        // Si hubo un error, reabrir el modal para que el usuario corrija la acción
                        $('#ModalNombramiento').modal('show');
                    });
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        }); 

        $("#btn-register-ruc").click(function() {
            var formData = new FormData(document.getElementById("ModalRuc"));
            
            // Cerrar el modal antes de enviar la solicitud 
            
            // Mostrar mensaje de carga mientras la solicitud está en curso
            Swal.fire({
                target: document.getElementById('ModalRuc'),
                title: 'Cargando...',
                text: 'Por favor espere, estamos procesando su solicitud.',
                allowOutsideClick: false, // Evitar que el usuario cierre el modal o la alerta
                didOpen: () => {
                    Swal.showLoading(); // Mostrar el icono de carga
                }
            });

            $.ajax({
                url: "{{ route('admin.registrar_documento_camara') }}",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(res) {
                // Obtener el mensaje de respuesta
                let msg = JSON.parse(res).response.msg;
                
                // Mostrar mensaje de éxito
                Swal.fire({
                    target: document.getElementById('ModalRuc'),
                    icon: 'success',
                    title: '¡Éxito!',
                    text: msg,
                    confirmButtonText: 'Aceptar'
                }).then(() => {
                    // Recargar la página si es necesario o realizar alguna otra acción
                    location.reload();
                });
            }).fail(function(res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje de error
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";

                    // Mostrar mensaje de error
                    Swal.fire({
                        target: document.getElementById('ModalRuc'),
                        icon: 'error',
                        title: 'Error',
                        text: errorMsg,
                        confirmButtonText: 'Aceptar'
                    }).then(() => {
                        // Si hubo un error, reabrir el modal para que el usuario corrija la acción
                        $('#ModalRuc').modal('show');
                    });
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    Swal.fire({
                        target: document.getElementById('ModalRuc'),
                        icon: 'error',
                        title: 'Error',
                        text: "Ocurrió un error al procesar la solicitud.",
                        confirmButtonText: 'Aceptar'
                    }).then(() => {
                        // Si hubo un error, reabrir el modal para que el usuario corrija la acción
                        $('#ModalRuc').modal('show');
                    });
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        }); 

        $("#btn-register-varios").click(function() {
            var formData = new FormData(document.getElementById("ModalVarios"));
            
            // Cerrar el modal antes de enviar la solicitud 
            
            // Mostrar mensaje de carga mientras la solicitud está en curso
            Swal.fire({
                target: document.getElementById('ModalVarios'),
                title: 'Cargando...',
                text: 'Por favor espere, estamos procesando su solicitud.',
                allowOutsideClick: false, // Evitar que el usuario cierre el modal o la alerta
                didOpen: () => {
                    Swal.showLoading(); // Mostrar el icono de carga
                }
            });

            $.ajax({
                url: "{{ route('admin.registrar_documento_camara') }}",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(res) {
                // Obtener el mensaje de respuesta
                let msg = JSON.parse(res).response.msg;
                
                // Mostrar mensaje de éxito
                Swal.fire({
                    target: document.getElementById('ModalVarios'),
                    icon: 'success',
                    title: '¡Éxito!',
                    text: msg,
                    confirmButtonText: 'Aceptar'
                }).then(() => {
                    // Recargar la página si es necesario o realizar alguna otra acción
                    location.reload();
                });
            }).fail(function(res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje de error
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";

                    // Mostrar mensaje de error
                    Swal.fire({
                        target: document.getElementById('ModalVarios'),
                        icon: 'error',
                        title: 'Error',
                        text: errorMsg,
                        confirmButtonText: 'Aceptar'
                    }).then(() => {
                        // Si hubo un error, reabrir el modal para que el usuario corrija la acción
                        $('#ModalVarios').modal('show');
                    });
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    Swal.fire({
                        target: document.getElementById('ModalVarios'),
                        icon: 'error',
                        title: 'Error',
                        text: "Ocurrió un error al procesar la solicitud.",
                        confirmButtonText: 'Aceptar'
                    }).then(() => {
                        // Si hubo un error, reabrir el modal para que el usuario corrija la acción
                        $('#ModalVarios').modal('show');
                    });
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });
        
        function showFile(id){
            $.ajax({
                url: "{{ asset('/administrador/camara/file/ver/') }}/"+id,
                type: "get",
                dataType: "html",
                contentType: false,
                processData: false
            }).done(function(res){
                url = JSON.parse(res).response.url 
                var rutaRaiz = window.location.origin;
                window.open(rutaRaiz+'/storage/'+url,'_blank');
            }).fail(function(res){
                console.log(res)
            });
        }
         
        function deleteArchivo(id){ 
            // Muestra un mensaje de confirmación antes de proceder con la eliminación
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás recuperar el archivo una vez eliminado!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                // Si el usuario confirma la eliminación
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ asset('/administrador/camara/file/eliminar/') }}/" + id,
                        type: "get",
                        dataType: "html",
                        contentType: false,
                        processData: false
                    }).done(function(res){
                        msg = JSON.parse(res).response.msg;
                        Swal.fire(
                            'Eliminado!',
                            msg,
                            'success'
                        );
                        location.reload();
                    }).fail(function(res){
                        console.log(res);
                        Swal.fire(
                            'Error!',
                            'Hubo un problema al intentar eliminar el archivo.',
                            'error'
                        );
                    });
                }
            });
        }
    </script>
@endsection  