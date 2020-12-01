<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Handige Mannen - Dashboard</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
        <style>
            body {
        overflow-x: hidden;
        background-color: #ebeef1;
        color: #1a1630;
        }
        #sidebar-wrapper {
        min-height: 100vh;
        margin-left: -15rem;
        }
        #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
        }
        #sidebar-wrapper .list-group {
        width: 15rem;
        }
        #page-content-wrapper {
        min-width: 100vw;
        }
        #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
        }
        @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
        }
        #page-content-wrapper {
            min-width: 0;
            width: 100%;
            font-weight: 600;
        }
        #heading{
            font-size: 30px;
        }
        .btn-primary{
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
        }

        .btn-secondary{
        color: #fff;
        background-color: #EF4B4B;
        border-color: #EF4B4B;
        }
        .btn-third{
        color: #fff;
        background-color: #ffab00;
        border-color: #ffab00;
        }
        #wrapper.toggled #sidebar-wrapper {
            margin-left: -15rem;
        }
        svg{
            fill: white;
            margin-bottom: 5px;
        }
        #blue-email{
            margin-top: 10px;
            font-size: 12px;
            color: #007bff
        }
        .big-text{
            font-weight: 700;
        }
        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            position: relative;
            margin-bottom: 1.5rem;
            width: 100%;
            border: 1px solid #dbe2eb;
            box-shadow: 0px 6px 8px rgba(4, 4, 7, 0.1);
            border-radius: 8px;
            margin: 20px;
            width: 50%;
            }
            .card-header {
                background: transparent;
                padding: 0.5rem 1.5rem;
                display: -ms-flexbox;
                display: flex;
                min-height: 3.5rem;
                -ms-flex-align: center;
                align-items: center;
                margin-bottom: 0;
                border-bottom: 1px solid #ebecf1;
                position: relative;
            }
            .side-menu__icon {
                color: #5c678f;
                fill: #5c678f;
                font-size: 25px;
                line-height: 30px;
                text-align: center;
                vertical-align: middle;
                margin-right: 12px;
                width: 37.5px;
                height: 37.5px;
                background: #fff;
                padding: 8px;
                border-radius: 50px;
                box-shadow: 0px 2px 3px rgba(4, 4, 7, 0.1);
                border: 1px solid #ebecf1;
            }
            .card-body {
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                margin: 0;
                padding: 1.5rem 1.5rem;
                position: relative;
}
        .sidebar-heading{
            color: #1a1630;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .5px;
            margin-bottom: 12px;
            padding: 0 20px 0 20px;
        }
        .header-icon {
            color: #5c678f;
            fill: #5c678f;
            width: 20px;
            height: 20px;
}
        }

        .list-card {
            border-left: 1px solid  #EF4B4B;
            padding: 14px 25px;
            border-radius: 20px;
            -webkit-box-shadow: 0 2px 10px 0 rgba(4, 4, 7, 0.1);
            box-shadow: 0 2px 10px 0 rgba(4, 4, 7, 0.1);
            margin-bottom: 12px;
            background: #fff;
            position: relative;
            border-left: 1px #ffab00
        }
        .header-icon {
            color: #5c678f;
            fill: #5c678f;
            width: 20px;
            height: 20px;
        }
        .bg-warning {
            background-color: #ffab00 !important;
        }
        .ratio{
            position: absolute;
            right: 0px;

            padding: 5px 15px;
            background-color: #222222;
            font-size: 13px;
            line-height: 20px;
            font-weight: 600;
            color: #fff;
            border-radius: 15px 0px 0px 15px;
        }
        .card-header:before {
    background-color: #705ec8;
}

.card-header:before {
    content: "";
    position: absolute;
    left: 0px;
    padding: 3px;
    border-radius: 0 50px 50px 0;
    height: 20px;
}
.list-bar {
    right: auto;
    bottom: 0;
    height: auto;
    width: 3px;
    border-radius: 0px;
    position: absolute;
    top: -1px;
    left: 0;
}


        </style>
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
        <style>
            .list-card {
                border-left: 1px solid  #EF4B4B;
                padding: 14px 25px;
                border-radius: 20px;
                -webkit-box-shadow: 0 2px 10px 0 rgba(4, 4, 7, 0.1);
                box-shadow: 0 2px 10px 0 rgba(4, 4, 7, 0.1);
                margin-bottom: 12px;
                background: #fff;
                position: relative;
                border-left: 1px #ffab00
            }
            .header-icon {
                color: #5c678f;
                fill: #5c678f;
                width: 20px;
                height: 20px;
            }


            .bg-warning {
                background-color: #ffab00 !important;
            }
            .ratio{
                position: absolute;
                right: 0px;

                padding: 5px 15px;
                background-color: #222222;
                font-size: 13px;
                line-height: 20px;
                font-weight: 600;
                color: #fff;
                border-radius: 15px 0px 0px 15px;
            }
            .card-header:before {
        background-color: #705ec8;
    }

    .card-header:before {
        content: "";
        position: absolute;
        left: 0px;
        padding: 3px;
        border-radius: 0 50px 50px 0;
        height: 20px;
    }
    .list-bar {
        right: auto;
        bottom: 0;
        height: auto;
        width: 3px;
        border-radius: 0px;
        position: absolute;
        top: -1px;
        left: 0;
    }
    .success-text{
        position: absolute;
                padding: 7.3px 3px;
                font-size: 13px;
                line-height: 20px;
                font-weight: 600;
                color: #fff;
            color: #38cb89 !important;
    }
    .list-card {
            border-left: 1px solid  #EF4B4B;
            padding: 14px 25px;
            border-radius: 20px;
            -webkit-box-shadow: 0 2px 10px 0 rgba(4, 4, 7, 0.1);
            box-shadow: 0 2px 10px 0 rgba(4, 4, 7, 0.1);
            margin-bottom: 12px;
            background: #fff;
            position: relative;
            border-left: 1px #ffab00
        }
        .header-icon {
            color: #5c678f;
            fill: #5c678f;
            width: 20px;
            height: 20px;
        }


        .bg-warning {
            background-color: #ffab00 !important;
        }
        .ratio{
            position: absolute;
            right: 0px;

            padding: 5px 15px;
            background-color: #222222;
            font-size: 13px;
            line-height: 20px;
            font-weight: 600;
            color: #fff;
            border-radius: 15px 0px 0px 15px;
        }
        .card-header:before {
    background-color: #705ec8;
}

.card-header:before {
    content: "";
    position: absolute;
    left: 0px;
    padding: 3px;
    border-radius: 0 50px 50px 0;
    height: 20px;
}
.list-bar {
    right: auto;
    bottom: 0;
    height: auto;
    width: 3px;
    border-radius: 0px;
    position: absolute;
    top: -1px;
    left: 0;
}
.success-text{
    position: absolute;
    padding: 7.3px 3px;
    font-size: 13px;
    line-height: 20px;
    font-weight: 600;
    color: #fff;
    color: #38cb89 !important;
}




            </style>

    </head>


<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm text-gold-100">
            <div class="container">


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->id }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

