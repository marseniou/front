@props(['color'=>'bg-slate-900', 'gap'=>'8', 'cols'=>'3'])
<div class="{{$color}}">
    <div class="container mx-auto p-16 md:px-24 lg:px-48 xl:px-56">
        <div class="grid md:grid-cols-{{$cols-1}} lg:grid-cols-{{$cols}} xl:grid-cols-{{$cols}} gap-{{$gap}}">
            {{$slot}}
        </div>
    </div>
</div>