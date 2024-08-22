<!DOCTYPE html>
<html lang="{{LaravelLocalization::getCurrentLocale()}}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{__('addCar.addheading')}}</title>
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
        <h2 class="fw-bold fs-2 mb-5 pb-2">{{__('addCar.addheading')}}</h2>
        <form action="{{route('car.store')}}" method="post" class="px-md-5" enctype="multipart/form-data">
          @csrf
          <div class="form-group mb-3 row">
            @error('carTitle')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{__('addCar.addTitle')}}</label>
            <div class="col-md-10">
              <input type="text" placeholder="{{__('addCar.addTitleplaceholder')}}" name="carTitle" class="form-control py-2"  value="{{old('carTitle')}}"/>
            </div>
          </div>
          <div class="form-group mb-3 row">
            @error('category_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{__('addCar.addcategory')}}</label>
            <div class="col-md-10">
              <select name="category_id" class="form-control">

                @foreach ($relationData as $category)
                    <option value="{{$category->id}}" @selected(old('category_id') == $category->id)>{{$category->category}}</option>
                @endforeach
              </select>

            </div>
          </div>
          <div class="form-group mb-3 row">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{__('addCar.addimage')}}</label>
            <div class="col-md-10">
              <input type="file"  name="image" class="form-control py-2" />
            </div>
          </div>
          <div class="form-group mb-3 row">
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{__('addCar.addprice')}}</label>
            <div class="col-md-10">
              <input type="number" step="0.1" name="price" placeholder="{{__('addCar.addprice')}}"  value="{{old('price')}}" class="form-control py-2" />
            </div>
          </div>
          <div class="form-group mb-3 row">
            @error('discription')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{__('addCar.adddescription')}}</label>
            <div class="col-md-10">
              <textarea name="discription" id="" cols="30" rows="5" class="form-control py-2"> {{old('discription')}}</textarea>
            </div>
          </div>
          <hr>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{__('addCar.addpublished')}}</label>
            <div class="col-md-10">
              <input type="checkbox" name="published" class="form-check-input" style="padding: 0.7rem;" @checked(old('published'))/>
            </div>
          </div>
          <div class="text-md-end">
            <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
              {{__('addCar.addbutton')}}
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