<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>{{$sales->id}}</title>
</head>
<body>
<div class="row">
    <div class="col-10 mx-auto">
        <div  class="bg-white py-3 px-4 shadow rounded">
            @include('sales.factura._fact')
            <div style="text-align: center;">
                <a href="{{route('download_pdf',$sales->id) }}"class="btn btn-danger col-2">Descargar Factura</a>
                <a href="{{route('sales.create',$sales->id) }}"class="btn btn-info col-2">Regresar</a>
            </div>
        </div>
    </div>

</div>
</body>
</html>
