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
<form method="POST" style="border: 1px #4c34ff">
    @csrf
    <p>
        {{$text}}
    </p>
    <p> Result:
        {{$result}}
    </p>
</form>
</body>
</html>

