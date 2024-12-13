<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
   

        <h1>Dashboard</h1>

        <a href="{{route('create')}}">create</a>
        <div class="container">

           <div class="row gap-5">
               @foreach ($data as $item)
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $item->namaMenu }}</h5>
                      <p class="card-text">Harga: Rp{{ $item->harga }}</p>
                      <p class="card-text">{{ $item->deskripsi }}</p>
                      <a href="#" class="btn btn-primary">Pesan Menu</a>
                    </div>
                  </div>
                </div>
                @endforeach
           </div>
        </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>








</html>
