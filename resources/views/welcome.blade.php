<x-layouts.main>
    <!-- hero attributes
 'title', 'description', 'btn_text', 'has_btn', 'has_image', 'image', 'link', 
  -->
    <x-hero btn_text="Upcoming Concerts" :has_btn="true" :has_image="true" title="Ορχήστρα Δωματίου Αλεξανδρούπολης"
        image="{{URL::to('/')}}/images/front.jpg" link="/concerts">
    </x-hero>

    <x-grids color="bg-primary text-neutral" class="text-center">
        <div>1</div>
        <div>2</div>
        <div>3</div>
        
    </x-grids>
</x-layouts.main>