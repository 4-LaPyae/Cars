<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brands</title>
</head>
<body>
    <form action="{{ route('car-brands.index') }}" method="get" class="w-25">
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ request('make') }}" placeholder="Search" name="make">
            <button class="btn btn-outline-primary" type="submit"><i class="bi bi-search"></i>Search</button>
        </div>
    </form>
    @forelse ($brands as $brand)
        <h2>{{ $brand->name }}</h2>
        @foreach ($brand->models as $b)
            <li>{{ $b->name }}</li>
        @endforeach
    @empty
        <h2>no brand lists</h2>
    @endforelse
    <h2></h2>
    <P></P>
</body>
</html>