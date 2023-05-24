<div class="container  mt-2">
    <div class="row row-cols-4">
        @foreach ($movies as $movie)
            <div class="col mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ $movie->image }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Titolo Originale: <br>{{ $movie->original_title }}</h5>
                        <h6 class="card-title">Titolo: <br>{{ $movie->title }}</h6>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
