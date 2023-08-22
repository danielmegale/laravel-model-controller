<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @Vite('resources/js/app.js')
</head>

<body>
    @foreach ($Movies as $Movie)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h1 class="card-title">{{ $Movie->title }}</h1>
                <h4 class="card-subtitle mb-2 text-body-secondary">{{ $Movie->original_title }}</h6>
            </div>
        </div>
    @endforeach
</body>

</html>
