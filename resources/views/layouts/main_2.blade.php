<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            margin: 0;
        }
        nav {
            background-color: #343a40;
            padding: 10px 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
        }
        nav li {
            margin-right: 15px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px; /* Ограничение ширины формы */
            margin: auto; /* Центрирование формы */
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s; /* Плавный переход для рамки */
        }
        input:focus, textarea:focus {
            border-color: #28a745; /* Изменение цвета рамки при фокусе */
            outline: none; /* Убираем стандартное обведение */
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s; /* Плавный переход для кнопки */
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('music.index') }}">Home</a></li>
            <li><a href="{{ route('music.create') }}">Create</a></li>
        </ul>
    </nav>
    <div>
        @yield('content')
    </div>
</body>
</html>
