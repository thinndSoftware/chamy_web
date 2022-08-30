<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Người Gửi</h1>
    <p>Hóa đơn</p>
    <p>
        Người
        {{ $user->name }}
        Thời gian :{{ $dateNow }}
        {{ $order_by_id }}
    </p>
</body>
</html>
