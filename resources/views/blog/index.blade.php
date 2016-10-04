@extends('layouts.blog')

@section('content')
    <article>
        <h1>Blog</h1>

        @foreach ($posts as $post)
            <section>
                <h2>{{ $post->title }}</h2>

                {{ $post->content }}
            </section>

            <p class="text-info">
                <small>{{ $post->created_at }}</small>
            </p>

            <hr/>
        @endforeach
    </article>
@endsection
