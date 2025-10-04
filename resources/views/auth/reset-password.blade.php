<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reset Password</title>
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

    .reset-container {
      background: #fff;
      padding: 2rem;
      border-radius: 1rem;
      width: 100%;
      max-width: 380px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }

    .reset-container h2 {
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

    .error {
      color: red;
      font-size: 0.8rem;
      margin-top: 0.5rem;
    }
  </style>
</head>
<body>
  <div class="reset-container">
    <h2>Reset Password</h2>
    <p class="description">
      Please enter your new password below.
    </p>

    <form method="POST" action="{{ route('password.store') }}">
      @csrf

      <!-- Password Reset Token -->
      <input type="hidden" name="token" value="{{ $request->route('token') }}">

      <div class="form-group">
        <label>Email Address</label>
        <input type="email" name="email" value="{{ old('email', $request->email) }}" placeholder="Enter your email" required autofocus>
        @if($errors->has('email'))
          <div class="error">{{ $errors->first('email') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label>New Password</label>
        <input type="password" name="password" placeholder="Enter new password" required>
        @if($errors->has('password'))
          <div class="error">{{ $errors->first('password') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" placeholder="Confirm new password" required>
        @if($errors->has('password_confirmation'))
          <div class="error">{{ $errors->first('password_confirmation') }}</div>
        @endif
      </div>

      <button type="submit" class="btn">Reset Password</button>
    </form>

    <div class="back-link">
      <a href="{{ route('login') }}">← Back to Login</a>
    </div>
  </div>
</body>
</html>
