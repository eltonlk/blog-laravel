@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <div class="pull-right">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-default">Back</a>
        </div>

        <h1>Create new Post</h1>
    </div>

    {!! Form::open([ 'route' => 'admin.posts.store', 'method' => 'post' ]) !!}

        @include('admin.posts._form')

        <div class="form-group">
            {!! Form::label('tags') !!}
            {!! Form::text('tags', null, [ 'class' => 'form-control' ]) !!}
        </div>

        <div class="form-actions">
            {!! Form::submit('Create Post', [ 'class' => 'btn btn-primary' ]) !!}
        </div>

    {!! Form::close() !!}
@endsection
