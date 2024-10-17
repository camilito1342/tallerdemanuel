<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolver Ecuación Cuadrática</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Resolver Ecuación Cuadrática</h1>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="/resolver-cuadratica" method="POST">
            @csrf
            <div class="form-group">
                <label for="a">Coeficiente a:</label>
                <input type="number" class="form-control" id="a" name="a" required>
            </div>
            <div class="form-group">
                <label for="b">Coeficiente b:</label>
                <input type="number" class="form-control" id="b" name="b" required>
            </div>
            <div class="form-group">
                <label for="c">Coeficiente c:</label>
                <input type="number" class="form-control" id="c" name="c" required>
            </div>
            <button type="submit" class="btn btn-primary">Resolver</button>
        </form>
    </div>
</body>
</html>
