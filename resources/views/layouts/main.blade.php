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
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <li><a href="{{ route('main.index') }}">Home</a></li>
        <li><a href="{{ route('post.index') }}">Posts</a></li>
        <li><a href="{{ route('about.index') }}">About</a></li>
        @can('view',auth()->user())
            <li><a href="{{ route('admin.post.index') }}">Admin</a></li>
        @endcan


    </ul>
</nav>
<div>
    @yield('content')

</div>
</body>
</html>
