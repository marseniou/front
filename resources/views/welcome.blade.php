<x-layouts.main>
    <!-- Centered hero attributes
 'title', 'description', 'btn_text', 'has_btn', 'has_image', 'image'
  -->
    <x-centered-hero title="Malakas" description="Lorem Ipsum" btn_text="Start" :has_btn="true" :has_image="true"
        image="https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp">
    </x-centered-hero>
    <!-- Grid attributes 
     'color', 'gap', 'cols'
      -->
    <x-grids cols="3" gap="4" color="bg-slate-900">
        <div>1</div>
        <div>2</div>
        <div>3</div>
    </x-grids>
</x-layouts.main>