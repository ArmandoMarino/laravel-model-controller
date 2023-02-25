@if (isset($movie))
<div class="col-12 col-md-6 col-lg-3">
    <div class="my-card p-3 text-center text-white">
        <figure><img class="img-fluid" src="{{ $movie->poster }}" alt=""></figure>
        <h5>{{ $movie->title }}</h5>
        <h5>{{ $movie->nationality }}</h5>
        <p>Anno : {{ $movie->date }}</p>
    </div>
</div>   
@endif