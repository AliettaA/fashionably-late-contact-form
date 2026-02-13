<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
            <nav>
                <ul class="header-nav">
                    @if(Auth::check() && Request::is('admin*'))
                    <li class="logout__button">
                        <form action="/logout" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="logout__button-submit">
                                logout
                            </button>
                        </form>
                    </li>
                    @else
                    @if (Request::is('register'))
                    <li><a href="/login" class="login">login</a></li>
                    @elseif (Request::is('login'))
                    <li><a href="/register" class="register">register</a></li>
                    @endif
                    @endauth
                </ul>
            </nav>
        </div>

    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>