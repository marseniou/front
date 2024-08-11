<x-layouts.main>
    <!-- hero attributes
 'title', 'description', 'btn_text', 'has_btn', 'has_image', 'image', 'link', 
  -->
    <x-hero btn_text="Upcoming Concerts" :has_btn="true" :has_image="true" title="Ορχήστρα Δωματίου Αλεξανδρούπολης"
        image="{{URL::to('/')}}/images/front.jpg" link="/concerts" description="Η Ορχήστρα Μουσικής Δωματίου Αλεξανδρούπολης είναι ένα επαγγελματικό μουσικό σύνολο που αποτελείται από επαγγελματίες μουσικούς που ζουν, δραστηριοποιούνται και εργάζονται στην Περιφέρειά μας ως εκτελεστές κλασικής μουσικής και ως καθηγητές μουσικής.">
    </x-hero>

    <x-grids color="white">
        @foreach ($musicians as $musician)
            <div class="p-4 bg-white shadow-md">
                <figure class="image mb-4">
                    <img class="bw rounded-sm" src="{{URL::to('/')}}/{{$musician->image}}" alt="">
                </figure>
                
                <div class="text-center tracking-wide text-primary">{{$musician->name}}</div>
                <div class="text-center tracking-tight text-primary text-sm">{{$musician->instrument}}</div>
            </div>
        
        @endforeach
        
    </x-grids>
</x-layouts.main>