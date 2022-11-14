@extends('index')

@section('content')
@foreach($medias as $media)
    <x-media-card :media="$media" />
@endforeach
@endsection
