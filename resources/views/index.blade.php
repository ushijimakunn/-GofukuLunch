<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gofuku Lunch</title>
</head>
<body>
    <h1>お店一覧</h1>

    @foreach ($shops as $shop)
        <p>
            {{ $shop->category->category_name }},
            {{ $shop->shop_name }},
            {{ $shop->shop_address }},
            {{ $shop->distance_from_company }}
        </p>
    @endforeach
</body>
</html>
