<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <a href="/" class="nav-item">
                <img src="/images/logo.png" alt="UCC Logo">
            </a>
        </div>
        
        <span  id="nav-toggle" class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </span>
        
        <div id="nav-menu" class="nav-right nav-menu">
            <a href="/" class="nav-item is-tab {{ $controller == 'HomeController' ? 'is-active' : '' }}">
                Inicio
            </a>
            <a href="/companies" class="nav-item is-tab {{ $controller == 'CompanyController' ? 'is-active' : '' }}">
                Empresas
            </a>
            <a href="/offers" class="nav-item is-tab {{ $controller == 'OfferController' ? 'is-active' : '' }}">
                Cursos
            </a>
            {{-- <a href="/trends" class="nav-item is-tab {{ $controller == 'TrendController' ? 'is-active' : '' }}">
                Tendencias
            </a> --}}
            <a href="/contact" class="nav-item is-tab {{ $controller == 'ContactController' ? 'is-active' : '' }}">
                Contacto
            </a>
        </div>
    </div>
</nav>
