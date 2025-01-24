<!DOCTYPE html>
<html>

<head>
  <title>Sign In</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      color: #fff;
    }

    .container {
      background-color: #ffffff;
      color: #333;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      display: flex;
      align-items: center;
      max-width: 800px;
      width: 100%;
    }

    .form-container {
      flex: 1;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #1e3c72;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      box-sizing: border-box;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 16px;
    }

    input[type="checkbox"] {
      margin-right: 8px;
    }

    button {
      background-color: #ff7f50;
      color: white;
      padding: 12px 20px;
      margin: 20px 0;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      width: 100%;
      font-size: 16px;
      font-weight: bold;
    }

    button:hover {
      background-color: #ff5722;
    }

    a {
      color: #1e3c72;
      text-decoration: none;
      font-weight: 600;
    }

    a:hover {
      text-decoration: underline;
    }

    .logo {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .logo img {
      max-width: 200px;
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="form-container">
      <h1>Welcome Back</h1>
      <form action="<?= site_url('auth/login') ?>" method="post">

        <input type="text" name="username" placeholder="Enter your username" required>
        <input type="password" name="password" placeholder="Enter your password" required>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 10px;">
          <div>
            <input type="checkbox" id="rememberMe" name="rememberMe">
            <label for="rememberMe">Remember me</label>
          </div>
          <a href="#">Forgot password?</a>
        </div>

        <button type="submit">Sign in</button>

        <p style="text-align: center; margin-top: 20px;">
          Don't have an account? <a href="./singup1.php">Sign up</a>
        </p>
      </form>
    </div>
    <div class="logo">
      <img src="<?= base_url('img/logo1.png'); ?>" alt="Logo">
    </div>
  </div>
</body>

</html>
