@extends('layouts.main')

@section('page-title', $movie->title)

@section('main-content')

<div class="container">
    <div class="row mb-5">
        <div class="col">
            <h1>
                {{ $movie->title }}
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="my-container">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-primary">
                        {{ $movie['title'] }}
                    </h2>
                    <h5>
                        Relase date: {{ $movie['date'] }}
                    </h5>
                    <h4>
                        Original Title: {{ $movie['original_title'] }}
                    </h4>
                    <h5>
                        <small>
                            Nationality: {{ $movie['nationality'] }}
                            </small>
                    </h5>
                    <h3 class="text-success">
                       Rate:  {{ $movie['vote'] }}
                    </h3>

                    <h2><a href="http://127.0.0.1:8000" class="btn btn-primary"> back</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection