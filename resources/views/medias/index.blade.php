@extends('layout')

@section('content')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @foreach($medias as $media)
    <x-media-card :media="$media" />
    @endforeach
</div>

<div class="mt-6 p-4">
    {{$medias->links()}}
</div>
@endsection
