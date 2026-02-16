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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&display=swap" rel="stylesheet">
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
                        <form class="inline" action="/logout" method="POST">
                            @csrf
                            <button class="logout__button-submit" type="submit">
                                logout
                            </button>
                        </form>
                    </li>
                    @else
                    @if (Request::is('register'))
                    <li><a class="login" href="/login">login</a></li>
                    @elseif (Request::is('login'))
                    <li><a class="register" href="/register">register</a></li>
                    @endif
                    @endif
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>