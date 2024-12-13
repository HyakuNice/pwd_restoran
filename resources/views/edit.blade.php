<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .create-form {
            width: 100%;
            max-width: 400px;
            background-color: #fff;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="create-form">
        <h2>Edit Menu</h2>
        <form class="form-group" action="{{ url('/update/'.$menus->id) }}" method="post">
          @csrf
            <div class="form-group">
                <label for="name">Nama Menu :</label>
                <input type="text" id="namaMenu" name="namaMenu" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="price">Harga :</label>
                <input type="number" id="harga" name="harga" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="description">Deskripsi :</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" placeholder="" required></textarea>
            </div>

            <div class="form-group">
                <label for="role">Role :</label>
                <input type="text" id="role" name="role" placeholder="" required>
            </div>

            <div class="form-group">
                <select name="kategori_id" id="kategori_id">
                 <option value="0">Makanan</option>
                 <option value="1">Minuman</option>
                </select>
             </div>

            <a href="{{route('landingPage')}}"><button type="submit">Submit</button></a>
        </form>
    </div>
</body>
</html>
