@php
    $links = [
        // Dashboard
        [
            'name' => __('Dashboard'),
            'icon' => 'fa-solid fa-table-columns',
            'route' => route('admin.dashboard'),
            'active' => request()->routeIs('admin.dashboard'),
        ],

        // Header 1
        [
            'header' => __('Manage page'),
        ],

        // Users
        [
            'name' => __('Users'),
            'icon' => 'fa-solid fa-users',
            'route' => '',
            'active' => false,
        ],

        // Enterprise (Submenu)
        [
            'name' => __('Enterprise'),
            'icon' => 'fa-solid fa-building',
            'active' => false,
            'submenu' => [
                [
                    'name' => __('Information'),
                    'icon' => 'fa-solid fa-circle-info',
                    'route' => '',
                    'active' => false,
                ],
                [
                    'name' => __('About Us'),
                    'icon' => 'fa-solid fa-address-card',
                    'route' => 'https://github.com/DonMartinWorks',
                    'active' => false,
                ],
                [
                    'name' => __('Contact'),
                    'icon' => 'fa-solid fa-id-card',
                    'route' => '',
                    'active' => false,
                ]
            ],
        ],
    ];
@endphp

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0"
    :class="{
        'transform-none': open,
        '-translate-x-full': !open
    }" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium">
            @foreach ($links as $item)
                <x-sidebar-links :item="$item" />
            @endforeach
        </ul>
    </div>
</aside>
