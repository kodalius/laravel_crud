@extends('layouts.main')
@section('content')

<div>


    <form action="{{route('post.update',$post->id)}}" method="post">
        @csrf
        @method('patch')
        <label for="name">Title</label>
        <input type="text" id="title" name="title" required value="{{$post->title}}">

        <label for="content">Content:</label>
        <textarea id="content" name="content" rows="4" required>{{$post->content}}</textarea>

        <label for="image">Image</label>
        <input type="text" id="image" name="image" required value="{{$post->image}}">
        <label for="category">Category:</label>
        
        
        <select id="category" name="category_id">
            @foreach ($categories as $category)
            <option

                {{$category->id === $post->category_id ? 'selected' :'' }}
                value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
        <select multiple name="tags[]" id="tags">
            @foreach ( $tags as $tag )
            <option
            @foreach($post->tags as $postTag)
            {{$tag->id === $postTag->id ? 'selected' : ''}}
            @endforeach
            {{$tag->id === $post->category_id ? 'selected' :'' }} 
            value="{{$tag->id}}">{{$tag->title}}</option>


            @endforeach



        </select>
        <button type="submit">Update</button>
    </form>

</div>

@endsection