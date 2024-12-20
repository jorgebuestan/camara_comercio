@extends('dashboard')

@section('pagename')
    No Autorizado
@endsection

@section('content')
    <style>
        .rowborder {
            margin: 20px;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

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
                <div class="rowborder">
                    <h3>Acceso no autorizado</h3>
                    <p>Lo sentimos, no tienes permisos para acceder a esta página.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
