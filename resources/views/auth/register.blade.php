<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<form action="{{ route('registerProses') }}" method="post">
@csrf
  <div class="login-container">
    <form class="login-form">
      <h2>Register</h2>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
      </div>
      <div class="form-group">
        <label for="email">email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button type="submit">Register</button>
      <p class="register-link">Already have account? <a href="{{ route('login') }}">Login</a></p>
    </form>
  </div>
</body>
</html>
