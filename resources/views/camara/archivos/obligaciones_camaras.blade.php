@extends('dashboard')

@section('pagename')
Archivos de Obligaciones por Cámara
@endsection

@section('content') 
<form action="{{ route('camara.guardar_archivo_camara') }}" method="POST" enctype="multipart/form-data">
    @csrf

    @if(Auth::user()->hasRole('admin'))
        <div class="form-group">
            <label for="usuario_id">Selecciona Usuario:</label>
            <select name="usuario_id" id="usuario_id" class="form-control" required>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                @endforeach
            </select>
        </div>
    @endif

    <div class="form-group">
        <label for="archivo">Subir archivo:</label>
        <input type="file" name="archivo" id="archivo" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Subir</button>
</form>
@endsection