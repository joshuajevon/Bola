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
        <h1>UPDATE FORM</h1>
        <h2>Who Is Your Favorite Football Player?</h2>
    </div>

<div id="formulir">
    <form action="{{route('updateBola', ['id' => $bola->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="formGroupExampleInput" value="{{$bola->name}}" placeholder="Enter Name">
        </div>
        @error('name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="mb-3">
            <label for="club" class="form-label">Club</label>
            <input name="club" type="text" class="form-control" id="formGroupExampleInput" value="{{$bola->club}}" placeholder="Enter Club">
        </div>
        @error('club')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="mb-3">
            <label for="number" class="form-label">Squad Number</label>
            <input name="number" type="numeric" class="form-control" id="formGroupExampleInput" value="{{$bola->number}}" placeholder="Enter Number">
        </div>
        @error('number')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input name="birthday" type="date" class="form-control" id="formGroupExampleInput" value="{{$bola->birthday}}" placeholder="Enter">
        </div>
        @error('birthday')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="col-md-4">
            <label for="status" class="form-label">Status</label>
            <br>
            <label for="inputState" class="form-label">1 -> Active | 2 -> Legend</label>
            <br>
            <select name="status" id="inputState" class="form-select" value="{{$bola->status}}" >
                <option selected></option>
                <option>1</option>
                <option>2</option>
            </select>
        </div>

        <br>
        @error('status')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="mb-3">
            <label for="note" class="form-label">Note</label>
            <textarea name="note" class="form-control" id="exampleFormControlTextarea1" rows="3" value={{$bola->note}} ></textarea>
          </div>

          @error('note')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            <label for="file" class="form-label">Image</label>
            <input type="file" name="file" class="form-control" id="formFile" value="{{$bola->file}}">
        </div>
        <br>
        @error('file')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <button type="submit" class="btn btn-info">Update</button>
    </form>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
