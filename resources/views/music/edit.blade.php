@extends('layouts.main_2')
@section('content')

<div>


<form action="{{route('music.update',$music->id)}}" method = "post">
        @csrf
        @method('patch')
    <label for="artist">Артист</label>
    <input type="text" id="artist" name="artist" required value="{{$music->artist}}">

    <label for="content">Жанр:</label>
    <textarea id="genre" name="genre"  required>{{$music->genre}}</textarea>

    <label for="followers">Image</label>
    <input type="text" id="followers" name="followers" required value="{{$music->followers}}">

    <button type="submit">Update</button>
</form>

</div>

@endsection
    