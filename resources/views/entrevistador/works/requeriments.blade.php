<x-entrevistador-layout>
    <x-slot name="work">
        {{ $work->slug }}
    </x-slot>

    <div>
        @livewire('entrevistador.works-requirement', ['work' => $work], key('works-requirement' . $work->id))
    </div>
</x-entrevistador-layout>
