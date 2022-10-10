<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Casa Mazatlan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    </head>
    <body>
        <div class="container-sm mt-3">
            <button type="button" class="btn btn-primary" onclick="window.location='{{ url('/ventas/create') }}'">Realizar Venta</button>
        
            <table class="table">
                <tr>
                    <th>Sucursal</th>
                    <th>Caja</th>
                    <th>Producto</th>
                </tr>
                @foreach($ventas as $venta)
                <tr>
                    <td>{!! $venta->sucursal !!}</td>
                    <td>{!! $venta->caja !!}</td>
                    <td>{!! $venta->detalles()->first()->producto !!}</td>
                </tr>
                @endforeach
            </table>
            {{ $ventas->links() }}
        </div>
    </body>
</html>




