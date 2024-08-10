<div {{$attributes->class($color)}}>
    <div class="container mx-auto p-16 md:px-24 lg:px-48 xl:px-56">
        <div {{$attributes->class(['grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4'])}}>
            {{$slot}}
        </div>
    </div>
</div>