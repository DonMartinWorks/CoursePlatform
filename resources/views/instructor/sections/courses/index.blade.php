<x-instructor-layout title="{{ __('Course List') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Course List') }}
        </h2>
    </x-slot>

    <x-container class="mt-12">
        <div class="md:flex md:justify-end mb-5">
            <a href="{{ route('instructor.courses.create') }}"
                class="btn btn-green block w-full md:w-auto text-center">{{ __('Create a new course') }}</a>
        </div>

        <ul>
            @foreach ($courses as $course)
                <li class="bg-white rounded-lg shadow-lg overflow-hidden mb-4">
                    <a href="{{ route('instructor.courses.edit', $course) }}" class="md:flex">
                        <figure class="flex-shrink-0">
                            <img src="{{ $course->image }}"
                                class="w-full md:w-36 aspect-video md:aspect-square object-cover object-center">
                        </figure>

                        <div class="flex-1">
                            <div class="py-4 px-8">
                                <div class="grid md:grid-cols-9 md:gap-3">
                                    <div class="md:col-span-3">
                                        <h1>{{ $course->title }}</h1>

                                        @switch($course->status->value)
                                            @case(1)
                                                <span
                                                    class="bg-rose-100 text-rose-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-md">
                                                    {{ __('Draft') }}
                                                </span>
                                            @break

                                            @case(2)
                                                <span
                                                    class="bg-yellow-100 text-yellow-600 text-xs font-medium me-2 px-2.5 py-0.5 rounded-md">
                                                    {{ __('Pending') }}
                                                </span>
                                            @break

                                            @case(3)
                                                <span
                                                    class="bg-teal-100 text-teal-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-md">
                                                    {{ __('Published') }}
                                                </span>
                                            @break

                                            @default
                                                <span
                                                    class="bg-rose-100 text-rose-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-md">
                                                    {{ __('Draft') }}
                                                </span>
                                        @endswitch
                                    </div>

                                    <div class="hidden md:block sm:inline-block col-span-2 sm:mt-4 md:mt-4">
                                        {{-- Fake data --}}
                                        <p class="text-sm font-bold">&#xFF04;{{ fake()->numberBetween(100, 1000) }}</p>

                                        <p class="mb-1 text-xs sm:text-md md:text-md">{{ __("This month's earnings") }}
                                        </p>

                                        {{-- Fake data --}}
                                        <p class="text-sm font-bold mt-2">
                                            &#xFF04;{{ fake()->numberBetween(1000, 1200) }}</p>

                                        <p class="text-xs sm:text-md md:text-md">{{ __('Total earnings') }}</p>
                                    </div>

                                    <div class="hidden md:block sm:inline-block col-span-2 sm:mt-4 md:mt-4">
                                        {{-- Fake data --}}
                                        <p>{{ fake()->numberBetween(0, 300) }}</p>

                                        <p class="text-xs sm:text-md md:text-md">{{ __('Registrations this month') }}
                                        </p>
                                    </div>

                                    <div class="hidden md:block sm:inline-block col-span-2">
                                        <div class="flex justify-end sm:justify-center sm:mt-5">
                                            {{-- Fake data --}}
                                            @php
                                                $rating = fake()->numberBetween(1, 5);
                                            @endphp

                                            <p class="text-sm mr-2 font-semibold text-black">{{ $rating }}</p>

                                            <ul class="text-sm space-x-1 flex items-center">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $rating)
                                                        <i
                                                            class="fas fa-star text-yellow-400 hover:text-yellow-300 transition-all"></i>
                                                    @else
                                                        <i class="far fa-star"></i>
                                                    @endif
                                                @endfor
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </x-container>
</x-instructor-layout>
