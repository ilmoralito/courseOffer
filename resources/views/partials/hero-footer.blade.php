<div class="hero-foot">
    <nav class="tabs is-boxed">
        <div class="container">
            <ul>
                <li class="{{ $action == 'show' ? 'is-active' : '' }}">
                    <a href="/offers/{{ $offer['slug'] }}">Descripcion</a>
                </li>

                <li class="{{ $action == 'faqs' ? 'is-active' : '' }}">
                    <a href="/offers/{{ $offer['slug'] }}/faqs">FAQ'S</a>
                </li>

                <li class="{{ $action == 'schedules' ? 'is-active' : '' }}">
                    <a href="/offers/{{ $offer['slug'] }}/schedules">Horarios</a>
                </li>

                <li class="{{ $action == 'modules' ? 'is-active' : '' }}">
                    <a href="/offers/{{ $offer['slug'] }}/modules">Modulos</a>
                </li>

                <li class="{{ $action == 'tutors' ? 'is-active' : '' }}">
                    <a href="/offers/{{ $offer['slug'] }}/tutors">Tutores</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
