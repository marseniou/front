@props(['title', 'description', 'btn_text', 'has_btn', 'has_image', 'image'])
<div class="hero min-h-screen" @if ($has_image) style="background-image: url({{$image}});" @endif>
  @if ($has_image)
    <div class="hero-overlay bg-opacity-60"></div>
  @endif
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-md">
      <h1 class="mb-5 text-5xl font-bold">{{$title}}</h1>
      <p class="mb-5">
        {{$description}}
      </p>
      @if($has_btn)
      <button class="btn btn-primary">{{$btn_text}}</button>
    @endif
    </div>
  </div>
</div>