@extends('layouts.main')

@section('title', 'MOVIES')


{{-- HTML --}}
@section('content')
<div id="content-movies" class="my-2">
    <div class="row g-4">
        @forelse ($movies as $movie)
            @include('includes.movies.card')
            @empty
            <h2>Nessun risultato</h2>
        @endforelse
    </div>   
</div>
@endsection





