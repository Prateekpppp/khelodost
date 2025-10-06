<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Playcrickgg Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    .bg-custom-green { background-color: #059669; }
    .btn-yellow {
      background-color: #fcd34d; color: #000; font-weight: 600;
      border-radius: 0.5rem; border: none; transition: background 0.3s ease;
    }
    .btn-yellow:hover { background-color: #eab308; color: #000; }
    .input-group-text-yellow { background-color: #fcd34d; color: #000; border: none; border-radius: 0.5rem 0 0 0.5rem; }
    a { color: #fde68a; font-weight: 500; }
    a:hover { text-decoration: underline; }
    .small { color: #fde68a; }
  </style>
</head>

<body class="d-flex align-items-center justify-content-center bg-light" style="height:100vh; margin:0;">
  <div class="bg-custom-green p-4 rounded-3 text-center text-white shadow" style="width: 380px;">
    <!-- Logo -->
    <a>
      <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mb-4" style="max-width:180px;" />
    </a>

    <!-- Login Form -->
    <form>
      <!-- Mobile Number -->
      <div class="mb-3">
        <div class="input-group">
          <span class="input-group-text input-group-text-yellow"><i class="bi bi-phone"></i></span>
          <input type="text" name="phone" class="form-control rounded-end" placeholder="Enter mobile number" />
        </div>
      </div>

      <!-- Password -->
      <div class="mb-3">
        <div class="input-group">
          <span class="input-group-text input-group-text-yellow"><i class="bi bi-lock"></i></span>
          <input type="password" name="password" class="form-control rounded-end" placeholder="Password" />
        </div>
      </div>

      <!-- Login Buttons -->
      <div class="d-grid gap-2 mb-3">
        <a href="javascript:void(0)" class="btn btn-yellow text-center">Login</a>
        <a href="javascript:void(0)" onclick="demoLogin()" class="btn btn-yellow text-center">Login With Demo ID</a>
      </div>

      <!-- Forgot Password -->
      <div class="mb-3 text-end">
        <a href="{{ route('forgot_password') }}">Forgot Password?</a>
      </div>

      <!-- Or login with -->
      <p class="mb-2">Or login with</p>
      <div class="d-grid mb-3">
        <a href="javascript:void(0)" class="btn btn-success rounded-3 fw-semibold">
          <i class="bi bi-chat-dots-fill me-2"></i> Chatbot
        </a>
      </div>

      <!-- Register -->
      <p class="small">
        New User? <a href="{{route('signin')}}"><b>Create Account</b></a>
      </p>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function demoLogin() {
      localStorage.setItem('demo_login', 'true');
      window.location.href = "{{ route('index') }}";
    }
  </script>
</body>
</html>