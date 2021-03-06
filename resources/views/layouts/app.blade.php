<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/users.js') }}" defer></script>

    <script src="{{ asset('js/auth.js') }}" defer></script> --}}

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/home.min.js') }}" defer></script>

    <script>
        let route_registration = "{{ route('api.register') }}";
        let route_login = "{{ route('api.login') }}";
        let route_get_users = "{{ route('api.getUsers') }}";
        let route_logout = "{{ route('api.logout') }}";
        let route_get_user = "{{ route('api.getUser') }}";
        let route_get_user_by_id = "{{ route('api.getUserById') }}";
        let route_edit_user = "{{ route('api.editUser') }}";
        let route_create_user = "{{ route('api.createUser') }}";

        let dom_user_item = '{!! str_replace(["\r", "\n"], '', view('users.userItem')) !!}';
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <div class="js-buttons-auth-guest">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#modalRegister">
                                {{ __('Register') }}
                            </button>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#modalLogin">
                                {{ __('Login') }}
                            </button>
                        </div>

                        <div class="d-none js-buttons-auth-login-user">
                            <button type="button" class="btn btn-success js-logout">
                                {{ __('Logout') }}
                            </button>
                            <span class="js-container-create-user d-none">
                                <button class="btn btn-success js-check-modal-create-user" data-bs-toggle="modal"
                                    data-bs-target="#modalCreateUser">{{ __('home.create') }}</button>
                            </span>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @include('auth.modals.register')
    @include('auth.modals.login')
    @include('users.modals.editUser')
    @include('users.modals.createUser')
</body>

</html>
