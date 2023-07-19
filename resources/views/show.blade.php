@extends('layout')

@section('content')
    <div class="m-8">
        <h1 class="text-3xl font-bold pb-5">お店詳細：{{ $shop->shop_name }}</h1>
        <div>
            <p class='m-5'>{{ $shop->category->category_name }}</p>
            <p class='m-5'>{{ $shop->shop_address }}</p>
            <p class='m-5'>会社からは、徒歩{{ $shop->distance_from_company }}分</p>
        </div>

        <iframe id="map"
            src="//www.google.com/maps/embed/v1/place?key=<?php echo $_ENV['GOOGLE_MAP_API'] ?>&q={{ $shop->shop_address }}"
            width="100%"
            height="320"
            frameborder="0">
        </iframe>

        <div class='flex'>
            <a href={{ route('shop.edit', ['id' => $shop->id]) }} class="btn m-5">編集</a>
            {{ Form::open([ 'method' => 'delete', 'route' => ['shop.destroy', $shop->id] ]) }}
                {{ Form::submit('削除', ['class' => 'btn btn-warning m-5']) }}
            {{ Form::close() }}
        </div>
        <a href={{ route('shop.list') }} class="m-5 link"> 一覧に戻る </a>
    </div>
@endsection
