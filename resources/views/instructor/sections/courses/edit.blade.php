<x-instructor-layout title="{{ __('Edit course') }}: {{ $course->title }}">
    <x-slot name="header" class="mb-5">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit course') }}&#58;&nbsp;{{ $course->title }}</h2>
    </x-slot>

    <x-container class="py-8">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-6">
            <aside class="col-span-1">
                <h1 class="font-semibold text-xl mb-4">{{ __('Edit course') }}&#58;&nbsp;{{ $course->title }}</h1>
                <nav>
                    <ul>
                        <li class="border-l-4 border-purple-500 pl-3">
                            <a href="{{ route('instructor.courses.edit', $course) }}">{{ __('Course Information') }}</a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <div class="col-span-1 lg:col-span-4">
                <div class="card-element">
                    <aside class="col-span-1">
                    </aside>
                </div>
            </div>
        </div>
    </x-container>
</x-instructor-layout>
