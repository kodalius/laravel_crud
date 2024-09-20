@extends('layouts.main_2')

@section('content')

<div class="music-container">
    @foreach ($musics as $music)
        <div class="music-card">
            <b>Артист: </b><a href="{{ route('music.show', $music->id) }}" class="artist-link">{{ $music->artist }}</a>
            <p><b>Жанр: </b>{{ $music->genre }}</p>
            <p><b>Подписчики: </b>{{ $music->followers }}</p>
            <hr>
        </div>
    @endforeach
</div>

<style>
    .music-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    .music-card {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        margin: 10px 0;
        width: 300px; /* Фиксированная ширина для карточек */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
    }

    .music-card:hover {
        transform: scale(1.02); /* Эффект при наведении */
    }

    .artist-link {
        color: #007bff; /* Синий цвет для ссылок */
        text-decoration: none; /* Убираем подчеркивание */
    }

    .artist-link:hover {
        text-decoration: underline; /* Подчеркивание при наведении */
    }

    hr {
        margin: 10px 0; /* Отступы для горизонтальной линии */
        border: none; 
        border-top: 1px solid #ddd; /* Стиль горизонтальной линии */
    }
</style>

@endsection
