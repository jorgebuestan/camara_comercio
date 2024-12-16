<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socios por Cámara</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Listado de Socios - Cámara: {{ $camara->razon_social }}</h2>

    <table>
        <thead>
            <tr>
                <th>Cámara</th>
                <th>Fecha Afiliación</th>
                <th>Socio</th>
                <th>Identificación</th>
                <th>Tipo Personería</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($socios as $socio)
                <tr>
                    <td>{{ $socio->camara }}</td>
                    <td>{{ $socio->fecha_afiliacion }}</td>
                    <td>{{ $socio->socio }}</td>
                    <td>{{ $socio->identificacion }}</td>
                    <td>{{ $socio->tipo_personeria }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>