<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dictionary</title>
</head>
<body>
<h1>
    Dictionary
</h1>
<form action={{route('result')}} method="POST" style="border: 1px #4c34ff">
    @csrf
    <p>
        <input type="text" name="text" placeholder=" Enter the text">
    </p>
    <p>
        <button type="submit">Translate</button>
    </p>
</form>
</body>
</html>
