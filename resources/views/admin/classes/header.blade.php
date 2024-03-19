<div class="main-header">
    <div class="logo">
        @isset($settings->image)
            <a href="{{ route('home') }}">
                <img src="{{ asset( 'storage/' . $settings->image) }}" style="width: 100px" alt="logo">
            </a>
        @endisset
    </div>
    <div class="menu-toggle">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div style="margin: auto"></div>
    <div class="header-part-right">
        <x-feathericon-move class="d-none d-sm-inline-block" data-fullscreen/>
        <div class="dropdown">
            <div class="user col align-self-end">
                {{ Auth::user()->name }}
                <x-feathericon-user id="userDropdown" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"/>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Профиль') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Выйти') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
