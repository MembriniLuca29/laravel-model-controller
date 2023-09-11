@extends('layouts.main')

@section('page-title', 'Homepage')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')

<div class="container">
    <div class="row mb-5">
        <div class="col">
            <h1>
                Comics
            </h1>
        </div>
    </div>
    <div class="row">
        @foreach ($movies as $index => $movie)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
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

                        {{-- <a href="{{ route('movies-show', ['index' => $index]) }}" class="btn btn-primary">
                            Check single comic
                        </a> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection