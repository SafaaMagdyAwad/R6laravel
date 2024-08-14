<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update Class</title>
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
        <h2 class="fw-bold fs-2 mb-5 pb-2">Update Class</h2>
        <form action="{{route('class.update',$class)}}" method="post" class="px-md-5" enctype="multipart/form-data">
          @csrf
          @method('put')
          <input type="hidden" name="old_image" value="{{$class->image}}">
          @error('className')
          <div class="error">{{ $message }}</div>
      @enderror
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">class Name:</label>
            <div class="col-md-10">
              <input type="text" placeholder="className" name="className" class="form-control py-2" value="{{old('className',$class->className)}}"/>
            </div>
          </div>
          <div class="form-group mb-3 row">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="row">
              @if ($class->image != "null")
                  
              <div class="col-3">
                <img src="{{ asset('assets/images/class/' . $class->image) }}" alt="{{$class->className}}"   width="60" height="100" /> 
              </div>
              @endif
           
              <div class="col-9">
                <label for="" class="form-label col-md-2 fw-bold text-md-end">class image:</label>
                <div class="col-md-10">
                  <input type="file"  name="image"  class="form-control py-2"/>
                </div>
              </div>
            </div>
           
          </div>
          @error('capacity')
          <div class="error">{{ $message }}</div>
      @enderror
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">capacity:</label>
            <div class="col-md-10">
              <input type="number" step="1" name="capacity" placeholder="Enter capacity" class="form-control py-2" value="{{old('capacity',$class->capacity)}}"/>
            </div>
          </div>
          @error('price')
          <div class="error">{{ $message }}</div>
      @enderror
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Price:</label>
            <div class="col-md-10">
              <input type="number" step="0.1" name="price" placeholder="Enter price" class="form-control py-2" value="{{old('price',$class->price)}}" />
            </div>
          </div>
          
          <hr>
          @error('isFulled')
          <div class="error">{{ $message }}</div>
      @enderror
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">isFulled:</label>
            <div class="col-md-10">

              <input type="hidden" name="isFulled" class="form-check-input" style="padding: 0.7rem;"  value="0"   />
              <input type="checkbox" name="isFulled" class="form-check-input" style="padding: 0.7rem;"  value="1"  @checked(old('isFulled',$class->isFulled))  />
            </div>
          </div>
          <hr>
          @error('timeFrom')
          <div class="error">{{ $message }}</div>
      @enderror
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Time From:</label>
            <div class="col-md-10">
              <input type="time" placeholder="timeFrom" name="timeFrom" class="form-control py-2" value="{{old('timeFrom',$class->timeFrom)}}" />
            </div>
          </div>
          <hr>
          @error('timeTo')
          <div class="error">{{ $message }}</div>
      @enderror
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Time To:</label>
            <div class="col-md-10">
              <input type="time" placeholder="timeTo" name="timeTo" class="form-control py-2" value="{{old('timeTo',$class->timeTo)}}" />
            </div>
          </div>
          <div class="text-md-end">
            <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
              Update Class
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
