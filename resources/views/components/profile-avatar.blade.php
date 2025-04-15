@auth
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <button
                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                    <img class="size-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                        alt="{{ Auth::user()->name }}" />
                </button>
            @else
                <span class="inline-flex rounded-md">
                    <button type="button"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                        {{ Auth::user()->name }}

                        <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                </span>
            @endif
        </x-slot>

        <x-slot name="content">
            <!-- Account Management -->
            <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Manage Account') }}
            </div>

            <x-dropdown-link href="{{ route('profile.show') }}">
                {{ __('Profile') }}
            </x-dropdown-link>

            <div class="border-t border-gray-200"></div>

            <x-dropdown-link href="{{ route('admin.dashboard') }}">
                {{ __('Admin Dashboard') }}
            </x-dropdown-link>

            <div class="border-t border-gray-200"></div>

            <x-dropdown-link href="{{ route('instructor.home') }}">
                {{ __('Instructor Dashboard') }}
            </x-dropdown-link>

            <div class="border-t border-gray-200"></div>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();"
                    class="hover:bg-rose-600 hover:text-white transition-all">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
@else
    <x-dropdown align="right">
        <x-slot name="trigger">
            <button class="text-gray-500" title="{{ __('Log In') }}&#160;&#47;&#160;{{ __('Register') }}">
                <i class="fa-solid fa-door-open text-2xl hover:text-purple-500 transition-all"></i>
            </button>
        </x-slot>

        <x-slot name="content">
            <!-- Log In -->
            <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Log In') }}&#160;&#47;&#160;{{ __('Register') }}
            </div>

            <x-dropdown-link href="{{ route('login') }}">
                {{ __('Log In') }}
            </x-dropdown-link>

            <div class="border-t border-gray-200"></div>

            <x-dropdown-link href="{{ route('register') }}">
                {{ __('Register') }}
            </x-dropdown-link>
        </x-slot>
    </x-dropdown>
@endauth
