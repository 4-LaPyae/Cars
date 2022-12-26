<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>car lists</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="">
        <form action="{{ route('cars.index') }}" method="get" class="w-25 mt-2 mb-3">
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="{{ request('keyword') }}" placeholder="Search" name="keyword">
                <button class="btn btn-dark" type="submit"><i class="bi bi-search"></i>Search</button>
            </div>
        </form>
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Brand</th>
            <th scope="col">Country</th>
            <th scope="col">Transmisstion</th>
            <th scope="col">Equipment</th>
            <th scope="col">Seller</th>
            <th scope="col">Standard</th>
            <th scope="col">Fuel_type</th>
            <th scope="col">Mileage</th>
            <th scope="col">Registration</th>
            <th scope="col">Engine_size</th>
            <th scope="col">Power</th>
            <th scope="col">Body_type</th>
            <th scope="col">Price</th>
            <th scope="col">Colour</th>
            <th scope="col">Damage</th>

          </tr>
        </thead>
        <tbody>
          @forelse ($cars as $car)
              <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->name }}</td>
                <td>{{ $car->brand}}</td>
                <td>{{ $car->country }}</td>
                <td>{{ $car->transmisstion }}</td>
                <td>{{ $car->equipment }}</td>
                <td>{{ $car->seller }}</td>
                <td>{{ $car->standard }}</td>
                <td>{{ $car->fuel_type }}</td>
                <td>{{ $car->mileage }}</td>
                <td>{{ $car->registration }}</td>
                <td>{{ $car->engine_size }}cc</td>
                <td>{{ $car->power }}hp</td>
                <td>{{ $car->body_type }}</td>
                <td>${{ $car->price }}</td>
                <td>{{ $car->colour }}</td>
                <td>{{ $car->damange }}</td>
              </tr>
          @empty
              <h2>No carlists!</h2>
          @endforelse
      </table>
    </div>
</body>
</html>