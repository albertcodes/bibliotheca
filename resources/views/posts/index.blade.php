@extends ('layouts.app')

@section('content')
  <h1>Posts</h1>
  @if(count($posts) > 0)
    @foreach($posts as $post)
        <div class="well border p-2 m-2 rounded-lg">
        <h4 class="text-primary"> <a href="/posts/{{$post->id}}"> {{$post->title}}</a></h4>
            <p class="text-muted">Written on: 
                <small class="text-success"> {{$post->created_at}}</small>
            </p>
        </div>        
    @endforeach

  @else
    <h1>No Posts Found!</h1>
      
  @endif
@endsection