<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Skilled Worker Assessment Form') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-row flex-wrap">
                    <div class="basis-full md:basis-3/4 p-2">
                        <x-skilled-worker-form />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
