<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Wi Wok De Tok Airlines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #6366f1;
            --secondary: #8b5cf6;
            --accent: #ec4899;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            max-width: 400px;
            width: 100%;
            margin: 2rem;
        }

        .login-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 2.5rem 2rem;
            text-align: center;
        }

        .login-body {
            padding: 2.5rem 2rem;
        }

        .airline-logo {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            animation: fly 3s ease-in-out infinite;
        }

        @keyframes fly {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-8px) rotate(-5deg); }
        }

        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            border: 2px solid #e5e7eb;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
        }

        .input-group-text {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
            color: white;
            border-radius: 10px 0 0 10px;
        }

        .btn-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
            color: white;
            font-weight: 600;
            padding: 12px 25px;
            border-radius: 10px;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-gradient:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.3);
            color: white;
        }

        .form-check-input:checked {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .form-check-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
        }

        .alert {
            border-radius: 10px;
            border: none;
        }

        .alert-success {
            background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);
            color: #065f46;
            border-left: 4px solid #10b981;
        }

        .text-primary {
            color: var(--primary) !important;
        }

        .forgot-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .forgot-link:hover {
            color: var(--secondary);
            text-decoration: underline;
        }

        .register-link {
            text-align: center;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e5e7eb;
        }

        .feature-list {
            list-style: none;
            padding: 0;
            margin: 1.5rem 0;
        }

        .feature-list li {
            padding: 0.5rem 0;
            color: #6b7280;
        }

        .feature-list li i {
            color: var(--primary);
            margin-right: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Header -->
        <div class="login-header">
            <div class="airline-logo">
                <i class="fas fa-plane"></i>
            </div>
            <h2 class="fw-bold mb-2">Wi Wok De Tok Airlines</h2>
            <p class="mb-0 opacity-75">Admin Panel Login</p>
        </div>

        <!-- Body -->
        <div class="login-body">
            <!-- Session Status -->
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                    <i class="fas fa-check-circle me-2"></i>{{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input id="email" class="form-control" type="email" name="email" 
                               value="{{ old('email') }}" required autofocus autocomplete="username"
                               placeholder="Masukkan email Anda">
                    </div>
                    @error('email')
                        <div class="text-danger small mt-2">
                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Password</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input id="password" class="form-control" type="password" name="password" 
                               required autocomplete="current-password"
                               placeholder="Masukkan password Anda">
                    </div>
                    @error('password')
                        <div class="text-danger small mt-2">
                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="mb-3">
                    <div class="form-check">
                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                        <label for="remember_me" class="form-check-label text-muted">
                            Ingat saya
                        </label>
                    </div>
                </div>

                <!-- Features List -->
                <ul class="feature-list">
                    <li><i class="fas fa-check-circle"></i> Kelola jadwal penerbangan</li>
                    <li><i class="fas fa-check-circle"></i> Pantau data pesanan</li>
                    <li><i class="fas fa-check-circle"></i> Kelola data pengguna</li>
                </ul>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    @if (Route::has('password.request'))
                        <a class="forgot-link" href="{{ route('password.request') }}">
                            <i class="fas fa-key me-1"></i>Lupa password?
                        </a>
                    @endif
                </div>

                <button type="submit" class="btn btn-gradient">
                    <i class="fas fa-sign-in-alt me-2"></i>Login
                </button>

                <!-- Register Link -->
                @if (Route::has('register'))
                    <div class="register-link">
                        <p class="text-muted mb-2">Belum punya akun?</p>
                        <a href="{{ route('register') }}" class="forgot-link">
                            <i class="fas fa-user-plus me-1"></i>Daftar akun baru
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add some interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.form-control');
            
            inputs.forEach(input => {
                // Add focus effect
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'scale(1.02)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'scale(1)';
                });
            });

            // Add loading state to submit button
            const form = document.querySelector('form');
            const submitBtn = form.querySelector('button[type="submit"]');
            
            form.addEventListener('submit', function() {
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Memproses...';
                submitBtn.disabled = true;
            });
        });
    </script>
</body>
</html>