@extends('layouts.admin')

@section('content')
    <div>
        <div>
            <a href="{{ route('post.create') }}" class="btn btn-secondary mb-3">Create post</a>
        </div>
        @foreach($posts as $post)
            <div><a href="{{ route('post.show', $post->id) }}" style="text-decoration: none"> {{ $post->id }}
                    . {{ $post->title }}</a></div>
        @endforeach
        <div class="mt-3">
            {{ $posts->withQueryString()->links() }}
        </div>
    </div>
@endsection
