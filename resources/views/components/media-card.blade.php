@props['media']

<x-card>
    <div class="flex">
        <a href="/series/{{$media->name}}">
            <img src="{{$media->image ? asset('public/images/' . $listing->logo) : asset('public/images/no-image.jpg')}}" alt="Series Image">
        </a>
    </div>
</x-card>