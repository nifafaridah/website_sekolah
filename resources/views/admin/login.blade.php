<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin - MTS Alhidayah</title>

    <link rel="icon" href="{{ asset('images/logo-sekolah.png') }}">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/school.css') }}">
</head>

<body style="background: linear-gradient(135deg, #003e1c, #0b9438); min-height: 100vh;">
    <div class="container d-flex align-items-center justify-content-center py-5"
         style="min-height: 100vh;">

        <div class="bg-white rounded-4 shadow-lg p-4 p-md-5"
             style="max-width: 450px; width: 100%;">

            <div class="text-center">
                <img src="{{ asset('images/logo-sekolah.png') }}"
                     alt="Logo MTS Alhidayah"
                     style="width: 95px; height: 95px; object-fit: contain;">

                <h2 class="text-green fw-bold mt-3">MTS Alhidayah</h2>
                <p class="text-muted">Bojongnangka · Login Administrator</p>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.login.proses') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="username" class="form-label">Username/email</label>
                    <input type="text"
                           id="username"
                           name="username"
                           class="form-control"
                           value="{{ old('username') }}"
                           placeholder="Masukkan username atau email"
                           autocomplete="username"
                           required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password"
                           id="password"
                           name="password"
                           class="form-control"
                           placeholder="Masukkan password"
                           autocomplete="current-password"
                           required>
                </div>

                <button type="submit" class="btn btn-school w-100 py-2">
                    <i class="mdi mdi-login me-1"></i>
                    Masuk ke Dashboard
                </button>
            </form>

            <div class="text-center mt-3">
                <a href="{{ route('public.dashboard') }}"
                   class="text-success text-decoration-none">
                    &larr; Kembali ke website
                </a>
            </div>
        </div>
    </div>
</body>
</html>
