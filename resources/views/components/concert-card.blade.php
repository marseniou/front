@props(['concert'])
<x-box class="!p-4 !md:p-4 !lg:p-6 !xl:p-8 mb-8">
    <div class="grid xl:grid-cols-9 gap-2">
        <div class="text-center leading-tight col-span-2 py-12 xl:border-r xl:border-primary">
            <p class="text-center xl:text-bormal text-primary uppercase tracking-wide text-sm">
                {{Carbon\Carbon::parse($concert->date)->format('l')}}
            </p>
            <p class="text-9xl display pb-4">
                {{Carbon\Carbon::parse($concert->date)->format('j')}}
            </p>
            <p class="text-primary uppercase tracking-widest text-sm">
                {{Carbon\Carbon::parse($concert->date)->format('F o')}}
            </p>
        </div>
        <div class="col-span-4 p-4">

            <p class="display text-4xl mb-4 text-secondary-content">
                {{$concert->title}}
            </p>
            <p class="text-secondary-content tracking-wider">
                {{$concert->global_event}}
            </p>

            <p class="text-primary tracking-widest text-sm py-4">
                {{Carbon\Carbon::parse($concert->date)->format('H:i')}}
                | {{$concert->place}}
            </p>
            <p class="text-secondary-content tracking-wider pb-4">
                PROGRAM

            </p>
            <p class="text-primary text-sm tracking-normal">
                {{$concert->program}}

            </p>

        </div>
        <div class="col-span-3">
            <figure class="image">
                <img src="{{URL::to('/')}}/{{$concert->image}}" alt="">
            </figure>
        </div>
    </div>


</x-box>