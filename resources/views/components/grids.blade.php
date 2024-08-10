@props(['color', 'gap', 'cols'])
<div class="{{$color}}">
    <div class="container mx-auto p-16 md:px-24 lg:px-48 xl:px-56">
        <div class="grid md:grid-cols-{{$cols - 1}} xl:grid-cols-{{$cols}} gap-{{$gap}}">
            {{$slot}}
        </div>
    </div>
</div>