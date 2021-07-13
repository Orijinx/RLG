<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMINKA</title>
</head>

<body>
    <form action="/adduser" method="post">
        <input type="email" name="email" placeholder="email" id="">
        <input type="text" name="name" placeholder="Имя" id="">
        <input type="password" name="password" id="" placeholder="Пароль">
        <select name="party_id" id="">
            @foreach ($parties as $party)
                <option value="{{ $party->id }}">{{ $party->name }}</option>
            @endforeach
        </select>
    </form>
</body>

</html>
