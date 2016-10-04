@extends('layouts.blog')

@section('content')
    <article>
        <h1>Blog</h1>

        @foreach ($posts as $post)
            <section>
                <h2>{{ $post->title }}</h2>

                <p>{{ $post->content }}</p>

                <br/>

                <p><b>Tags:</b></p>
                <ul>
                    @foreach ($post->tags as $tag)
                      <li>{{ $tag->name }}</li>
                    @endforeach
                </ul>

                <h3>Comments</h3>

                @foreach ($post->comments as $comment)
                    <p>{{ $comment->name }}</p>
                    {{ $comment->body }}
                @endforeach

                <p class="text-info">
                    <small>{{ $post->created_at }}</small>
                </p>
            </section>

            <hr/>
        @endforeach
    </article>
@endsection
