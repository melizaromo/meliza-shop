<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Regalo</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="{{ asset('https://use.fontawesome.com/releases/v5.13.0/js/all.js') }}" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Varela+Round') }}" rel="stylesheet" />
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a id="hovers" class="navbar-brand js-scroll-trigger" style="color: #64a19d; font-size: 20px;" href="{{ url('/') }}">Meliza Shop</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a id="hovers" class="nav-link js-scroll-trigger" style="color: #64a19d; font-size: 20px;" href="{{ url('/Regalo') }}">Regalo por compra</a>
                    </li>
                    <li class="nav-item">
                        <a id="hovers" class="nav-link js-scroll-trigger" style="color: #64a19d; font-size: 20px;" href="{{ url('/Producto') }}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a id="hovers" class="nav-link js-scroll-trigger" style="color: #64a19d; font-size: 20px;" href="{{ url('/Inventario') }}">Inventario</a>
                    </li>
                    <li class="nav-item">
                        <a id="hovers" class="nav-link js-scroll-trigger" style="color: #64a19d; font-size: 20px;" href="{{ url('/Contacto') }}">Contacto</a>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a id="hovers" class="nav-link js-scroll-trigger" style="color: #64a19d; font-size: 20px;" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a id="hovers" class="nav-link js-scroll-trigger" style="color: #64a19d; font-size: 20px;" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact-->
    <section class="contact-section bg-black text-center">
        <div>
            <h1 class="text-white text-center">¡Reclama ahora tu regalo por primera compra!</h1>
        </div>
        <div>
            <h3 class="text-white text-center">¡En la compra de cualquier producto del catalogo de nuestra tienda Meliza Shop te regalamos una prenda de las que se muestran en pantalla!</h3>
        </div>
        <p>elige el que mas te guste. ¡¡Gracias por las preferencias!!</p>
        <a class="btn btn-primary js-scroll-trigger" href="{{ url('/Inventario') }}">
            <img class="" src="{{ asset('img/Blusas.jpg') }}" width="500px" height="500px" alt="" />
        </a>
        <a class="btn btn-primary js-scroll-trigger" href="{{ url('/Inventario') }}">
            <img class="" src="{{ asset('img/Shorts.jpg') }}" width="500px" height="500px" alt="" />
        </a>
    </section>

    <section class="contact-section bg-light text-center">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($regalos as $regalo)
                        <tr style="font-size: 15px;">
                            <td> {{ $regalo->regalo_id }} </td>
                            <td> {{ $regalo->descripcion }}</td>
                            <td> {{ $regalo->precio }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $regalos->links() }}
        </div>
    </section>


    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container">Copyright © Meliza Shop</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Third party plugin JS-->
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
