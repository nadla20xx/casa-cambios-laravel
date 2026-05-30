<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="text-center" scope="col">#</th>
                <th class="text-center" scope="col">Moneda</th>
                <th class="text-center" scope="col">Valor en soles</th>
                <th class="text-center" scope="col">Fecha de cambio</th>
                <th class="text-center" scope="col">Habilitado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipos_cambios as $indice=>$tipo_cambio)
            <tr>
                <th class="text-center" scope="row">{{ $indice + 1 }}</th>
                <td class="text-center">{{ $tipo_cambio->moneda->codigo }}</td>
                <td class="text-center">{{ $tipo_cambio->valor }}</td>
                <td class="text-center">{{ $tipo_cambio->fecha_cambio }}</td>
                <td class="text-center">{{ $tipo_cambio->habilitado?'Si':'No' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>