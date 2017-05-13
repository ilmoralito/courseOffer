<div class="hero-foot">
    <nav class="tabs is-boxed">
        <div class="container">
            <ul>
                <li class="{{ $action == 'show' ? 'is-active' : '' }}">
                    <a href="/offers/{{ Request::route('headquarter') }}/{{ $offer['slug'] }}">Descripcion</a>
                </li>

                <li class="{{ $action == 'faqs' ? 'is-active' : '' }}">
                    <a href="/offers/{{ Request::route('headquarter') }}/{{ $offer['slug'] }}/faqs">Preguntas comunes</a>
                </li>

                <li class="{{ $action == 'schedules' ? 'is-active' : '' }}">
                    <a href="/offers/{{ Request::route('headquarter') }}/{{ $offer['slug'] }}/schedules">Horarios</a>
                </li>

                <li class="{{ $action == 'tutors' ? 'is-active' : '' }}">
                    <a href="/offers/{{ Request::route('headquarter') }}/{{ $offer['slug'] }}/tutors">Tutores</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
