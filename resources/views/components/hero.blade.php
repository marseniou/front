@props(['title'=>'Hello', 'description'=>'Lorem Ipsum', 'btn_text'=>'Start', 'has_btn'=>true, 'has_image'=>false, 'image', 'link'=>'#'])
<div class="hero min-h-screen" @if ($has_image) style="background-image: url({{$image}});" @endif>
  @if ($has_image)
    <div class="hero-overlay bg-opacity-60"></div>
  @endif
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-md">
      <h1 class="mb-5 text-5xl font-bold display">{{$title}}</h1>
      <hr class="border-primary pb-4">
      <p class="mb-5 text-lg">
        {{$description}}
      </p>
      @if($has_btn)
      <a href="{{$link}}" class="btn btn-primary">{{$btn_text}}</a>
      @endif
    </div>
  </div>
</div>