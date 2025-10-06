<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Playcrickgg Update</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      background: #f8f9fa;
      margin: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .bg-custom-green {
      background-color: #059669;
    }

    .btn-yellow {
      background-color: #fcd34d;
      color: #000;
      font-weight: 600;
      border-radius: 0.5rem;
      border: none;
      transition: background 0.3s ease;
    }

    .btn-yellow:hover {
      background-color: #eab308;
      color: #000;
    }

    .input-group-text-yellow {
      background-color: #fcd34d;
      color: #000;
      border: none;
    }

    a {
      color: #fde68a;
      font-weight: 500;
    }

    a:hover {
      text-decoration: underline;
    }

    .small {
      color: #fde68a;
    }

    /* Footer */
    .footer {
      padding-top: 0.3rem;
      padding-bottom: 0.6rem;
      background: #f8f9fa;
    }

    .gaming-curacao {
      height: 60px;
      max-width: 100%;
    }

    .copyright {
      text-align: center;
      color: #6c757d;
      font-size: 0.9rem;
      margin-top: 0.3rem;
      padding-top: 0.5rem;
      border-top: 1px solid #e9ecef;
    }

    @media (max-width: 768px) {
      .gaming-curacao {
        height: 45px;
      }

      .copyright {
        font-size: 0.8rem;
      }
    }

    @media (max-width: 576px) {
      .gaming-curacao {
        height: 40px;
      }

      .copyright {
        font-size: 0.75rem;
      }
    }
  </style>
</head>

<body>
  <!-- Main Section -->
  <main class="d-flex align-items-center justify-content-center flex-grow-1">
    <div class="bg-custom-green p-4 rounded-3 text-center text-white shadow" style="width: 380px;">
      <!-- Logo -->
      <a>
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mb-4" style="max-width:180px;" />
      </a>

      <!-- Form -->
      <form>
        <!-- Mobile Number + Get OTP -->
        <div class="mb-3">
          <div class="input-group">
            <input type="text" name="phone" class="form-control" placeholder="+91 Enter Your 10 Digit Number" />
            <button type="button" class="btn btn-yellow">Get OTP</button>
          </div>
        </div>

        <!-- OTP -->
        <div class="mb-3">
          <input type="text" name="otp" class="form-control" placeholder="Enter OTP" />
        </div>

        <!-- Password -->
        <div class="mb-3 input-group">
          <span class="input-group-text input-group-text-yellow"><i class="bi bi-lock"></i></span>
          <input type="password" name="password" class="form-control rounded-end" placeholder="Password" />
        </div>

        <!-- Remember Me -->
        <div class="form-check text-start mb-3">
          <input class="form-check-input" type="checkbox" value="" id="rememberMe" />
          <label class="form-check-label small" for="rememberMe">REMEMBER ME</label>
        </div>

        <!-- Update Button -->
        <div class="d-grid mb-3">
          <button type="submit" class="btn btn-yellow">Update</button>
        </div>

        <!-- Already have account -->
        <p class="small mb-0">
          Already have an account? <a href="{{ route('login') }}"><b>Login</b></a>
        </p>
      </form>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
