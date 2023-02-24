@extends('layouts.main')

@section('title', 'MOVIES')


{{-- HTML --}}
@section('content')
<div id="content-home">
    @forelse ($movies as $movie)
        @include('includes.movies.card')
        @empty
        <h2>Nessun risultato</h2>
    @endforelse
</div>
@endsection





