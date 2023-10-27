@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-3">
            @foreach ($movies as $i => $movie)
                <div class="col g-3">
                    <div class="card text-left text-dark h-100">
                        <img class="card-img-top" src="https://picsum.photos/400/300?random={{ $i }}"
                            alt="">
                        <div class="card-body">

                            <h4 class="card-title">{{ $movie['title'] }}</h4>
                            <hr>
                            <h6 class="py-1 text-decoration-underline">- Original title</h6>
                            <span>{{ $movie['original_title'] }}</span>

                            <h6 class="py-1 text-decoration-underline">- Nationality</h6>
                            <span>{{ $movie['nationality'] }}</span>

                            <h6 class="py-1 text-decoration-underline">- Release date</h6><span>{{ $movie['date'] }}</span>

                            <h6 class="py-1 text-decoration-underline">- Rating</h6><span>{{ $movie['vote'] }}</span>

                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
