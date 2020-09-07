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
                    <h3 class="my-2">Your blog posts</h3>
                    @if (count($posts) > 0)                  
                        <table class="table table-borderless">
                            <thead class="thead-light font-weight-bold h5">
                                <tr>
                                    <th>Blog:</th>
                                    <th></th>
                                    <th>Actions:</th>
                                </tr>
                              </thead>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</th>
                                <td></td>
                                <td>
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                                    {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'float-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>                         
                            @endforeach
                        </table>
                    @else 
                        <h6 class="text-muted">You have no posts</h6>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
