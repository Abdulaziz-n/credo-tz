<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>
<body>
    <p>"Room number" {{$room[0]['room_number']}}</p>
        <p>"User" {{$room[0]['user_id']}}</p>
    <p>"Start reserve date" {{$room[0]['start_reserve_date']}}</p>
    <p>"End reserve date" {{$room[0]['end_reserve_date']}}</p>
</body>
</html>
