<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <x-page-title>Articles</x-page-title>
            <div>
                <x-link-button href="{{ route('articles.create') }}">Create
                    Article</x-link-button>
            </div>
        </div>
    </x-slot>
    <x-page-content>
        @livewire('articles.index')
    </x-page-content>
</x-app-layout>
