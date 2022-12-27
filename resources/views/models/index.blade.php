<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>models</title>
</head>
<body>
   
    @foreach ($models as $model)
        <h2><span style="color: blue">{{ $model->name }}</span> ({{ $model->brand->name }})</h2>
    @endforeach
</body>
</html>