
<li class="{!! (Request::is('imageCategories*') ? 'active' : '' ) !!}">
    <a href="{{ route('imageCategories.index') }}">
        <span class="mm-text ">Image Categories</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('patientreports*') ? 'active' : '' ) !!}">
    <a href="{{ route('patientreports.index') }}">
        <span class="mm-text ">Patientreports</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

