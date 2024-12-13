<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

  <!-- Navbar -->
  {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Restoran</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kategori</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}

  <!-- Filter Menu -->
  <div class="container mt-4">
    <div class="d-flex justify-content-center gap-3">
      <a href="{{ url('/landingPage') }}" class="btn btn-outline-primary filter-btn" data-category="all">All</a>
      <a href="{{ url('/menu/0') }}" class="btn btn-outline-primary filter-btn" data-category="0">Makanan</a>
      <a href="{{ url('/menu/1') }}" class="btn btn-outline-primary filter-btn" data-category="1">Minuman</a>
    </div>
  </div>

  <!-- Content Section -->
  <div class="container mt-5">
    <a href="{{ route('create') }}" class="btn btn-primary mb-4">Buat Pesanan</a>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @if ($data->count() > 0)
        @foreach ($data as $item)
          <div class="col">
            <div class="card h-100">
              <img src="..." class="card-img-top" alt="Gambar Menu">
              <div class="card-body">
                <h5 class="card-title">{{ $item->namaMenu }}</h5>
                <p class="card-text">Harga: Rp{{ $item->harga }}</p>
                <p class="card-text">{{ $item->deskripsi }}</p>
              </div>
              <div class="card-footer d-flex justify-content-between">
                <a href="#" class="btn btn-primary">Pesan Menu</a>
                <div class="btn-group">
                  <a href="delete/{{ $item->id }}" class="btn btn-danger">Delete</a>
                  <a href="edit/{{ $item->id }}" class="btn btn-success">Edit</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      @else
        <p class="text-center">Tidak ada menu dalam kategori ini.</p>
      @endif
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script>
    const filterButtons = document.querySelectorAll('.filter-btn');

    filterButtons.forEach(button => {
      button.addEventListener('click', function (e) {
        e.preventDefault();
        const category = this.getAttribute('data-category');
        if (category === 'all') {
          window.location.href = '/landingPage'; 
        } else {
          window.location.href = `/menu/${category}`; 
        }
      });
    });
  </script>

</body>
</html>
