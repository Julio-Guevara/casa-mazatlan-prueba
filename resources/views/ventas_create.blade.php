<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Casa Mazatlan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    </head>
    <body>
        <div class="container-sm">
            <form action="{{url('ventas')}}" method="post">
            @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Sucursal</label>
                    <input type="text" class="form-control" id="sucursal" name ="sucursal" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Caja</label>
                    <input type="text" class="form-control" name="caja" id="caja">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Producto</label>
                    <select class="form-select" name="detalle">
                        <option selected>Elegir producto</option>
                        <option value="shampoo">shampoo</option>
                        <option value="jabon">jabon</option>
                    </select>
                </div>
                <button id="btn-crear" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </body>
</html>




