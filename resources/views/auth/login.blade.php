{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            background: linear-gradient(135deg, #32075f, #e05ef1);
            background-size: 400% 400%;
            animation: gradientAnimation 6s infinite alternate ease-in-out;
        }
    
        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            100% {
                background-position: 100% 50%;
            }
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center">


    
    <div class="card p-4 shadow-lg" style="width: 400px; border-radius: 10px;">
        <h2 class="text-center text-warning">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-primary w-100">Log in</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Modern Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #6a11cb;
            --secondary-color: #2575fc;
            --accent-color: #ff6b6b;
        }
        
        body {
            height: 100vh;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            background-size: 400% 400%;
            animation: gradientAnimation 8s ease infinite;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow: hidden;
        }
        
        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .login-card {
            width: 380px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .login-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        
        .card-header {
            background: rgba(255, 255, 255, 0.15);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding: 1.5rem;
            text-align: center;
        }
        
        .card-title {
            color: white;
            font-weight: 700;
            font-size: 1.8rem;
            margin: 0;
            letter-spacing: 1px;
        }
        
        .card-body {
            padding: 2rem;
        }
        
        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            height: 45px;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.4);
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }
        
        .form-label {
            color: white;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        
        .btn-login {
            background: white;
            color: var(--primary-color);
            border: none;
            height: 45px;
            border-radius: 8px;
            font-weight: 600;
            letter-spacing: 1px;
            transition: all 0.3s;
        }
        
        .btn-login:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateY(-2px);
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        
        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            animation: floatParticle linear infinite;
        }
        
        @keyframes floatParticle {
            0% { transform: translateY(0) translateX(0); opacity: 0; }
            50% { opacity: 1; }
            100% { transform: translateY(-100vh) translateX(100px); opacity: 0; }
        }
        
        .input-group-text {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
        }
        
        .text-danger {
            font-size: 0.85rem;
            margin-top: 0.25rem;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }
        
        .forgot-link {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s;
        }
        
        .forgot-link:hover {
            color: white;
            text-decoration: underline;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center">
    <!-- Animated Background Particles -->
    <div class="particles" id="particles"></div>
    
    <div class="login-card animate__animated animate__fadeIn">
        <div class="card-header">
            <h1 class="card-title floating">
                <i class="fas fa-user-shield me-2"></i>Login
            </h1>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="form-label">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input type="email" id="email" name="email" class="form-control" 
                               value="{{ old('email') }}" required autofocus
                               placeholder="Enter your email">
                    </div>
                    @error('email')
                        <div class="text-danger animate__animated animate__shakeX">
                            <i class="fas fa-exclamation-circle me-1"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" id="password" name="password" 
                               class="form-control" required
                               placeholder="Enter your password">
                    </div>
                    @error('password')
                        <div class="text-danger animate__animated animate__shakeX">
                            <i class="fas fa-exclamation-circle me-1"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                        <label class="form-check-label text-white" for="remember">
                            Remember me
                        </label>
                    </div>
                    <a href="{{ route('password.request') }}" class="forgot-link">
                        Forgot password?
                    </a>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-login btn-block w-100 mb-3">
                    <i class="fas fa-sign-in-alt me-2"></i> Login
                </button>

                <!-- Sign Up Link -->
                <div class="text-center mt-3">
                    <span class="text-white">Don't have an account? </span>
                    <a href="{{ route('register') }}" class="forgot-link fw-bold">
                        Sign up
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Create animated particles
        document.addEventListener('DOMContentLoaded', function() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 20;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random size between 2px and 6px
                const size = Math.random() * 4 + 2;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                // Random position
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100}%`;
                
                // Random animation duration (10s to 20s)
                const duration = Math.random() * 10 + 10;
                particle.style.animationDuration = `${duration}s`;
                
                // Random delay
                particle.style.animationDelay = `${Math.random() * 5}s`;
                
                particlesContainer.appendChild(particle);
            }
            
            // Add hover effect to card
            const card = document.querySelector('.login-card');
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-5px)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>