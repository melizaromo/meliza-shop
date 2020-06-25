<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Crear</title>
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
    <section class="contact-section bg-black">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                -{{ $error }} <br>
                                @endforeach
                            </div>
                            @endif

                            <form action="{{ url('/Inventario') }}" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input class="form-control" type="hidden" id="producto_id" name="producto_id" value="{{ old('producto_id') }}">
                                </div>
                                <div class="form-group">
                                    <label for="nombre_prenda">Nombre de la prenda: </label>
                                    <input class="form-control" type="text" name="nombre_prenda" id="nombre_prenda" value="{{ old('nombre_prenda') }}">
                                </div>
                                <div class="form-group">
                                    <label for="estilo">Estilo: </label>
                                    <input class="form-control" type="text" name="estilo" id="estilo" value="{{ old('estilo') }}">
                                </div>
                                <div class="form-group">
                                    <label for="color">Color: </label>
                                    <input class="form-control" type="text" name="color" id="color" value="{{ old('color') }}">
                                </div>
                                <div class="form-group">
                                    <label for="talla">Talla: </label>
                                    <input class="form-control" type="text" name="talla" id="talla" value="{{ old('talla') }}">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripcion: </label>
                                    <input class="form-control" type="text" name="descripcion" id="descripcion" value="{{ old('descripcion') }}">
                                </div>
                                <div class="form-group text-center">
                                    @csrf
                                    <button class="btn btn-primary" type="submit" id="guardar" name="guardar" value="guardar">
                                        Guardar
                                    </button>
                                </div>
                            </form>

                            {{ $productos->links() }}

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Nombre Prenda</th>
                                            <th scope="col">Estilo</th>
                                            <th scope="col">Color</th>
                                            <th scope="col">Talla</th>
                                            <th scope="col">Descripcion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($productos as $producto)
                                        <tr style="font-size: 15px;">
                                            <td> {{ $producto->producto_id }} </td>
                                            <td> {{ $producto->nombre_prenda }}</td>
                                            <td> {{ $producto->estilo }}</td>
                                            <td> {{ $producto->color }}</td>
                                            <td> {{ $producto->talla }}</td>
                                            <td> {{ $producto->descripcion }}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-11 offset-1 mb-2">
                                                        <a style="font-size:10px;" class="btn btn-info" type="submit" value="editar" href="{{url('/Inventario/'.$producto->producto_id)}}/edit">
                                                            Editar
                                                        </a>
                                                    </div>
                                                    <div class="col-11 offset-1">
                                                        <form action="{{ url('/Inventario/'.$producto->producto_id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button style="font-size:10px;" class="btn btn-danger" type="submit" value="eliminar" onclick="return confirm('Esta seguro de eliminar este registro de la base de datos?');">
                                                                Eliminar
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
