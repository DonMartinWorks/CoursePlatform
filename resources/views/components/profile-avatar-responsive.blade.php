@auth
    <div class="flex items-center px-4">
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div class="shrink-0 me-3">
                <img class="size-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                    alt="{{ Auth::user()->name }}" />
            </div>
        @endif

        <div>
            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
        </div>
    </div>

    <div class="mt-3 space-y-1">
        <!-- Account Management -->
        <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
            {{ __('Profile') }}
        </x-responsive-nav-link>

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf

            <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();"
                class="hover:bg-rose-600 hover:text-white transition-all">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
    </div>
@else
    <div class="mt-3 space-y-1">
        <x-responsive-nav-link href="{{ route('login') }}">
            {{ __('Log In') }}
        </x-responsive-nav-link>

        <div class="border-t border-gray-200"></div>

        <x-responsive-nav-link href="{{ route('register') }}">
            {{ __('Register') }}
        </x-responsive-nav-link>
    </div>
@endauth
