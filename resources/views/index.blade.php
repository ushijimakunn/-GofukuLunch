@extends('layout')

@section('content')
    <div class="m-8">
        <h1 class="text-3xl font-bold pb-5">お店一覧</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>カテゴリ</th>
                    <th>店名</th>
                    <th>住所</th>
                    <th>会社から徒歩⚪︎分</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shops as $shop)
                <tr>
                    <td>{{ $shop->category->category_name }}</td>
                    <td>
                        <a href="{{ route('shop.detail', ['id' => $shop->id]) }}" class="link">
                            {{ $shop->shop_name }}
                        </a>
                    </td>
                    <td>{{ $shop->shop_address }}</td>
                    <td>{{ $shop->distance_from_company }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="btn btn-primary">
            <a href={{ route('shop.new') }} >新しいお店の投稿</a>
        </div>
    </div>
@endsection
