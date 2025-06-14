<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background: white;
      padding: 30px 40px;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      width: 320px;
    }

    h2 {
      text-align: center;
      margin-bottom: 24px;
      color: #007BFF;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1rem;
      box-sizing: border-box;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #007BFF;
      color: white;
      font-size: 1.1rem;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: 700;
    }

    button:hover {
      background-color: #0056b3;
    }

    .error-message {
      background-color: #f8d7da;
      color: #842029;
      border: 1px solid #f5c2c7;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 4px;
      font-size: 0.9rem;
    }

    .forgot-password {
      display: block;
      text-align: right;
      margin-top: -12px;
      margin-bottom: 16px;
      font-size: 0.9rem;
      text-decoration: none;
      color: #007BFF;
    }

    .forgot-password:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Log-in</h2>



    <form action="{{ route('login') }}" method="POST">
      @csrf

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter Email here" required value="{{ old('email') }}">

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>

        <a href="/register" class="">Don't have an account?</a>
        <a href="" class="forgot-password">Forgot Password?</a>   

      <button type="submit">Log In</button>
      <br>
      
    </form>
  </div>

</body>
</html>
