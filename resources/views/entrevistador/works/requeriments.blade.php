<x-entrevistador-layout :work="$work">
    <div>
        @livewire('entrevistador.works-requirement', ['work' => $work], key('works-requirement' . $work->id))
    </div>
</x-entrevistador-layout>
