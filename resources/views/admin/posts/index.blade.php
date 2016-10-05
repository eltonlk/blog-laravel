@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <nav class="pull-right">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Create</a>
        </nav>

        <h1>Posts</h1>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Created At</th>
                <th>Title</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @each('admin.posts._post', $posts, 'post')
        </tbody>
    </table>

    <div class="text-center">
        {!! $posts->render() !!}
    </div>
@endsection
