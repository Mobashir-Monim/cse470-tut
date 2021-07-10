@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($blogs as $blog)
            <div class="row">
                <div class="col-md-8 offset-md-4 my-3">
                    <h3 class="border-bottom mb-0">{{ $blog->title }}</h3>
                    <p class="text-end">{{ $blog->category }}</p>
                    {{ $blog->body }}
                </div>
            </div>
        @endforeach
    </div>
@endsection