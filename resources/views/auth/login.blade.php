<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <form action="{{ route('loginProses') }}" method="post">
        @csrf
  <div class="login-container">
    <form class="login-form">
      <h2>Login</h2>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button type="submit">Login</button>
      <p class="register-link">Don't have an account? <a href="{{ route('register') }}">Register</a></p>
    </form>
  </div>
</body>
</html>
