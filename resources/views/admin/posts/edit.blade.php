@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <div class="pull-right">
            <a href="{{ url('/admin') }}" class="btn btn-default">Back</a>
        </div>

        <h1>Edit Post</h1>
    </div>

    {!! Form::model($post, [ 'route' => [ 'admin.posts.update', $post->id ], 'method' => 'put' ]) !!}

        @include('admin.posts._form')

        <div class="form-group">
            {!! Form::label('tags') !!}
            {!! Form::text('tags', $post->tagList, [ 'class' => 'form-control' ]) !!}
        </div>

        <div class="form-actions">
            {!! Form::submit('Edit Post', [ 'class' => 'btn btn-primary' ]) !!}
        </div>

    {!! Form::close() !!}
@endsection
