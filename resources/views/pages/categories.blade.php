@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($categories) > 0)
        <ul class="list-group">
            @foreach($categories as $category)
                <li class="list-group-item">
                    <a style="text-decoration-line: none;" href="/posts" class="text-success font-weight-bold h5">
                        {{$category}}
                    </a>
                    <kbd class="bg-success float-right">verified</kbd>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
