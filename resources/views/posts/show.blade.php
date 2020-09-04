@extends ('layouts.app')

@section('content')
<a class="btn btn-danger my-2" href="/posts"><i class="fa fa-arrow-circle-left"></i> Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        <h4 class="text-success">{!!$post->body!!}</h4>
    </div>
    <hr>
    <small class="text-muted">Written on: {{$post->created_at}}</small>
@endsection