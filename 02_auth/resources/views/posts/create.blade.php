<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Post erstellen</h2>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <label>
            Text
            <input name="title" value="{{ old('title') }}">
        </label>

        <label>
            Text
            <textarea name="content">{{ old('title') }}</textarea>
        </label>

        <button type="submit">Speichern</button>

    </form>

</body>
</html>