<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paciente</title>

    <!-- Estilos adicionales -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            color: #004085;
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" value="{{ old('nombre', $paciente->nombre) }}" required>
    </div>

    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" name="apellido" class="form-control" id="apellido" value="{{ old('apellido', $paciente->apellido) }}" required>
    </div>

    <div class="mb-3">
        <label for="edad" class="form-label">Edad</label>
        <input type="number" name="edad" class="form-control" id="edad" value="{{ old('edad', $paciente->edad) }}" required>
    </div>

    <div class="mb-3">
        <label for="diagnostico" class="form-label">Diagnóstico</label>
        <input type="text" name="diagnostico" class="form-control" id="diagnostico" value="{{ old('diagnostico', $paciente->diagnostico) }}" required>
    </div>

    <div class="mb-3">
        <label for="area_derivada" class="form-label">Área Derivada</label>
        <input type="text" name="area_derivada" class="form-control" id="area_derivada" value="{{ old('area_derivada', $paciente->area_derivada) }}" required>
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea name="descripcion" class="form-control" id="descripcion" required>{{ old('descripcion', $paciente->descripcion) }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

    </div>
</body>
</html>
