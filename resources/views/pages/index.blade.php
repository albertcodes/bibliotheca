@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Welcome to LSAPP Blog</h1>
            <p>Publish your blog posts. Whether you'd like to share your knowledge, experiences or the latest news, create a
                unique and beautiful blog for free.</p>
            @if (!Auth::guest())
                <div>
                    <a class="btn btn-primary btn-lg" href="/dashboard" role="button">Dashboard</a>
                    <a class="btn btn-success btn-lg" href="/posts" role="button">Blogs</a>
                </div>
            @else
                <div>
                    <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                    <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
                </div>
            @endif
        </div>
    </div>
@endsection
