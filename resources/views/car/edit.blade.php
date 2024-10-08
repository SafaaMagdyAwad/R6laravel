<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>edit Car</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">
  <style>
    * {
      font-family: "Lato", sans-serif;
    }
  </style>
</head>

<body>
  <main>
    <div class="container my-5">
      <div class="bg-light p-5 rounded">
        <h2 class="fw-bold fs-2 mb-5 pb-2">edit Car</h2>
        <form action="{{route('car.update',[$data['id']])}}" method="post" class="px-md-5" enctype="multipart/form-data">
          @csrf
          @method('put')

          <div class="form-group mb-3 row">
            @error('carTitle')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Car Title:</label>
            <div class="col-md-10">
              <input type="text" placeholder="BMW" name="carTitle" class="form-control py-2" value="{{ old('carTitle', $data->carTitle) }}" />

            </div>
          </div>
          <div class="form-group mb-3 row">
            @error('category_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Car category:</label>
            <div class="col-md-10">
              <select name="category_id" class="form-control">

                @foreach ($relationData as $category)
                    <option value="{{$category->id}}"  @selected(old('category_id', $data->category_id) == $category->id)>{{$category->category}}</option>
                @endforeach
              </select>

            </div>
          </div>
          <div class="form-group mb-3 row">
            @if ($data->image != "null")
                  
            <div class="col-3">
              <img src="{{ asset('assets/images/car/' . $data->image) }}" alt="{{$data->carTitle}}"   width="60" height="100" /> 
            </div>
            @endif
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="" class="form-label col-md-2 fw-bold text-md-end">car image:</label>
            <div class="col-md-10">
              <input type="hidden"  name="old_image" value="{{$data->image}}" class="form-control py-2" />
              <input type="file"  name="image" class="form-control py-2" />
            </div>
          </div>
          <div class="form-group mb-3 row">
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Price:</label>
            <div class="col-md-10">
              <input type="number" step="0.1" name="price" placeholder="Enter price" class="form-control py-2" value="{{ old('price', $data->price) }}" />
            </div>
          </div>
          <div class="form-group mb-3 row">
            @error('discription')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Description:</label>
            <div class="col-md-10">
              <textarea name="discription" id="" cols="30" rows="5" class="form-control py-2">{{ old('discription', $data->discription) }}</textarea>
            </div>
          </div>
          <hr>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Published:</label>
            <div class="col-md-10">
              <input type="checkbox" name="published" class="form-check-input" style="padding: 0.7rem;" value="1"  @checked( old('published', $data->published) ) />
            </div>
          </div>
          <div class="text-md-end">
            <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
              Edit Car
            </button>
          </div>
        </form>
      </div>
    </div>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>