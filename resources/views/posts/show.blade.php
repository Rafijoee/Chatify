@extends('layout.app')

@section('title', "judul : $post->title")
@section('content')
<div class="container">

    <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">{{$post ->title}}</h2>
        <p class="blog-post-meta">Last updated at {{date("d M Y H:i", strtotime($post->created_at->diffForHumans()))}}
        <p>{{$post->content }}</p>

        <small class="text-muted">{{count($comments)}} Komentar</small>


        @foreach($comments as $comment)

        <div class="card mb-3">
            <div class="card-body">
                <p style="font: size 8pt;">{{$comment->coment}} Komentar </p>
            </div>
        </div>
        @endforeach

    </article>
    <a href="{{ url("posts") }}">
        < Kembali </a>
</div>
@endsection