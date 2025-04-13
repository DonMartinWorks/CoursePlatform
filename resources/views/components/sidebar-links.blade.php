@props(['item'])

<li>
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
        <a href="{{ $item['route'] }}"
            class="flex items-center p-2 text-gray-900 hover:bg-purple-500 hover:text-white transition-all rounded-lg group {{ $item['active'] ? 'bg-purple-500 text-gray-100' : '' }}">
            <span class="inline-flex w-6 h-6 justify-center items-center">
                <i class="{{ $item['icon'] }}"></i>
            </span>
            <span class="ms-3">{{ $item['name'] }}</span>
        </a>
    @endisset
</li>
