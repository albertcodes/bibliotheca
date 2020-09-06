@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary" href="/posts/create">Create Post</a>
                    <h4 class="my-2">Your blog posts</h4>
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @@foreach ($posts as $post)
                        <tr>
                            <th>{{$posts->title}}</th>
                        <th><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></th>
                            <th></th>
                        </tr>                           
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
