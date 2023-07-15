@extends('layout')

@section('content')
    <h1>お店一覧</h1>

    @foreach ($shops as $shop)
        <p>
            {{ $shop->category->category_name }},
            {{ $shop->shop_name }},
            {{ $shop->shop_address }},
            {{ $shop->distance_from_company }}
        </p>
    @endforeach
@endsection
