<!doctype html>
<html lang="en">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <h5 class=" font-weight-bold">Fundación Animales</h5>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th scope="col">Datos del animal</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($datos as $dato)

                <tr>

                    <th>{{ $dato }}</th>

                </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>