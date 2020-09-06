@extends ('layouts.app')

@section('content')
<a class="btn btn-danger my-2" href="/posts"><i class="fa fa-arrow-circle-left"></i> Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small class="text-muted">Written on: {{$post->created_at}}</small>
    <small class="text-muted">by {{$post->user->name}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
    {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection