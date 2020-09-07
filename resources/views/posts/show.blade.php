@extends ('layouts.app')

@section('content')
<a class="btn btn-default my-2 text-danger" href="/posts"><i class="fa fa-arrow-circle-left"></i> < Back</a>
    <h1>{{$post->title}}</h1>
    <div class="m-1">{!!$post->body!!}</div>
    <img style="width: 99%;" src="/storage/cover_images/{{$post->cover_image}}">
    <hr>
    <small class="text-muted">Written on: {{$post->created_at}}</small>
    <small class="text-muted">by {{$post->user->name}}</small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)

            {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger mb-5 mx-2'])}}
            {!!Form::close()!!}
            
            <a href="/posts/{{$post->id}}/edit" class="btn btn-success float-right mb-5 mx-2">Edit</a>

        @endif
    @endif

@endsection