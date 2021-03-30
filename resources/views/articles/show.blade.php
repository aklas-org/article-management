<x-app-layout>
    <x-slot name="header">
        <x-page-title>Article Details</x-page-title>
    </x-slot>
    <x-page-content>
        @livewire('articles.show', ['id' => $article->id])
    </x-page-content>
</x-app-layout>
