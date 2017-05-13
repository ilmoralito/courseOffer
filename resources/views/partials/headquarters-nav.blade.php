@if ($controller == 'OfferController')
    <div class="tabs">
        <ul>
            <li class="{{ Request::route('headquarter') == 'Leon' || Request::route('headquarter') == '' ? 'is-active' : '' }}">
                <a href="/offers">Leon</a>
            </li>
            <li class="{{ Request::route('headquarter') == 'Managua' ? 'is-active' : '' }}">
                <a href="/offers/Managua">Managua</a>
            </li>
            <li class="{{ Request::route('headquarter') == 'Matagalpa' ? 'is-active' : '' }}">
                <a href="/offers/Matagalpa">Matagalpa</a>
            </li>
        </ul>
    </div>
@endif