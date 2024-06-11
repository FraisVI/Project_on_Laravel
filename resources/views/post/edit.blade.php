@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title"
                       value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" name="content" id="content"
                          placeholder="Content">{{ $post->content }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Image"
                       value="{{ $post->image }}">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-select" multiple aria-label="Default select example" id="category"
                        name="category_id">
                    @foreach($categories as $category)
                        <option
                            {{ $category->id === $post->category_id ? ' selected' : ''}}

                            value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select class="form-select" multiple aria-label="Multiple select example" id="tags" name="tags[]">
                    @foreach($tags as $tag)
                        @foreach($post->tags as $postTag)
                            <option {{ $tag->id === $postTag->id ? ' selected' : ''}}
                        @endforeach
                                    value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
