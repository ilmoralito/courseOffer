<nav class="nav has-shadow" style="position: fixed !important; top: 0; left: 0; right: 0;">
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
            <a href="/subscribe" class="nav-item is-tab">
                Suscribete
            </a>
            <a href="/offers" class="nav-item is-tab {{ $controller == 'OfferController' ? 'is-active' : '' }}">
                Cursos
            </a>
            <a href="/contact" class="nav-item is-tab {{ $controller == 'ContactController' ? 'is-active' : '' }}">
                Contacto
            </a>
        </div>
    </div>
</nav>
