<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-between">
    <div class="container">


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
           
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('inicio') && ! Request::is('inicio')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/inicio')}}">
                           <h4>Inicio</h4>
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('sobremesa') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/sobremesa')}}">
                            <h4>Sobremesa</h4>
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('portatil') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/portatil')}}">
                            <h4>Portátiles</h4>
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('movil') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/movil')}}">
                            <h4>Móviles</h4>
                        </a>
                    </li>
                    @if( Auth::check() )
                    @if(auth()->user()->Privilegios=='Administrador')
                    <li class="nav-item {{  Request::is('productos') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/productos/show')}}">
                            <h4>Productos</h4>
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('usuarios') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/usuarios')}}">
                            <h4>Usuarios</h4>
                        </a>
                    </li>
                     @endif
                     @endif
                </ul>
        @if( Auth::check() )

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            @else

            <ul class="navbar-nav navbar-right p-2">
                    <li class="nav-item">
                    
                            <a class="nav-link btn btn-success mr-2 text-white" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                        
                    </li>
                </ul>
                <ul class="navbar-nav navbar-right p-2">
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary mr-2 text-white" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                    </li>
                </ul>

            
        @endif
     </div>
    </div>
</nav>
