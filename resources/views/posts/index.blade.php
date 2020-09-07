@extends ('layouts.app')

@section('content')
    <h1 class="font-weight-bold">Blog Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well border p-2 m-2 rounded-lg">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width: 100%" src="/storage/cover_images/{{ $post->cover_image }}">
                    </div>
                    <div class="col-md-8 col-sm-8 blog-posts"">
                        <h4 class="text-primary"> <a href="/posts/{{ $post->id }}"> {{ $post->title }}</a></h4>
                        <p class="body">
                          {!!$post->body !!}
                        </p>
                        <div class="text-muted">Written on:
                            <small class="text-success"> {{ $post->created_at }}</small>
                            by
                            <small class="text-success"> {{ $post->user->name }}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- Pagination --}}
        {{ $posts->links() }}

    @else
        <h4 class="text-secondary">No Posts Found!</h4>

    @endif
@endsection
