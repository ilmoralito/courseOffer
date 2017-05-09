<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <a class="nav-item">
                <img src="/images/logo.png" alt="UCC Logo">
            </a>
        </div>
        
        <span  id="nav-toggle" class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </span>
        
        <div id="nav-menu" class="nav-right nav-menu">
            <a href="/" class="nav-item is-tab {{ $controller == 'SubscribeController' ? 'is-active' : '' }}">
                Suscripcion
            </a>
            <a href="/offers" class="nav-item is-tab {{ $controller == 'OfferController' ? 'is-active' : '' }}">
                Ofertas de cursos
            </a>
            <a href="/contact" class="nav-item is-tab {{ $controller == 'ContactController' ? 'is-active' : '' }}">
                Contacto
            </a>
        </div>
    </div>
</nav>
