@extends('dashboard')

@section('pagename')
Archivos de Obligaciones por Cámara
@endsection

@section('content') 

<div class="container">
    <div class="row">
        <div class="col-12">
            <section class="card" id="w3">
                <header class="card-header">
                    <h2 class="card-title">Archivos de Obligaciones por Cámara</h2>
                </header>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('camara.guardar_archivo_camara') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group"> 

                                    <div class="row">
                                        <div class="col-6">
                                            @if(Auth::user()->hasRole('admin'))
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="camara">Selecciona la Cámara:</label>
                                                        <select id="camara" name="camara" class="form-control populate">
                                                            <option value="-1">Seleccionar</option>
                                                            @foreach ($camaras as $id => $descripcion)
                                                                <option value="{{ $id }}">{{ $descripcion }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        &nbsp;
                                                    </div>
                                                </div>
                                            @endif 
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="obligacion">Selecciona la Obligación:</label> 
                                                    <select id="obligacion" name="obligacion" data-plugin-selectTwo class="form-control populate">
                                                        <option value="-1">Seleccionar</option>
                                                        @foreach ($obligaciones as $id => $nombre)
                                                            <option value="{{ $id }}">{{ $nombre }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    &nbsp;
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="archivo">Subir archivo:</label>
                                                    <input type="file" name="archivo" id="archivo" class="form-control" required>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    &nbsp;
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-primary">Subir</button>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="col-6">
                                              Datatable
                                        </div>
                                    </div> 
                                </div>
                            </form>
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
    $(document).ready(function() {
        $('#camara').change(function() {
            let camaraId = $(this).val();

            if (camaraId != -1) {
                $.ajax({
                    url: '/get-obligaciones-camaras', // Ruta para obtener las obligaciones por camara
                    method: 'GET',
                    data: {
                        id_camara: camaraId
                    },
                    success: function(response) {
                        let obligaciones = response.obligaciones;
                        let $obligacionSelect = $('#obligacion'); 

                        $obligacionSelect.empty(); // Limpiamos el select de provincias
                        $obligacionSelect.append(
                            '<option value="-1">Seleccionar</option>'
                        ); // Opción por defecto

                        
                        // Agregamos las provincias al select
                        obligaciones.forEach(function(obligacion) {
                            $obligacionSelect.append(
                                `<option value="${obligacion.id}">${obligacion.nombre}</option>`
                            );
                        });
                    },
                    error: function() {
                        alert('Hubo un error al cargar las obligaciones.');
                    }
                });
            }else{
                let $obligacionSelect = $('#obligacion'); 
                $obligacionSelect.empty(); // Limpiamos el select de provincias
                $obligacionSelect.append(
                    '<option value="-1">Seleccionar</option>'
                ); // Opción por defecto
    }
        });
    });
</script>

@endsection