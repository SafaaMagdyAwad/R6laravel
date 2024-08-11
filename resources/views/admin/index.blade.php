<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> home </title>
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
        <h2 class="fw-bold fs-2 mb-5 pb-2">all products</h2>
        <table class="table table-hover">
          <thead>
            <tr class="table-dark">
              <th scope="col"> Title</th>
              <th scope="col">image</th>
              <th scope="col">like</th>
              <th scope="col">price</th>
              <th scope="col">discription</th>
              <th scope="col">View</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
            <tr>
              <td scope="row">{{$product->title}}</td>
              <td> <img src="{{ asset('assets/images/product/' . $product->image) }}" 
                alt="{{$product->title}}" class="card-img"
                  width="50" height="100" /></td>
              <td>{{$product->like}} Likes</td>
              <td>{{$product->price}} $</td>
              <td>{{Str::limit($product->discription, 25, '...')}}</td>
              <td><a href="{{route('product.show',$product)}}">View</a></td>
              <td><a href="{{route('product.edit',$product)}}">Edit</a></td>
              <td>
                <form method="POST" action="{{route('product.destroy',$product)}}">
                  @csrf
                  @method('delete')
                  <button onclick="confirm('Are you sure you want to delete?')"> delete</button>
                </form>
              </td>
            </tr>
            @endforeach
           
          
          </tbody>
        </table>
        </div>
    </div>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>