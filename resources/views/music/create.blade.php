@extends('layouts.main_2')
@section('content')

<div class="form-container">
    <h2>Create Music Artist</h2>
    <form action="{{ route('music.store') }}" method="post">
        @csrf

        <label for="artist">Artist</label>
        <input type="text" id="artist" name="artist" required>

        <label for="genre">Genre</label>
        <input type="text" id="genre" name="genre" required>

        <label for="followers">Followers</label>
        <input type="number" id="followers" name="followers" required>

        <label for="image">Image URL</label>
        <input type="text" id="image" name="image" required>

        <button type="submit">Create</button>
    </form>
</div>

<style>
    body {
        background: #f0f4f8; /* Мягкий светлый фон */
        font-family: 'Arial', sans-serif;
    }

    .form-container {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        margin: 60px auto; /* Центрирование формы */
        border-top: 5px solid #6c757d; /* Линия сверху */
    }

    h2 {
        text-align: center;
        color: #333;
        font-size: 26px;
        margin-bottom: 25px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #555;
    }

    input {
        width: 100%;
        padding: 14px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    input:focus {
        border-color: #6c757d; /* Цвет рамки при фокусе */
        box-shadow: 0 0 5px rgba(108, 117, 125, 0.5); /* Тень при фокусе */
        outline: none; /* Убираем стандартное обведение */
    }

    button {
        width: 100%;
        padding: 14px;
        background-color: #6c757d; /* Основной цвет кнопки */
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: bold;
        font-size: 18px;
        transition: background-color 0.3s, transform 0.2s;
    }

    button:hover {
        background-color: #5a6268; /* Цвет кнопки при наведении */
        transform: translateY(-2px); /* Подъем кнопки при наведении */
    }

    button:active {
        transform: translateY(1px); /* Понижение кнопки при нажатии */
    }
</style>

@endsection
