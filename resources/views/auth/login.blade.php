<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ secure_asset('assets/bootstrap.min.css') }}">
    <style>
        body {
            background: url('{{ secure_asset('labuan bajo.jpg') }}') no-repeat center center fixed;
            background-size: cover;
        }
        .bg-overlay {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(5px);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="bg-overlay" style="min-width: 400px;">
        <h4 class="text-center mb-4">Login Sistem Akademik</h4>

        {{-- Flash message logout --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Error message --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email"
                       class="form-control"
                       id="email"
                       name="email"
                       value="{{ old('email') }}"
                       required autofocus>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password"
                       class="form-control"
                       id="password"
                       name="password"
                       required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">test@example.com
                    Password= 123456</label>
            
            </div>

            <button type="submit" class="btn btn-primary w-100">Masuk</button>
        </form>
    </div>

    <script src="{{ secure_asset('assets/jquery-3.6.1.js') }}"></script>
    <script src="{{ secure_asset('assets/bootstrap.min.js') }}"></script>
</body>
</html>
