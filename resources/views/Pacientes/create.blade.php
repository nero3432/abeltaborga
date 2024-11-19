<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Paciente</title>

    <!-- Enlace a Google Fonts para cambiar la tipografía -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Estilos adicionales -->
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
    <div class="container mt-5">
        <h1 class="mb-4">Crear Paciente</h1>
        
        <!-- Formulario para crear un nuevo paciente -->
        <form action="{{ route('pacientes.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="apellido" required>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" name="edad" class="form-control" id="edad" required>
            </div>
            <div class="mb-3">
                <label for="diagnostico" class="form-label">Diagnóstico</label>
                <input type="text" name="diagnostico" class="form-control" id="diagnostico" required>
            </div>
            <div class="mb-3">
                <label for="area_derivada" class="form-label">Área Derivada</label>
                <input type="text" name="area_derivada" class="form-control" id="area_derivada" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" id="descripcion"></textarea>
            </div>
            
            <!-- Botón para crear el paciente -->
            <button type="submit" class="btn">Crear Paciente</button>
        </form>
    </div>
</body>
</html>
