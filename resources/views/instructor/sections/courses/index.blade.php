<x-instructor-layout title="{{ __('Course List') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Course List') }}
        </h2>
    </x-slot>

    <x-container class="mt-12">
        <div class="md:flex md:justify-end">
            <a href="{{ route('instructor.courses.create') }}"
                class="btn btn-green block w-full md:w-auto text-center">{{ __('Create a new course') }}</a>
        </div>
    </x-container>
</x-instructor-layout>
