@extends('dashboard')

@section('pagename')
    Archivos de Obligaciones por Socios
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                                <form method="POST" id="ModalArchivoObligacion" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">

                                        <div class="row">
                                            <div class="col-6">
                                                @if (Auth::user()->hasRole('admin'))
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="camara">Selecciona la Cámara:</label>
                                                            <select id="camara" name="camara"
                                                                class="form-control populate">
                                                                <option value="-1">Seleccionar</option>
                                                                @foreach ($camaras as $id => $descripcion)
                                                                    <option value="{{ $id }}">{{ $descripcion }}
                                                                    </option>
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
                                                        <label for="socio">Selecciona el Socio:</label>
                                                        <select id="socio" name="socio" class="form-control populate">
                                                            <option value="-1">Seleccionar</option>
                                                            @foreach ($socios as $id => $descripcion)
                                                                <option value="{{ $id }}">{{ $descripcion }}
                                                                </option>
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
                                                        <label for="obligacion">Selecciona la Obligación:</label>
                                                        <input type="hidden" id="camara_id" name="camara_id"
                                                            value="{{ $id_camara }}">
                                                        <input type="hidden" id="socio_id" name="socio_id" value="">
                                                        <select id="obligacion" name="obligacion" data-plugin-selectTwo
                                                            class="form-control populate">
                                                            <option value="-1">Seleccionar</option>
                                                            @foreach ($obligaciones as $id => $nombre)
                                                                <option value="{{ $id }}">{{ $nombre }}
                                                                </option>
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
                                                        <input type="file" name="archivo" id="archivo"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        &nbsp;
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <!-- button type="submit" class="btn btn-primary">Subir</button> -->
                                                        <button type="button" class="btn btn-primary"
                                                            id="btn-subir-archivo-obligacion">Guardar</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card-body">
                                                    <table class="table table-bordered table-striped mb-0 overflow-x-auto"
                                                        style="display: block;" id="dataTable">
                                                        <thead>
                                                            <tr>
                                                                <th>Entidad</th>
                                                                <th>Obligación</th>
                                                                <th>Archivo</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
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
                    url: "{{ route('admin.obtener_listado_archivos_obligaciones_socio') }}",
                    type: "GET",
                    data: function(d) {
                        d.start = d.start || 0;
                        d.length = d.length || 10;
                        d.id_socio = $('#socio_id').val();
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
                        data: 'entidad',
                        width: '45%'
                    },
                    {
                        data: 'obligacion',
                        width: '45%'
                    },
                    {
                        data: 'archivo',
                        width: '10%'
                    }
                ],
                order: [
                    [0, "asc"]
                ]
            });

            $('#camara').change(function() {
                let camaraId = $(this).val();
                $('#camara_id').val(camaraId); // Asigna correctamente el valor al input hidden

                let socioId = -1;
                $('#socio_id').val(socioId);

                //alert($('#camara_id').val()); // Verifica que el valor se actualice correctamente
                Swal.fire({
                    title: 'Cargando',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });

                if (camaraId != -1) {
                    $.ajax({
                        url: '/get-camaras-socios', // Ruta para obtener los socios por camara
                        method: 'GET',
                        data: {
                            id_camara: camaraId
                        },
                        success: function(response) {
                            let socios = response.socios;
                            let $sociosSelect = $('#socio');

                            $sociosSelect.empty(); // Limpiamos el select de provincias
                            $sociosSelect.append(
                                '<option value="-1">Seleccionar</option>'
                            ); // Opción por defecto


                            // Agregamos los socios al Select
                            socios.forEach(function(socio) {
                                $sociosSelect.append(
                                    `<option value="${socio.id}">${socio.nombre}</option>`
                                );
                            });
                        },
                        error: function() {
                            //alert('Hubo un error al cargar las obligaciones.');
                            Swal.fire({
                                target: document.getElementById('ModalCamara'),
                                icon: 'error',
                                title: 'Error',
                                text: 'Hubo un error al cargar los Socios por Cámara',
                                confirmButtonText: 'Aceptar',
                                allowOutsideClick: false
                            });
                        }
                    });
                } else {
                    let socioSelect = $('#socio');
                    let obligacionSelect = $('#obligacion');

                    socioSelect.empty(); // Limpiamos el select de provincias
                    socioSelect.append(
                        '<option value="-1">Seleccionar</option>'
                    ); // Opción por defecto

                    obligacionSelect.empty(); // Limpiamos el select de provincias
                    obligacionSelect.append(
                        '<option value="-1">Seleccionar</option>'
                    ); // Opción por defecto
                }
                //Swal.close();
                table.ajax.reload();
            });

            $('#socio').change(function() {
                let socioId = $(this).val();
                $('#socio_id').val(socioId); // Asigna correctamente el valor al input hidden

                //alert($('#camara_id').val()); // Verifica que el valor se actualice correctamente
                Swal.fire({
                    title: 'Cargando',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });

                if (socioId != -1) {
                    $.ajax({
                        url: '/get-obligaciones-socios', // Ruta para obtener las obligaciones por camara
                        method: 'GET',
                        data: {
                            id_socio: socioId
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
                            //alert('Hubo un error al cargar las obligaciones.');
                            Swal.fire({
                                target: document.getElementById('ModalCamara'),
                                icon: 'error',
                                title: 'Error',
                                text: 'Hubo un error al cargar las obligaciones',
                                confirmButtonText: 'Aceptar',
                                allowOutsideClick: false
                            });
                        }
                    });
                } else {
                    let $obligacionSelect = $('#obligacion');
                    $obligacionSelect.empty(); // Limpiamos el select de provincias
                    $obligacionSelect.append(
                        '<option value="-1">Seleccionar</option>'
                    ); // Opción por defecto
                }
                table.ajax.reload();
            });

            $("#btn-subir-archivo-obligacion").click(function() {
                var formData = new FormData(document.getElementById("ModalArchivoObligacion"));
                let obligacionSelect = $('#obligacion').val();
                let archivoInput = document.getElementById("archivo");

                if (obligacionSelect == -1) {
                    //alert('Debe seleccionar una Obligación');
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe seleccionar una Obligación',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    return;
                }

                if (!archivoInput.files || archivoInput.files.length === 0) {
                    Swal.fire({
                        target: document.getElementById('ModalCamara'),
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe seleccionar un archivo',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    return;
                }

                Swal.fire({
                    title: 'Enviando archivo de Obligación para su Registro',
                    text: 'Por favor espere',
                    icon: 'info',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });

                $.ajax({
                    url: "{{ route('socio.guardar_archivo_socio') }}",
                    type: "POST",
                    data: formData,
                    dataType: "json",
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function(res) {
                    if (res.success) {
                        //alert(res.message); // Mostrar mensaje exitoso 
                        Swal.fire({
                            icon: 'success', // Cambiado a 'success' para mostrar un mensaje positivo
                            title: 'Éxito',
                            text: res.message,
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false
                        });
                        location.reload(); // Recargar la página
                    } else {
                        //alert("Error: " + res.message); // Mostrar mensaje de error si existe
                        let errorMessage = 'Ocurrió un error inesperado.';

                        // Verifica si la respuesta contiene JSON válido y el campo "error"
                        if (res.responseJSON && res.responseJSON.error) {
                            errorMessage = res.responseJSON.error; // Solo el mensaje de error
                        } else if (res.responseText) {
                            try {
                                const response = JSON.parse(res.responseText);
                                errorMessage = response.error ||
                                errorMessage; // Si existe, muestra el campo "error"
                            } catch (e) {
                                errorMessage = res.responseText; // Texto plano de la respuesta
                            }
                        }

                        // Muestra el mensaje de error en SweetAlert
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: errorMessage,
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false
                        });
                    }
                }).fail(function(res) {
                    console.log(res.responseText); // Mostrar el error en consola
                    // alert("Hubo un error al subir el archivo."); // Mensaje de error general
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Hubo un error al subir el archivo.',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                });
            });

        });
    </script>
@endsection
