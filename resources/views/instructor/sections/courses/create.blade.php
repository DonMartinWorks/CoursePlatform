<x-instructor-layout title="{{ __('Create a new course') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a new course') }}
        </h2>
    </x-slot>

    <x-container class="mt-12" width="5xl">
        <div class="card-element">
            <form action="{{ route('instructor.courses.store') }}" method="POST">
                @csrf
                <h2 class="text-2xl font-semibold text-gray-600 uppercase text-center underline underline-offset-2">
                    {{ __('Please complete this information') }}
                </h2>

                <x-validation-errors class="my-4" :errors="$errors" />

                {{-- Title --}}
                <div class="mb-4">
                    <x-label for="title" class="mb-1">{{ __('Title') }}</x-label>
                    <x-input placeholder="{{ __('Learn web development') }}" class="w-full" id="title"
                        name="title" value="{{ old('title') }}" required></x-input>
                </div>

                {{-- Slug --}}
                <div class="mb-4">
                    <x-label for="slug" class="mb-1">{{ __('Slug') }}</x-label>
                    <x-input class="w-full" id="slug" name="slug" value="{{ old('slug') }}" required></x-input>
                </div>

                <div class="grid grid-cols-3 gap-4 mb-4">
                    {{-- Category --}}
                    <div>
                        <x-label for="category" class="mb-1">{{ __('Categories') }}</x-label>
                        <x-select name="category_id" id="category" class="w-full" required>
                            <option value="" selected disabled>{{ __('Select') }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}
                                </option>
                            @endforeach
                        </x-select>
                    </div>

                    {{-- Level --}}
                    <div>
                        <x-label for="level" class="mb-1">{{ __('Levels') }}</x-label>
                        <x-select name="level_id" id="level" class="w-full" required>
                            <option value="" selected disabled>{{ __('Select') }}</option>
                            @foreach ($levels as $level)
                                <option value="{{ $level->id }}" @selected(old('level_id') == $level->id)>{{ $level->name }}
                                </option>
                            @endforeach
                        </x-select>
                    </div>

                    {{-- Price --}}
                    <div>
                        <x-label for="price" class="mb-1">{{ __('Prices') }}</x-label>
                        <x-select name="price_id" id="price" class="w-full" required>
                            <option value="" selected disabled>{{ __('Select') }}</option>
                            @foreach ($prices as $price)
                                <option value="{{ $price->id }}" @selected(old('price_id') == $price->id)>
                                    @if ($price->value == 0)
                                        {{ __('Free Price') }}
                                    @else
                                        &#xFF04;{{ $price->value }}&#160;<span
                                            class="text-bold font-extralight text-sm text-purple-500">&#40;{{ __('Level') }}&#160;{{ $loop->index }}&#41;</span>
                                    @endif
                                </option>
                            @endforeach
                        </x-select>
                    </div>
                </div>

                <div class="flex justify-end">
                    <x-button>{{ __('Create this course') }}</x-button>
                </div>
            </form>
        </div>
    </x-container>
</x-instructor-layout>
