@props(['media'])

<x-card>
    <div class="flex">
        <a href="./series/{{$media->id}}">
            <img src="{{$media->image ? asset('public/images/' . $listing->logo) : asset('images/no-image.jpg')}}" alt="Series Image">
        </a>
    </div>
</x-card>