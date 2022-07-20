<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div>
            <header class="bg-secondary">
                <div class="container">
                    <nav class="navbar navbar-expand-lg text-white px-3">
                        <div class="container-fluid">
                        <a class="navbar-brand fs-5 font-weight-bold  text-white " href="/">Home</a> 
                            <p class="fs-6 mb-3">"O que não é definido não pode ser medido, o que não é medido não pode ser melhorado."</p>

                            <ul class="navbar-nav mr-auto">
                                @if(Auth::user())
                                    <li class="nav-item ">
                                        <a href="/user" class="nav-link text-white">{{ Auth::user()->name}}</a>
                                    </li>
                                    <li class="nav-item pt-2 mx-3">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type=submit onclick="event.preventDefault(); 
                                                        this.closest('form').submit();">{{ __('Sair') }}</button>
                                        </form>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}" class="nav-link fs-5 text-white">Login</a>
                                    </li>
                                @endif    
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
        @yield('body')
    </div>
    
</body>
</html>