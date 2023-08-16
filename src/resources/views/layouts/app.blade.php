<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="container">
            <button data-toggle="modal" data-target="#menuModal" class="menu-button">
                <img src="{{ asset('images/menu.png') }}" alt="メニュー">
            </button>

            <div class="modal fade" id="menuModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <a href="{{ url('/') }}">Home</a><br>
                            @if(Auth::check())
                                <a href="{{ url('/register') }}">Logout</a><br>
                                <a href="{{ url('/login') }}">Mypage</a>
                            @else
                                <a href="{{ url('/register') }}">Registration</a><br>
                                <a href="{{ url('/login') }}">Login</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        </div>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>
