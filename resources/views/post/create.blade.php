@extends('layouts.main')
@section('content')

<div>
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input value ="{{old('title')}}"type="text" id="title" name="title">
            @error('title')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div>
        <div><label for="content">Content:</label>
            <textarea id="content" name="content" rows="4">{{old('content')}}</textarea>
            @error('content')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div>
        <div><label for="image">Image</label>
            <input value ="{{old('image')}}" type="text" id="image" name="image">
            @error('image')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div>
        <label for="category">Category:</label>
        <select id="category" name="category_id">
            @foreach ($categories as $category)
            <option 
            {{old('category_id') == $category->id ?  'selected' : ''}}

            value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
        <label for="tags">Tags</label>
        <select multiple name="tags[]" id="tags">
            @foreach ( $tags as $tag )
            <option value="{{$tag->id}}">{{$tag->title}}</option>


            @endforeach



        </select>
        <button type="submit">Create</button>
    </form>
</div>

@endsection