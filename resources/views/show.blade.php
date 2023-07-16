@extends('layout')

@section('content')
    <div class="m-8">
        <h1 class="text-3xl font-bold pb-5">お店詳細：{{ $shop->shop_name }}</h1>
        <div>
            <p>{{ $shop->category->category_name }}</p>
            <p>{{ $shop->shop_address }}</p>
            <p>会社からは、徒歩{{ $shop->distance_from_company }}分</p>
        </div>
        <div>
            <a href={{ route('shop.list') }} class="btn"> 一覧に戻る </a>
            <a href={{ route('shop.edit', ['id' => $shop->id]) }} class="link">編集</a>
        </div>
    </div>
@endsection
