<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordered Menu</title>
</head>
<body>
    <h1>Ordered Menu</h1>
    <ul>
        @foreach($orders as $order)
            <li>{{ $order->menu_item }} - Rp. {{ $order->price }}</li>
        @endforeach
    </ul>
</body>
</html>
