<!--================Header Area =================-->
<nav role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="{{ route('home') }}" class="brand-logo"><img
                    class="responsive-img" src="{{ asset('img/logo.png') }}"></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('empresa') }}">Empresa</a></li>
            <li><a href="{{ route('productos') }}">Productos</a></li>
            <li><a href="{{ route('presupuestos') }}">Solicitud de Presupuesto</a></li>
            <li><a href="{{ route('contacto') }}">Contacto</a></li>
            <li>
                <form>
                    <div class="input-field">
                        <input id="search" type="search" required>
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </form>
            </li>

        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="{{ route('empresa') }}">Empresa</a></li>
            <li><a href="{{ route('productos') }}">Productos</a></li>
            <li><a href="{{ route('presupuestos') }}">Solicitud de Presupuesto</a></li>
            <li><a href="{{ route('contacto') }}">Contacto</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>
<!--================Header Area =================-->