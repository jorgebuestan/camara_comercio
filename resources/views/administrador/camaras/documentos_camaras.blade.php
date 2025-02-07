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
                    <h2 class="card-title">Adjunta los siguientes Documentos</h2>
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
                                                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalContrato">Agregar</button>
                                            @else 
                                                <div class="row">
                                                    <div class="col-md-3"> 
                                                        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalContrato">Agregar</button>
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
                                                            <button type="button" class="btn btn-danger" onclick="deleteThesis('{{ $item->id }}')">Eliminar</button>
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
                                                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalAvisoEntrada">Agregar</button>
                                            @else 
                                                <div class="row">
                                                    <div class="col-md-3"> 
                                                        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalAvisoEntrada">Agregar</button>
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
                                                            <button type="button" class="btn btn-danger" onclick="deleteThesis('{{ $item->id }}')">Eliminar</button>
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
                                                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalExtractoSut">Agregar</button>
                                            @else 
                                                <div class="row">
                                                    <div class="col-md-3"> 
                                                        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalExtractoSut">Agregar</button>
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
                                                            <button type="button" class="btn btn-danger" onclick="deleteThesis('{{ $item->id }}')">Eliminar</button>
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
                                                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalUsoDatos">Agregar</button>
                                            @else 
                                                <div class="row">
                                                    <div class="col-md-3"> 
                                                        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalUsoDatos">Agregar</button>
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
                                                            <button type="button" class="btn btn-danger" onclick="deleteThesis('{{ $item->id }}')">Eliminar</button>
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
                                                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalProgramaBienvenida">Agregar</button>
                                            @else 
                                                <div class="row">
                                                    <div class="col-md-3"> 
                                                        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalProgramaBienvenida">Agregar</button>
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
                                                            <button type="button" class="btn btn-danger" onclick="deleteThesis('{{ $item->id }}')">Eliminar</button>
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
        <form enctype="multipart/form-data" class="modal fade" id="ModalContrato" tabindex="-1" aria-labelledby="ModalFotoLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalFotoLabel">Requerimiento de Personal</h5>
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
                            <input type="hidden" name="tipoDoc" value="19"> 
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div>
                        <div class="form-group">
                            Agregar Requerimiento de Personal
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-contrato">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalAvisoEntrada" tabindex="-1" aria-labelledby="ModalAvisoEntradaLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalAvisoEntradaLabel">Aviso de Entrada</h5>
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
                            <input type="hidden" name="tipoDoc" value="21">
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div>
                        <div class="form-group">
                            Aviso de Entrada
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-aviso-entrada">Guardar</button>
                    </div>
                </div>
            </div>
        </form>      

        <form enctype="multipart/form-data" class="modal fade" id="ModalExtractoSut" tabindex="-1" aria-labelledby="ModalExtractoSutLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalExtractoSutLabel">Extracto - SUT</h5>
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
                            <input type="hidden" name="tipoDoc" value="22">
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div>
                        <div class="form-group">
                            Extracto - SUT
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-extracto-sut">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalUsoDatos" tabindex="-1" aria-labelledby="ModalUsoDatosLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalUsoDatosLabel">Certificado de Antecedentes Penales</h5>
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
                            <input type="hidden" name="tipoDoc" value="23">
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div>
                        <div class="form-group">
                            Certificado de Antecedentes Penales
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-uso-datos">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalProgramaBienvenida" tabindex="-1" aria-labelledby="ModalProgramaBienvenidaLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalProgramaBienvenidaLabel">Informe de Selección</h5>
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
                            <input type="hidden" name="tipoDoc" value="24">
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div>
                        <div class="form-group">
                            Informe de Selección
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-bienvenida">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalUsoImagen" tabindex="-1" aria-labelledby="ModalUsoImagenLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalUsoImagenLabel">Informe de Pruebas Psicométricas</h5>
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
                            <input type="hidden" name="tipoDoc" value="25">
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div>
                        <div class="form-group">
                            Informe de Pruebas Psicométricas
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-usoimagen">Guardar</button>
                    </div>
                </div>
            </div>
        </form>
 
        <form enctype="multipart/form-data" class="modal fade" id="ModalAcuerdoConfidencialidad" tabindex="-1" aria-labelledby="ModalAcuerdoConfidencialidadLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalAcuerdoConfidencialidadLabel">Informe de Prueba de Confiabilidad</h5>
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
                            <input type="hidden" name="tipoDoc" value="26">
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div> 
                        <div class="form-group">
                            Informe de Prueba de Confiabilidad
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-confidencialidad">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalConflictoInteres" tabindex="-1" aria-labelledby="ModalConflictoInteresLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalConflictoInteresLabel">Carta Oferta</h5>
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
                            <input type="hidden" name="tipoDoc" value="27">
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div> 
                        <div class="form-group">
                            Carta Oferta
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-conflictointeres">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalHigieneSeguridad" tabindex="-1" aria-labelledby="ModalHigieneSeguridadLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalHigieneSeguridadLabel">Informe de Prueba Polígrafo</h5>
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
                            <input type="hidden" name="tipoDoc" value="28">
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div> 
                        <div class="form-group">
                            Informe de Prueba Polígrafo
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-reglamento-higiene">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalReglamentoInterno" tabindex="-1" aria-labelledby="ModalReglamentoInternoLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalReglamentoInternoLabel">Informe de Visita Domiciliaria</h5>
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
                            <input type="hidden" name="tipoDoc" value="29">
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div> 
                        <div class="form-group">
                            Informe de Visita Domiciliaria
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-reglamento-interno">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalPrevencionViolencia" tabindex="-1" aria-labelledby="ModalPrevencionViolenciaLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalPrevencionViolenciaLabel">Registro de Entrega de Uniformes</h5>
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
                            <input type="hidden" name="tipoDoc" value="30">
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div> 
                        <div class="form-group">
                            Registro de Entrega de Uniformes
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-protocolo-violencia">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalCodigoConducta" tabindex="-1" aria-labelledby="ModalCodigoConductaLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalCodigoConductaLabel">Código de Conducta</h5>
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
                            <input type="hidden" name="tipoDoc" value="31">
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div> 
                        <div class="form-group">
                            Código de Conducta
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-codigo-conducta">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalEntregaUniformes" tabindex="-1" aria-labelledby="ModalEntregaUniformesLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalEntregaUniformesLabel">Acta de Entrega de Uniformes</h5>
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
                            <input type="hidden" name="tipoDoc" value="32">
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div> 
                        <div class="form-group">
                        Acta de Entrega de Uniformes
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-entrega-uniformes">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalCartillaHuellas" tabindex="-1" aria-labelledby="ModalCartillaHuellasLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalCartillaHuellasLabel">Cartilla de Huellas</h5>
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
                            <input type="hidden" name="tipoDoc" value="33">
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div> 
                        <div class="form-group">
                            Cartilla de Huellas
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-cartilla-huellas">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalPeriodoPruebas" tabindex="-1" aria-labelledby="ModalPeriodoPruebasLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalPeriodoPruebasLabel">Período de Pruebas</h5>
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
                            <input type="hidden" name="tipoDoc" value="34">
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div> 
                        <div class="form-group">
                            Período de Pruebas
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-periodo-pruebas">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalDocumentosVarios" tabindex="-1" aria-labelledby="ModalDocumentosVariosLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalDocumentosVariosLabel">Documentos Varios</h5>
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
                            <input type="hidden" name="tipoDoc" value="35">
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div> 
                        <div class="form-group">
                        Documentos Varios
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-varios">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalCuentaBancaria" tabindex="-1" aria-labelledby="ModalCuentaBancariaLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalCuentaBancariaLabel">Certificado Bancario</h5>
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
                            <input type="hidden" name="tipoDoc" value="17">
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div> 
                        <div class="form-group">
                        Documento vigente de cuenta activa, ya sea de banco Bolivariano o banco Pacífico
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-ctabancaria">Guardar</button>
                    </div>
                </div>
            </div>
        </form>

        <form enctype="multipart/form-data" class="modal fade" id="ModalCovid" tabindex="-1" aria-labelledby="ModalCovidLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalCovidLabel">Certificado de Vacunación Covid</h5>
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
                            <input type="hidden" name="tipoDoc" value="18">
                            <input type="hidden" name="id_usuario"  id="id_usuario" value="{{ $documentos_personales[0]['id_usuario']}}">
                        </div> 
                        <div class="form-group">
                        
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register-covid">Guardar</button>
                    </div>
                </div>
            </div>
        </form>


        <form enctype="multipart/form-data" class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Tesis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" id="title-edit" name="title">
                            <input type="hidden" id="thesis_id" name="thesis_id">
                            <input type="hidden" id="thesis_code" name="thesis_code">
                        </div>
                        <div class="form-group">
                            <label for="file-edit">Archivo</label>
                            <input type="file" class="form-control-file" id="file-edit" name="file">
                          </div>
                        <div class="form-group form-check">
                            <input type="checkbox" value="1" checked class="form-check-input" id="state-edit" name="state">
                            <label class="form-check-label" for="state-edit">Activo</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-update">Actualizar</button>
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

        $("#btn-register" ).click(function() {
            var formData = new FormData(document.getElementById("exampleModal"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function(res){
                console.log(res)
            });
        });

        //jbuestan
        $("#btn-register-contrato" ).click(function() {
            var formData = new FormData(document.getElementById("ModalContrato"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });   
        
        $("#btn-register-aviso-entrada" ).click(function() {
            var formData = new FormData(document.getElementById("ModalAvisoEntrada"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });    

        $("#btn-register-extracto-sut" ).click(function() {
            var formData = new FormData(document.getElementById("ModalExtractoSut"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });


        $("#btn-register-uso-datos" ).click(function() {
            var formData = new FormData(document.getElementById("ModalUsoDatos"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });

        $("#btn-register-bienvenida" ).click(function() {
            var formData = new FormData(document.getElementById("ModalProgramaBienvenida"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });

        $("#btn-register-usoimagen" ).click(function() {
            var formData = new FormData(document.getElementById("ModalUsoImagen"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });

        $("#btn-register-confidencialidad" ).click(function() {
            var formData = new FormData(document.getElementById("ModalAcuerdoConfidencialidad"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });

        $("#btn-register-conflictointeres" ).click(function() {
            var formData = new FormData(document.getElementById("ModalConflictoInteres"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });

        $("#btn-register-reglamento-higiene" ).click(function() {
            var formData = new FormData(document.getElementById("ModalHigieneSeguridad"));
            $.ajax({
                url: "{{ route('documento_register') }}", 
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });

        $("#btn-register-reglamento-interno" ).click(function() {
            var formData = new FormData(document.getElementById("ModalReglamentoInterno"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });

        $("#btn-register-protocolo-violencia" ).click(function() {
            var formData = new FormData(document.getElementById("ModalPrevencionViolencia"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });

        $("#btn-register-codigo-conducta" ).click(function() {
            var formData = new FormData(document.getElementById("ModalCodigoConducta"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });

        $("#btn-register-entrega-uniformes" ).click(function() {
            var formData = new FormData(document.getElementById("ModalEntregaUniformes"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });

        $("#btn-register-cartilla-huellas" ).click(function() {
            var formData = new FormData(document.getElementById("ModalCartillaHuellas"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });

        $("#btn-register-periodo-pruebas" ).click(function() {
            var formData = new FormData(document.getElementById("ModalPeriodoPruebas"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });

        $("#btn-register-ctabancaria" ).click(function() {
            var formData = new FormData(document.getElementById("ModalCuentaBancaria"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });

        $("#btn-register-covid" ).click(function() {
            var formData = new FormData(document.getElementById("ModalCovid"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });

        $("#btn-register-varios" ).click(function() {
            var formData = new FormData(document.getElementById("ModalDocumentosVarios"));
            $.ajax({
                url: "{{ route('documento_register') }}",
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
            }).fail(function (res) {
                try {
                    // Intenta parsear la respuesta para obtener el mensaje
                    let errorResponse = JSON.parse(res.responseText);
                    let errorMsg = errorResponse.response?.msg || "Ocurrió un error inesperado.";
                    alert(errorMsg); // Mostrar el mensaje de error al usuario
                } catch (e) {
                    // Si ocurre un error al parsear, muestra un mensaje genérico
                    alert("Ocurrió un error al procesar la solicitud.");
                }
                console.log(res); // Muestra el error en la consola para depuración
            });
        });

        function showFile(id){
            $.ajax({
                url: "{{ asset('/documentos/file/') }}/"+id,
                type: "get",
                dataType: "html",
                contentType: false,
                processData: false
            }).done(function(res){
                url = JSON.parse(res).response.url
                //http://miexperienciaune.test/colaborador/
                //window.open('storage/'+url,'_blank');
                var rutaRaiz = window.location.origin;
                window.open(rutaRaiz+'/storage/'+url,'_blank');
            }).fail(function(res){
                console.log(res)
            });
        }
        $( "#btn-update" ).click(function() {
            var formData = new FormData(document.getElementById("exampleModalEdit"));
            $.ajax({
                url: "{{ route('documento_update') }}",
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
            }).fail(function(res){
                console.log(res)
            });
        });
        function deleteThesis(id){ 
            $.ajax({
                url: "{{ asset('/documentos/delete/') }}/"+id,
                type: "get",
                dataType: "html",
                contentType: false,
                processData: false
            }).done(function(res){
                msg = JSON.parse(res).response.msg
                alert(msg);
                location.reload();
            }).fail(function(res){
                console.log(res)
            });
        }
    </script>
@endsection  