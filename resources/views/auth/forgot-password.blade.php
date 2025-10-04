<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", sans-serif;
    }

    body {
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .forgot-container {
      background: #fff;
      padding: 2rem;
      border-radius: 1rem;
      width: 100%;
      max-width: 380px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }

    .forgot-container h2 {
      text-align: center;
      margin-bottom: 1rem;
      color: #333;
      font-size: 1.8rem;
    }

    .description {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #666;
      font-size: 0.9rem;
      line-height: 1.4;
    }

    .form-group {
      margin-bottom: 1rem;
    }

    .form-group label {
      display: block;
      font-size: 0.9rem;
      margin-bottom: 0.5rem;
      color: #555;
    }

    .form-group input {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 0.5rem;
      outline: none;
      transition: border-color 0.3s;
    }

    .form-group input:focus {
      border-color: #2a5298;
    }

    .btn {
      display: block;
      width: 100%;
      background: #2a5298;
      color: #fff;
      padding: 0.9rem;
      border: none;
      border-radius: 0.5rem;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s;
    }

    .btn:hover {
      background: #1e3c72;
    }

    .back-link {
      text-align: center;
      margin-top: 1rem;
      font-size: 0.9rem;
    }

    .back-link a {
      color: #2a5298;
      text-decoration: none;
      font-weight: 500;
    }

    .back-link a:hover {
      text-decoration: underline;
    }

    .success {
      color: green;
      font-size: 0.8rem;
      margin-top: 0.5rem;
      text-align: center;
    }

    .error {
      color: red;
      font-size: 0.8rem;
      margin-top: 0.5rem;
    }
  </style>
</head>
<body>
  <div class="forgot-container">
    <h2>Forgot Password</h2>
    <p class="description">
      Forgot your password? No problem. Just let us know your email address and we will email you a password reset link.
    </p>

    @if (session('status'))
      <div class="success">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
      @csrf
      <div class="form-group">
        <label>Email Address</label>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autofocus>
        @if($errors->has('email'))
          <div class="error">{{ $errors->first('email') }}</div>
        @endif
      </div>

      <button type="submit" class="btn">Send Password Reset Link</button>
    </form>

    <div class="back-link">
      <a href="{{ route('login') }}">← Back to Login</a>
    </div>
  </div>
</body>
</html>
