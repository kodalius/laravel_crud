@extends('layouts.main_2')

@section('content')

<div class="music-details">
    <h2 class="music-title">{{ $music->artist }}</h2>
    <p><strong>Жанр:</strong> <span>{{ $music->genre }}</span></p>
    <p><strong>Подписчики:</strong> <span>{{ $music->followers }}</span></p>
    <hr>
</div>

<div class="music-actions">
    <a href="{{ route('music.edit', $music->id) }}" class="btn btn-edit">Редактировать</a>
    
    <form action="{{ route('music.delete', $music->id) }}" method="post" class="delete-form">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-delete">Удалить</button>
    </form>
</div>

<style>
    body {
        background: linear-gradient(to bottom right, #2b2b2b, #4e4e4e);
        font-family: 'Helvetica Neue', sans-serif;
        color: #f0f0f0;
        padding: 20px;
    }

    .music-details {
        background-color: #3a3a3a;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        margin-bottom: 20px;
    }

    .music-title {
        font-size: 26px;
        margin-bottom: 10px;
        color: #00aaff; /* Яркий синий для названия исполнителя */
    }

    .music-actions {
        display: flex;
        gap: 15px; /* Увеличенный промежуток между кнопками */
        margin-top: 15px; /* Добавлено пространство над кнопками */
    }

    .btn {
        flex: 1; /* Кнопки занимают равное пространство */
        padding: 12px;
        border: none;
        border-radius: 5px;
        color: white;
        cursor: pointer;
        text-decoration: none;
        text-align: center; /* Центрирование текста */
        transition: background-color 0.3s, transform 0.2s;
        font-weight: bold; /* Жирный текст для кнопок */
        font-size: 16px; /* Размер шрифта кнопок */
    }

    .btn-edit {
        background-color: #007bff; /* Синий цвет для кнопки редактирования */
    }

    .btn-delete {
        background-color: #c0392b; /* Темно-красный цвет для кнопки удаления */
    }

    .btn:hover {
        opacity: 0.9; /* Эффект при наведении */
        transform: translateY(-2px); /* Подъем кнопки при наведении */
    }

    hr {
        margin: 20px 0; /* Отступы для горизонтальной линии */
        border: none;
        border-top: 1px solid #555; /* Стиль для горизонтальной линии */
    }

    strong {
        color: #ccc; /* Цвет для выделенного текста */
    }

    span {
        color: #aaa; /* Цвет для текста внутри спанов */
    }
</style>

@endsection
