<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="create-form">
    <form class="form-group" action="{{ route('store') }}" method="post">
      @csrf
      <h2>Register</h2>
      <div class="form-group">
        <label for="namaMenu">Nama_Menu</label>
        <input type="text" id="namaMenu" name="namaMenu" placeholder="Enter your namaMenu" required>
      </div>
      <div class="form-group">
        <label for="harga">harga</label>
        <input type="harga" id="harga" name="harga" placeholder="Enter your harga" required>
      </div>
      <div class="form-group">
        <label for="deskripsi">deskripsi</label>
        <input type="deskripsi" id="deskripsi" name="deskripsi" placeholder="Enter your deskripsi" required>
      </div>
      <div class="form-group">
        <label for="role">role</label>
        <input type="role" id="role" name="role" placeholder="Enter your role" required>
      </div>
      <button type="submit">Create</button>
    </form>
  </div>
</body>
</html>