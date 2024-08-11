<x-layouts.main>
    <div class="container mx-auto mt-28">
        @foreach ($concerts as $concert)
            <x-concert-card :$concert></x-concert-card>
        @endforeach
    </div>
</x-layouts.main>