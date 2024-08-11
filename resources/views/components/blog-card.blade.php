<div class="grid lg:grid-cols-4 md:gap-4 lg:gap-8 xl:gap-12">
    <div class="col-span-2">
        <figure class="image mb-4">
            <img class="max-h-96" src="{{URL::to('/')}}/{{$post->featured_image}}" alt="">
        </figure>
    </div>
    <div class="col-span-2">
        <h2 class="text-4xl pb-4 display tracking-tight">{{$post->title}}</h2>
        <p class="text-primary text-sm tracking-wider pb-4">
            {{Carbon\Carbon::parse($post->published_at)->format('D M Y H:i')}}
        </p>
        <p>{!!$post->excerpt!!}</p>
    </div>