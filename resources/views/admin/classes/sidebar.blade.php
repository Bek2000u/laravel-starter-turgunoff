<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">

            <li class="nav-item">
                <a class="nav-item-hold" href="{{ route('admin') }}">
                    <x-feathericon-home class="nav-icon" style="color: #000000"/>
                    <span class="nav-text">Админ панель</span></a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item">
                <a class="nav-item-hold" href="{{ route('settings.index') }}">
                    <x-feathericon-settings class="nav-icon" style="color: #000000"/>
                    <span class="nav-text">Настройки сайта</span>
                </a>
                <div class="triangle"></div>
            </li>

        </ul>
    </div>
    <div class="sidebar-overlay"></div>
</div>
