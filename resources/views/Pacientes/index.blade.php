<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Pacientes</title>

    <!-- Enlace a Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #e3f2fd; /* Fondo celeste claro */
            color: #333;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #0d47a1; /* Azul oscuro */
            text-align: center;
        }

        .search-form {
            margin-bottom: 20px;
            text-align: center;
        }

        .search-form input {
            width: 60%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
            margin-right: 10px;
        }

        .search-form button {
            padding: 10px 20px;
            background-color: #2196f3; /* Azul claro */
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-form button:hover {
            background-color: #1976d2; /* Azul medio */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #2196f3; /* Azul claro */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #e1f5fe; /* Celeste suave */
        }

        tr:hover {
            background-color: #bbdefb; /* Azul claro al pasar el ratón */
        }

        .text-center {
            text-align: center;
        }

        .alert-warning {
            background-color: #fff9c4;
            color: #856404;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .btn-danger {
            background-color: #e53935; /* Rojo */
            border: none;
            color: white;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-danger:hover {
            background-color: #c62828; /* Rojo oscuro */
        }

        .btn-primary {
            background-color: #2196f3; /* Azul claro */
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            margin: 10px 0;
        }

        .btn-primary:hover {
            background-color: #1976d2; /* Azul medio */
        }

        .mb-4 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Listado de Pacientes</h1>

        <!-- Botón para crear un nuevo paciente -->
        <a href="{{ route('pacientes.create') }}" class="btn-primary mb-4">Crear Paciente</a>

        <!-- Formulario de búsqueda -->
        <form action="{{ route('pacientes.index') }}" method="GET" class="search-form">
            <input type="text" name="search" class="form-control" placeholder="Buscar por nombre, apellido o diagnóstico" value="{{ request('search') }}">
            <button type="submit">Buscar</button>
        </form>

        <!-- Mensaje de búsqueda sin resultados -->
        @if (count($pacientes) === 0 && request('search'))
            <div class="alert-warning text-center">
                No se encontraron resultados para "{{ request('search') }}".
            </div>
        @endif

        <!-- Tabla de pacientes -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Diagnóstico</th>
                    <th>Área Derivada</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pacientes as $paciente)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $paciente->nombre }}</td>
                        <td>{{ $paciente->apellido }}</td>
                        <td>{{ $paciente->edad }} años</td>
                        <td>{{ $paciente->diagnostico }}</td>
                        <td>{{ $paciente->area_derivada }}</td>
                        <td>{{ $paciente->descripcion }}</td>
                        <td>
                            <!-- Botón de editar -->
                            <a href="{{ route('pacientes.edit', $paciente) }}" class="btn-primary">Editar</a>
                            <!-- Botón de eliminar -->
                            <form action="{{ route('pacientes.destroy', $paciente) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este paciente?');" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">No hay pacientes disponibles</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
