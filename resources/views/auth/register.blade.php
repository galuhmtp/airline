<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Wi Wok De Tok Airlines</title>
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

        .register-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            max-width: 450px;
            width: 100%;
            margin: 2rem;
        }

        .register-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 2.5rem 2rem;
            text-align: center;
        }

        .register-body {
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

        .text-primary {
            color: var(--primary) !important;
        }

        .login-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .login-link:hover {
            color: var(--secondary);
            text-decoration: underline;
        }

        .benefit-list {
            list-style: none;
            padding: 0;
            margin: 1.5rem 0;
        }

        .benefit-list li {
            padding: 0.5rem 0;
            color: #6b7280;
            display: flex;
            align-items: center;
        }

        .benefit-list li i {
            color: var(--primary);
            margin-right: 0.75rem;
            font-size: 1.1rem;
        }

        .password-strength {
            height: 4px;
            border-radius: 2px;
            margin-top: 0.25rem;
            background: #e5e7eb;
            overflow: hidden;
        }

        .password-strength-bar {
            height: 100%;
            border-radius: 2px;
            transition: all 0.3s ease;
            width: 0%;
        }

        .strength-weak { background: #ef4444; width: 25%; }
        .strength-fair { background: #f59e0b; width: 50%; }
        .strength-good { background: #10b981; width: 75%; }
        .strength-strong { background: #10b981; width: 100%; }

        .password-requirements {
            font-size: 0.875rem;
            color: #6b7280;
            margin-top: 0.5rem;
        }

        .requirement {
            display: flex;
            align-items: center;
            margin-bottom: 0.25rem;
        }

        .requirement.met {
            color: #10b981;
        }

        .requirement i {
            margin-right: 0.5rem;
            font-size: 0.75rem;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <!-- Header -->
        <div class="register-header">
            <div class="airline-logo">
                <i class="fas fa-plane"></i>
            </div>
            <h2 class="fw-bold mb-2">Wi Wok De Tok Airlines</h2>
            <p class="mb-0 opacity-75">Buat Akun Baru</p>
        </div>

        <!-- Body -->
        <div class="register-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-user"></i>
                        </span>
                        <input id="name" class="form-control" type="text" name="name" 
                               value="{{ old('name') }}" required autofocus autocomplete="name"
                               placeholder="Masukkan nama lengkap Anda">
                    </div>
                    @error('name')
                        <div class="text-danger small mt-2">
                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input id="email" class="form-control" type="email" name="email" 
                               value="{{ old('email') }}" required autocomplete="email"
                               placeholder="Masukkan alamat email Anda">
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
                               required autocomplete="new-password"
                               placeholder="Buat password yang kuat"
                               oninput="checkPasswordStrength(this.value)">
                    </div>
                    
                    <!-- Password Strength Meter -->
                    <div class="password-strength">
                        <div class="password-strength-bar" id="passwordStrengthBar"></div>
                    </div>
                    
                    <!-- Password Requirements -->
                    <div class="password-requirements">
                        <div class="requirement" id="reqLength">
                            <i class="fas fa-circle"></i>
                            <span>Minimal 8 karakter</span>
                        </div>
                        <div class="requirement" id="reqUppercase">
                            <i class="fas fa-circle"></i>
                            <span>Minimal 1 huruf besar</span>
                        </div>
                        <div class="requirement" id="reqLowercase">
                            <i class="fas fa-circle"></i>
                            <span>Minimal 1 huruf kecil</span>
                        </div>
                        <div class="requirement" id="reqNumber">
                            <i class="fas fa-circle"></i>
                            <span>Minimal 1 angka</span>
                        </div>
                    </div>
                    
                    @error('password')
                        <div class="text-danger small mt-2">
                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="password_confirmation" class="form-label fw-semibold">Konfirmasi Password</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input id="password_confirmation" class="form-control" type="password" 
                               name="password_confirmation" required autocomplete="new-password"
                               placeholder="Ketik ulang password Anda">
                    </div>
                    @error('password_confirmation')
                        <div class="text-danger small mt-2">
                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Benefits List -->
                <ul class="benefit-list">
                    <li><i class="fas fa-check-circle"></i> Akses ke semua fitur booking</li>
                    <li><i class="fas fa-check-circle"></i> Notifikasi promo eksklusif</li>
                    <li><i class="fas fa-check-circle"></i> Riwayat pemesanan terpusat</li>
                    <li><i class="fas fa-check-circle"></i> Proses checkout lebih cepat</li>
                </ul>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a class="login-link" href="{{ route('login') }}">
                        <i class="fas fa-sign-in-alt me-1"></i>Sudah punya akun?
                    </a>
                </div>

                <button type="submit" class="btn btn-gradient">
                    <i class="fas fa-user-plus me-2"></i>Daftar Sekarang
                </button>

                <!-- Terms Notice -->
                <div class="text-center mt-3">
                    <small class="text-muted">
                        Dengan mendaftar, Anda menyetujui 
                        <a href="#" class="login-link">Syarat & Ketentuan</a> 
                        dan 
                        <a href="#" class="login-link">Kebijakan Privasi</a>
                    </small>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function checkPasswordStrength(password) {
            const strengthBar = document.getElementById('passwordStrengthBar');
            const requirements = {
                length: document.getElementById('reqLength'),
                uppercase: document.getElementById('reqUppercase'),
                lowercase: document.getElementById('reqLowercase'),
                number: document.getElementById('reqNumber')
            };

            let strength = 0;
            let meetsRequirements = {
                length: password.length >= 8,
                uppercase: /[A-Z]/.test(password),
                lowercase: /[a-z]/.test(password),
                number: /[0-9]/.test(password)
            };

            // Update requirement indicators
            Object.keys(meetsRequirements).forEach(key => {
                const requirement = requirements[key];
                const icon = requirement.querySelector('i');
                
                if (meetsRequirements[key]) {
                    requirement.classList.add('met');
                    icon.className = 'fas fa-check-circle';
                    strength++;
                } else {
                    requirement.classList.remove('met');
                    icon.className = 'fas fa-circle';
                }
            });

            // Update strength bar
            strengthBar.className = 'password-strength-bar';
            if (password.length === 0) {
                strengthBar.style.width = '0%';
            } else if (strength <= 1) {
                strengthBar.classList.add('strength-weak');
            } else if (strength <= 2) {
                strengthBar.classList.add('strength-fair');
            } else if (strength <= 3) {
                strengthBar.classList.add('strength-good');
            } else {
                strengthBar.classList.add('strength-strong');
            }
        }

        // Add interactive effects
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
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Mendaftarkan...';
                submitBtn.disabled = true;
            });

            // Initialize password strength checker
            const passwordInput = document.getElementById('password');
            if (passwordInput.value) {
                checkPasswordStrength(passwordInput.value);
            }
        });
    </script>
</body>
</html>