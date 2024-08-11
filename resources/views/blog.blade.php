<x-layouts.main>

    <div class="container mx-auto md:w-4/5 xl:w-2/3 mt-28">

        <!-- <h1 class="text-5xl mb-4 hidden">Blog Posts</h1> -->
        <x-box>

            @foreach ($posts as $post)
              <x-blog-card :$post></x-blog-card>
                 


            @endforeach
                
        </x-box>
    </div>

</x-layouts.main>