<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Producto</title>
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
    <!-- Project One Row-->
    <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6"><img class="img-fluid" src="img/vestidos.jpg" alt="" /></div>
        <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
                <div class="d-flex h-100">
                    <div class="project-text w-100 my-auto text-center text-lg-left">
                        <h2 class="text-white">Vestidos</h2>
                        <h4 class="mb-0 text-white-50">Variedad de vestidos en existencia.</h4>
                        <hr class="d-none d-lg-block mb-0 ml-0" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Two Row-->
    <div class="row justify-content-center no-gutters">

        <div class="col-lg-6"><img class="img-fluid" src="img/Blusas.jpg" alt="" /></div>
        <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
                <div class="d-flex h-100">
                    <div class="project-text w-100 my-auto text-center text-lg-right">
                        <h2 class="text-white">Blusas</h2>
                        <h4 class="mb-0 text-white-50">Variedad de blusas en existencia.</h4>
                        <hr class="d-none d-lg-block mb-0 mr-0" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project One Row-->
    <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6"><img class="img-fluid" src="img/Pantalones.png" alt="" /></div>
        <div class="col-lg-6">
            <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                    <h2 class="text-white">Pantalones</h2>
                    <h4 class="mb-0 text-white-50">Variedad de pantalones en existencia.</h4>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#PantalonesModal">
                        Shorts
                    </button>
                    <hr class="d-none d-lg-block mb-0 ml-0" />
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Project Two Row-->
    <div class="row justify-content-center no-gutters">
        <div class="col-lg-6"><img class="img-fluid" src="img/Shorts.jpg" width="500px" height="700px" alt="" />
        </div>
        <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
                <div class="d-flex h-100">
                    <div class="project-text w-100 my-auto text-center text-lg-right">
                        <h2 class="text-white">Shorts</h2>
                        <h4 class="mb-0 text-white-50">Variedad de shorts en existencia.</h4>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ShortsModal">
                            Shorts
                        </button>
                        <hr class="d-none d-lg-block mb-0 mr-0" />
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

    <!-- Modal -->
    <div class="modal fade" id="ShortsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Shorts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group" id="gender-group">
                        <label for="gender">Elige:</label>
                        <select class="form-control" id="gender" name="gender" required="">
                            <option value="" selected="">Estilo</option>
                            <option value="M">01</option>
                            <option value="F">02</option>
                            <option value="M">03</option>
                            <option value="F">04</option>
                        </select>
                        <select class="form-control" id="gender" name="gender" required="">
                            <option value="" selected="">Talla</option>
                            <option value="M">XS</option>
                            <option value="F">S</option>
                            <option value="M">M</option>
                            <option value="F">G</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </div>
    <!--Modal Pantalones -->
    <div class="modal fade" id="PantalonesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pantalones</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group" id="gender-group">
                        <label for="gender">Elige:</label>
                        <select class="form-control" id="gender" name="gender" required="">
                            <option value="" selected="">Estilo</option>
                            <option value="Acampanado">Acampanado</option>
                            <option value="BootCut">BootCut</option>
                            <option value="Skinny">Skinny</option>
                            <option value="Straight">Straight</option>
                            <option valua="Superskinny">Superskinny</option>
                        </select>
                        <select class="form-control" id="gender" name="gender" required="">
                            <option value="" selected="">Talla</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="G">G</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ShortsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Shorts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group" id="gender-group">
                        <label for="gender">Elige:</label>
                        <select class="form-control" id="gender" name="gender" required="">
                            <option value="" selected="">Estilo</option>
                            <option value="M">01</option>
                            <option value="F">02</option>
                            <option value="M">03</option>
                            <option value="F">04</option>
                        </select>
                        <select class="form-control" id="gender" name="gender" required="">
                            <option value="" selected="">Talla</option>
                            <option value="M">XS</option>
                            <option value="F">S</option>
                            <option value="M">M</option>
                            <option value="F">G</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ShortsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Shorts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group" id="gender-group">
                        <label for="gender">Elige:</label>
                        <select class="form-control" id="gender" name="gender" required="">
                            <option value="" selected="">Estilo</option>
                            <option value="M">01</option>
                            <option value="F">02</option>
                            <option value="M">03</option>
                            <option value="F">04</option>
                        </select>
                        <select class="form-control" id="gender" name="gender" required="">
                            <option value="" selected="">Talla</option>
                            <option value="M">XS</option>
                            <option value="F">S</option>
                            <option value="M">M</option>
                            <option value="F">G</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Third party plugin JS-->
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
