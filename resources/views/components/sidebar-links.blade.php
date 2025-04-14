@props(['item'])

<li>
    {{-- Header --}}
    @isset($item['header'])
        <div class="px-3.5 py-2.5 text-xs font-semibold flex text-gray-600 uppercase">
            <span class="justify-start">
                <i class="fa-solid fa-caret-right text-base text-purple-500 mr-2 justify-center items-center"></i>
                <span class="justify-end underline underline-offset-2">
                    {{ $item['header'] }}
                </span>
            </span>
        </div>
    @else
        {{-- Link with Submenus --}}
        @isset($item['submenu'])
            <div x-data="{
                open: {{ $item['active'] ? 'true' : 'false' }}
            }">
                {{-- Button --}}
                <button x-on:click="open = !open"
                    class="flex items-center w-full p-2 text-gray-900 hover:bg-purple-500 hover:text-white transition-all rounded-md group {{ $item['active'] ? 'bg-purple-500 text-stone-50' : '' }}">
                    <span class="inline-flex w-6 h-6 justify-center items-center">
                        <i class="{{ $item['icon'] }}"></i>
                    </span>

                    <span class="ms-3 text-left flex-1">{{ $item['name'] }}</span>

                    <i class="fa-solid fa-angle-down"
                        :class="{
                            'fa-angle-down': !open,
                            'fa-angle-up': open
                        }"></i>
                </button>

                <ul x-show="open" class="space-y-1" x-cloak>
                    @foreach ($item['submenu'] as $itm)
                        <li class="px-2 py-0.5">
                            <a href="{{ $itm['route'] }}"
                                class="flex items-center w-full p-2 text-gray-900 hover:bg-purple-500 hover:text-white transition-all rounded-md group {{ $itm['active'] ? 'bg-purple-500 text-stone-50' : '' }}">
                                <span class="inline-flex w-6 h-6 justify-center items-center">
                                    <i class="{{ $itm['icon'] }}"></i>
                                </span>

                                <span class="ms-3 text-left flex-1">{{ $itm['name'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @else
            {{-- Simple Link --}}
            <a href="{{ $item['route'] }}"
                class="flex items-center p-2 text-gray-900 hover:bg-purple-500 hover:text-white transition-all rounded-md group {{ $item['active'] ? 'bg-purple-500 text-stone-50' : '' }}">
                <span class="inline-flex w-6 h-6 justify-center items-center">
                    <i class="{{ $item['icon'] }}"></i>
                </span>

                <span class="ms-3">{{ $item['name'] }}</span>
            </a>
        @endisset
    @endisset
</li>
