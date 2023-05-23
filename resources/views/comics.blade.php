@extends('layouts.app')

@section('content')
<div class="comics-container">
    <h3>CURRENT SERIES</h3>
    {{-- Container fluid --}}
    <div class="container-fluid">
        <div class="row row-cols-6 g-4">
            {{-- Comics --}}
        @foreach ($comics_array as $comic)
            <div class="col">
                <!-- Card -->
                <div class="card h-100 bg-transparent">
                    <!-- Card image -->
                    <div class="card-image">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    </div>
                    <!-- Card title -->
                    <div class="card-title mt-3">
                        {{ strtoupper($comic['series']) }}
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    {{-- End Container fluid --}}
    <!-- Button -->
    <a href="#">
        LOAD MORE
    </a>
</div>
@endsection
