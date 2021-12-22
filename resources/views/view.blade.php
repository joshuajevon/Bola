<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Football</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Football</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              {{-- <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link active" href="/insert">Insert</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

    <div id="tulisan">
        <h1>TABLE</h1>
        <h2>Player Data</h2>
    </div>


   <table class="table table-dark table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Club</th>
        <th scope="col">Squad Number</th>
        <th scope="col">Birthday</th>
        <th scope="col">Status</th>
        <th scope="col">Note</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($bolas as $bola )
        <tr>
            <th scope="row">{{ $bola->id}}</th>
            <td>{{ $bola->name}}</td>
            <td>{{ $bola->club}}</td>
            <td>{{ $bola->number}}</td>
            <td>{{ $bola->birthday}}</td>
            <td>{{$bola->status}}</td>
            <td>{{$bola->note}}</td>
            <td><img width="300px" src="{{ url('/data_file/'.$bola->file) }}"></td>
            <td>
               <a href="{{route('updateData', ['id'=>$bola->id])}}"><button type="submit" class="btn btn-success">Edit</button></a>

                <form action="{{route('delete', ['id' =>$bola->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach

        <br>
        <div id="add">
        <form action="{{route('getCreatePage')}}">
            @csrf
            <button type="submit" class="btn btn-secondary btn-lg">+Add New</button>
        </form>
        </div>
        <br>

    </tbody>
  </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
