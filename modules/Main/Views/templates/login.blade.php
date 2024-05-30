<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>

<div class="body-wrapper login d-flex justify-content-center align-items-center">
    <div class="login-wrapper">
        <div class="login-form">
            <div class="logo">
                <img src="{{ URL::asset('/images/logo.svg') }}" alt="NCLH logo" class="img-fluid">
            </div>
            <form action="{{ url('login') }}" method="post" autocomplete="off">

                <div class="error-message">
                    <i class="bi bi-exclamation-triangle-fill"></i> Error message here!
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input required type="text" class="form-control" id="username" name="_username" value="">

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input required type="password" class="form-control" id="password" name="_password">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="checkbox" value="1" id="remember_me">

                    <label for="remember_me" class="form-label">Remember me</label>
                </div>

                @csrf

                <div class="forgot-password">
                    <a href="#" class="link">Forgot Password?</a>
                </div>

                <button type="submit" class="btn btn-primary btn-cta">Login</button>
            </form>
        </div>
    </div>
</div>

@yield('page_script')
</body>
</html>
